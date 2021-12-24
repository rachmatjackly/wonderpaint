<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php foreach($data_masuk as $data): ?>
            <form action="<?= base_url()?>verification/data_masuk" method="post" id="form_penjualan">
                <div class="form-group">
                    <label>Nama Pemasok</label>
                    <input type="text" name="id" hidden value="<?=$data->id?>">
                    <input type="text" name="nama_pemasok" class="form-control" placeholder="Masukan Nama Pemasok" value="<?= $data->nama_pemasok?>">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $data->tanggal?>">
                </div>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kd_barang" placeholder="Masukan Kode Barang" class="form-control" value="<?= $data->kd_barang ?>">
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" placeholder="Masukan Nama Barang" class="form-control" value="<?= $data->nama_barang?>">
                </div>
                <div class="form-group">
                    <label>Stok Awal</label>
                    <input type="text" name="stok_awal" placeholder="Masukan Stok Awal" class="form-control" value="<?= $data->stok_awal?>">
                </div>
                <div class="form-group">
                    <label>Stok Masuk</label>
                    <input type="text" name="stok_masuk" placeholder="Masukan Stok Masuk" class="form-control" value="<?= $data->stok_masuk?>">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" placeholder="Masukan Keterangan" class="form-control"
                        cols="30"><?= $data->keterangan?></textarea>
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