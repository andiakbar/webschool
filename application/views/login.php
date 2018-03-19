<form method="POST" action="<?= base_url('auth/login') ?>">
	<input type="text" name="username" required="">
	<input type="password" name="password" required="">
	<input type="submit" name="login" value="Login">
</form>
<a href="<?= base_url('auth/registrasi') ?>">Registrasi</a>