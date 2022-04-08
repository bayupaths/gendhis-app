<?= $this->extend('auth/auth_layout'); ?>
<?= $this->section('auth'); ?>
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(../admin/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="col-lg-4 bg-white">
        <div class="p-3">
            <h2 class="mt-3 text-center">Sign Up for Free</h2>
            <form class="mt-4" action="/register/process" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="role" value="1">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="your name" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" type="text" name="email" placeholder="email address" value="<?= old('email'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="password" value="<?= old('password'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-block btn-dark">Sign Up</button>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        Already have an account? <a href="/login" class="text-danger">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>