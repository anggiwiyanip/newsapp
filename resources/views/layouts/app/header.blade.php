<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                <svg width="800px" height="800px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g id="icomoon-ignore">
</g>
<path d="M9.069 2.672v14.928h-6.397c0 0 0 6.589 0 8.718s1.983 3.010 3.452 3.010c1.469 0 16.26 0 20.006 0 1.616 0 3.199-1.572 3.199-3.199 0-1.175 0-23.457 0-23.457h-20.259zM6.124 28.262c-0.664 0-2.385-0.349-2.385-1.944v-7.652h5.331v7.192c0 0.714-0.933 2.404-2.404 2.404h-0.542zM28.262 26.129c0 1.036-1.096 2.133-2.133 2.133h-17.113c0.718-0.748 1.119-1.731 1.119-2.404v-22.12h18.126v22.391z" fill="#000000">

</path>
<path d="M12.268 5.871h13.861v1.066h-13.861v-1.066z" fill="#000000">

</path>
<path d="M12.268 20.265h13.861v1.066h-13.861v-1.066z" fill="#000000">

</path>
<path d="M12.268 23.997h13.861v1.066h-13.861v-1.066z" fill="#000000">

</path>
<path d="M26.129 9.602h-13.861v7.997h13.861v-7.997zM25.063 16.533h-11.729v-5.864h11.729v5.864z" fill="#000000">

</path>
</svg><h3 class="ms-2">News-Ku</h3>
            </svg>
        </a>
    </div>

    <div class="col-md-3 text-end">
        @guest
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
        @else
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->username }}
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('index')}}">My News</a>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="POST" class="dropdown-item">
                        @csrf
                        <button type="submit" class="btn btn-link text-black text-decoration-none">Logout</button>
                        </form>
                    </li>
                
                </ul>
            </div>
        @endguest

    </div>
</header>
