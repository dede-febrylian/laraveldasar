<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show nya</title>
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
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border: 1px solid #ddd;
            margin-bottom: 20px;
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

        .btn-balik {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 8px 18px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-balik:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>data mapel</h1>
        <table border="1">
            <tr>
                <th>kode_mapel</th>
                <th>mapel</th>
                <th>nilai kkm</th>
            </tr>
            <tr>
                <td>{{$mapel->kode_mapel }}</td>
                <td>{{$mapel->mapel }}</td>
                <td>{{$mapel->kkm}}</td>
            </tr>
        </table>
        <a href="{{route('mapel.index')}}" class="btn-balik">balik</a>
    </div>
</body>
</html>