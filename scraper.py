import csv

import requests
from bs4 import BeautifulSoup
import re

url = 'https://www.dystryktzero.pl/gadzety-star-wars/'
headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'
}
response = requests.get(url, headers=headers)
soup = BeautifulSoup(response.text, 'html.parser')

with open('products.csv', mode='w', encoding='utf-8') as file:
    writer = csv.writer(file)
    writer.writerow(['Nazwa', 'Cena', 'Seria', 'Material', 'Tematyka', 'Bohater', 'Producent', 'Rodzaj Produktu', 'Opakowanie', 'Wysokosc', 'Scala',  'Akcesoria w zestawie', 'Zakres ruchu',
                     'Description', 'url_photo'])
    products = soup.find_all('div', class_='ty-grid-list__item ty-quick-view-button__wrapper hover-zoom')
    for product in products:
        try:
            title = product.find('a', class_='product-title').text.strip()
            price = product.find('span', class_='ty-price-num').text.strip()
            image = product.find('img', class_='ty-pict').get('src')
            url = product.find('a', class_='product-title').get('href')
            response = requests.get(url, headers=headers)
            soup = BeautifulSoup(response.text, 'html.parser')
            tematyka = ""
            bohater = ""
            producent = ""
            rodzaj_produktu = ""
            opakowanie = ""
            wysokosc = ""
            akcesoria_w_zestawie = ""
            zakres_ruchu = ""
            material = ""
            seria = ""
            scala = ""
            for (i, j) in zip(soup.find_all('div', class_='ty-product-feature__label'), soup.find_all('div', class_='ty-product-feature__value')):
                if i.next == 'Tematyka:':
                    tematyka = j.find('li').text.strip()
                elif i.next == 'Bohater:':
                    bohater = j.find('li').text.strip()
                elif i.next == 'Producent:':
                    producent = j.text
                elif i.next == 'Rodzaj produktu:':
                    rodzaj_produktu = j.find('li').text.strip()
                elif i.next == 'Opakowanie:':
                    opakowanie = j.next
                elif i.next == 'Wysokość:':
                    wysokosc = j.text
                elif i.next == 'Akcesoria w zestawie:':
                    akcesoria_w_zestawie = j.next
                elif i.next == 'Zakres ruchu:':
                    zakres_ruchu = j.next
                elif i.next == 'Materiał:':
                    material = j.next
                elif i.next == 'Seria:':
                    seria = j.find('li').text.strip()
                elif i.next == 'Skala:':
                    scala = j.next
            description = soup.find('div', class_='ty-wysiwyg-content', id = 'content_description').text.strip()
            writer.writerow([title, price, seria, material, tematyka, bohater, producent, rodzaj_produktu, opakowanie, wysokosc, scala, akcesoria_w_zestawie, zakres_ruchu, material, description, image])
            # writer.writerow([title, price, image, description, tematyka, bohater, producent, rodzaj_produktu, opakowanie, wysokosc, akcesoria_w_zestawie, zakres_ruchu, material, seria])
            print('Saved:', title)
        except AttributeError:
            continue


