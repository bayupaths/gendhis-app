<?= $this->extend('auth/auth_layout'); ?>

<?= $this->section('auth'); ?>
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(../admin/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="col-lg-4 bg-white">
        <div class="p-3">
            <h2 class="mt-3 text-center">Sign In</h2>
            <p class="text-center">Enter your email address and password to access Gendhis Panel</p>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-warning" role="alert">
                    <i class="dripicons-warning mr-2"></i>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php elseif (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <i class="dripicons-checkmark mr-2"></i>
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <form class="mt-4" action="/login/process" method="post">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" type="email" name="email" placeholder="email address" value="<?= old('email') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="password" value="<?= old('password') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        Don't have an account? <a href="/register" class="text-danger">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>