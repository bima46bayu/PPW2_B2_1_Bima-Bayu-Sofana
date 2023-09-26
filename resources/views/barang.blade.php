<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>nama_barang</th>
            <th>harga</th>
            <th>stok</th>
            <th>id_supplier</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ "Rp ".number_format($barang->harga, 2, ',','.') }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>