<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Desa Penglipuran</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('user/icon/favicon.png') }}">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-home"></i> --}}
                    <img style="width: 75%" src="{{ asset('admin/img/logo-penglipuran-white.png') }}" alt="">
                </div>
                {{-- <div class="sidebar-brand-text mx-3">ADMIN</div> --}}
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('kelola-news') }}">
                    <i class="far fa-newspaper"></i>
                    <span>News</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('kelola-gallery') }}">
                    <i class="far fa-images"></i>
                    <span>Gallery</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('kelola-admin') }}">
                    <i class="far fa-user"></i>
                    <span>Admin</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">
                    <i class="fas fa-power-off"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-5">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" id="userDropdown" role="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('admin/img/avatar/' . auth()->user()->avatar) }}">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Admin</h1>

                    {{-- Body --}}
                    <div class="container-fluid">
                        {{-- Alert --}}
                        @if (session('status'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row d-flex justify-content-between">
                            {{-- Form input data admin --}}
                            <div class="col-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        Input Admin
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('tambah-admin') }}" method="POST">
                                            @csrf

                                            {{-- Input nama --}}
                                            <div class="form-group">
                                                <label for="nama">Nama :</label>
                                                <input name="nama" type="text" class="form-control" id="nama"
                                                    placeholder="Nama" required>
                                            </div>

                                            {{-- Input email --}}
                                            <div class="form-group">
                                                <label for="email">Email :</label>
                                                <input name="email" type="email" class="form-control" id="email"
                                                    placeholder="Email" required>
                                            </div>

                                            {{-- Input password --}}
                                            <div class="form-group">
                                                <label for="password">Password :</label>
                                                <input name="password" type="password" class="form-control"
                                                    id="password" placeholder="Password" required>
                                            </div>

                                            {{-- Input jenis kelamin --}}
                                            <div class="form-group">
                                                <label for="jenisKelamin" class="d-block">Jenis Kelamin :</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="pria" name="jenisKelamin"
                                                        class="custom-control-input" value="Pria" checked>
                                                    <label class="custom-control-label" for="pria">Pria</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="wanita" name="jenisKelamin"
                                                        class="custom-control-input" value="Wanita">
                                                    <label class="custom-control-label" for="wanita">Wanita</label>
                                                </div>
                                            </div>

                                            {{-- Tombol submit --}}
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Table data admin --}}
                            <div class="col-8">
                                <div class="card h-100">
                                    <div class="card-header">
                                        Daftar Admin
                                    </div>
                                    <div class="card-body" style="overflow-y: scroll; height: 200px;">
                                        <table class="table table-sm table-hover">
                                            <tr>
                                                <th>
                                                    <p>No</p>
                                                </th>
                                                <th>
                                                    <p>Nama</p>
                                                </th>
                                                <th>
                                                    <p>Email</p>
                                                </th>
                                                <th>
                                                    <p>Dibuat pada</p>
                                                </th>
                                                <th>
                                                    <p>Aksi</p>
                                                </th>
                                            </tr>
                                            @foreach ($admins as $i => $admin)
                                                <tr>
                                                    <td>
                                                        <p>{{ $i + 1 }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $admin->name }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $admin->email }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $admin->created_at }}</p>
                                                    </td>
                                                    <td>
                                                        <a href="/halaman-ubah-admin/{{ $admin->id }}"
                                                            class="btn btn-sm btn-white">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="/hapus-admin/{{ $admin->id }}"
                                                            class="btn btn-sm btn-danger">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
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
    <a class="scroll-to-top rounded" href="#page-top">
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
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
