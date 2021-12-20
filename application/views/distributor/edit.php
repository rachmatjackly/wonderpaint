<div class="section__content section__content--p30 hero">
    <div class="container-fluid">
        <div class="row m-b-40">
            <div class="col-lg-12 ">
                <div class="title text-center text-dark">
                    <h1 class="mb-2">WONDER PAINT</h1>
                    <h2>DISTRIBUTOR</h2>
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
                                <th>No</th>
                                <th>Nama</th>
                                <th>No. Telepon</th>
                                <th>Alamat</th>
                                <th>Kode Pelanggan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i= 1; 
                                if(empty($distributor)){?>
                            <tr>
                                <td colspan="9">Data Unavailable</td>
                            </tr>
                            <?php }
                                foreach($distributor as $data):
                                ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->no_tlp ?></td>
                                <td><?= $data->alamat ?></td>
                                <td><?= $data->kd_pelanggan ?></td>
                                <td>
                                    <a href="<?= base_url()?>distributor/delete/<?=$data->id?>" type="button"
                                        class="btn-sm btn-danger">Delete</a>
                                    <a href="#editDistributorModal" data-id=<?=$data->id?> data-toggle="modal"
                                        class="btn btn-sm btn-warning" title="Edit details">Edit</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
                <div class="buttons d-flex justify-content-between">
                    <a href="" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#aboutModal">About</a>
                    <div class="button d-flex justify-content-end">
                        <a type="button" href="<?=base_url()?>distributor" class="btn btn-primary text-white">
                            Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editDistributorModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#editDistributorModal').on('show.bs.modal', function(e) {
        var dataid = $(e.relatedTarget).data('id');
        console.log(dataid);
        //menggunakan fungsi ajax untuk pengambilan data
        $.ajax({
            type: 'post',
            url: '<?=base_url()?>modal/edit_distributor',
            data: 'dataid=' + dataid,
            success: function(data) {
                $('#editDistributorModal').html(data); //menampilkan data ke dalam modal
            }
        });
    });
});
</script>