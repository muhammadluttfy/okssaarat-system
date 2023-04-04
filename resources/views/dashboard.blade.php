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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="mx-3 sidebar-brand-text">Okssa Art</div>
            </a>

            <!-- Divider -->
            <hr class="my-0 sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Tracking</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="border-0 rounded-circle" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 text-gray-600 d-none d-lg-inline small">Hi,
                                    {{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                            <p class="mb-4">Buat tracking pekerjaanmu disini</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Selamat!</strong> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Oops!</strong> Terdapat beberapa kesalahan dalam pengisian data:
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

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
                            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                                aria-hidden="true">
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
                                                    <label for="progress_po" class="form-label">Progress PO</label>
                                                    <select class="form-select" name="progress_po_id"
                                                        id="progress_po">
                                                        @foreach ($progress_pos as $progress_po)
                                                            @if (old('progress_po_id') == $progress_po->id)
                                                                <option value="{{ $progress_po->id }}" selected>
                                                                    {{ $progress_po->name }}</option>
                                                            @else
                                                                <option value="{{ $progress_po->id }}">
                                                                    {{ $progress_po->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status" class="form-label">
                                                        Status Progress
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
                                            <th>Progress PO</th>
                                            <th>Status Progress</th>
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
                                            <th>Progress PO</th>
                                            <th>Status Progress</th>
                                            <th>Tanggal Update</th>
                                            <th>Detail Pekerjaan</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($trackings as $tracking)
                                            <tr>
                                                <td>{{ $tracking->po_number }}</td>
                                                <td>{{ $tracking->employee->name }}</td>
                                                <td class="text-danger">{{ $tracking->progress_po->name }}</td>

                                                {{-- @if (Auth::user()->departement_id == 1)
                                                    <td class="text-danger">{{ $tracking->production_po->name }}</td>
                                                @elseif (Auth::user()->departement_id == 2)
                                                    <td class="text-danger">{{ $tracking->finance_po->name }}</td>
                                                @elseif (Auth::user()->departement_id == 3)
                                                    <td class="text-danger">{{ $tracking->marketing_po }}</td>
                                                @endif --}}

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
                                                    {{-- <button type="button" class="border-0 badge bg-secondary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#updateModal{{ $tracking->id }}">
                                                        Ubah
                                                    </button> --}}

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
                                                                            <label for="progress_po"
                                                                                class="form-label">Progress PO</label>
                                                                            <select class="form-select"
                                                                                name="progress_po_id"
                                                                                id="progress_po">
                                                                                @foreach ($progress_pos as $progress_po)
                                                                                    @if ($tracking->progress_po_id == $progress_po->id)
                                                                                        <option
                                                                                            value="{{ $progress_po->id }}"
                                                                                            selected>
                                                                                            {{ $progress_po->name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $progress_po->id }}">
                                                                                            {{ $progress_po->name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="status" class="form-label">
                                                                                Status Progress
                                                                            </label>
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
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/dashboard/js/sb-admin-2.min.js') }}"></script>

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
