@extends('admin.layouts.template')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Start Table Card -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Input Pencarian -->
                                <div class="mb-3">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Cari data...">
                                </div>

                                <!-- Table -->
                                <table class="table caption-top table-nowrap" id="dataTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Kode Barang</th>
                                            <th scope="col">Nama Buku</th>
                                            <th scope="col">Penerbit</th>
                                            <th scope="col">Penulis</th>
                                            <th scope="col">Jumlah Buku</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Supliyer</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produks as $index => $item)
                                            <form method="post" action="/update/{{ $item->token_keranjang }}/keranjang">
                                                @csrf
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $item->token_produks }}</td>
                                                    <td>{{ $item->judul_buku }}</td>
                                                    <td>{{ $item->penerbit }}</td>
                                                    <td>{{ $item->penulis }}</td>
                                                    <td>{{ $item->stok }}</td>
                                                    <td>Rp, {{ number_format($item->harga) }}</td>
                                                    <td>{{ $item->supliyers }}</td>
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
                                        @endforeach
                                    </tbody>
                                </table>

                            </div><!-- End Card Body -->
                        </div><!-- End Card -->

                    </div><!-- End Col -->
                    <!-- End Table Card -->

                </div><!-- End Row -->
            </div><!-- End Container Fluid -->
        </div><!-- End Page Content -->
    </div><!-- End Main Content -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const dataTable = document.getElementById('dataTable');
            const rows = dataTable.querySelectorAll('tbody tr');

            searchInput.addEventListener('keyup', function() {
                const query = searchInput.value.toLowerCase();

                rows.forEach(row => {
                    const rowText = row.textContent.toLowerCase();
                    if (rowText.includes(query)) {
                        row.style.display = ''; // Tampilkan baris
                    } else {
                        row.style.display = 'none'; // Sembunyikan baris
                    }
                });
            });
        });
    </script>
@endsection
