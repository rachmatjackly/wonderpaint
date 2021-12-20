<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <?php if($this->session->flashdata('password') == 'gagal') : ?>
            <div class="col-md-3 text-center alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Password Tidak Sesuai !! </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif ?>
            <?php if($this->session->flashdata('username') == 'gagal') : ?> 
            <div class="col-md-3 text-center alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Username Sudah Ada !! </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                <div class="d-flex align-items-center justify-content-center">
	                        <img src="<?= base_url()?>assets/img/logo.png" alt="" width=100>
	                    </div>
                    <h3 class="text-center mb-4">Registrasi</h3>
                    <form action="" method="post" class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="nama" placeholder="Nama"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="username" placeholder="Username"
                                required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" name="password2"
                                placeholder="Re-Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3 mb-2"
                                name="register">Register</button>
                            <button onclick="window.location='<?=base_url()?>'" type="button" class="form-control btn btn-secondary rounded submit px-3"
                               >Back To Home</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if($this->session->flashdata('registrasi') == 'berhasil'): ?>
<script>
Swal.fire(
    'Success !!',
    'Registrasi Berhasil',
    'success'
)
</script>
<?php endif ?>