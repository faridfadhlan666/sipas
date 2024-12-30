# Sistem Informasi Arsip Surat Kementerian Pertahanan- Projek PKMI

## -- Versi PHP > 7.3 && < 8.x

## Instalasi dan Konfigurasi

- Pastikan Versi PHP sudah sesuai
- Ekstrak source code
- Simpan folder sipas ke dalam folder htdocs
- Buat database baru di phpmyadmin dengan nama `ci3_sipas`
- Import database.sql ke database baru yang sudah dibuat

- Terhitung Sejak May 2022, Fitur Reset Password yang menggunakan Pihak ketiga dari Gmail telah di non-aktifkan, Kodingan untuk fitur tersebut tidak dihapus sehingga bisa anda gunakan jika ingin custom dengan pihak ketiga lainnya.

  - atau yang terbaru menggunakan cara ini: <https://stackoverflow.com/questions/71477637/nodemailer-and-gmail-after-may-30-2022>

  - Konfigurasi Email
    - Buka File Auth.php di Folder Controller
    - Cari method_sendMail() => ganti email dan password sesuai dengan email yang anda miliki.
    - Login gmail anda, lalu klik menu _Manage Your Google Account_ ,
    - Pilih Security , Lalu Turn On Less secure app access
    - Kemudian cari file sendmail.ini di folder _xampp > sendmail > sendmail.ini_ lanjutkan konfigurasi seperti pada gambar1.png -->

- Login:
  - Admin : username => admin123 | password => admin123
  - User : username => user1234 | password => user1234
