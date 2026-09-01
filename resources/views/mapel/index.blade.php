<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mapel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        .btn-tambah {
            display: inline-block;
            background: #2ecc71;
            color: white;
            padding: 8px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            border: none;
        }

        .btn-tambah:hover {
            background: #27ae60;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border: 1px solid #ddd;
        }

        th {
            background: #f8f9fa;
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }

        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        tr:hover {
            background: #f9fafb;
        }

        .btn-edit {
            display: inline-block;
            background: #f39c12;
            color: white;
            padding: 5px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
            border: none;
        }

        .btn-edit:hover {
            background: #d68910;
        }

        .btn-show {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 5px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
            border: none;
        }

        .btn-show:hover {
            background: #2980b9;
        }

        .btn-hapus {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 12px;
            border: none;
        }

        .btn-hapus:hover {
            background: #c0392b;
        }

        .btn-balik {
            display: inline-block;
            background: #f39c12;
            color: white;
            padding: 8px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            margin-top: 20px;
        }

        .btn-balik:hover {
            background: #d68910;
        }

        form {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>mapel</h1>
            <a href="{{ route('mapel.create') }}" class="btn-tambah">tambah mapel</a>
        </div>

        <table border="1">
            <tr>
                <th>id</th>
                <th>kode mapel</th>
                <th>mata pelajar</th>
                <th>nilai kkm</th>
                <th>aksi</th>
            </tr>
            @foreach ($mapel as $item)
            <tr>
                <td>{{$item->id }}</td>
                <td>{{$item->kode_mapel }}</td>
                <td>{{$item->mapel }}</td>
                <td>{{$item->kkm}}</td>
                <td>
                    <a href="{{route('mapel.edit', $item->id)}}" class="btn-edit">edit mapel</a>
                    <a href="{{route('mapel.show', $item->id)}}" class="btn-show" target="_blank">detail</a>
                    <form action="{{ route('mapel.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-hapus">hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{route('siswa.index')}}" class="btn-balik">balik ke siswa</a>
    </div>
</body>
</html>