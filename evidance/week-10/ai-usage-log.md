# Catatan Penggunaan AI

Selama pengerjaan praktikum Week 10, AI dimanfaatkan sebagai pendamping ketika menyusun kode dan memahami beberapa bagian dari proses pembuatan fitur CRUD. Berikut catatan penggunaan AI selama pengerjaan:

| No. | Bagian yang Dikerjakan | Bantuan yang Diperoleh | Tindak Lanjut |
|---|---|---|---|
| 1 | Pembuatan tabel kursus | Membantu menentukan kolom yang diperlukan, seperti kode, nama, biaya, kuota, tanggal mulai, dan status kursus. | Struktur tabel diterapkan melalui migration dan diperiksa kembali di phpMyAdmin. |
| 2 | Model Course | Memberikan penjelasan mengenai fungsi model, pengaturan fillable, serta hubungan model dengan tabel database. | Kode diterapkan dan koneksi model diperiksa menggunakan Tinker. |
| 3 | CourseController | Membantu memahami proses menampilkan halaman, menerima input, dan menyimpan data menggunakan Eloquent. | Controller disesuaikan dengan kebutuhan aplikasi KursusKu. |
| 4 | Pengaturan Route | Menjelaskan penggunaan resource route untuk menghubungkan alamat halaman dengan fungsi controller. | Route ditambahkan dan diperiksa melalui perintah route:list. |
| 5 | Pembuatan tampilan | Membantu menyusun halaman daftar kursus dan formulir untuk menambahkan kursus. | Tampilan dijalankan melalui browser untuk memastikan halaman dapat dibuka. |
| 6 | Validasi data | Membantu menjelaskan aturan validasi agar data kosong, kode ganda, biaya negatif, kuota nol, dan status yang tidak sesuai dapat ditolak. | Aturan validasi diuji langsung melalui formulir. |
| 7 | Pengujian aplikasi | Membantu menyusun daftar skenario untuk memeriksa fungsi Create dan Read. | Setiap skenario dicoba dan hasilnya dicatat dalam dokumen test cases. |

## Catatan

AI digunakan untuk membantu memahami materi dan memberikan arahan saat menemukan bagian yang belum dipahami. Kode yang diberikan tidak langsung dianggap benar, tetapi diterapkan dan diperiksa kembali melalui aplikasi. Pengujian dilakukan untuk memastikan fitur yang dibuat benar-benar berjalan sesuai kebutuhan.