@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    @stack('before-style')
    <link href="{{ ('/css/style.css') }}" rel="stylesheet" >
    @include('uiux.style')
    @stack('after-style')
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TEST DEV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pegawai">Employee</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pasien">Patient</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="obat">Medicine</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="tindakan">Action For Patient</a>
                </li>
                
            </ul>
            </div>
        </div>
        <form class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, <b>{{ Auth::user()->name }}</b> here
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('chpass') }}">Change Password</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
                </li>
            </ul>
        </form>
        </nav>
                <div class="container-fluid">
                    @stack('before-content')
                    @yield('content')
                    @stack('after-content')
                </div>
            
</body>
    @stack('before-style')
    @include('uiux.script')
    @stack('after-style')
    <script src="{{ ('js/scripts.js') }}"></script>
</html>
@endauth