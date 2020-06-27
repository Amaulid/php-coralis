<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <center>
                    <h1>LOGIN</h1>

                  <?php echo $this->session->flashdata('pesan') ?> 

                  <form method="post" action="<?php echo base_url('auth') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan email Anda" name="email">

                      <?php echo form_error('email','<div class="text-danger small ml-2">','</div>');  ?>

                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password Anda" name="password">

                      <?php echo form_error('password','<div class="text-danger small ml-2">','</div>');  ?>

                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary form-control">Login</button>
                  
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('registrasi') ?>">Belum Punya Akun? Daftar!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('lupa_password') ?>">Lupa Password!</a>
                  </div>
                </center>
</body>
</html>                

                