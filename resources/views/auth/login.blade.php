
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KursusKu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f4f6fc;
        }

        .container {
            min-height: 100vh;
            display: flex;
        }

        /* PANEL KIRI */
        .left-panel {
            width: 43%;
            background: linear-gradient(145deg, #183a9e, #2855d9);
            color: white;
            padding: 65px 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 65px;
        }

        .left-panel h1 {
            font-size: 43px;
            line-height: 1.3;
            margin-bottom: 20px;
        }

        .left-panel h1 span {
            color: #b9d0ff;
        }

        .left-panel p {
            color: #e0e8ff;
            line-height: 1.8;
            font-size: 14px;
        }

        .features {
            margin-top: 40px;
            padding: 23px;
            background: rgba(255,255,255,0.13);
            border-radius: 15px;
            line-height: 2.4;
            font-size: 14px;
        }

        /* PANEL KANAN */
        .right-panel {
            width: 57%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .login-box {
            width: 100%;
            max-width: 420px;
        }

        .subtitle {
            color: #2855d9;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .login-box h2 {
            color: #172d65;
            font-size: 34px;
            margin-bottom: 12px;
        }

        .description {
            color: #8490a8;
            font-size: 14px;
            margin-bottom: 35px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #273b70;
            margin-bottom: 10px;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 16px;
            border: 1px solid #dce3f1;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            background: white;
        }

        input:focus {
            border-color: #2855d9;
            box-shadow: 0 0 0 3px rgba(40,85,217,0.10);
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 75px;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            color: #2855d9;
            cursor: pointer;
            font-weight: bold;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #52617e;
            font-weight: normal;
        }

        .forgot {
            color: #2855d9;
            text-decoration: none;
        }

        .login-button {
            width: 100%;
            padding: 17px;
            border: none;
            border-radius: 10px;
            background: #2149c6;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-button:hover {
            background: #183a9e;
        }

        .error {
            color: #d93636;
            font-size: 13px;
            margin-top: 7px;
        }

        .alert {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            background: #fee2e2;
            color: #b91c1c;
            font-size: 13px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #98a5b8;
            font-size: 12px;
        }

        @media(max-width: 768px) {
            .left-panel {
                display: none;
            }

            .right-panel {
                width: 100%;
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="left-panel">

        <div class="brand">✦ KursusKu</div>

        <h1>
            Belajar Lebih Mudah.
            <br>
            <span>Raih Masa Depan.</span>
        </h1>

        <p>
            Selamat datang di KursusKu.
            Platform pembelajaran untuk membantu
            kamu mengembangkan kemampuan,
            meningkatkan pengetahuan, dan
            membangun masa depan.
        </p>

        <div class="features">
            ✓ Beragam pilihan kursus
            <br>
            ✓ Pendaftaran kursus mudah
            <br>
            ✓ Informasi peserta terorganisir
        </div>

    </div>

    <div class="right-panel">

        <div class="login-box">

            <div class="subtitle">AKSES AKUN KURSUSKU</div>

            <h2>Selamat datang 👋</h2>

            <p class="description">
                Masuk ke akun kamu untuk melanjutkan pembelajaran.
            </p>

            @if ($errors->any())
                <div class="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="password-wrapper">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            required
                        >

                        <button
                            type="button"
                            class="toggle-password"
                            onclick="togglePassword()"
                            id="toggleButton"
                        >
                            Lihat
                        </button>
                    </div>
                </div>

                <div class="options">

                    <label class="remember">
                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                        >
                        Ingat saya
                    </label>

                    <a href="#" class="forgot">
                        Lupa password?
                    </a>

                </div>

                <button type="submit" class="login-button">
                    Masuk ke KursusKu 
                </button>

            </form>

            <div class="footer">
                © 2026 KursusKu. All Rights Reserved.
            </div>

        </div>

    </div>

</div>

<script>
    function togglePassword() {
        const password = document.getElementById('password');
        const button = document.getElementById('toggleButton');

        if (password.type === 'password') {
            password.type = 'text';
            button.textContent = 'Sembunyi';
        } else {
            password.type = 'password';
            button.textContent = 'Lihat';
        }
    }
</script>

</body>
</html>
