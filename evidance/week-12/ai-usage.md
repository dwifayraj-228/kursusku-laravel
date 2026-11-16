# AI Usage Log – Pertemuan 12

Dokumen ini berisi catatan penggunaan AI selama menyelesaikan Praktikum Pemrograman Web III Pertemuan 12 dengan materi Relasi Database.

| Prompt / Pertanyaan | Bantuan AI | Digunakan? | Alasan |
| :--- | :--- | :---: | :--- |
| Bagaimana mengatasi migration yang gagal karena tabel `courses` sudah tersedia? | AI membantu mengarahkan penggunaan perintah migration berdasarkan file tertentu agar hanya migration yang diperlukan yang dijalankan. | **Ya** | Agar proses penambahan tabel baru tidak mengganggu tabel yang sudah digunakan sebelumnya. |
| Bagaimana memperbaiki pemanggilan halaman enrollment yang tidak ditemukan? | AI membantu menyesuaikan lokasi pemanggilan view dan nama route dengan struktur folder `admin/enrollments`. | **Ya** | Supaya halaman enrollment dapat dibuka sesuai dengan lokasi file Blade yang digunakan. |
| Bagaimana membuat form enrollment sesuai kebutuhan praktikum? | AI memberikan arahan untuk menampilkan pilihan Participant dan Course pada form enrollment, bukan menggunakan form pendaftaran yang lama. | **Ya** | Agar input enrollment sesuai dengan relasi tabel yang sudah dibuat. |
| Bagaimana memastikan data enrollment tersimpan dan tidak terjadi pendaftaran ganda? | AI membimbing pengujian melalui Tinker dengan mencoba menyimpan enrollment, memeriksa jumlah data, serta menguji pendaftaran dengan kombinasi participant dan course yang sama. | **Ya** | Untuk memastikan relasi dan validasi data berjalan sesuai ketentuan. |
| Bagaimana membuktikan fungsi `cascadeOnDelete()` pada Course dan Participant? | AI memberikan langkah pengujian menggunakan data dummy melalui Tinker, kemudian memeriksa apakah data enrollment ikut terhapus setelah data induknya dihapus. | **Ya** | Untuk memastikan aturan penghapusan berantai pada foreign key berjalan dengan benar. |

## Catatan Penggunaan AI

- AI digunakan sebagai pendamping ketika menemukan kendala saat menjalankan perintah Laravel, mengatur view, dan menguji fitur enrollment.
- Setiap saran yang diterapkan diperiksa kembali melalui terminal Tinker maupun browser.
- Pengujian dilakukan menggunakan data dummy agar tidak mengganggu data utama.
- Saya mempelajari fungsi relasi antar-model, validasi enrollment, foreign key, serta penerapan `cascadeOnDelete()` melalui proses praktik langsung.

Dengan demikian, AI dimanfaatkan sebagai sumber arahan dan bantuan pemecahan masalah selama praktikum, sedangkan penerapan serta pengujian program tetap dilakukan secara langsung.