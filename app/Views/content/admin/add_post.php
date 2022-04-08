<?= $this->extend('layouts/admin/admin_layout'); ?>

<?= $this->section('content'); ?>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Tutorial</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Tutorial</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Pribadi</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Tambah Tutorial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form action="/admin/tutorials/publish" method="post">
        <div class="form-body">
            <div class="form-group row">
                <label for="no" class="col-sm-1 col-form-label">No</label>
                <div class="col-sm-1 col-md-1">
                    <input id="no" name="nomor" class="form-control" type="text" value="">
                </div>
                <label for="judul" class="col-sm-1 col-form-label">Judul</label>
                <div class="col-sm-3 col-md-3">
                    <input id="judul" name="judul" class="form-control" type="text" value="">
                    <div id="proces"></div>
                    <div class="valid-feedback" id="feedback"></div>
                </div>
                <label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
                <div class="form-group col-md-2">
                    <div class="input-group mb-2">
                        <select id="kategori" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-filter"></i></div>
                        </div>
                    </div>
                </div>
                <label for="jenis" class="col-sm-1 col-form-label">Jenis</label>
                <div class="form-group col-md-2">
                    <div class="input-group mb-2">
                        <select id="jenis" class="form-control">
                            <option value="">Pilih Jenis</option>
                        </select>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-filter"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="btn-list">
                    <button type="submit" name="pratinjau" value="pratinjau" class="btn btn-outline-primary waves-effect waves-light" type="button">
                        <span class="btn-label"><i class="fas fa-eye"></i></span>
                        Pratinjau
                    </button>
                    <button type="submit" name="draft" name="draft" class="btn btn-outline-secondary waves-effect waves-light" type="button">
                        <span class="btn-label"><i class="icon-arrow-down-circle"></i></span>
                        Draft
                    </button>
                    <button type="submit" name="publish" value="publish" class="btn btn-outline-info waves-effect waves-light" type="button">
                        <span class="btn-label"><i class="icon-arrow-up-circle"></i></span>
                        Publish
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="content" id="content"></textarea>
                </div>
                <script>
                    CKEDITOR.replace('content', {
                        toolbar: [{
                                name: 'clipboard',
                                items: ['Undo', 'Redo']
                            },
                            {
                                name: 'styles',
                                items: ['Styles', 'Format']
                            },
                            {
                                name: 'basicstyles',
                                items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
                            },
                            {
                                name: 'paragraph',
                                items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
                            },
                            {
                                name: 'links',
                                items: ['Link', 'Unlink']
                            },
                            {
                                name: 'insert',
                                items: ['Image', 'EmbedSemantic', 'Table']
                            },
                            {
                                name: 'tools',
                                items: ['Maximize']
                            },
                            {
                                name: 'editing',
                                items: ['Scayt']
                            }
                        ],
                    });
                </script>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>