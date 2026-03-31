<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { margin: 0; background: #f4f6f9; }

        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: #111827;
            color: #fff;
        }

        .sidebar a {
            color: #cbd5e1;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #1f2937;
            color: #fff;
        }

        .content {
            margin-left: 240px;
            padding: 20px;
        }

        .topbar {
            background: #fff;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h4 class="p-3">⚡ Admin</h4>

    <a href="/dashboard">🏠 Dashboard</a>
    <a href="/posts">📄 Manage Posts</a>
    <a href="/logout">🚪 Logout</a>
</div>

<div class="content">

    <div class="topbar d-flex justify-content-between">
        <h5>Dashboard</h5>
        <span>User ID: <?= session()->get('user_id') ?></span>
    </div>

    <div class="mt-3">
        <?= $this->renderSection('content') ?>
    </div>

</div>

</body>
</html>