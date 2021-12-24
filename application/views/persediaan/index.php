<div class="section__content section__content--p30 hero">
    <div class="container-fluid">
        <div class="row m-b-40">
            <div class="col-lg-12 ">
                <div class="title text-center text-dark">
                    <h1 class="mb-2">WONDER PAINT</h1>
                    <h2>PERSEDIAAN</h2>
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
                                <th style="vertical-align: middle" rowspan="2">No</th>
                                <th style="vertical-align: middle" rowspan="2">Tanggal</th>
                                <th style="vertical-align: middle" rowspan="2">Kode Barang</th>
                                <th style="vertical-align: middle" rowspan="2">Nama Barang</th>
                                <th colspan="4">Stok</th>
                                <th style="vertical-align: middle" rowspan="2">Keterangan</th>
                            </tr>
                            <tr>
                                <th>Awal</th>
                                <th>Barang Masuk</th>
                                <th>Barang Keluar</th>
                                <th>Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i= 1; 
                                if(empty($persediaan)){?>
                            <tr>
                                <td colspan="9">Data Unavailable</td>
                            </tr>
                            <?php }
                                foreach($persediaan as $data):
                                ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=date('d-m-Y',strtotime($data->tanggal))?></td>
                                <td><?=$data->kd_barang?></td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->stok_awal?></td>
                                <td><?=$data->barang_masuk?></td>
                                <td><?=$data->barang_keluar?></td>
                                <td><?=$data->stok_akhir?></td>
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
                        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#addPersediaanModal"><i
                                class="fa fa-plus mr-1"></i>
                            Tambah
                        </button>
                        <a type="button" href="<?= base_url()?>persediaan/edit" class="btn btn-warning text-white"><i
                                class="fa fa-edit mr-1"></i>
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addPersediaanModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>