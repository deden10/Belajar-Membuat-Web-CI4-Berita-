<?= $this->extend('admin/layout/main')?>
<?= $this->section('breadcrumb')?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Password</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Ubah Password</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-success">
                <?php
            if (!empty(session()->getFlashdata('success'))) {
            ?>
                <div class="alert alert-success">
                    <p>Pengaturan akun berhasil, <a href="<?= base_url('auth/logout') ?>">keluar</a> untuk mencoba password baru.</p>
                </div>
            <?php
            }
            if (!empty(session()->getFlashdata('error'))) {
            ?>
                <div class="alert alert-danger">
                    <p><?= session()->getFlashdata('error') ?></p>
                </div>
            <?php
            }
            ?>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" action="<?= base_url('changepassword/proses') ?>" method="post">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" value="<?= $user['username'] ?>"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Password Lama</label>
                                    <input type="password" name="old_password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" name="new_password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password Baru</label>
                                    <input type="password" name="confirmation_password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-12" align="right">
                                    <a href="" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-floppy-remove"></i> Reset
                                    </a>
                                    <button class="btn btn-primary" name="btn" type="submit" value="Save">
                                        <i class="glyphicon glyphicon-floppy-saved"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>