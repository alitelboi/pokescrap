# Final Project :: Lab Based Education - Net Centric Computation Laboratory (NCC)

##  Topik Web Scraping https://pokemondb.net

### Anggota :
1. Mohammad Faderik Izzul Haq     (05111940000023)
2. M Fajri Davyza Chaniago        (05111940000180)
3. Marsa Aushaf Rafi'             (05111940000220)

### Ketentuan Umum
- Buat kelompok yang terdiri dari 3 orang.
- Setiap kelompok memilih salah satu topik dari 3 topik yang tersedia yaitu Front End, SQL, atau Web Scraping untuk dijadikan final project.
- Isikan nama anggota kelompok serta topik yang dipilih di https://intip.in/FPLBENCC2020 
- File final project diunggah ke repository Github kelompok masing-masing. Satu kelompok cukup mengumpulkan satu repository. Commit paling lambat 21 November 2020 pukul 10.00 WIB.
- Demo Final Project akan dilaksanakan pada 21 November 2020.
- Core utama aplikasi menggunakan Native PHP.
- Diperbolehkan menggunakan library eksternal.
- Kalau ada kesulitan boleh nanya admin NCC 😊 

### Ketentuan Web Scraping
- Amati website https://pokemondb.net 
- Lakukan scraping untuk memenuhi tugas berikut:
- Buat Table List Pokemon.
- Table Berisi National №,Gambar, Nama
- Nama jika di click akan membuka halaman yang berisi data detail pokemon.
- Menampilkan detail data 1 pokemon dan menampilkan rekomendasi 3 pokemon lain dengan tipe yang sama pada 1 halaman. Jika pokemon memiliki 2 tipe maka diambil salah satu saja.
- Halaman detail minimal menampilkan National №, Images, Type, Species, Height, Weight, Abilities, Catch Rate, Growth Rate, Base Stat, Evolution Chart
- Rekomendasi pokemon menampilkan National №, Images,Species
- Tidak diperkenankan menggunakan database.
- Waktu load website tidak diperhitungkan dalam penilaian.	
- Penilaian utama berasal dari data yang berhasil ditampilkan.
- Tampilan website bebas. Estetika menjadi nilai tambah.

### Created Project at : Thursday, 11 November 2020 ~ 13:36:00
### Created Repository at : Friday, 13 November 2020 ~ 11:00:00

### HOW TO RUN
- clone https://github.com/botfade/pokescrap.git
- install xampp https://www.apachefriends.org/xampp-files/7.4.11/xampp-windows-x64-7.4.11-0-VC15-installer.exe
- open xampp
- start apache server
- copy hasil clone github ke instalasi xampp C:\xampp\htdocs
- buka di browser : localhost/pokescrap/index.php

### HOW TO EDIT
- open vscode
- file > open folder > pilih lokasi folder pokescrap
- edit index.php : tabel pokemon seluruhnya
- edit detail.php : detail pokemon dari index.php yang di klik
- edit style.css : style CSS dari kedua halaman index dan detail
