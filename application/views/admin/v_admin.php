<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

	<p>Selamat datang <?= $user['nama']; ?></p>
	<p><?= $user['email']; ?></p>
	<p><small>Member since <?= date('d F Y', $user['data_created']) ;?></small></p>
	<br>

	<a href="<?= base_url('auth/logout') ?>">Logout</a> 
</body>
</html>