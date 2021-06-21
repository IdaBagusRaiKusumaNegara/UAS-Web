<!DOCTYPE html>
<html>

<head>
    @include('Template.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

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
                            <h1>Beranda</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <div class="alert alert-info  alert-dismissible">
                <h5><i class="fas fa-hand-spock"></i> Selamat Datang {{ auth()->user()->name }} </h5>
                Anda Login Sebagai <b>{{ auth()->user()->level }}</b>
            </div>
            @if (auth()->user()->level=="admin")
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-spinner"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pending</span>
                            <span class="info-box-number">
                                {{ $dtPending }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tools"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Process</span>
                            <span class="info-box-number">{{$dtProses}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="far fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Completed</span>
                            <span class="info-box-number">{{ $dtCompleted }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-clipboard-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Pekerjaan</span>
                            <span class="info-box-number">{{ $dtUsers }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            @endif
            @if (auth()->user()->level=="user")
            <!-- user -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-spinner"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pending</span>
                            <span class="info-box-number">
                                {{ $dtPendingUser }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tools"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Process</span>
                            <span class="info-box-number">{{$dtPorsesUser}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="far fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Completed</span>
                            <span class="info-box-number">{{ $dtCompletedUser }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-clipboard-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Pekerjaan</span>
                            <span class="info-box-number">{{ $dtPekerjaanUser }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            @endif
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sistem Informasi Work Order</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        Sistem Informasi Work Order (SIWO) merupakan aplikasi untuk melakukan permintaan pekerjaan
                        kepada unit IT sehingga dapat mempermudah IT dalam menjalankan pekerjaannya.
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Versi 1.0
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
        </div>
        </section>
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