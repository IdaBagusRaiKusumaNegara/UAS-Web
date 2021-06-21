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
                                <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li class="breadcrumb-item active">Edit Pengguna</li>
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
                        <h3 class="card-title">Edit Data Pengguna</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('update-pengguna', $dtUser->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ $dtUser->name }}" placeholder="Masukan Nama Pengguna">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('level') is-invalid @enderror" type="radio"
                                        id="level" name="level" value="admin"
                                        {{ $dtUser->level == 'admin'? 'checked':'' }}>
                                    <label class="form-check-label">Admin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('level') is-invalid @enderror" type="radio"
                                        id="level" name="level" value="user"
                                        {{ $dtUser->level == 'user'? 'checked':'' }}>
                                    <label class="form-check-label">User</label>
                                </div>
                                @error('level')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="text" class="form-control @error('Nomor_HP') is-invalid @enderror"
                                    id="Nomor_HP" name="Nomor_HP" value="{{ $dtUser->Nomor_HP }}"
                                    placeholder="Masukan Nomor HP">
                                @error('Nomor_HP')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Unit Kerja</label>
                                <select class="form-control @error('Id_Unit') is-invalid @enderror" id="Id_Unit"
                                    name="Id_Unit">
                                    <option value="{{ $dtUser->Id_Unit }}">{{ $dtUser->unit->Nama_Unit }}</option>
                                    @foreach ($dtUnit as $item)
                                    <option value="{{$item->id}}">{{$item->Nama_Unit}}</option>
                                    @endforeach
                                </select>
                                @error('Id_Unit')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ $dtUser->email }}" placeholder="Masukan Email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" value="{{ $dtUser->password }}"
                                    placeholder="Masukan Password">
                                @error('password')
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