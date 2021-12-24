<div class="section__content section__content--p30 hero">
    <div class="container-fluid">
        <div class="row m-b-40">
            <div class="col-lg-12 ">
                <div class="title text-center text-dark">
                    <h1 class="mb-2">WONDER PAINT</h1>
                    <h2>DATA KELUAR</h2>
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
                    <table class="table table-bordered text-center" style="white-space:nowrap;">
                        <thead class="bg-success  text-white">
                            <tr>
                                <th style="vertical-align: middle" rowspan="2">No</th>
                                <th style="vertical-align: middle" rowspan="2">Nama Pelanggan</th>
                                <th style="vertical-align: middle" rowspan="2">Tanggal</th>
                                <th style="vertical-align: middle" rowspan="2">Kode Barang</th>
                                <th colspan="3">Stok</th>
                                <th style="vertical-align: middle" rowspan="2">Keterangan</th>
                            </tr>
                            <tr>
                                <th>Awal</th>
                                <th>Masuk</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
            $i= 1; 
            if(empty($data_keluar)){?>
                            <tr>
                                <td colspan="8">Data Unavailable</td>
                            </tr>
                            <?php }
            foreach($data_keluar as $data):
            ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=$data->nama_pelanggan?></td>
                                <td><?=date('d-m-Y',strtotime($data->tanggal))?></td>
                                <td><?=$data->kd_barang?></td>
                                <td><?=$data->stok_awal?></td>
                                <td><?=$data->stok_keluar?></td>
                                <td><?=$data->jumlah?></td>
                                <td><?=$data->keterangan?></td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
                <div class="buttons d-flex justify-content-between">
                    <a href="" type="button" class="btn btn-secondary" data-toggle="modal"
                        data-target="#aboutModal">About</a>
                    <div class="button d-flex justify-content-end">
                        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#addDataKeluarModal"><i
                                class="fa fa-plus mr-1"></i>
                            Tambah
                        </button>
                        <a type="button" href="<?= base_url()?>persediaan/datakeluar/edit"
                            class="btn btn-warning text-white"><i class="fa fa-edit mr-1"></i>
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addDataKeluarModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>