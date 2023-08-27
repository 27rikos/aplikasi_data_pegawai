<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin/admin.css') }}">

    {{-- print --}}
   
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center mt-3 fw-bold fs-5 bold text-white">ADMIN MENU <hr>
            </div>
            <div class="list-group list-group-flush ">
                <li class="list-group-item list-group-item-action bg-transparent second-text active"><a href="/dashboard"><i class="bi bi-person-badge-fill fa-lg me-2"></i>Data Pegawai</a></li>
                <li class="list-group-item list-group-item-action bg-transparent second-text active"><a href="foto"><i class="bi bi-image fa-lg me-2"></i>Daftar Foto</a></li>
                <li class="list-group-item list-group-item-action bg-transparent second-text active ">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-outline-light" type="submit"><i class="bi bi-box-arrow-right fa-lg me-2"></i>Log Out</button>
                      
                    </form>
                </li>
               
                
                {{-- <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-person-badge-fill fa-lg me-2"></i>Data Pegawai <hr></a>
                <a href="/foto" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-image fa-lg me-2"></i>Daftar Foto <hr></a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="bi bi-box-arrow-right fa-lg me-2"></i>Log Out <hr></a> --}}
                
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-list fa-lg fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                
            </nav>
            <div class="container-fluid px-4 content">
                @yield('content')

    </div>
    <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
    </script>
    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>