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
                                <li class="breadcrumb-item active">Tambah Pekerjaan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Data Pekerjaan</h3>
                    </div>
                    @if (auth()->user()->level=="admin")
                    <form action="{{ route('simpan-pekerjaan') }}" method="post">
                        @endif
                        @if (auth()->user()->level=="user")
                        <form action="{{ route('simpanPekerjaan') }}" method="post">
                            @endif
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Kategori Pekerjaan</label>
                                    <select class="form-control select2" id="Kategori_Pekerjaan"
                                        name="Kategori_Pekerjaan">
                                        <option value>Pilih Kategori Pekerjaan</option>
                                        <option value='Software'>Software</option>
                                        <option value='Hardware'>Hardware</option>
                                        <option value='Jaringan'>Jaringan</option>
                                        <option value='Lain-Lain'>Lain-Lain</option>
                                    </select>

                                    @error('Kategori_Pekerjaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Pekerjaan</label>
                                    <textarea class="form-control" rows="3" id="Deskripsi_Pekerjaan"
                                        name="Deskripsi_Pekerjaan" placeholder="Masukan Deskripsi Pekerjaan"></textarea>
                                    @error('Deskripsi_Pekerjaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="far fa-save"></i>
                                    Simpan</button>
                            </div>
                        </form>
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