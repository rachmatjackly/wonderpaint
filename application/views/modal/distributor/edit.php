<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Distributor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php foreach($distributor as $data): ?>
            <form action="<?= base_url()?>distributor/edit_data/<?= $data->id?>" method="post" id="form_penjualan">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Masukan Nama" class="form-control" value="<?= $data->nama ?>">
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Masukan No. Telepon" class="form-control" value="<?= $data->no_tlp ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" placeholder="Masukan Alamat" class="form-control"
                        cols="30"><?= $data->alamat ?></textarea>
                </div>
                <div class="form-group">
                    <label>Kode Pelanggan</label>
                    <input type="text" name="kd_pelanggan" placeholder="Masukan Kode Pelanggan" class="form-control" value="<?= $data->kd_pelanggan ?>">
                </div>
             <?php endforeach ?>
        </div>
        <div class="modal-footer">
            <button type="submit" form="form_penjualan" class="btn btn-primary" name="update">Update</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>