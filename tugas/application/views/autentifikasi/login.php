<form method="post" action="<?= base_url('autentifikasi'); ?>">
    <?= $this->session->flashdata('pesan'); ?>
    <section class="login">
        <div class="login-box" action = "<?= base_url('autentifikasi'); ?>">
            <h1>LOGIN</h1>
            <p>Pengguna Baru? <a href="<?php echo base_url().'autentifikasi/registrasi'?>">Buat Akun Baru</a></p>
            <div class="input-login">
                <h2>Email</h2>
                <i class="fa fa-envelope-o"></i>
                <input type="email" value ="<?= set_value('email');?>" id="email" placeholder="Alamat Email" name ="email">
            </div>
            <?= form_error('email', '<small class="danger-text">', '</small>'); ?>
            <div class="input-login">
                <h2>Password</h2>
                <i class="fa fa-key"></i>
                <input type="password" placeholder="Password" id="password" name="password">
            </div>
            <?= form_error('password', '<small class="danger-text">', '<small>'); ?>
            <button type="submit" class="masuk">LOGIN</a></button>
        </div>
    </section>
</form>