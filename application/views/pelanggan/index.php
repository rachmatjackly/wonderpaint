<div class="section__content section__content--p30 hero">
    <div class="container-fluid">
        <div class="row m-b-40">
            <div class="col-lg-12 ">
                <div class="title text-center text-dark">
                    <h1 class="mb-2">WONDER PAINT</h1>
                    <h2>DATA PELANGGAN</h2>
                </div>
                <form class="form-header" action="" method="POST">
                    <div class="mx-auto col-lg-6 d-flex">
                        <input class="form-control" type="text" name="search" placeholder="Search..." />
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="dropDownSelect2"></div>
                    <div class="">
                        <select class="form-control btn btn-primary mb-2 mt-5" name="type" id="export">
                            <option value="">Export</option>
                            <option value="">PDF</option>
                            <option value="img">Image</option>
                            <option value="">Doc</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive m-b-40" id="html-content-holder">
                    <table class="table table-bordered text-center" style="white-space:nowrap;">
                        <thead class="bg-success  text-white">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No. Telepon</th>
                                <th>Alamat</th>
                                <th>Kode Pelanggan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i= 1; 
                                if(empty($pelanggan)){?>
                            <tr>
                                <td colspan="9">Data Unavailable</td>
                            </tr>
                            <?php }
                                foreach($pelanggan as $data):
                                ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->no_tlp ?></td>
                                <td><?= $data->alamat ?></td>
                                <td><?= $data->kd_pelanggan ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
                <div class="buttons d-flex justify-content-between">
                    <a href="" type="button" class="btn btn-secondary" data-toggle="modal"
                        data-target="#aboutModal">About</a>
                    <div class="button d-flex justify-content-end">
                        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#addPelangganModal"><i
                                class="fa fa-plus mr-1"></i>
                            Tambah
                        </button>
                        <a type="button" href="<?=base_url()?>pelanggan/edit" class="btn btn-warning text-white"><i
                                class="fa fa-edit mr-1"></i>
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addPelangganModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>