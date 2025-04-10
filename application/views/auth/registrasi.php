<body class="bg-gradient" style="background-color: #A0522D;">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar akun baru!</h1>
                            </div>

                            <!-- form registration -->
                            <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="form-group">
                                    <!-- form_error => show error msg (form validation) , set_value => CI3 method for keep the value -->
                                    <input type="text" class="form-control form-control-user" name="name" value="<?= set_value('name'); ?>" placeholder="Masukkan Nama Anda">
                                    <?= form_error('name', '<div><small class="text-danger pl-3">', '</small></div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" value="<?= set_value('username'); ?>" placeholder="Masukkan Username Anda">
                                    <?= form_error('username', '<div><small class="text-danger pl-3">', '</small></div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" value="<?= set_value('email'); ?>" placeholder="Masukkan Email Anda">
                                    <?= form_error('email', '<div><small class="text-danger pl-3">', '</small></div>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="pass1" placeholder="Password">
                                        <?= form_error('pass1', '<div><small class="text-danger pl-3">', '</small></div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="pass2" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-user btn-block" style="background-color: #A0522D; color: white; border: none;">
                                    Daftar Akun
                                </button>
                            </form>
                            <!-- /. end of form registration -->
                            <hr>
                            <div class="text-center">
                                <a class="small" style="color:rgb(66, 21, 0);" href="<?= base_url('auth/forgot-password'); ?>">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" style="color:rgb(66, 21, 0);" href="<?= base_url(); ?>">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                        <!-- /. padding-5 -->
                    </div>
                    <!-- /. col-lg -->
                </div>
                <!-- /. row -->
            </div>
            <!-- /. card body -->
        </div>

    </div>
    <!-- /. end of container -->