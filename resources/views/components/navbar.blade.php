<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">QUIZEEE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto me-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/privacy') }}">Privacy & Policy</a>
                </li>
                
            </ul>
            <form action="{{ route('login') }}" method="get" class="text-center">
                <button type="button" class="btn btn-warning" onclick="location.href='{{ route('login') }}';">Login</button>
                <button type="button" class="btn btn-dark" onclick="location.href='{{ route('register') }}';">Register</button>
            </form>
        </div>
    </div>
</nav>


