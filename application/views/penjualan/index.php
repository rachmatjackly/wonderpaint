<div class="section__content section__content--p30 hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="title text-center text-dark">
                    <h1 class="mb-2">WONDER PAINT</h1>
                    <h2>PENJUALAN</h2>
                </div>
                <form class="form-header" action="" method="POST">
                    <div class="mx-auto col-lg-6 d-flex">
                        <input class="form-control" type="text" name="search"
                            placeholder="Search..." />
                        <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-data__tool">
                    <div class="table-data__tool-left">

                    </div>
                    <div class="table-data__tool-right">
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option value="">Export</option>
                                <option value="">PDF</option>
                                <option value="">Image</option>
                                <option value="">Doc</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive m-b-40">
                    <table class="table table-bordered text-center" style="white-space:nowrap">
                        <thead class="bg-success text-white">
                            <tr>
                                <th>No</th>
                                <th>Kode Pelanggan</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Metode Pembayaran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i= 1; 
                                if(empty($penjualan)){?>
                                    <tr>
                                        <td colspan="9">Data Unavailable</td>
                                    </tr>
                                <?php }
                                foreach($penjualan as $data):
                                ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=$data->kd_pelanggan?></td>
                                <td><?=$data->kd_barang?></td>
                                <td ><?=$data->nama?></td>
                                <td>Rp <?=number_format($data->harga,0,',','.');?></td>
                                <td><?=number_format($data->jumlah,0,',','.');?></td>
                                <td>Rp <?=number_format($data->total_harga,0,',','.');?></td>
                                <td class="text-capitalize"><?=$data->pembayaran?></td>
                                <td><?=$data->keterangan?></td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
                <div class="buttons d-flex justify-content-between">
                    <button class="btn btn-secondary" data-toggle="modal"
                        data-target="#aboutModal">About</button>
                    <div class="button d-flex justify-content-end">
                        <button class="btn btn-primary mr-2" data-toggle="modal"
                            data-target="#addPenjualanModal"><i class="fa fa-plus mr-1"></i>
                            Tambah
                        </button>
                        <a type="button" href="<?= base_url()?>penjualan/edit" class="btn btn-warning text-white"><i
                                class="fa fa-edit mr-1"></i>
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addPenjualanModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>