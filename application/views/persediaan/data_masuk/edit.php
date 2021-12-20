
<div class="section__content section__content--p30 hero">
    <div class="container-fluid">
        <div class="row m-b-40">
            <div class="col-lg-12 ">
                <div class="title text-center text-dark">
                    <h1 class="mb-2">WONDER PAINT</h1>
                    <h2>DATA MASUK</h2>
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
                    <table class="table table-bordered text-center" style="white-space:nowrap;">
                        <thead class="bg-success  text-white">
                            <tr>
                                <th style="vertical-align: middle" rowspan="2">No</th>
                                <th style="vertical-align: middle" rowspan="2">Nama Pemasok</th>
                                <th style="vertical-align: middle" rowspan="2">Tanggal</th>
                                <th style="vertical-align: middle" rowspan="2">Kode Barang</th>
                                <th style="vertical-align: middle" rowspan="2">Nama Barang</th>
                                <th colspan="3">Stok</th>
                                <th style="vertical-align: middle" rowspan="2">Keterangan</th>
                                <th style="vertical-align: middle" rowspan="2">Aksi</th>
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
                                if(empty($data_masuk)){?>
                                    <tr>
                                        <td colspan="10">Data Unavailable</td>
                                    </tr>
                                <?php }
                                foreach($data_masuk as $data):
                                ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td ><?=$data->nama_pemasok?></td>
                                <td><?=date('d-m-Y',strtotime($data->tanggal))?></td>
                                <td><?=$data->kd_barang?></td>
                                <td ><?=$data->nama_barang?></td>
                                <td><?=$data->stok_awal?></td>
                                <td><?=$data->stok_masuk?></td>
                                <td ><?=$data->jumlah?></td>
                                <td><?=$data->keterangan?></td>
                                <td>
                                    <a href="<?= base_url()?>persediaan/datamasuk/delete/<?= $data->id?>" type="button" class="btn-sm btn-danger">Delete</a>
                                    <a href="" type="button" data-id=<?=$data->id?> class="btn-sm btn-warning" data-toggle="modal"
                                        data-target="#editDataMasukModal">Edit</a>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
                <div class="button d-flex justify-content-end">
                    <a type="button" href="<?= base_url()?>persediaan/datamasuk"
                        class="btn btn-primary text-white">
                        Save
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editDataMasukModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#editDataMasukModal').on('show.bs.modal', function(e) {
        var dataid = $(e.relatedTarget).data('id');
        console.log(dataid);
        //menggunakan fungsi ajax untuk pengambilan data
        $.ajax({
            type: 'post',
            url: '<?=base_url()?>modal/edit_data_masuk',
            data: 'dataid=' + dataid,
            success: function(data) {
                $('#editDataMasukModal').html(data); //menampilkan data ke dalam modal
            }
        });
    });
});
</script>