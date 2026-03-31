<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter 4</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional custom style -->
    <style>
        body { background-color: #f5f6fa; }
        .card { border-radius: 12px; }
        .auth-card {
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(8px);
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">Codeigniter 4</a>

        <div>
            <?php if(session()->get('user_id')): ?>
                <a href="/dashboard" class="btn btn-light btn-sm">Dashboard</a>
                <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
            <?php else: ?>
                <a href="/login" class="btn btn-light btn-sm">Login</a>
                <a href="/register" class="btn btn-success btn-sm">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <!-- Flash Messages -->
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection('content') ?>

</div>

</body>
</html>