<?= $this->extend('Layout/layout') ?>

<?= $this->section('pagetitle') ?>
login
<?= $this->endSection() ?>

<?= $this->section('mainbody') ?>

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <h2 class="text-center">Login</h2>
        <form>
            <div class="form-group mb-3">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>

            <div class="text-end mb-3">
                <a href="<?= base_url('signup') ?>">Sign Up</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>





<?= $this->endSection() ?>