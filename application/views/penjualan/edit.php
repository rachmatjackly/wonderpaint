<div class="section__content section__content--p30 hero">
    <div class="container-fluid">
        <div class="row m-b-40">
            <div class="col-lg-12 ">
                <div class="title text-center text-dark">
                    <h1 class="mb-2">WONDER PAINT</h1>
                    <h2>PENJUALAN</h2>
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
                <div class="table-responsive m-b-40 " id="html-content-holder">
                    <table class="table table-bordered text-center" style="white-space:nowrap">
                        <thead class="bg-success text-white">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Kode Pelanggan</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Metode Pembayaran</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i= 1; 
                                if(empty($penjualan)){?>
                            <tr>
                                <td colspan="11">Data Unavailable</td>
                            </tr>
                            <?php }
                                foreach($penjualan as $data):
                            ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=date('d-m-Y',strtotime($data->tanggal))?></td>
                                <td><?=$data->kd_pelanggan?></td>
                                <td><?=$data->kd_barang?></td>
                                <td><?=$data->nama?></td>
                                <td>Rp <?=number_format($data->harga,0,',','.');?></td>
                                <td><?=number_format($data->jumlah,0,',','.');?></td>
                                <td>Rp <?=number_format($data->total_harga,0,',','.');?></td>
                                <td class="text-capitalize"><?=$data->pembayaran?></td>
                                <td><?=$data->keterangan?></td>
                                <td>
                                    <button type="button" data-id="<?=$data->kd_barang?>" type="button"
                                        class="btn btn-sm btn-danger remove">Delete</button>
                                    <a href="#editPenjualanModal" data-id=<?=$data->kd_barang?> data-toggle="modal"
                                        class="btn btn-sm btn-warning" title="Edit details">Edit</a>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
                <div class="button d-flex justify-content-between">
                    <a href="" type="button" class="btn btn-secondary" data-toggle="modal"
                        data-target="#aboutModal">About</a>
                    <button class="btn btn-primary mr-2" onclick="window.location='<?=base_url()?>penjualan';">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editPenjualanModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#editPenjualanModal').on('show.bs.modal', function(e) {
        var dataid = $(e.relatedTarget).data('id');
        console.log(dataid);
        //menggunakan fungsi ajax untuk pengambilan data
        $.ajax({
            type: 'post',
            url: '<?=base_url()?>modal/edit_penjualan',
            data: 'dataid=' + dataid,
            success: function(data) {
                $('#editPenjualanModal').html(data); //menampilkan data ke dalam modal
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
                    url: '<?= base_url()?>penjualan/delete/' + id,
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