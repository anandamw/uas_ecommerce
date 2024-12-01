<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="/kategori/store" method="POST" class="tablelist-form" enctype="multipart/form-data"
                autocomplete="off">
                @csrf
                <div class="modal-body">

                    <!-- Input Nama Kategori -->
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" id="nama_kategori" name="nama_kategori" class="form-control"
                            placeholder="Masukkan Nama Kategori" required />
                        <div class="invalid-feedback">
                            Silakan masukkan nama kategori.
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Pilih Format Buku</label>

                        <!-- Custom Checkboxes -->
                        @foreach ($formats as $get)
                            <div class="form-check">
                                <input class="form-check-input" value="{{ $get->id }}" name="format_buku[]"
                                    type="checkbox" id="{{ $get->nama_format }}">
                                <label class="form-check-label" for="{{ $get->nama_format }}"
                                    for="{{ $get->nama_format }}">
                                    {{ $get->nama_format }}
                                </label>
                            </div>
                        @endforeach

                    </div>

                    <!-- Input File Buku -->
                    <div class="mb-3" id="fileInputDiv">
                        <label for="file_buku" class="form-label">File Buku</label>
                        <input type="text" id="file_buku" name="file_buku" class="form-control"
                            accept=".pdf,.epub" />
                        <div class="invalid-feedback">
                            Silakan unggah file buku.
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <!-- Tombol Tutup -->
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-success" id="add-btn">Tambah Kategori</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
