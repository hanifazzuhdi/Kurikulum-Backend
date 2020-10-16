<body>

    <div class="container">
        <h2>Registrasi Admin</h2>

        <form action="<?= BASEURL . '/login/registrasiAkun' ?>" method="post">
            <div class="content">
                <input type="email" required="required" name="email">
                <span>Email</span>
            </div>

            <div class=" content">
                <input type="password" required="required" name="password">
                <span>Password</span>
            </div>

            <div class="content">
                <input type="password" required="required" name="confirm">
                <span>Konfirmasi Password</span>
            </div>

            <div class=" content">
                <input type="password" required="required" name="confirmPin">
                <span>PIN</span>
            </div>

            <div class="content">
                <button type="submit" name="submit">Daftar</button>
            </div>
        </form>

        <a href='<?= BASEURL . "/login" ?>'>Kembali ke halaman Login</a>