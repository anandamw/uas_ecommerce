<div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>

            <form action="/produk/{{ $item->id }}/update" method="POST" class="tablelist-form"
                enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="modal-body">

                    <!-- Input Nama Supliyer -->
                    <div class="mb-3">
                        <label for="supliyers" class="form-label">Nama Supliyer</label>
                        <input type="text" id="supliyers" name="supliyers" class="form-control"
                            placeholder="Masukkan Nama Supliyer" value="{{ $item->supliyers }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan nama supliyer.
                        </div>
                    </div>

                    <!-- Input Judul Buku -->
                    <div class="mb-3">
                        <label for="judul_buku" class="form-label">Judul Buku</label>
                        <input type="text" id="judul_buku" name="judul_buku" class="form-control"
                            placeholder="Masukkan Judul Buku" value="{{ $item->judul_buku }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan judul buku.
                        </div>
                    </div>

                    <!-- Input Penerbit -->
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" class="form-control"
                            placeholder="Masukkan Nama Penerbit" value="{{ $item->penerbit }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan nama penerbit.
                        </div>
                    </div>

                    <!-- Input Penulis -->
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" id="penulis" name="penulis" class="form-control"
                            placeholder="Masukkan Nama Penulis" value="{{ $item->penulis }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan nama penulis.
                        </div>
                    </div>

                    <!-- Input Halaman -->
                    <div class="mb-3">
                        <label for="halaman" class="form-label">Jumlah Halaman</label>
                        <input type="number" id="halaman" name="halaman" class="form-control"
                            placeholder="Masukkan Jumlah Halaman" value="{{ $item->halaman }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan jumlah halaman.
                        </div>
                    </div>

                    <!-- Input Bahasa -->
                    <div class="mb-3">
                        <label for="bahasa" class="form-label">Bahasa</label>
                        <input type="text" id="bahasa" name="bahasa" class="form-control"
                            placeholder="Masukkan Bahasa Buku" value="{{ $item->bahasa }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan bahasa buku.
                        </div>
                    </div>

                    <!-- Input Stok -->
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" id="stok" name="stok" class="form-control"
                            placeholder="Masukkan Stok Buku" value="{{ $item->stok }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan stok buku.
                        </div>
                    </div>

                    <!-- Input Harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control"
                            placeholder="Masukkan Harga Buku" value="{{ $item->harga }}" required />
                        <div class="invalid-feedback">
                            Silakan masukkan harga buku.
                        </div>
                    </div>

                    <!-- Input Foto Buku -->
                    <div class="mb-3">
                        <label for="foto_buku" class="form-label">Foto Buku</label>
                        <input type="file" id="foto_buku" name="foto_buku" class="form-control"
                            accept="image/*" />
                        <small class="text-muted">Kosongkan jika tidak ingin mengubah foto buku.</small>
                        <div class="mt-3">
                            <img src="{{ asset('foto_buku/' . $item->foto_buku) }}" alt="Foto Buku"
                                class="img-fluid" style="max-width: 150px;">
                        </div>
                        <div class="invalid-feedback">
                            Silakan unggah foto buku.
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <!-- Tombol Tutup -->
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-success" id="add-btn">Update Buku</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
