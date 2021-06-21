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
                            <h1>Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li class="breadcrumb-item active">Pengguna</li>
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
                        <h3 class="card-title">Data Pengguna</h3>
                        <a href="{{ route('create-pengguna') }}" style="margin-left: 590px;" class="btn btn-success"><i
                                class="fas fa-plus-square"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Level</th>
                                    <th>Unit</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtUser as $item)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $item->name }} </td>
                                    <td>{{ $item->level }} </td>
                                    <td> {{ $item->unit['Nama_Unit'] }} </td>
                                    <td>{{ $item->email }} </td>
                                    <td>
                                        <a href="{{ url('detail-pengguna', $item->id) }}"><i class="fas fa-info-circle"
                                                style="color: blue;"></i></a>
                                        |
                                        <a href="{{ url('edit-pengguna', $item->id) }}"><i class="fas fa-edit"
                                                style="color: gold;"></i></a>
                                        |
                                        <a href="#modalDelete" data-toggle="modal"
                                            onclick="$('#modalDelete #formDelete').attr('action','<?= url('delete-pengguna', $item->id) ?>')"><i
                                                class="fas fa-trash" style="color: red;"></i></a>
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

<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda Yakin Menghapus Data Ini?</p>
            </div>
            <form id="formDelete" action="" method="delete">
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

</html>