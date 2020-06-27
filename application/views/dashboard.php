<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<center>
	<p>Selamat datang <?= $user['nama']; ?></p>
	<p><?= $user['email']; ?></p>
	<p><small>Member since <?= date('d F Y', $user['data_created']) ;?></small></p>
	<br>
	<a href="<?= base_url('auth/logout') ?>"> logout </a>
	</center>
</body>
</html>