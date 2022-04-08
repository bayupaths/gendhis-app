<?= $this->extend('layouts/admin/admin_layout'); ?>
<?= $this->section('content'); ?>


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item text-muted active" aria-current="page">Dashboard</li>
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
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ajuan Author</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="icon-user-follow"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ajuan Tutorial</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="fas fa-newspaper"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6">
            <div class="card-header">
                <h4 class="card-title">Data Pengajuan Tutorial</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Data 1</th>
                                    <th>Data 2</th>
                                    <th>Data 3</th>
                                    <th>Data 4</th>
                                    <th>Data 5</th>
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
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="card-header">
                <h4 class="card-title">Data Pengajuan Author</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Data 1</th>
                                    <th>Data 2</th>
                                    <th>Data 3</th>
                                    <th>Data 4</th>
                                    <th>Data 5</th>
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
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="card-header">
                <h4 class="card-title">Data PerKategori</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table_category" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Tutorial</th>
                                    <th>Kategori</th>
                                    <th>D</th>
                                    <th>P</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 12; $i++) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td>Microsoft Office Word</td>
                                        <td>Microsoft Office</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="card-header">
                <h4 class="card-title">Data Cek Status Tutorial</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table_status_tutorial" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tutorial</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td>#1.Pengenalan Microsoft Word 2017</td>
                                        <td><button disabled="disabled" class="btn btn-sm btn-rounded btn-outline-info">Publish</button></td>
                                        <td><a href=""><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>

<?= $this->endSection(); ?>