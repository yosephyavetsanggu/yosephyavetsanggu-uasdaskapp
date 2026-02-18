# UAS Pemrograman Paralel - Dask Web App

## Deskripsi
Aplikasi web sederhana menggunakan FastAPI dan Dask untuk membaca data dari database MySQL secara paralel.

## Tabel
Nama tabel: daily_prayers

Kolom:
- id
- title
- category
- date_created

## Endpoint

GET http://localhost:8123/list

Menampilkan seluruh isi tabel dalam format JSON.

## Cara Menjalankan

### Build Docker
docker build -t uas-dask-app .

### Run Docker
docker run -p 8123:8123 uas-dask-app

### video penjelasan
https://drive.google.com/file/d/1FpEV6TCbZEPjf3LYYTgV379elvqt_Sjj/view?usp=drive_link

