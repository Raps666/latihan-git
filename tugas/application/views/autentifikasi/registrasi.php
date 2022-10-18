    <section class="login">
        <div class="login-box">
            <h1>Daftar Menjadi Member</h1>
            <form method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
                <div class="input-login">
                    <input type="text" id="nama" placeholder="Nama Lengkap" name ="nama" value="<?= set_value('nama'); ?>">
                </div>
                <?= form_error('nama', '<small class="danger-text">', '</small>'); ?>
                <div class="input-login">
                    <input type="text" placeholder="Alamat Email" id="email" name="email" value="<?= set_value('email'); ?>">
                </div>
                <?= form_error('email', '<small class="danger-text">', '</small>'); ?>
                <div class="input-login">
                    <input type="password" id="passsword1" name="password1" placeholder="Password">
                </div>
                <?= form_error('password1', '<small class="danger-text">', '</small>'); ?>
                <div class="input-login">
                    <input type="password" id="password2" name="password2" placeholder="Ulangi Password">
                </div>
                <?= form_error('password2', '<small class="danger-text">', '</small>'); ?>
                <button type="submit" class="masuk">Daftar Menjadi Member</a></button>
            </form>
            <p><center>Sudah jadi Member? <a href="<?php echo base_url().'autentifikasi'?>">Login</a></center></p>
        </div>
    </section>
    