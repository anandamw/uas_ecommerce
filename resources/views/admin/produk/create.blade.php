<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="/kasir/store" method="POST" class="tablelist-form" enctype="multipart/form-data"
                autocomplete="off">
                @csrf
                <div class="modal-body">

                    <!-- Input Judul Buku -->
                    <div class="mb-3">
                        <label for="supliyers" class="form-label">Nama Supliyer</label>
                        <input type="text" id="supliyers" name="supliyers" class="form-control"
                            placeholder="Masukkan Nama Supliyers" required />
                        <div class="invalid-feedback">
                            Silakan masukkan nama supliyers
                        </div>
                    </div>

                    <!-- Input Judul Buku -->
                    <div class="mb-3">
                        <label for="judul_buku" class="form-label">Judul Buku</label>
                        <input type="text" id="judul_buku" name="judul_buku" class="form-control"
                            placeholder="Masukkan Judul Buku" required />
                        <div class="invalid-feedback">
                            Silakan masukkan judul buku.
                        </div>
                    </div>

                    <!-- Input Penerbit -->
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" class="form-control"
                            placeholder="Masukkan Nama Penerbit" required />
                        <div class="invalid-feedback">
                            Silakan masukkan nama penerbit.
                        </div>
                    </div>

                    <!-- Input Penulis -->
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" id="penulis" name="penulis" class="form-control"
                            placeholder="Masukkan Nama Penulis" required />
                        <div class="invalid-feedback">
                            Silakan masukkan nama penulis.
                        </div>
                    </div>

                    <!-- Input Halaman -->
                    <div class="mb-3">
                        <label for="halaman" class="form-label">Jumlah Halaman</label>
                        <input type="number" id="halaman" name="halaman" class="form-control"
                            placeholder="Masukkan Jumlah Halaman" required />
                        <div class="invalid-feedback">
                            Silakan masukkan jumlah halaman.
                        </div>
                    </div>

                    <!-- Input Bahasa -->
                    <div class="mb-3">
                        <label for="bahasa" class="form-label">Bahasa</label>
                        <input type="text" id="bahasa" name="bahasa" class="form-control"
                            placeholder="Masukkan Bahasa Buku" required />
                        <div class="invalid-feedback">
                            Silakan masukkan bahasa buku.
                        </div>
                    </div>

                    <!-- Input stok -->
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" id="stok" name="stok" class="form-control"
                            placeholder="Masukkan stok Buku" required />
                        <div class="invalid-feedback">
                            Silakan masukkan stok buku.
                        </div>
                    </div>

                    <!-- Input Harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control"
                            placeholder="Masukkan Harga Buku" required />
                        <div class="invalid-feedback">
                            Silakan masukkan harga buku.
                        </div>
                    </div>

                    <!-- Input Harga -->
                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" id="harga_beli" name="harga_beli" class="form-control"
                            placeholder="Masukkan Harga Beli Buku" required />
                        <div class="invalid-feedback">
                            Silakan masukkan Harga Beli buku.
                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <!-- Tombol Tutup -->
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-success" id="add-btn">Tambah Buku</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
