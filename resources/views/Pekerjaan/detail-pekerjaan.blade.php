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
                            <h1>Pekerjaan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li class="breadcrumb-item active"> Detail Pekerjaan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('cetak-pekerjaan', $dtPekerjaan->id) }}"
                        style="margin-bottom: 1rem; margin-left: 700px" target="_blank" class="btn btn-success"><i
                            class="fas fa-print"></i> Cetak</a>
                    <button onclick="goBack()" style="margin-bottom: 1rem;" class="btn btn-primary"><i
                            class="fas fa-arrow-circle-left"></i>
                        Kembali</button>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <H5 style="text-align:center">Detail Data Pekerjaan</H5>

                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Tanggal Order </th>
                                <th>{{ $dtPekerjaan->created_at }}</th>
                            </tr>
                            <tr>
                                <th>Tanggal Selesai </th>
                                <th>{{ $dtPekerjaan->updated_at }}</th>
                            </tr>
                            <tr>
                                <th>Nama Customer</th>
                                <th>{{ $dtPekerjaan->name }}</th>
                            </tr>
                            <tr>
                                <th>Unit Kerja</th>
                                <th>{{ $dtPekerjaan->unit->Nama_Unit }}</th>
                            </tr>
                            <tr>
                                <th>Kategori Pekerjaan </th>
                                <th>{{ $dtPekerjaan->Kategori_Pekerjaan }}</th>
                            </tr>
                            <tr>
                                <th>Deskripsi Pekerjaan</th>
                                <th>{{ $dtPekerjaan->Deskripsi_Pekerjaan }}</th>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <th>{{ $dtPekerjaan->Keterangan }}</th>
                            </tr>
                            <tr>
                                <th>Pekerja </th>
                                <th>{{ $dtPekerjaan->Pekerja  }}</th>
                            </tr>
                            <tr>
                                <th>Status Pekerjaan </th>
                                <th>
                                    @if($dtPekerjaan->Status_Pekerjaan == 'Pending')
                                    <small class="badge badge-secondary">
                                        Pending</small>

                                    @elseif($dtPekerjaan->Status_Pekerjaan == 'Process')

                                    <small class="badge badge-primary">
                                        Process</small>
                                    @elseif($dtPekerjaan->Status_Pekerjaan == 'Completed')

                                    <small class="badge badge-success">
                                        Completed</small>
                                    @endif
                                </th>
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