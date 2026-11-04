# TEST MATRIX
**Project:** KursusKu  
**Praktikum:** Pertemuan 9 – Integrasi Bootstrap dan AJAX

| No. | Fitur yang Diuji | Skenario Pengujian | Hasil yang Diharapkan | Status |
|---|---|---|---|---|
| 1 | Homepage | Membuka halaman utama KursusKu. | Homepage tampil dengan Bootstrap Navbar. | Berhasil |
| 2 | Responsive Navbar | Mengubah tampilan browser ke ukuran mobile. | Navbar menyesuaikan ukuran layar. | Belum diuji |
| 3 | Halaman Pendaftaran | Membuka halaman pendaftaran kursus. | Form pendaftaran tampil dengan lengkap. | Berhasil |
| 4 | Dropdown Kursus | Membuka dropdown tanpa memilih kursus. | Menampilkan pilihan awal. | Berhasil |
| 5 | AJAX Web Dasar | Memilih Web Dasar. | Menampilkan 12 kursi tersisa. | Gagal |
| 6 | AJAX PHP Dasar | Memilih PHP Dasar. | Menampilkan 8 kursi tersisa. | Belum diuji |
| 7 | AJAX Laravel Dasar | Memilih Laravel Dasar. | Menampilkan 4 kursi tersisa. | Belum diuji |
| 8 | Pengiriman Form | Mengirim form dengan data valid. | Data diproses dan menampilkan hasil sesuai alur aplikasi. | Belum diuji |
| 9 | Validasi Email | Mengirim form dengan format email tidak valid. | Sistem menampilkan pesan validasi. | Belum diuji |
| 10 | Network Request | Memilih kursus dan memeriksa tab Network Fetch/XHR. | Request GET availability menghasilkan status 200 dan respons JSON. | Gagal |

## Kesimpulan Pengujian

Berdasarkan pengujian sementara, halaman utama dan halaman pendaftaran berhasil ditampilkan. Integrasi Bootstrap dan proses build Vite juga berhasil dilakukan.

Namun, fitur AJAX untuk menampilkan sisa kursi belum berhasil karena request availability belum muncul pada tab Network. Pengujian fitur lainnya masih perlu dilanjutkan setelah permasalahan AJAX diperbaiki.