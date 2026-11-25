
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - KursusKu</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f3f6fc;
            color: #263452;
        }

        /* HEADER */
        header {
            background: #1c45c9;
            color: white;
            padding: 22px 7%;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 32px;
        }

        header p {
            margin: 6px 0 0;
            color: #dbe5ff;
            font-size: 13px;
        }

        /* NAVIGASI */
        nav {
            background: #405186;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 13px 5%;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        nav a:hover {
            color: #dbe5ff;
        }

        /* LOGOUT */
        .logout-container {
            max-width: 1150px;
            margin: 15px auto 0;
            padding: 0 20px;
            display: flex;
            justify-content: flex-end;
        }

        .logout-container form {
            margin: 0;
        }

        .logout-btn {
            background: #1c45c9;
            color: white;
            border: none;
            padding: 10px 22px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 13px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background: #1538a5;
        }

        /* KONTEN */
        .container {
            max-width: 1150px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h2 {
            margin: 0 0 8px;
            color: #1c3475;
            font-size: 27px;
        }

        .page-title p {
            color: #718096;
            margin: 0;
            font-size: 14px;
        }

        .profile-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 22px;
            align-items: start;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(30, 55, 100, 0.07);
            margin-bottom: 20px;
        }

        .card h3 {
            color: #1c45a5;
            margin: 0 0 22px;
            font-size: 19px;
        }

        /* INFORMASI */
        .info-item {
            padding: 14px 0;
            border-bottom: 1px solid #edf0f5;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            display: block;
            color: #8591a5;
            font-size: 12px;
            margin-bottom: 6px;
        }

        .info-value {
            font-size: 14px;
            font-weight: bold;
            color: #34466b;
        }

        /* AVATAR */
        .avatar {
            width: 75px;
            height: 75px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: #e4ecff;
            color: #1c45c9;
            font-size: 30px;
            font-weight: bold;
        }

        .user-heading {
            text-align: center;
            margin-bottom: 25px;
        }

        .user-heading h3 {
            margin: 0 0 5px;
        }

        .user-heading p {
            margin: 0;
            color: #8591a5;
            font-size: 13px;
        }

        /* STATUS */
        .status {
            color: #16834c;
            background: #e4f7ed;
            padding: 5px 11px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
        }

        /* NOTIFIKASI */
        .success {
            background: #e4f7ed;
            color: #16834c;
            padding: 13px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        /* RESPONSIVE */
        @media (max-width: 750px) {
            .profile-layout {
                grid-template-columns: 1fr;
            }

            nav {
                gap: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER UTAMA -->
    <header>
        <h1>KursusKu</h1>
        <p>Belajar Teknologi, Bangun Masa Depan</p>
    </header>

    <!-- NAVIGASI UTAMA -->
    <nav>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('home') }}#keunggulan">Keunggulan</a>
        <a href="{{ route('home') }}#kursus">Katalog</a>
        <a href="{{ route('home') }}#alur">Cara Daftar</a>
        <a href="{{ route('home') }}#media">Media</a>
        <a href="{{ route('home') }}#kontak">Kontak</a>
        <a href="{{ route('enrollments.create') }}">Daftar Kursus</a>
        <a href="{{ route('courses.index') }}">KursusKu</a>
       
    </nav>

    <!-- LOGOUT DI BAWAH NAVBAR -->
    <div class="logout-container">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    </div>

    <!-- KONTEN PROFIL -->
    <div class="container">

        <div class="page-title">
            <h2>Profil Saya</h2>
            <p>Informasi pribadi dan informasi akun KursusKu kamu.</p>
        </div>

        <!-- NOTIFIKASI BERHASIL -->
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <div class="profile-layout">

            <!-- INFORMASI PRIBADI -->
            <div class="card">
                <h3>Informasi Pribadi</h3>

                <p style="font-size:13px; color:#718096; margin-top:-10px; margin-bottom:22px;">
                    Informasi identitas pengguna yang terdaftar pada KursusKu.
                </p>

                <div class="info-item">
                    <span class="info-label">Nama Lengkap</span>
                    <span class="info-value">{{ $user->name }}</span>
                </div>

                <div class="info-item">
                    <span class="info-label">Alamat Email</span>
                    <span class="info-value">{{ $user->email }}</span>
                </div>

                <div class="info-item">
                    <span class="info-label">ID Pengguna</span>
                    <span class="info-value">#{{ $user->id }}</span>
                </div>
            </div>

            <!-- INFORMASI AKSES -->
            <div>

                <div class="card">

                    <div class="user-heading">
                        <div class="avatar">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>

                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->email }}</p>
                    </div>

                    <h3>Informasi Akses</h3>

                    <div class="info-item">
                        <span class="info-label">Role Pengguna</span>
                        <span class="info-value">
                            {{ ucfirst($user->role ?? 'user') }}
                        </span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Status Akun</span>
                        <span class="status">
                            {{ $user->status ?? 'Aktif' }}
                        </span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Terakhir Login</span>
                        <span class="info-value">
                            {{ $user->last_login_at
                                ? \Carbon\Carbon::parse($user->last_login_at)->format('d-m-Y H:i')
                                : 'Belum tersedia' }}
                        </span>
                    </div>

                </div>

                <div class="card">
                    <h3>Informasi Akun</h3>

                    <p style="font-size:13px; color:#718096; line-height:1.7;">
                        Informasi akun pengguna KursusKu yang sedang login.
                    </p>
                </div>

            </div>

        </div>
    </div>

</body>
</html>
