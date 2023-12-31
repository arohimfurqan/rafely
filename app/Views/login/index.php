<?= $this->extend('layout/login') ?>
<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php
$session = \Config\Services::session();
$oldInput = $session->getFlashdata('old_input');
?>
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
    <div class="card card-plain">
      <div class="card-header pb-0 text-start">
        <h4 class="font-weight-bolder">Sign In</h4>
        <p class="mb-0">Enter your email and password to sign in</p>
      </div>
      <div class="card-body">
        <?= form_open('/login', ['method' => 'POST']) ?>

        <div class="mb-3">
          <input type="text" id="username" name="username" value="<?= isset($oldInput['username']) ? $oldInput['username'] : '' ?>" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : '' ?>" placeholder="Username">
          <?php if ($validation->hasError('username')) : ?>
            <div class="invalid-feedback"><?= $validation->getError('username') ?></div>
          <?php endif; ?>

        </div>
        <div class="mb-3">
          <input type="password" id="password" name="password" value="<?= isset($oldInput['password']) ? $oldInput['username'] : '' ?>" class="form-control <?= $validation->getError('password') ? 'is-invalid' : '' ?>" placeholder="Password" autocomplete="new-password">
          <?php if ($validation->hasError('password')) : ?>
            <div class="invalid-feedback"><?= $validation->getError('password') ?></div>
          <?php endif; ?>

        </div>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
        </div>
        <?= form_close() ?>
      </div>
      <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
          Don't have an account?
          <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign
            up</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
    <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?= base_url('assets') ?>/download.png');
background-size: cover;">
      <span class="mask bg-gradient-primary opacity-6"></span>
      <h4 class="mt-5 text-white font-weight-bolder position-relative">"RAFELY"</h4>
      <p class="text-white position-relative">Sistem Informasi Penyewaan Lapangan Futsal</p>
    </div>
  </div>
</div>
<!--end::Login Sign in form-->
<?= $this->endSection() ?>