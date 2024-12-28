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

## Lisensi dan Hak Cipta

### Personal Use

Saya memberikan izin kepada anda untuk memodifikasi baik untuk menggunakan aplikasi ataupun untuk mempelajari basis kode yang ada. saya tidak memberikan izin untuk menyebarluaskan karya baik itu secara commercial maupun non-commercial.

### Royalty

Anda boleh menjual kembali karya baik itu sudah ataupun belum dimodifikasi dengan syarat : Anda harus melakukan konfirmasi dan pembayaran kepada developer sesuai kesepakatan yang di tentukan.
Silahkan kontak email => <ngodingskuy@gmail.com>

!! Pelanggaran Hak Cipta : <https://www.hukum-hukum.com/2016/05/pelanggaran-hak-cipta-dengan-ancaman.html>
