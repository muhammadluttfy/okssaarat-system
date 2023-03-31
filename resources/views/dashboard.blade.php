<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Okssa Art Studio</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('root') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="mx-3 sidebar-brand-text">Okssa Art</div>
            </a>

            <!-- Divider -->
            <hr class="my-0 sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Tracking</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">

                        <!-- Nav Item - Alerts -->
                        <li class="mx-1 nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="text-white fas fa-file-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-gray-500 small">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="text-white fas fa-donate"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-gray-500 small">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="text-white fas fa-exclamation-triangle"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-gray-500 small">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="text-center text-gray-500 dropdown-item small" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="mx-1 nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3 dropdown-list-image">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="text-gray-500 small">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3 dropdown-list-image">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="text-gray-500 small">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3 dropdown-list-image">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!</div>
                                        <div class="text-gray-500 small">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3 dropdown-list-image">
                                        <img class="rounded-circle"
                                            src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="text-gray-500 small">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="text-center text-gray-500 dropdown-item small" href="#">Read More
                                    Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 text-gray-600 d-none d-lg-inline small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="mr-2 text-gray-400 fas fa-cogs fa-sm fa-fw"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="mr-2 text-gray-400 fas fa-list fa-sm fa-fw"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <!-- Page Heading -->
                            <h1 class="mb-2 text-gray-800 h3">Data Tracking</h1>
                            <p class="mb-4">Buat tracking pengerjaanmu disini</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            {{-- @if (session()->has('success'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Selamat!</strong> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif --}}
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="mb-4 shadow card">
                        <div class="py-3 card-header">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createModal">
                                Tambah Data
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="createModal" tabindex="-1"
                                aria-labelledby="createModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('data.tracking.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="createModalLabel">Add Tracking
                                                    Process
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="po_number" class="form-label">Nomor
                                                        PO</label>
                                                    <input type="text" class="form-control" name="po_number"
                                                        id="po_number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="employee_id" class="form-label">Nama Karyawan</label>
                                                    <select class="form-select" name="employee_id" id="employee">
                                                        @foreach ($employees as $employee)
                                                            @if (old('employee_id') == $employee->id)
                                                                <option value="{{ $employee->id }}" selected>
                                                                    {{ $employee->name }}</option>
                                                            @else
                                                                <option value="{{ $employee->id }}">
                                                                    {{ $employee->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="departement" class="form-label">Departemen</label>
                                                    <select class="form-select" name="departement_id"
                                                        id="departement">
                                                        @foreach ($departements as $departement)
                                                            @if (old('departement_id') == $departement->id)
                                                                <option value="{{ $departement->id }}" selected>
                                                                    {{ $departement->name }}</option>
                                                            @else
                                                                <option value="{{ $departement->id }}">
                                                                    {{ $departement->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status" class="form-label">Tahap
                                                        Pekerjaan
                                                    </label>
                                                    <select class="form-select" name="status_id" id="status">
                                                        @foreach ($statuses as $status)
                                                            @if (old('status_id') == $status->id)
                                                                <option value="{{ $status->id }}" selected>
                                                                    {{ $status->name }}</option>
                                                            @else
                                                                <option value="{{ $status->id }}">
                                                                    {{ $status->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date" class="form-label">Tanggal Update</label>
                                                    <input type="date" class="form-control" name="date"
                                                        id="date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Upload
                                                        Gambar</label>
                                                    <img class="mb-3 img-preview img-fluid col-sm-5">
                                                    <input class="form-control @error('image') is-invalid @enderror"
                                                        type="file" id="image" name="image"
                                                        onchange="previewImage()">

                                                    @error('image')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor PO</th>
                                            <th>Nama Karyawan</th>
                                            <th>Departemen</th>
                                            <th>Tahap Pekerjaan</th>
                                            <th>Tanggal Update</th>
                                            <th>Detail Pekerjaan</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor PO</th>
                                            <th>Nama Karyawan</th>
                                            <th>Departemen</th>
                                            <th>Tahap Pekerjaan</th>
                                            <th>Tanggal Update</th>
                                            <th>Detail Pekerjaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($trackings as $tracking)
                                            <tr>
                                                <td>{{ $tracking->po_number }}</td>
                                                <td>{{ $tracking->employee->name }}</td>
                                                <td>{{ $tracking->departement->name }}</td>
                                                <td>{{ $tracking->status->name }}</td>
                                                <td>{{ $tracking->date }}</td>
                                                <td>{{ $tracking->description }}</td>
                                                <td>
                                                    <a href="javascript:;" data-bs-toggle="modal"
                                                        data-bs-target="#imgPreviewModal{{ $tracking->id }}">
                                                        <img src="{{ asset('storage/' . $tracking->image) }}"
                                                            alt="" width="50">
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="imgPreviewModal{{ $tracking->id }}"
                                                        data-bs-backdrop="static" data-bs-keyboard="false"
                                                        tabindex="-1"
                                                        aria-labelledby="imgPreviewModal{{ $tracking->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5"
                                                                        id="imgPreviewModal{{ $tracking->id }}">
                                                                        Preview Gambar</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="{{ asset('storage/' . $tracking->image) }}"
                                                                        alt="" width="400">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="border-0 badge bg-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#updateModal{{ $tracking->id }}">
                                                        Ubah
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="updateModal{{ $tracking->id }}"
                                                        tabindex="-1" aria-labelledby="updateModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form
                                                                action="{{ route('data.tracking.update', $tracking->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5"
                                                                            id="updateModalLabel">Update Data
                                                                            dengan Nomor PO
                                                                            <b>{{ $tracking->po_number }}</b>
                                                                        </h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label for="po_number"
                                                                                class="form-label">Nomor
                                                                                PO</label>
                                                                            <input type="text" class="form-control"
                                                                                name="po_number" id="po_number"
                                                                                value="{{ old('po_number', $tracking->po_number) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="employee"
                                                                                class="form-label">Nama
                                                                                Karyawan</label>
                                                                            <select class="form-select"
                                                                                name="employee_id" id="employee">
                                                                                @foreach ($employees as $employee)
                                                                                    @if ($tracking->employee_id == $employee->id)
                                                                                        <option
                                                                                            value="{{ $employee->id }}"
                                                                                            selected>
                                                                                            {{ $employee->name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $employee->id }}">
                                                                                            {{ $employee->name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="departement"
                                                                                class="form-label">Departemen</label>
                                                                            <select class="form-select"
                                                                                name="departement_id" id="category">
                                                                                @foreach ($departements as $departement)
                                                                                    @if ($tracking->departement_id == $departement->id)
                                                                                        <option
                                                                                            value="{{ $departement->id }}"
                                                                                            selected>
                                                                                            {{ $departement->name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $departement->id }}">
                                                                                            {{ $departement->name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="status"
                                                                                class="form-label">Tahap
                                                                                Pekerjaan</label>
                                                                            <select class="form-select"
                                                                                name="status_id" id="status">
                                                                                @foreach ($statuses as $status)
                                                                                    @if ($tracking->status_id == $status->id)
                                                                                        <option
                                                                                            value="{{ $status->id }}"
                                                                                            selected>
                                                                                            {{ $status->name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $status->id }}">
                                                                                            {{ $status->name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="date"
                                                                                class="form-label">Tanggal
                                                                                Update</label>
                                                                            <input type="date" class="form-control"
                                                                                name="date" id="date"
                                                                                value="{{ old('date', $tracking->date) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="image"
                                                                                class="form-label">Upload
                                                                                Gambar</label>
                                                                            <img
                                                                                class="mb-3 img-preview img-fluid col-sm-5">
                                                                            <input
                                                                                class="form-control @error('image') is-invalid @enderror"
                                                                                type="file" id="image"
                                                                                name="image"
                                                                                onchange="previewImage()">

                                                                            @error('image')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="description"
                                                                                class="form-label">Deskripsi</label>
                                                                            <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $tracking->description) }}</textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <form action="{{ route('data.tracking.destroy', $tracking->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="border-0 badge bg-danger">Hapus</span></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="my-auto text-center copyright">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="rounded scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/dashboard/js/demo/datatables-demo.js') }}"></script>


    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
