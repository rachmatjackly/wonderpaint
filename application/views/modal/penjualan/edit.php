<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Penjualan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="bodyPenjualanModal">
            <?php foreach($penjualan as $data): ?>
            <form action="<?= base_url()?>penjualan/edit_data/<?=$data->kd_barang?>" method="post" id="form_penjualan">
                <div class="form-group">
                    <label>Kode Pelanggan</label>
                    <input type="text" name="kd_pelanggan" value="<?=$data->kd_pelanggan?>"
                        placeholder="Masukan Kode Pelanggan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kd_barang" value="<?=$data->kd_barang?>" placeholder="Masukan Kode Barang"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama" value="<?=$data->nama?>" placeholder="Masukan Nama Barang"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" value="<?=$data->harga?>" placeholder="Masukan Harga Barang"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" value="<?=$data->jumlah?>" placeholder="Masukan Jumlah Barang"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select name="pembayaran" class="form-control">
                        <option value="<?=$data->pembayaran?>"><?=$data->pembayaran?></option>
                        <option value="debit">Debit</option>
                        <option value="kredit">Kredit</option>
                        <option value="dompet digital">Dompet Digital</option>
                        <option value="cash">Cash</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" placeholder="Masukan Keterangan" class="form-control"
                        cols="30"><?=$data->keterangan?></textarea>
                </div>
                <?php endforeach?>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="form_penjualan" name="update">Update</button>
        </div>
    </div>
</div>