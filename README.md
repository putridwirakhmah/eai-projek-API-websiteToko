## Tokoku 🛒

Tokoku merupakan platfrom marketplace produk digital yang menjual produk digital secara online dengan payment gateway Midtrans. Saya membangun ini sesuai dengan kata **tokoku** yang artinya platfrom ini di bangun untuk menjual produk milik saya sendiri. Untuk saat ini produk digital tersebut hanya bisa menjual source code program aplikasi.

Tokoku memiliki sistem multi user yang arti nya ada dua role yaitu admin dan customer. Admin adalah role milik saya dan customer sebagai pembeli. Tokoku di bangun dengan framework Laravel 10 dan MySQL sebagai backend nya. Untuk front end menggunakan bootstrap dan JavaScript. 

Alur proses bisnis aplikasi web ini sama dengan layaknya toko pada umum nya. Jadi ketika customer membeli suatu produk, lalu checkout, pilih pembayaran Midtrans, dan jika sukses maka customer bisa mengunduh produk yang di simpan dari sistem aplikasi. Customer akan menerima notifikasi email, misal invoice milik customer adalah **80xxxx** telah membeli suatu produk.

## Install ⚙️ 
Jika Anda seorang developer atau mahasiswa ingin menggunakan dan mengubah source code yang ada pada aplikasi web ini, maka perintah nya sebagai berikut : 

1. Masuk ke direktori tokoku :
```
cd tokoku
```

2. Install package bawahan Laravel :
 
```
composer install
```

3. Copy .env.example ke .env :
```
copy .env.example .env
```

4. Generate key :
```
php artisan key:generate
```

5. Import database yang berada pada folder **public/assets/** dan cari nama file **db_tokoku.sql**.

6. Buka **.env** lalu ubah konfigurasi database sesuai yang ingin dipakai :
```
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=
```

7. Masuk dan daftar <a href="https://dashboard.midtrans.com/login">Midtrans</a> untuk mendapatkan MERCHANT, CLIENT, dan SECRET key. Lalu copas ini ke **.env**  :
```
MIDTRANS_MERCHANT_ID = <MASUKKAN MERCHANT ID MILIK ANDA>
MIDTRANS_CLIENT_KEY = <MASUKKAN CLIENT KEY MILIK ANDA>
MIDTRANS_SERVER_KEY = <MASUKKAN SERVER KEY MILIK ANDA>
```

8. Tokoku memiliki sistem Single Sign On (SSO) Google, jadi Anda perlu masuk dan daftar pada <a href="https://console.cloud.google.com/apis/dashboard">console.cloud.google</a> untuk mendapatkan CLIENT dan SECRET key.

9. Copas ini ke **.env** untuk bisa menggunakan sistem SSO Google :
```
GOOGLE_CLIENT_ID= <MASUKKAN CLIENT ID ANDA>
GOOGLE_CLIENT_SECRET= <MASUKKAN CLIENT SECRET ANDA>
GOOGLE_REDIRECT_URI= <MASUKKAN REDIRECT URI APLIKASI WEB ANDA>
```

10. Untuk mengirim dan menerima email menggunakan protokol SMTP, daftar pada situs <a href="https://mailtrap.io/">mailtrap</a> untuk bahan percobaan.

11. Terakhir, sesuaikan konfigurasi MAIL Anda sendiri di **.env** :
```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME= <MASUKKAN USERNAME ANDA>
MAIL_PASSWORD= <MASUKKAN PASSWORD ANDA>
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

12. Selesai.