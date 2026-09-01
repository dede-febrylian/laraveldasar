<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
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

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"] {
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            width: 100%;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #3498db;
        }

        .btn-submit {
            background: #2ecc71;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            margin-top: 5px;
        }

        .btn-submit:hover {
            background: #27ae60;
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
            margin-top: 15px;
        }

        .btn-balik:hover {
            background: #c0392b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>tambah</h1>
        <form action="{{route('mapel.store')}}" method="POST">
            @csrf

            <label for="kode_mapel">kode mapel</label>
            <input type="text"
                id="kode_mapel"
                name="kode_mapel"
                placeholder="masukan kode mapel">
                
            <label for="mapel">mapel</label>
            <input type="text"
                id="mapel"
                name="mapel"
                placeholder="masukan mapel">
                
            <label for="kkm">nilai kkm</label>
            <input type="text"
                id="kkm"
                name="kkm"
                placeholder="masukan nilai">

            <button type="submit" class="btn-submit">tambah</button>
        </form>
        <a href="{{route('mapel.index')}}" class="btn-balik">balik</a>
    </div>
</body>

</html>