This project is a web scraper that extracts product information from the website https://www.dystryktzero.pl/ and saves the data into a CSV file. It also downloads product images and stores them locally.

## Installation
1. Clone the repository
2. Install the required packages using the following command:
```bash
pip install -r requirements.txt
```

## Usage
Update the CATEGORY_ID and url variables in main.py to match the category you want to scrape.

Run the following command to start the scraper:
```bash
python main.py
```
The scraper will create a CSV file with the extracted data and a folder with the downloaded images.
```bash
cd data
```


##CSV file structure
The CSV file is named products.csv and is located in the data folder.
The CSV file contains the following columns:
1. product_id
2. active
3. name
4. category
5. price
6. on_sale
7. discount_amount
8. discount_percent
9. manufacturer
10. scale
11. height
12. hero
13. theme
14. series
15. material
16. packaging
17. accessories
18. range_of_motion
19. type
20. code
21. description
22. image_urls




