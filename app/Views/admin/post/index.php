<?= $this->extend('admin/layout/main') ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.css')?>">
<?= $this->endSection() ?>
<?= $this->section('breadcrumb')?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Posting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Posting</li>
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
                <a href="<?= base_url('post/create')?>" class="btn btn-primary" title="Tambah Data">Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                    $no=0; 
                    foreach($post as $p){
                        $no++;
                    ?>
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $p['category_name'];?></td>
                            <td><?= $p['title'];?></td>
                            <td><?= $p['content']; ?></td>
                            <td>
                                <a href="<?= base_url('post/detail/' . $p['post_id']) ?>"
                                    class="btn btn-primary btn-xs">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="<?= base_url('post/edit/' . $p['post_id']) ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a data-toggle="modal" data-target="#delete-<?= $p['post_id'] ?>"
                                    class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <div class="modal fade" id="delete-<?= $p['post_id'] ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Post</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin akan menghapus post
                                                    <b><?= $p['title'] ?></b> ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batal</button>
                                                <a href="<?= base_url('post/delete/' . $p['post_id']) ?>"
                                                    class="btn btn-primary">Ya, Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Konten</th>
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