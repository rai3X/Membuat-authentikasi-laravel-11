<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #1d3557, #457b9d);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-box {
            background-color: #f8f9fa;
            color: #212529;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .dashboard-box h2 {
            font-weight: 600;
        }
        .dashboard-box p {
            margin-top: 10px;
            font-size: 1.1rem;
        }
        .btn-logout {
            background-color: #e63946;
            border: none;
        }
        .btn-logout:hover {
            background-color: #c62828;
        }
    </style>
</head>
<body>
    <div class="dashboard-box">
        <h2>Hello, {{ Auth::user()->name }} 👋</h2>
        <p>Welcome to your personalized dashboard.</p>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-logout px-4 py-2 text-white">Logout</button>
        </form>
    </div>
</body>
</html>
