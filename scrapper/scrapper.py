import csv
import os
import time

import requests
from bs4 import BeautifulSoup
import re

#breloki - 3 https://www.dystryktzero.pl/breloki-z-filmow-gier-komiksow/
# Budziki i zegarki - 12 https://www.dystryktzero.pl/budziki-i-zegarki/
# Figurki - 14 https://www.dystryktzero.pl/figurki-funko-pop-vinyl/
# Komiksy - 11 https://www.dystryktzero.pl/komiksy-z-superbohaterami/
# manga - 10 https://www.dystryktzero.pl/komiksy-manga-sklep/
#Pojazdy i Modele - 15 https://www.dystryktzero.pl/pojazdy-i-modele/
#Portfele - 8 https://www.dystryktzero.pl/portfele/
#zabawki - 13 https://www.dystryktzero.pl/klocki-i-zabawki/


categories = [
    {"name": "breloki", "id": 7, "url": "https://www.dystryktzero.pl/breloki-z-filmow-gier-komiksow/"},
    {"name": "Budziki i zegarki", "id": 12, "url": "https://www.dystryktzero.pl/budziki-i-zegarki/"},
    {"name": "Figurki", "id": 14, "url": "https://www.dystryktzero.pl/figurki-funko-pop-vinyl/"},
    {"name": "Komiksy", "id": 11, "url": "https://www.dystryktzero.pl/komiksy-z-superbohaterami/"},
    {"name": "manga", "id": 10, "url": "https://www.dystryktzero.pl/komiksy-manga-sklep/"},
    {"name": "Pojazdy i Modele", "id": 15, "url": "https://www.dystryktzero.pl/pojazdy-i-modele/"},
    {"name": "Portfele", "id": 8, "url": "https://www.dystryktzero.pl/portfele/"},
    {"name": "zabawki", "id": 13, "url": "https://www.dystryktzero.pl/klocki-i-zabawki/"}
]

data_dir = "../data/"

#CATEGORY_ID = 3
MAX_PAGES = 7
headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'
}
main_time = time.time()
print('Starting...')
for category in categories:
    print(f'Starting {category["name"]}...')
    start_time = time.time()
    url = category['url']
    CATEGORY_ID = category['id']
#url = 'https://www.dystryktzero.pl/komiksy-z-superbohaterami/'
    max_id = 0
    os.makedirs(data_dir, exist_ok=True)
    if os.path.exists(data_dir + 'products.csv'):
        with open(data_dir + 'products.csv', mode='r', encoding='utf-8') as file:
            reader = csv.reader(file)
            next(reader)  # Skip the header row
            for row in reader:
                product_id = int(row[0])
                if product_id > max_id:
                    max_id = product_id
    start_id = max_id + 1

    file_exists = os.path.isfile(data_dir + 'products.csv')
    with open(data_dir + 'products.csv', mode='a', encoding='utf-8') as file:
        writer = csv.writer(file)
        if not file_exists:
            writer.writerow(['product_id', 'active', 'name', 'category',  'price', 'on_sale',
                             'discount_amount', 'discount_percent', 'manufacturer', 'scale', 'height',
                             'hero', 'theme', 'series', 'material', 'packaging', 'accessories', 'range_of_motion', 'type',
                             'code', 'description', 'image_urls', 'dimensions'])
        next_page_url = url
        pages = 0
        while next_page_url and pages < MAX_PAGES:
            pages+=1
            response = requests.get(next_page_url, headers=headers)
            mainSoup = BeautifulSoup(response.text, 'html.parser')
            products = mainSoup.find_all('div', class_='ty-grid-list__item ty-quick-view-button__wrapper hover-zoom')
            for product in products:
                columns = [''] * 23
                try:
                    url = product.find('a', class_='product-title').get('href')
                    response = requests.get(url, headers=headers)
                    soup = BeautifulSoup(response.text, 'html.parser')
                    columns[0] = start_id
                    start_id+=1
                    columns[1] = 1
                    columns[3] = CATEGORY_ID
                    columns[2] = soup.find('h1', class_='ty-product-block-title').text.strip()
                    columns[4] = soup.find('span', class_='ty-price-num').text.strip().replace(',', '.')

                    discount_span = soup.find('span', class_='ty-list-price ty-save-price ty-nowrap')
                    if discount_span:
                        columns[5] = 1
                        columns[6] = discount_span.find('span', id=re.compile(r'^sec_discount_value_')).text.strip().replace(',', '.')
                        columns[7] = discount_span.find('span', id=re.compile(r'^prc_discount_value_')).text.strip()
                    else:
                        columns[5] = 0
                        columns[6] = ''
                        columns[7] = ''

                    columns[19] = soup.find('span', class_='ty-control-group__item').text.strip()
                    columns[20] = soup.find('div', class_='ty-wysiwyg-content', id = 'content_description').text.strip()
                    for (i, j) in zip(soup.find_all('div', class_='ty-product-feature__label'), soup.find_all('div', class_='ty-product-feature__value')):
                        if i.next == 'Tematyka:':
                            columns[12] = j.find('li').text.strip()
                        elif i.next == 'Bohater:':
                            columns[11] = j.find('li').text.strip()
                        elif i.next == 'Producent:':
                            columns[8] = j.text
                        elif i.next == 'Rodzaj produktu:':
                            columns[18] = j.find('li').text.strip()
                        elif i.next == 'Opakowanie:':
                            columns[15] = j.next
                        elif i.next == 'Wysokość:':
                            columns[10] = j.text
                        elif i.next == 'Akcesoria w zestawie:':
                            columns[16] = j.next
                        elif i.next == 'Zakres ruchu:':
                            columns[17] = j.next
                        elif i.next == 'Materiał:':
                            columns[14] = j.next
                        elif i.next == 'Seria:':
                            if (j.find('li')):
                                columns[13] = j.find('li').text.strip()
                            else:
                                columns[13] = j.text.strip()
                        elif i.next == 'Skala:':
                            columns[9] = j.next
                        elif i.next == 'Wymiary:':
                            columns[22] = j.next

                    os.makedirs(data_dir + 'images', exist_ok=True)

                    image_div = soup.find('div', class_='ty-product-img cm-preview-wrapper')
                    if image_div:
                        image_links = image_div.find_all('a', class_='cm-image-previewer')
                        count_image = 0
                        for link in image_links:
                            image_url = link.get('href')
                            if image_url:
                                image_response = requests.get(image_url, headers=headers)
                                if image_response.status_code == 200:

                                    image_name = os.path.basename(image_url)

                                    with open(os.path.join(data_dir + 'images', image_name), 'wb') as file:
                                        file.write(image_response.content)
                                    print(f'Saved image: {image_name}')
                                    count_image+=1
                                    columns[21] += image_name + ','
                                    if(count_image==2):
                                        break
                    #columns = [col.replace('\n', '') if isinstance(col, str) else col for col in columns]
                    #columns[21] += "\n"
                    writer.writerow(columns)
                    print('Saved:', columns[2])
                except AttributeError:
                    continue
            next_page_link = mainSoup.find('a', class_='ty-pagination__right-arrow')
            next_page_url = next_page_link.get('href') if next_page_link else None
    end_time = time.time()
    print(f'Time taken for {category["name"]}: {end_time - start_time} seconds')
finish_time = time.time()
print(f'Total time taken: {finish_time - main_time} seconds')