<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Keluar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php foreach($data_keluar as $data): ?>
            <form action="<?=base_url()?>verification/data_keluar" method="post" id="form_penjualan">
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input hidden type="text" value="<?=$data->id?>" name="id_data">
                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukan Nama Pemasok" value="<?=$data->nama_pelanggan?>">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?=$data->tanggal?>">
                </div>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kd_barang" placeholder="Masukan Kode Barang" class="form-control" value="<?=$data->kd_barang?>">
                </div>
                <div class="form-group">
                    <label>Stok Awal</label>
                    <input type="text" name="stok_awal" placeholder="Masukan Stok Awal" class="form-control" value="<?=$data->stok_awal?>">
                </div>
                <div class="form-group">
                    <label>Stok Keluar</label>
                    <input type="text" name="stok_masuk" placeholder="Masukan Stok Masuk" class="form-control" value="<?=$data->stok_keluar?>">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" placeholder="Masukan Keterangan" class="form-control"
                        cols="30"><?= $data->keterangan?></textarea>
                </div>
            <?php endforeach ?>
        </div>
        <div class="modal-footer">
            <button type="submit"  form="form_penjualan" class="btn btn-primary" name="simpan">Simpan</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

