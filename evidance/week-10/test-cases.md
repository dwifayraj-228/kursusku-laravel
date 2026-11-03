# Dokumentasi Pengujian KursusKu

Pengujian dilakukan untuk mengetahui apakah fitur pengelolaan data kursus sudah berjalan dengan baik. Beberapa kondisi dicoba, mulai dari memasukkan data yang benar sampai memberikan input yang tidak sesuai.

| No. | Skenario | Input atau Kondisi | Hasil Pengujian | Keterangan |
|---|---|---|---|---|
| 1 | Menambahkan kursus | Mengisi seluruh kolom dengan data yang benar | Kursus berhasil ditambahkan dan muncul pada daftar kursus. | Berhasil |
| 2 | Kode tidak diisi | Kolom kode kursus dikosongkan | Sistem menampilkan pesan bahwa kode wajib diisi. | Berhasil |
| 3 | Menggunakan kode yang sama | Memasukkan kode WEB-101 yang sudah terdaftar | Sistem menolak kode tersebut karena sudah digunakan. | Berhasil |
| 4 | Nama kursus kosong | Kolom nama tidak diisi | Muncul pemberitahuan bahwa nama kursus harus diisi. | Berhasil |
| 5 | Biaya bernilai negatif | Memasukkan biaya -1000 | Sistem menolak nilai biaya karena tidak boleh kurang dari 0. | Berhasil |
| 6 | Kuota bernilai nol | Mengisi kuota dengan angka 0 | Data ditolak karena kuota minimal adalah 1. | Berhasil |
| 7 | Memasukkan status lain | Mengisi status dengan nilai active | Sistem menampilkan pesan bahwa status yang dipilih tidak valid. | Berhasil |
| 8 | Memuat ulang daftar kursus | Membuka kembali halaman /courses setelah data tersimpan | Delapan data kursus tetap ditampilkan setelah halaman dimuat ulang. | Berhasil |

## Hasil Akhir

Dari seluruh percobaan yang dilakukan, delapan skenario pengujian menunjukkan hasil sesuai dengan yang diharapkan. Sistem dapat menerima data yang memenuhi ketentuan dan memberikan penolakan ketika terdapat input yang tidak sesuai. Data kursus yang sudah dimasukkan juga tetap tersimpan dan dapat ditampilkan kembali.