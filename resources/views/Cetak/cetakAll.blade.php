<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <style>
    table.static {
        position: relative;
        border: 1px solid #543535;
    }
    </style>

</head>

<body>
    <div class="form-group">
        <p align="center"><b>Rekapan Data Pekerjaan</b></p>
        <br>
        <table class="static" align="center" rules="all" border="1px" style="width:80%;">
            <thead>
                <tr>
                    <th>Tgl. Permintaan</th>
                    <th>Tgl. Selesai</th>
                    <th>Nama Customer</th>
                    <th>Unit</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Keterangan</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($dtRekap as $item)
                <tr>
                    <td align="center">{{ $item->created_at }}</td>
                    <td align="center">{{ $item->updated_at }}</td>
                    <td>{{ $item->name }}</td>
                    <td align="center">{{ $item->unit['Nama_Unit'] }}</td>
                    <td align="center">{{ $item->Kategori_Pekerjaan }}</td>
                    <td>{{ $item->Deskripsi_Pekerjaan }}</td>
                    <td>{{ $item->Keterangan }}</td>
                    <td align="center">{{ $item->Status_Pekerjaan }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>