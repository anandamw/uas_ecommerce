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
                        <div class="card">
                            <div class="card-body">
                                <!-- Table -->
                                <table class="table caption-top table-nowrap">
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
                                            <th scope="col">Total</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($datas as $index => $item)
                                            <form method="post" action="/update/{{ $item->token_keranjang }}/keranjang">
                                                @csrf
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $item->nama_pelayan }}</td>
                                                    <td>{{ $item->nama_pembeli }}</td>
                                                    <td> {{ $item->jenis_kelamin == '1' ? 'LAKI-LAKI' : ($item->jenis_kelamin == '2' ? 'PEREMPUAN' : 'TIDAK DIKETAHUI') }}
                                                    </td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->no_telepon }}</td>
                                                    <td>{{ $item->judul_buku }}</td>

                                                    <td>Rp, {{ number_format($item->harga) }}</td>
                                                    <td>{{ $item->quantity }}</td>
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
                        <a href="/final?token={{ $_GET['token'] }}" class="btn btn-primary">Simpan</a>

                    </div><!-- End Col -->
                    <!-- End Table Card -->

                </div><!-- End Row -->
            @endsection
