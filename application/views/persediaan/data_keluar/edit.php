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
                <div class="d-flex justify-content-between">
                    <div class="dropDownSelect2"></div>
                    <div class="">
                        <select class="form-control btn btn-primary mb-2 mt-5" name="type" id="export">
                            <option value="">Export</option>
                            <option value="img">Image</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive m-b-40" id="html-content-holder">
                    <table class="table table-bordered text-center" style="white-space:nowrap;">
                        <thead class="bg-success  text-white">
                            <tr>
                                <th style="vertical-align: middle" rowspan="2">No</th>
                                <th style="vertical-align: middle" rowspan="2">Nama Pelanggan</th>
                                <th style="vertical-align: middle" rowspan="2">Tanggal</th>
                                <th style="vertical-align: middle" rowspan="2">Kode Barang</th>
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
                if(empty($data_keluar)){?>
                            <tr>
                                <td colspan="9">Data Unavailable</td>
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
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger remove"
                                        data-id=<?=$data->id?>>Delete</button>
                                    <a href="" type="button" data-id=<?=$data->id?> class="btn btn-sm btn-warning"
                                        data-toggle="modal" data-target="#editDataKeluarModal">Edit</a>
                                </td>
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
                        <a type="button" href="<?= base_url()?>persediaan/datakeluar/<?= isset($data->id)?>"
                            class="btn btn-primary text-white">
                            Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editDataKeluarModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#editDataKeluarModal').on('show.bs.modal', function(e) {
        var dataid = $(e.relatedTarget).data('id');
        console.log(dataid);
        //menggunakan fungsi ajax untuk pengambilan data
        $.ajax({
            type: 'post',
            url: '<?=base_url()?>modal/edit_data_keluar',
            data: 'dataid=' + dataid,
            success: function(data) {
                $('#editDataKeluarModal').html(data); //menampilkan data ke dalam modal
            }
        });
    });

    $(".remove").click(function(e) {
        var id = $(this).data('id');
        console.log(id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?= base_url()?>persediaan/datakeluar/delete/' + id,
                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil di hapus !!',
                            showConfirmButton: false,
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1500);
                    }
                });

            }
        })
    });
});
</script>