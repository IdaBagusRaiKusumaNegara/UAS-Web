<!DOCTYPE html>
<html>

<head>
    @include('Template.header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <button onclick="goBack()" style="margin-bottom: 1rem;  margin-left: 60px"
                                    class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i>
                                    Kembali</button>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-body">
                        <H5 style="text-align:center">Detail Data Pengguna</H5>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Id Pengguna </th>
                                <th>{{ $dtUser->id }}</th>
                            </tr>
                            <tr>
                                <th>Nama Pengguna</th>
                                <th>{{ $dtUser->name }}</th>
                            </tr>
                            <tr>
                                <th>Level Pengguna</th>
                                <th>{{ $dtUser->level }}</th>
                            </tr>
                            <tr>
                                <th>Nomor HP </th>
                                <th>{{ $dtUser->Nomor_HP }}</th>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <th>{{ $dtUser->unit->Nama_Unit }}</th>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <th>{{ $dtUser->email }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('Template.script')
</body>

</html>