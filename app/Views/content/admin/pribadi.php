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
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                            <span class="badge bg-warning font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">Aktif</span>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Author</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="icon-people"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                            <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">Published</span>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Tutorial</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="far fa-bookmark"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#draft" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Draft</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#publish" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Publish</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="draft">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Jenis Tutorial</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>Value</td>
                                                <td>Value</td>
                                                <td>Value</td>
                                                <td>Value</td>
                                            </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="publish">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Jenis Tutorial</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Publish</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>Value</td>
                                                <td>Value</td>
                                                <td>Value</td>
                                                <td>Value</td>
                                                <td>Value</td>
                                            </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->
</div>

<!-- Floating Action Button like Google Material -->
<a href="/admin/tutorials/create-post/personal" class="float">
    <i class="fa fa-plus my-float"></i>
</a>
<?= $this->endSection(); ?>