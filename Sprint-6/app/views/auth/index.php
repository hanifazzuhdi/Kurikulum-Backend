<div class="container">
    <h2>Login </h2>

    <form action=" <?= BASEURL . '/login/log' ?> " method="post">
        <div class="content">
            <input type="email" required="required" name="email">
            <span>Email</span>
        </div>
        <div class=" content">
            <input type="password" required="required" name="password">
            <span>Password</span>
        </div>

        <input type="checkbox" name="check">
        <label for="">Remember Me</label>

        <div class="content">
            <button type="submit" name="submit">Masuk</button>
        </div>
    </form>

    <a href='<?= BASEURL . "/login/register" ?>'>Buat Admin Baru ?</a>
</div>