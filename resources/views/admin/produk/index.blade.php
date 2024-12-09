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
                                <h4 class="card-title mb-0">Cari Produk</h4>
                            </div><!-- End Card Header -->
                            <div class="card-body">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
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
                                                <td>{{ $item->judul_buku }}</td>
                                                <td>{{ $item->stok }}</td>
                                                <td>Rp, {{ $item->harga }}</td>
                                                <td>
                                                    <i class="ri-shopping-cart-fill"></i>
                                                    <a href="/keranjang/{{ $item->token_produks }}">Keranjang</a>
                                                </td>
                                            </tr>
                                            <!-- Default Modals -->
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
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->judul_buku }}</td>
                                                <td>{{ $item->penerbit }}</td>
                                                <td>{{ $item->penulis }}</td>
                                                <td>
                                                    <div class="input-step step-primary">
                                                        <button type="button" class="minus"
                                                            data-index="{{ $index }}">–</button>
                                                        <input type="number" class="product-quantity" value="0"
                                                            min="0" max="100" data-index="{{ $index }}"
                                                            data-price="{{ $item->harga }}">
                                                        <button type="button" class="plus"
                                                            data-index="{{ $index }}">+</button>
                                                    </div>
                                                </td>
                                                <td>Rp, {{ number_format($item->harga) }}</td>
                                                <td id="total-{{ $index }}">Rp, 0</td>
                                                <td>
                                                    <div type="button" class="text-primary" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-modal-center">
                                                        <i class="ri-delete-bin-line"></i>
                                                        Hapus
                                                    </div>
                                                </td>

                                            </tr>
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
                                                                    successfully received by us. the email of the recipient
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
                        <a href="" class="btn btn-primary">Bayar case</a>
                        <a href="" class="btn btn-warning">Bayar QRIS</a>
                    </div><!-- End Col -->
                    <!-- End Table Card -->

                </div><!-- End Row -->

            </div><!-- End Container Fluid -->
        </div><!-- End Page Content -->
    </div><!-- End Main Content -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    {{-- <script>
        $(document).ready(function() {
            // Tombol minus
            $('.minus').on('click', function() {
                var $input = $(this).siblings('.product-quantity'); // Cari input yang terkait dengan tombol
                var value = parseInt($input.val(), 10); // Ambil nilai saat ini dari input
                if (value > 0) { // Jika nilai lebih dari 0
                    $input.val(value - 1); // Kurangi nilai
                }
            });

            // Tombol plus
            $('.plus').on('click', function() {
                var $input = $(this).siblings('.product-quantity'); // Cari input yang terkait dengan tombol
                var value = parseInt($input.val(), 10); // Ambil nilai saat ini dari input
                if (value < 100) { // Jika nilai kurang dari 100
                    $input.val(value + 1); // Tambah nilai
                }
            });

            // Mengubah nilai dengan memasukkan angka manual
            $('.product-quantity').on('input', function() {
                var value = parseInt($(this).val(), 10);
                if (value < 0) {
                    $(this).val(0); // Jika nilai kurang dari 0, atur ke 0
                } else if (value > 100) {
                    $(this).val(100); // Jika nilai lebih dari 100, atur ke 100
                }
            });
        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const plusButtons = document.querySelectorAll('.plus');
            const minusButtons = document.querySelectorAll('.minus');
            const quantityInputs = document.querySelectorAll('.product-quantity');

            // Function to update the total for each item
            function updateTotal(index) {
                const quantity = parseInt(quantityInputs[index].value) || 0; // Get quantity, default to 0 if NaN
                const price = parseInt(quantityInputs[index].getAttribute(
                    'data-price')); // Get price from data attribute
                const totalElement = document.getElementById(`total-${index}`);

                if (isNaN(price)) {
                    console.error("Invalid price value:", price);
                    return;
                }

                const total = quantity * price; // Calculate total
                totalElement.innerText = `Rp, ${total.toLocaleString()}`; // Update total with formatted price
            }

            // Add event listeners for the plus and minus buttons
            plusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const index = this.getAttribute('data-index'); // Get the index of the row
                    const quantityInput = document.querySelectorAll('.product-quantity')[index];
                    let quantity = parseInt(quantityInput.value) || 0;
                    quantityInput.value = quantity + 1;
                    updateTotal(index); // Update total after increment
                });
            });

            minusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const index = this.getAttribute('data-index'); // Get the index of the row
                    const quantityInput = document.querySelectorAll('.product-quantity')[index];
                    let quantity = parseInt(quantityInput.value) || 0;
                    if (quantity > 0) {
                        quantityInput.value = quantity - 1;
                    }
                    updateTotal(index); // Update total after decrement
                });
            });

            // Add event listener for input quantity change
            quantityInputs.forEach((input, index) => {
                input.addEventListener('input', function() {
                    updateTotal(index); // Update total when quantity is changed manually
                });
            });
        });
    </script>
@endsection
