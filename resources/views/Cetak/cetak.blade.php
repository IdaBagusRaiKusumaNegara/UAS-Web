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
        <p align="center"><b>Laporan Data Pekerjaan</b></p>
        <br>
        <table class="static" align="center" rules="all" border="1px" style="width:80%;">
            <tr>
                <th align="left">Tanggal Order </th>
                <th align="left">{{ $dtPekerjaan->created_at }}</th>
            </tr>
            <tr>
                <th align="left">Tanggal Selesai </th>
                <th align="left">{{ $dtPekerjaan->updated_at }}</th>
            </tr>
            <tr>
                <th align="left">Nama Customer</th>
                <th align="left">{{ $dtPekerjaan->name }}</th>
            </tr>
            <tr>
                <th align="left">Unit Kerja</th>
                <th align="left">{{ $dtPekerjaan->unit->Nama_Unit }}</th>
            </tr>
            <tr>
                <th align="left">Kategori Pekerjaan </th>
                <th align="left">{{ $dtPekerjaan->Kategori_Pekerjaan }}</th>
            </tr>
            <tr>
                <th align="left">Deskripsi Pekerjaan</th>
                <th align="left">{{ $dtPekerjaan->Deskripsi_Pekerjaan }}</th>
            </tr>
            <tr>
                <th align="left">Keterangan</th>
                <th align="left">{{ $dtPekerjaan->Keterangan }}</th>
            </tr>
            <tr>
                <th align="left">Pekerja </th>
                <th align="left">{{ $dtPekerjaan->Pekerja }}</th>
            </tr>
            <tr>
                <th align="left">Status Pekerjaan </th>
                <th align="left">{{ $dtPekerjaan->Status_Pekerjaan }}</th>
            </tr>
        </table>
    </div>
</body>

</html>