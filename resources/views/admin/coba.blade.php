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
                                            <th scope="col">Name</th>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Annette Black</td>
                                            <td>Industrial Designer</td>
                                            <td>10, Nov 2021</td>
                                            <td>$450</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bessie Cooper</td>
                                            <td>Graphic Designer</td>
                                            <td>13, Nov 2021</td>
                                            <td>$875</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Leslie Alexander</td>
                                            <td>Product Manager</td>
                                            <td>17, Nov 2021</td>
                                            <td>$410</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="table-light">
                                        <tr>
                                            <td colspan="4">Total</td>
                                            <td>$940</td>
                                        </tr>
                                    </tfoot>
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

            </div><!-- End Container Fluid -->
        </div><!-- End Page Content -->
    </div><!-- End Main Content -->
    <script>
        // Real-time Search Functionality
        document.addEventListener('DOMContentLoaded', function() {
            let rows = document.querySelectorAll('#dataTable tbody tr');

            // Sembunyikan semua baris tabel secara default
            rows.forEach(row => {
                row.style.display = 'none'; // Menyembunyikan semua baris saat halaman dimuat
            });

            // Event listener untuk input pencarian
            document.getElementById('searchInput').addEventListener('input', function() {
                let filter = this.value
            .toLowerCase(); // Dapatkan nilai input pencarian dan ubah ke huruf kecil
                let noResult = true; // Asumsi awal tidak ada hasil

                // Jika input pencarian kosong, tampilkan kembali semua baris
                if (filter === "") {
                    rows.forEach(row => {
                        row.style.display = ''; // Tampilkan semua baris kembali
                    });
                    document.querySelector('.noresult').style.display =
                    'none'; // Sembunyikan pesan "No Result"
                    return;
                }

                // Loop melalui setiap baris dan periksa apakah ada kecocokan
                rows.forEach(row => {
                    let cells = row.getElementsByTagName('td');
                    let match = false;

                    // Periksa apakah teks dalam setiap cell cocok dengan filter
                    for (let i = 0; i < cells.length; i++) {
                        if (cells[i].textContent.toLowerCase().includes(filter)) {
                            match = true;
                            break;
                        }
                    }

                    // Menampilkan baris yang cocok
                    if (match) {
                        row.style.display = ''; // Tampilkan baris yang cocok
                        noResult = false;
                    } else {
                        row.style.display = 'none'; // Sembunyikan baris yang tidak cocok
                    }
                });

                // Menampilkan pesan jika tidak ada hasil yang cocok
                if (noResult) {
                    document.querySelector('.noresult').style.display =
                    'block'; // Tampilkan pesan "No Result"
                } else {
                    document.querySelector('.noresult').style.display =
                    'none'; // Sembunyikan pesan "No Result"
                }
            });
        });
    </script>
@endsection
