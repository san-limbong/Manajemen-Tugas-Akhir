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

<h1>Daftar Kelompok TA</h1>

<table id="selector">
    <tr>
        <th>No</th>
        <th>Diajukan oleh:</th>
        <th>Nama Kelompok</th>
        <th>Status</th>
    </tr>
    @php $no =1; @endphp
    @foreach ($group as $data)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $data->user->nomorinduk }} - {{ $data->user->name }}</td>
        <td>{{ $data->namakelompok }}</td>
        <td>{{ $data->status }}</td>
    </tr>
@endforeach
</table>

</body>
</html>


