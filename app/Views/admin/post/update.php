<?= $this->extend('admin/layout/main') ?>
<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css')?>">
<link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css')?>">
<?= $this->endSection() ?>
<?= $this->section('breadcrumb')?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Ubah Post</li>
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
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" action="<?= base_url('post/update/' . $post['post_id'])?>" method="post"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control select2" name="category_id" style="width: 100%;">
                                        <option value="" selected="selected">Pilih Kategori</option>
                                        <?php foreach ($category as $row) { ?>
                                        <option value="<?= $row['category_id'] ?>"
                                            <?= $row['category_id'] === $post['category_id'] ? 'selected' : '' ?>>
                                            <?= $row['category_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input required type="text" class="form-control" name="title"
                                        value="<?= $post['title']?>">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control-file" name="image">
                                    <input type="hidden" name="old_image" value="<?= $post['image'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea id="summernote" name="content">
                                        <?= $post['content']?>
                                        </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input required type="date" class="form-control" name="date"
                                        value="<?= $post['date']?>">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-danger pull-left">
                                        <i class="glyphicon glyphicon-floppy-remove"></i> Reset
                                    </a>
                                    <button class="btn btn-primary pull-right" name="btn" type="submit" value="Save">
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

<?= $this->section('js')?>
<script src="<?= base_url('plugins/select2/js/select2.full.min.js')?>"></script>
<script src="<?= base_url('plugins/summernote/summernote-bs4.min.js')?>"></script>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<?= $this->endSection() ?>