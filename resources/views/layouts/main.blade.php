<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Phone Store</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      .sidebar {
        background-color: #343a40;
        color: #fff;
        min-height: 100vh;
      }
      .sidebar .nav-link {
        color: #fff;
      }
      .sidebar .nav-link.active {
        background-color: #007bff;
      }
      .card {
        border-radius: 10px;
      }
      .card-header {
        background-color: #007bff;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom: 2px solid #0056b3; /* Added border */
      }
      .footer {
        background-color: #343a40;
        color: white;
      }
      /* Border untuk navbar */
      .navbar {
        border-bottom: 2px solid #0056b3;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Royal Phone</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bi bi-person-rolodex"></i> User
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><i class="bi bi-feather"></i>{{ Auth::user()->name ?? ""}}</a>
              <a class="dropdown-item" href="/user">Ganti Password</a>
              <a class="dropdown-item" href="#">Edit Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout">Log Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link {{ ($key=='home') ? 'active' : '' }}" id="v-pills-home-tab" href="/home">Home</a>
            <a class="nav-link {{ ($key=='phone') ? 'active' : '' }}" id="v-pills-profile-tab" href="/phone">Phone</a>
            <a class="nav-link {{ ($key=='about') ? 'active' : '' }}" id="v-pills-messages-tab" href="/about">About</a>
            <a class="nav-link {{ ($key=='faq') ? 'active' : '' }}" id="v-pills-settings-tab" href="/faq">FAQ</a>
          </div>
        </div>

        <!-- Page Content -->
        <div class="col-md-10">
          <div class="card mt-4">
            <div class="card-header">Lebih dari Sekedar Handphone</div>
            <div class="card-body">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center py-3">
      <div class="container">
        <span>© Template by Michael Jonathan Anwar</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
      new DataTable('#example');
    </script>
  </body>
</html>
