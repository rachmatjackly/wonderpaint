<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Persediaan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="post" id="form_penjualan">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kd_barang" placeholder="Masukan Kode Barang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Barang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stok Awal</label>
                    <input type="text" name="stok_awal" placeholder="Masukan Stok Awal" class="form-control">
                </div>
                <div class="form-group">
                    <label>Barang Masuk</label>
                    <input type="text" name="barang_masuk" placeholder="Masukan Barang Masuk" class="form-control">
                </div>
                <div class="form-group">
                    <label>Barang Keluar</label>
                    <input type="text" name="barang_keluar" placeholder="Masukan Barang Keluar" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stok Akhir</label>
                    <input type="text" name="stok_akhir" placeholder="Masukan Stok Akhir" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" placeholder="Masukan Keterangan" class="form-control"
                        cols="30"></textarea>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" form="form_penjualan" class="btn btn-primary" name="simpan">Simpan</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>