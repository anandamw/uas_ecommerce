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
                    <!-- Start Table Card -->
                    <div class="col-lg-12">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="text" id="search-input" class="form-control" placeholder="Cari data...">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <!-- Table -->
                                <table class="table caption-top table-nowrap" id="data-table">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nama Pelayan</th>
                                            <th scope="col">Nama Pembeli</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telepon</th>
                                            <th scope="col">Nama Buku</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $index => $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->nama_pelayan }}</td>
                                                <td>{{ $item->nama_pembeli }}</td>
                                                <td>{{ $item->jenis_kelamin == '1' ? 'LAKI-LAKI' : ($item->jenis_kelamin == '2' ? 'PEREMPUAN' : 'TIDAK DIKETAHUI') }}
                                                </td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->no_telepon }}</td>
                                                <td>{{ $item->judul_buku }}</td>
                                                <td>Rp, {{ number_format($item->harga) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td
                                                    class="{{ $item->status == 'paid' ? 'text-success' : ($item->status == 'unpaid' ? 'text-danger' : 'text-warning') }}">
                                                    {{ $item->status ?? 'Unknown' }}
                                                </td>
                                                <td>Rp,{{ number_format($item->total_harga, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div><!-- End Col -->
                    <!-- End Table Card -->

                </div><!-- End Row -->

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const searchInput = document.getElementById('search-input');
                        const tableRows = document.querySelectorAll('#data-table tbody tr');

                        // Event listener untuk input pencarian
                        searchInput.addEventListener('input', () => {
                            const searchTerm = searchInput.value
                                .toLowerCase(); // Ambil nilai pencarian dalam huruf kecil

                            tableRows.forEach(row => {
                                // Ambil teks dari seluruh kolom pada baris
                                const rowText = row.textContent
                                    .toLowerCase(); // Konversi teks dalam baris ke huruf kecil

                                // Jika kata kunci pencarian ada di dalam teks baris, tampilkan baris, jika tidak, sembunyikan
                                if (rowText.includes(searchTerm)) {
                                    row.style.display = ''; // Tampilkan baris
                                } else {
                                    row.style.display = 'none'; // Sembunyikan baris
                                }
                            });
                        });
                    });
                </script>


                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        // Function to calculate the total price
                        function calculateTotalPrice() {
                            let totalPrice = 0;

                            // Loop through all table rows to sum the total prices
                            document.querySelectorAll('td[id^="total-"]').forEach((cell) => {
                                const priceText = cell.textContent.trim().replace(/[^\d]/g,
                                    ''); // Extract numeric value
                                const price = parseInt(priceText, 10) || 0; // Convert to integer or fallback to 0
                                totalPrice += price;
                            });

                            // Format the total price as currency and update the span
                            document.getElementById('total-price').textContent = `Rp, ${totalPrice.toLocaleString('id-ID')}`;
                        }

                        // Call the function on page load
                        calculateTotalPrice();

                        // Optional: You can add listeners to update total when a quantity changes
                        // Assuming you have inputs for quantity updates in your form
                        document.querySelectorAll('input[name="quantity"]').forEach((input) => {
                            input.addEventListener('input', () => {
                                // Update the respective row's total price
                                const rowIndex = input.dataset
                                    .index; // Assuming data-index attribute matches $index
                                const unitPriceText = document.querySelector(`#unit-price-${rowIndex}`)
                                    .textContent.trim().replace(/[^\d]/g, '');
                                const unitPrice = parseInt(unitPriceText, 10) || 0;
                                const newQuantity = parseInt(input.value, 10) || 0;

                                // Update row's total
                                const rowTotal = unitPrice * newQuantity;
                                document.querySelector(`#total-${rowIndex}`).textContent =
                                    `Rp, ${rowTotal.toLocaleString('id-ID')}`;

                                // Recalculate the grand total
                                calculateTotalPrice();
                            });
                        });
                    });
                </script>
            @endsection
