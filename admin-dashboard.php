<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    http_response_code(403);
    echo "Access denied.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      background-color: #f8f9fa;
      padding-top: 20px;
    }
    .sidebar a {
      display: block;
      padding: 10px 20px;
      color: #000;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #ddd;
    }
    .content {
      margin-left: 270px;
      padding: 20px;
    }
  </style>
</head>
<body>

  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="img/logo/logo2.png" width="40">
      </div>
      <div class="sidebar-brand-text mx-3">Ekbal</div>
    </a>
    <hr class="sidebar-divider my-0">

    <li class="nav-item active" id="dashboard">
      <a class="nav-link" href="dashboard"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
    </li>
    <li class="nav-item" id="all_user">
      <a class="nav-link" href="all_user"><i class="fas fa-fw fa-users"></i><span>All User</span></a>
    </li>
    <li class="nav-item" id="block_user">
      <a class="nav-link" href="block_user"><i class="fas fa-fw fa-user-alt-slash"></i><span>Blocked User</span></a>
    </li>
    <li class="nav-item" id="find_user">
      <a class="nav-link" href="find_user"><i class="fas fa-fw fa-user-cog"></i><span>Find User</span></a>
    </li>
    <li class="nav-item" id="show_service">
      <a class="nav-link" href="show_service"><i class="fas fa-fw fa-server"></i><span>Show Service</span></a>
    </li>
    <li class="nav-item" id="add_service">
      <a class="nav-link" href="add_service"><i class="fas fa-fw fa-folder-plus"></i><span>Add Service</span></a>
    </li>
    <li class="nav-item" id="show_server">
      <a class="nav-link" href="show_server"><i class="fas fa-fw fa-server"></i><span>Show Server</span></a>
    </li>
    <li class="nav-item" id="add_server">
      <a class="nav-link" href="add_server"><i class="fas fa-fw fa-folder-plus"></i><span>Add Server</span></a>
    </li>
    <li class="nav-item" id="show_api">
      <a class="nav-link" href="show_api"><i class="fas fa-fw fa-file-code"></i><span>Show APIs</span></a>
    </li>
    <li class="nav-item" id="add_api">
      <a class="nav-link" href="add_api"><i class="fas fa-fw fa-code-branch"></i><span>Add APIs</span></a>
    </li>
    <li class="nav-item" id="category">
      <a class="nav-link" href="category"><i class="fas fa-fw fa-folder-plus"></i><span>Account Add Category</span></a>
    </li>
    <li class="nav-item" id="all_category">
      <a class="nav-link" href="all_category"><i class="fas fa-fw fa-server"></i><span>Account All Category</span></a>
    </li>
    <li class="nav-item" id="service">
      <a class="nav-link" href="service"><i class="fas fa-fw fa-folder-plus"></i><span>Account Add Service</span></a>
    </li>
    <li class="nav-item" id="show_acservice">
      <a class="nav-link" href="show_acservice"><i class="fas fa-fw fa-server"></i><span>Account All Service</span></a>
    </li>
    <li class="nav-item" id="upi_transaction">
      <a class="nav-link" href="upi_transaction"><i class="fas fa-fw fa-compress-arrows-alt"></i><span>Upi Transactions</span></a>
    </li>
    <li class="nav-item" id="paytm_history">
      <a class="nav-link" href="paytm_history"><i class="fas fa-fw fa-compress-arrows-alt"></i><span>Paytm Transactions</span></a>
    </li>
    <li class="nav-item" id="crypto_transaction">
      <a class="nav-link" href="crypto_transaction"><i class="fas fa-fw fa-ticket-alt"></i><span>Crypto Transactions</span></a>
    </li>
    <li class="nav-item" id="refer_transaction">
      <a class="nav-link" href="refer_transaction"><i class="fas fa-fw fa-money-check"></i><span>Refer Transaction</span></a>
    </li>
    <li class="nav-item" id="bharatpe">
      <a class="nav-link" href="bharatpe"><i class="fas fa-fw fa-file-code"></i><span>Bharatpe Settings</span></a>
    </li>
    <li class="nav-item" id="paytm_edit">
      <a class="nav-link" href="paytm_edit"><i class="fas fa-fw fa-file-code"></i><span>Paytm Settings</span></a>
    </li>
    <li class="nav-item" id="number-wait">
      <a class="nav-link" href="number-wait"><i class="fas fa-fw fa-wrench"></i><span>Number Waiting</span></a>
    </li>
    <li class="nav-item" id="promocode">
      <a class="nav-link" href="promocode"><i class="fas fa-fw fa-gift"></i><span>Promocode Settings</span></a>
    </li>
    <li class="nav-item" id="today_otp">
      <a class="nav-link" href="today_otp"><i class="fas fa-fw fa-portrait"></i><span>Today Number History</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin">Version 1.0</div>
  </ul>

  <div class="content">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is a secure area. Use the sidebar to navigate through the admin tools.</p>
  </div>

</body>
</html>
