# AI Usage Log 
Praktikum Pemrograman Web III Pertemuan 13

## Tujuan Penggunaan AI

AI digunakan sebagai alat bantu dalam memahami, mengembangkan, memperbaiki, dan menguji fitur pengelolaan data kursus pada aplikasi KursusKu berbasis Laravel.

## Riwayat Penggunaan AI

| No. | Prompt / Pertanyaan | Saran AI | Dipakai? | Alasan |
|---|---|---|---|---|
| 1 | Membantu membuat fitur pencarian kursus berdasarkan kode dan nama kursus. | Menggunakan query Eloquent dengan kondisi `where` dan `orWhere`. | Ya | Agar pengguna dapat mencari data kursus dengan lebih mudah. |
| 2 | Membantu membuat filter berdasarkan status kursus. | Menggunakan kondisi `when` untuk memfilter status Open, Closed, dan Draft. | Ya | Agar data kursus dapat ditampilkan berdasarkan status yang dipilih. |
| 3 | Membantu mengatur pagination pada halaman daftar kursus. | Menggunakan `paginate(10)` dan `withQueryString()`. | Ya | Agar data ditampilkan sebanyak 10 data per halaman dan parameter pencarian tetap terbawa. |
| 4 | Memeriksa kode pada CourseController dan tampilan Blade. | Memeriksa hubungan antara controller, data kursus, dan tampilan daftar kursus. | Ya | Untuk memastikan data dari database dapat ditampilkan dengan benar. |
| 5 | Memperbaiki masalah pada implementasi AJAX. | Mengidentifikasi pemanggilan partial Blade dan mengembalikan proses pemuatan halaman biasa tanpa AJAX. | Ya | Agar halaman daftar kursus kembali berjalan menggunakan mekanisme Laravel biasa. |
| 6 | Memperbaiki tampilan tombol Detail, Edit, dan Hapus. | Memberikan saran penggunaan selector CSS untuk mengatur warna, border, dan tampilan tombol. | Ya | Agar tampilan tombol aksi lebih jelas dan sesuai desain. |

## Hasil Penggunaan AI

AI membantu dalam memahami penggunaan Eloquent, menyusun logika pencarian dan filter, mengatur pagination, serta memperbaiki kode pada CourseController dan Blade. AI juga memberikan arahan dalam mengatasi masalah tampilan dan implementasi AJAX pada aplikasi KursusKu.

## Catatan

1. AI digunakan sebagai alat bantu dalam proses pengembangan dan perbaikan program.
2. Saran kode disesuaikan kembali dengan struktur aplikasi KursusKu.
3. Pengujian fitur dilakukan secara langsung pada aplikasi.
4. Tidak semua saran AI langsung diterapkan karena perlu disesuaikan dengan kebutuhan dan kondisi program.