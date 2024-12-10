<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_name ?></title>
    <link rel="stylesheet" href="<?= site_url('public/css/admin_style.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <h1>Admin Panel</h1>
            <nav>
                <ul>
                    <li><a href="<?= site_url('admin') ?>">Dashboard</a></li>
                    <li><a href="<?= site_url('admin/users') ?>">Users</a></li>
                    <li><a href="<?= site_url('admin/user-feedback') ?>">User Feedback</a></li>
                    <li><a href="<?= site_url('admin/categories') ?>">Categories</a></li>
                    <li><a href="<?= site_url('admin/transactions') ?>">Transactions</a></li>
                    <li><a href="<?= site_url('admin/notifications') ?>">Notifications</a></li>
                    <li><a href="<?= site_url('admin/log-history') ?>">Log History</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">

