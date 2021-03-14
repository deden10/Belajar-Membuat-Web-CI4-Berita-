<?= $this->extend('admin/layout/main') ?>
<?= $this->section('css')?>
<link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css')?>">
<?= $this->endSection() ?>
<?= $this->section('breadcrumb')?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Detail Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Detail Post</li>
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
        <div class="col-md-4 col-xs-12">
            <div class="img">
                <img width="100%" src="<?= base_url('uploads/' . $post['image'])?>" alt="user">
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <!-- general form elements disabled -->
            <div class="card card-success">
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input disabled value="<?= $post['category_name']?>" type="text"
                                        class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input disabled value="<?= $post['title']?>" type="text" class="form-control"
                                        name="title">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea id="summernote" name="content" disabled>
                                    <?= $post['content']?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input disabled type="text" class="form-control" name="date"
                                        value="<?= $post['date']?>">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?= base_url('post')?>" class="btn btn-danger pull-right">
                                        <i class="glyphicon glyphicon-floppy-remove"></i> Kembali
                                    </a>
                                    <a href="<?= base_url('post/edit/' . $post['post_id'])?> "
                                        class="btn btn-primary pull-right" name="btn" type="submit" value="Save">
                                        <i class="glyphicon glyphicon-floppy-saved"></i> Edit
                                    </a>
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