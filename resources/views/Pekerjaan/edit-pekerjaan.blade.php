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
                                <li class="breadcrumb-item active">Edit Pekerjaan</li>
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
                        <h3 class="card-title">Edit Data Pekerjaan</h3>
                    </div>
                    <form action="{{ url('update-pekerjaan', $dtPekerjaan->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kategori Pekerjaan</label>
                                <select class="form-control select2" id="Kategori_Pekerjaan" name="Kategori_Pekerjaan">
                                    <option value>Pilih Kategori Pekerjaan</option>
                                    <option value='Software'
                                        {{ $dtPekerjaan->Kategori_Pekerjaan == 'Software'? 'selected':'' }}>Software
                                    </option>
                                    <option value='Hardware'
                                        {{ $dtPekerjaan->Kategori_Pekerjaan == 'Hardware'? 'selected':'' }}>Hardware
                                    </option>
                                    <option value='Jaringan'
                                        {{ $dtPekerjaan->Kategori_Pekerjaan == 'Jaringan'? 'selected':'' }}>Jaringan
                                    </option>
                                    <option value='Lain-Lain'
                                        {{ $dtPekerjaan->Kategori_Pekerjaan == 'Lain-Lain'? 'selected':'' }}>Lain-Lain
                                    </option>
                                    @error('Kategori_Pekerjaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Pekerjaan</label>
                                <textarea class="form-control" rows="3" id="Deskripsi_Pekerjaan"
                                    name="Deskripsi_Pekerjaan"
                                    placeholder="Masukan Deskripsi Pekerjaan">{{ $dtPekerjaan->Deskripsi_Pekerjaan }}</textarea>
                                @error('Deskripsi_Pekerjaan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" rows="3" id="Keterangan" name="Keterangan"
                                    placeholder="Masukan Keterangan">{{ $dtPekerjaan->Keterangan }}</textarea>
                                @error('Keterangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-6">
                                <!-- Select multiple-->
                                <div class="form-group">
                                    <label>Pekerja</label>
                                    <select class="form-control" name="Pekerja[]" id="Pekerja" multiple>
                                        @foreach($dtPekerja as $item)
                                        <option value="{{$item->id}}"
                                            {{in_array($item->id, old("dtPekerja") ?: []) ? "selected" : ""}}>
                                            {{$item->nama}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status Pekerjaan</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('Status_Pekerjaan') is-invalid @enderror"
                                        type="radio" id="Status_Pekerjaan" name="Status_Pekerjaan" value="Pending"
                                        {{ $dtPekerjaan->Status_Pekerjaan == 'Pending'? 'checked':'' }}>
                                    <label class="form-check-label">Pending</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('level') is-invalid @enderror" type="radio"
                                        id="Status_Pekerjaan" name="Status_Pekerjaan" value="Process"
                                        {{ $dtPekerjaan->Status_Pekerjaan == 'Process'? 'checked':'' }}>
                                    <label class="form-check-label">Process</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('level') is-invalid @enderror" type="radio"
                                        id="Status_Pekerjaan" name="Status_Pekerjaan" value="Completed"
                                        {{ $dtPekerjaan->Status_Pekerjaan == 'Completed'? 'checked':'' }}>
                                    <label class="form-check-label">Completed</label>
                                </div>
                                @error('Status_Pekerjaan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Update</button>
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