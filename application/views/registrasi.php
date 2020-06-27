<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
   <center>
                <h1>Buat Akun Anda !</h1>
              <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
                <div>
                  <input type="text" placeholder="Masukan Nama Anda" name="nama" value="<?= set_value('nama'); ?>">
                  <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                </div> 

                 <div>
                  <input type="email" placeholder="Email Anda" name="email" value="<?= set_value('email'); ?>">
                  <?php echo form_error('email','<div class="text-danger small ml-2">','</div>') ?>
                </div>

                <div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" placeholder="Password" name="password_1">
                    <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                  </div>
                  <div>
                    <input type="password" placeholder="Ulangi Password" name="password_2">
                    
                  </div>
                </div>
                <br>
                <button type="submit">Buat Akun</button>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth') ?>">Sudah Punya Akun? Silahkan Login!</a>
              </div>
        </center>
</body>
</html>






         