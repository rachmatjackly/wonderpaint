<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <?php if($this->session->flashdata('gagalLogin')) : ?>
            <div class="col-md-3 text-center alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Nama / Password Salah!! </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <h3 class="text-center mb-4">Verifikasi</h3>
                    <form action="" method="post" class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="nama" placeholder="Kode Akses"
                                required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3"
                                name="login">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>