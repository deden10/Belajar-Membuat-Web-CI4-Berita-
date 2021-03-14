<?= $this->extend('admin/layout/main') ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.css')?>">
<?= $this->endSection() ?>
<?= $this->section('breadcrumb')?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <?php
        if(!empty(session()->getFlashdata('success'))){ ?>

        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success');?>
        </div>

        <?php } ?>
        <?php if(!empty(session()->getFlashdata('info'))){ ?>

        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info');?>
        </div>

        <?php } ?>

        <?php if(!empty(session()->getFlashdata('warning'))){ ?>

        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning');?>
        </div>

        <?php } ?>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <!-- /.card -->
        <div class="card">
            <div class="card-header">
                <a data-toggle="modal" data-target="#modal" class="btn btn-primary" title="Tambah Data">Tambah</a>
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="modal-header">
                                <h4 class="modal-title" id="modal-title">Form</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body" id="modal-body">

                                <form action="<?php echo base_url('user/store'); ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" name="name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">No Telp</label>
                                                <input type="text" name="no_telp" class="form-control" id="no_telp">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control" id="email">
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Username</label>
                                                <input type="text" name="username" class="form-control" id="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Alamat</label>
                                                <textarea name="address" rows="4" class="form-control"
                                                    id="no_telp"></textarea>
                                            </div>
                                            <div class="modal-footer" id="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    id="modal-btn-save">Save</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=0; 
                    foreach($user as $u){
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no?></td>
                        <td><?= $u['name'];?></td>
                        <td><?= $u['no_telp']?></td>
                        <td><?= $u['address']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" data-target="#modal2-<?= $u['user_id']?>"
                                data-toggle="modal"><i class="fas fa-edit"></i></a>
                            <div class="modal fade" id="modal2-<?= $u['user_id']?>" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" id="modal-header">
                                            <h4 class="modal-title" id="modal-title">Form Edit</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body" id="modal-body">
                                            <form action="<?php echo base_url('user/update/'.$u['user_id']); ?>"
                                                method="post">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Nama</label>
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        value="<?= $u['name']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label">No Telp</label>
                                                    <input type="text" name="no_telp" class="form-control" id="no_telp"
                                                        value="<?= $u['no_telp']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label">Email</label>
                                                    <input type="text" name="email" class="form-control" id="email"
                                                        value="<?= $u['email']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label">Alamat</label>
                                                    <textarea name="address" rows="4" class="form-control"
                                                        id="address"><?= $u['address']?></textarea>
                                                </div>
                                                <div class="modal-footer" id="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        id="modal-btn-save">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a onclick="return confirm('Data akan diubah ?')"
                                href="<?= base_url('user/delete/'.$u['user_id'])?>" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url('plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<?= $this->endSection() ?>