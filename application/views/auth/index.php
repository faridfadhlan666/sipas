<body class="bg-gradient" style="background-color: #A0522D;">
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
          <div class="card-body p-0">
            <div class="card o-hidden border-0 shadow-lg">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-6">
                    <img class="img-fluid d-none d-sm-block mt-4" src="<?= base_url('assets/'); ?>img/bg-login.svg">
                  </div>
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                      </div>
                      <!-- Show Flash_msg -->
                      <?= $this->session->flashdata('message') ?>

                      <!-- form login -->
                      <form class="user" method="post" action="<?= base_url() ?>">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-user border-left-primary" name="username" value="<?= set_value('username') ?>" placeholder="Email atau username">
                          <?= form_error('username', '<div><small class="text-danger pl-3">', '</small></div>') ?>
                        </div>

                        <div class="form-group">
                          <input type="password" class="form-control form-control-user border-left-primary" name="pass" placeholder="Password">
                          <div class="input-group mb-3">
                            <?= form_error('pass', '<div><small class="text-danger pl-3">', '</small></div>') ?>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-user btn-block" style="background-color: #A0522D; color: white; border: none;">
                          Login
                        </button>
                      </form>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="<?= base_url('auth/forgot-password'); ?>">Lupa Password?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="<?= base_url('auth/registrasi'); ?>">Belum punya akun? Registrasi!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
