<?= $this->extend('Layout/layout') ?>

<?= $this->section('pagetitle') ?>
signup
<?= $this->endSection() ?>

<?= $this->section('mainbody') ?>


<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <h2 class="text-center">Sign Up</h2>
        <form action="/action_page.php">
            <div class="form-group mb-3">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-3">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Last Name">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="form-group mb-3">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Confirm password">
            </div>

            <div class="text-end mb-3">
                <a href="<?= base_url('signup') ?>">Sign Up</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>



<?= $this->endSection() ?>