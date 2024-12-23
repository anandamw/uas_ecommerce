@extends('admin.layouts.template')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- Start Page Title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Listjs</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Listjs</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <div class="row">
                    <!-- Start Search Card -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Tambah
                                    Produk</button>

                                @include('admin.produk.create')

                            </div><!-- End Card Header -->
                            <div class="card-body">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="card-title mb-0">Cari Produk</h4>
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" id="searchInput"
                                                    placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card Body -->
                        </div><!-- End Card -->
                    </div><!-- End Col -->
                    <!-- End Search Card -->

                    <!-- Start Table Card -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Table -->
                                <table class="table caption-top table-nowrap" id="dataTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Kode Barang</th>
                                            <th scope="col">Nama Buku</th>
                                            <th scope="col">Jumlah Buku</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produks as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->token_produks }}</td>
                                                <td>{{ $item->judul_buku }}</td>
                                                <td>{{ $item->stok }}</td>
                                                <td>Rp, {{ $item->harga }}</td>
                                                <td>
                                                    <a href="/keranjang/{{ $item->token_produks }}" class="btn btn-primary">
                                                        <i class="ri-shopping-cart-fill"></i>
                                                        Keranjang</a>
                                                    {{-- href="/produk/{{ $item->token_produks }}/update" --}}
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#showModal{{ $item->id }}">
                                                        <i class="ri-shopping-cart-fill"></i>
                                                        Edit</button>
                                                    {{-- href="/produk/{{ $item->token_produks }}/delete" --}}
                                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#modalHapus{{ $item->id }}">
                                                        <i class="ri-shopping-cart-fill"></i>
                                                        Hapus</button>

                                                    <!-- Modal Hapus -->
                                                    <div class="modal fade" id="modalHapus{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalHapusLabel">Konfirmasi
                                                                        Hapus</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-justify w-5">
                                                                    Apakah Anda yakin ingin menghapus produk
                                                                    <strong>{{ $item->judul_buku }}</strong> dari supliyer
                                                                    <strong>{{ $item->supliyers }}</strong>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>

                                                                    <a href="/produk/{{ $item->id }}/delete"
                                                                        type="submit" class="btn btn-danger">Hapus</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>

                                            @include('admin.produk.edit')
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- No Results Found -->
                                <div class="noresult" style="display: none;">
                                    <div class="text-center">
                                        <lord-icon src="../../../../cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#121331,secondary:#08a88a"
                                            style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We did not find any matches for your search.</p>
                                    </div>
                                </div>
                            </div><!-- End Card Body -->
                        </div><!-- End Card -->
                    </div><!-- End Col -->
                    <!-- End Table Card -->

                </div><!-- End Row -->

                <div class="row">
                    <!-- Start Table Card -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Table -->
                                <table class="table caption-top table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Kode Barang</th>
                                            <th scope="col">Nama Buku</th>
                                            <th scope="col">Penerbit</th>
                                            <th scope="col">Penulis</th>
                                            <th scope="col">Jumlah Buku</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($carts as $index => $item)
                                            <form method="post" action="/update/{{ $item->token_keranjang }}/keranjang">
                                                @csrf
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $item->token_produks }}</td>
                                                    <td>{{ $item->judul_buku }}</td>
                                                    <td>{{ $item->penerbit }}</td>
                                                    <td>{{ $item->penulis }}</td>
                                                    <td>
                                                        <div class="input-step step-primary">
                                                            <button type="button" class="minus"
                                                                data-index="{{ $index }}">–</button>
                                                            <input type="number" name="quantity"
                                                                class="product-quantity"
                                                                value="{{ $item->quantity ?? '1' }}" min="0"
                                                                max="100" data-index="{{ $index }}"
                                                                data-price="{{ $item->harga }}">
                                                            <button type="button" class="plus"
                                                                data-index="{{ $index }}">+</button>
                                                        </div>
                                                    </td>
                                                    <td>Rp, {{ number_format($item->harga) }}</td>
                                                    <td id="total-{{ $index }}">
                                                        {{ $item->total_harga ?? 'Rp, 0' }}</td>
                                                    <td>

                                                        <button type="submit" class="btn btn-warning text-white">
                                                            <i class="ri-edit-line"></i>
                                                            Update
                                                        </button>
                                                        <div type="button" class="text-white btn btn-danger"
                                                            data-bs-toggle="modal" data-bs-target=".modal-delete">
                                                            <i class="ri-delete-bin-line"></i>
                                                            Hapus
                                                        </div>
                                                    </td>


                                                </tr>
                                            </form>
                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center p-5">
                                                            <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json"
                                                                trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                                                style="width:120px;height:120px"></lord-icon>
                                                            <div class="mt-4">
                                                                <h4 class="mb-3">Oops something went wrong!</h4>
                                                                <p class="text-muted mb-4"> The transfer was not
                                                                    successfully received by us. the email of the
                                                                    recipient
                                                                    wasn't correct.</p>
                                                                <div class="hstack gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a href="/keranjang/hapus/{{ $item->token_keranjang }}"
                                                                        class="btn btn-danger">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        @endforeach


                                    </tbody>
                                </table>

                                <!-- No Results Found -->
                                <div class="noresult" style="display: none;">
                                    <div class="text-center">
                                        <lord-icon src="../../../../cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#121331,secondary:#08a88a"
                                            style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We did not find any matches for your search.</p>
                                    </div>
                                </div>

                            </div><!-- End Card Body -->
                        </div><!-- End Card -->

                    </div><!-- End Col -->
                    <!-- End Table Card -->

                </div><!-- End Row -->
                <form method="post" action="/checkout">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Nama Pembeli</label>
                                                    <input type="text" name="nama_pembeli" class="form-control"
                                                        id="basiInput" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <label for="basiInput" class="form-label">Pilih Jenis Kelamin:</label>

                                                <select class="form-select mb-3" name="jenis_kelamin"
                                                    aria-label="Default select example">
                                                    <option selected disabled>Open this select menu</option>
                                                    <option value="1">Laki-Laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        id="basiInput" />
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">No Telepon</label>
                                                    <input type="text" class="form-control" name="no_telepon"
                                                        id="basiInput" />
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <h6 id="total-harga">Total Harga: 0</h6>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                        </div>
                        <!--end col-->
                    </div>
                </form>


            </div><!-- End Container Fluid -->
        </div><!-- End Page Content -->
    </div><!-- End Main Content -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll(".product-quantity");
            const totalHargaElement = document.getElementById("total-harga");

            // Fungsi untuk menghitung total harga
            function calculateTotal() {
                let grandTotal = 0;

                inputs.forEach(input => {
                    const index = input.getAttribute("data-index");
                    const price = parseInt(input.getAttribute("data-price"));
                    const quantity = parseInt(input.value);
                    const rowTotal = price * quantity;

                    // Update total per baris
                    document.getElementById(`total-${index}`).textContent =
                        `Rp, ${rowTotal.toLocaleString()}`;

                    // Tambahkan ke grand total
                    grandTotal += rowTotal;
                });

                // Update total keseluruhan
                totalHargaElement.textContent = `Total Harga: Rp, ${grandTotal.toLocaleString()}`;
            }

            // Tambahkan event listener ke setiap input
            inputs.forEach(input => {
                input.addEventListener("input", calculateTotal);
                input.addEventListener("change", calculateTotal);
            });

            // Tambahkan event listener untuk tombol plus/minus
            document.querySelectorAll(".plus, .minus").forEach(button => {
                button.addEventListener("click", function() {
                    const index = this.getAttribute("data-index");
                    const input = document.querySelector(
                        `.product-quantity[data-index="${index}"]`);

                    if (this.classList.contains("plus")) {
                        input.stepUp();
                    } else if (this.classList.contains("minus")) {
                        input.stepDown();
                    }

                    // Hitung ulang total
                    calculateTotal();
                });
            });

            // Inisialisasi penghitungan saat pertama kali dimuat
            calculateTotal();
        });
    </script>

    <script>
        $(document).ready(function() {
            // Menyembunyikan semua baris tabel secara default
            var rows = $('#dataTable tbody tr');
            rows.hide(); // Sembunyikan semua baris saat halaman dimuat

            // Event listener untuk input pencarian
            $('#searchInput').on('input', function() {
                var filter = $(this).val()
                    .toLowerCase(); // Dapatkan nilai input pencarian dan ubah ke huruf kecil
                var noResult = true; // Asumsi awal tidak ada hasil

                // Jika input pencarian kosong, sembunyikan semua baris
                if (filter === "") {
                    rows.hide(); // Sembunyikan semua baris jika input pencarian kosong
                    $('.noresult').hide(); // Sembunyikan pesan "No Result"
                    return;
                }

                // Loop melalui setiap baris dan periksa apakah ada kecocokan
                rows.each(function() {
                    var row = $(this);
                    var cells = row.find('td');
                    var match = false;

                    // Periksa apakah teks dalam setiap cell cocok dengan filter
                    cells.each(function() {
                        if ($(this).text().toLowerCase().includes(filter)) {
                            match = true;
                            return false; // Jika ada kecocokan, hentikan loop
                        }
                    });

                    // Menampilkan atau menyembunyikan baris sesuai hasil pencarian
                    if (match) {
                        row.show(); // Tampilkan baris yang cocok
                        noResult = false;
                    } else {
                        row.hide(); // Sembunyikan baris yang tidak cocok
                    }
                });

                // Menampilkan pesan jika tidak ada hasil yang cocok
                if (noResult) {
                    $('.noresult').show(); // Tampilkan pesan "No Result"
                } else {
                    $('.noresult').hide(); // Sembunyikan pesan "No Result"
                }
            });
        });
    </script>
@endsection
