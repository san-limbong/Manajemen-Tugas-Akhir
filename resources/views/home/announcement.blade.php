<!DOCTYPE html>
<html>
<head>
<style>
#selector {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#selector td, #selector th {
  border: 1px solid #ddd;
  padding: 8px;
}

#selector tr:nth-child(even){background-color: #f2f2f2;}

#selector tr:hover {background-color: #ddd;}

#selector th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Daftar Pengumuman</h1>

<table id="selector">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
    </tr>
    @php $no =1; @endphp
    @foreach ($home as $data)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $data->judul }}</td>
        <td>{{ $data->deskripsi }}</td>
    </tr>
@endforeach
</table>

</body>
</html>


