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
                            <h1>Pekerjaan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li class="breadcrumb-item active">Pekerjaan</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.row -->

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pekerjaan</h3>
                        <a href="{{ route('create-pekerjaan') }}" style="margin-left: 590px;" class="btn btn-success"><i
                                class="fas fa-plus-square"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal Permintaan</th>
                                    <th>Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtPekerjaan as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td> {{ date('d-m-Y H:i:s',strtotime($item->created_at)) }} </td>
                                    <td>{{ $item->Kategori_Pekerjaan }} </td>
                                    <td> {{ $item->Deskripsi_Pekerjaan }} </td>
                                    <td>
                                        @if($item->Status_Pekerjaan == 'Pending')
                                        <small class="badge badge-secondary">
                                            Pending</small>

                                        @elseif($item->Status_Pekerjaan == 'Process')

                                        <small class="badge badge-primary">
                                            Process</small>
                                        @elseif($item->Status_Pekerjaan == 'Completed')

                                        <small class="badge badge-success">
                                            Completed</small>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
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