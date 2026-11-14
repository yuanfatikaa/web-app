<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Segitiga</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            width: 350px;
        }
        h2 {
            color: #333;
            text-align: center;
            font-size: 22px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            color: #333;
        }
        .result span {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Hitung Luas Segitiga</h2>
        <form action="{{ url('/kalkulator/segitiga') }}" method="GET">
            <div class="form-group">
                <label for="alas">Alas:</label>
                <input type="number" id="alas" name="alas" value="{{ $alas }}" required>
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi:</label>
                <input type="number" id="tinggi" name="tinggi" value="{{ $tinggi }}" required>
            </div>
            <button type="submit">Hitung</button>
        </form>

        @isset($luas)
        <div class="result">
            Luas Segitiga: <span>{{ $luas }}</span>
        </div>
        @endisset
    </div>
</body>
</html>