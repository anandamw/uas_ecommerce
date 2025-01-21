@extends('admin.layouts.template')


@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            <div class="row mb-3 pb-1">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-16 mb-1">Good Morning, Anna!</h4>
                                            <p class="text-muted mb-0">
                                                Here's what's happening with your store today.
                                            </p>
                                        </div>
                                        <div class="mt-3 mt-lg-0">
                                            <form action="javascript:void(0);">
                                                <div class="row g-3 mb-0 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control border-0 dash-filter-picker shadow"
                                                                data-provider="flatpickr" data-range-date="true"
                                                                data-date-format="d M, Y"
                                                                data-deafult-date="01 Jan 2022 to 31 Jan 2022" />
                                                            <div
                                                                class="input-group-text bg-primary border-primary text-white">
                                                                <i class="ri-calendar-2-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-soft-success">
                                                            <i class="ri-add-circle-line align-middle me-1"></i>
                                                            Add Product
                                                        </button>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button"
                                                            class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn">
                                                            <i class="ri-pulse-line"></i>
                                                        </button>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end card header -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Total Keuntungan
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <!-- Bagian untuk menampilkan total keuntungan -->
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span>Rp
                                                            {{ number_format($totalKeuntungan, 0, ',', '.') }}
                                                        </span>
                                                    </h4>
                                                </div>

                                                <!-- Avatar dengan ikon dan warna khusus -->
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                                        <i class="bx bx-dollar-circle text-success"></i>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Orders
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span>{{ $totalCustomerSukses }}</span>
                                                    </h4>

                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle rounded fs-3">
                                                        <i class="bx bx-shopping-bag text-info"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Total Produk
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span>{{ $totalProduk }}</span>
                                                    </h4>

                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                        <i class="bx bx-user-circle text-warning"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Total Users
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span>{{ $totalUser }}</span>
                                                    </h4>

                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="bx bx-wallet text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row-->




                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">
                                                Store Visits by Source
                                            </h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted">Report<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Download Report</a>
                                                        <a class="dropdown-item" href="#">Export</a>
                                                        <a class="dropdown-item" href="#">Import</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card header -->

                                        <div class="card-body">
                                            <div id="store-visits-source"
                                                data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                                                class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <!-- .card-->
                                </div>
                                <!-- .col-->

                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">
                                                Manajemen Pengguna
                                            </h4>

                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">

                                                    <a class="dropdown-item" href="#">Export Data</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Emial</th>
                                                            <th scope="col">Role</th>

                                                        </tr>
                                                    </thead>

                                                    @foreach ($users as $item)
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="apps-ecommerce-order-details.html"
                                                                        class="fw-medium link-primary">{{ $loop->iteration }}</a>
                                                                </td>

                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->email }}</td>
                                                                <td>{{ $item->role }}</td>

                                                            </tr>
                                                            <!-- end tr -->
                                                    @endforeach

                                                    </tbody>
                                                    <!-- end tbody -->
                                                </table>
                                                <!-- end table -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-->
                                </div>
                                <!-- .col-->
                            </div>
                            <!-- end row-->
                        </div>
                        <!-- end .h-100-->
                    </div>
                    <!-- end col -->


                    <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
    <!-- end main content-->
@endsection
