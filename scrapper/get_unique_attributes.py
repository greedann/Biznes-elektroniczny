import csv

data_dir = "../data/"

# Открытие исходного CSV файла
with open(data_dir + 'products.csv', 'r', newline='', encoding='utf-8') as infile:
    csv_reader = csv.DictReader(infile)

    # Множество для хранения уникальных значений по каждому полю
    unique_values = {
        'manufacturer': set(),
        'scale': set(),
        'height': set(),
        'hero': set(),
        'theme': set(),
        'series': set(),
        'material': set(),
        'packaging': set(),
        'accessories': set(),
        'range_of_motion': set(),
        'type': set(),
        'dimensions': set(),
    }

    # Проход по строкам и сбор уникальных значений для каждого поля
    for row in csv_reader:
        for field in unique_values:
            value = row.get(field)
            if value:  # Добавляем в множество только если значение не пустое
                unique_values[field].add(value)

# Сохранение уникальных значений в новый файл
with open(data_dir + 'unique_values.csv', 'w', newline='', encoding='utf-8') as outfile:
    csv_writer = csv.writer(outfile)

    # Записываем заголовок
    csv_writer.writerow(unique_values.keys())

    # Записываем уникальные значения для каждого поля
    csv_writer.writerow([', '.join(sorted(values)) for values in unique_values.values()])