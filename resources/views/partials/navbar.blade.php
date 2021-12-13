<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container">
      <button onclick="goBack()" class="border-0 bg-light mt-1" id="back" name="back"><span class="bi bi-arrow-left mt-1"></span></button><label for="search" class="mr-4 mt-1" style="margin-right: 15px"> Kembali</label>
      <a class="navbar-brand" href="/"><b>Google</b> Arts & Culture</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/account/favourite">Favourite</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <form class="d-flex" action="{{url('/search')}}" method="GET">
                    <input id="keyword" class="form-control me-2 mb-2 mr-2" type="search" placeholder="Search" name="keyword" value="{{ old('keyword') }}" aria-label="Search">
                    <button class="border-0 bg-light" id="search" name="search" type="submit"><span class="bi bi-search"></span></button><label for="search" class="mr-4" style="margin-top: 10px">Search</label>
                </form>
            </li>
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a style="margin-top: 2px; margin-left: 10px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="/account" class="dropdown-item" href="/dashboard"><i class="bi bi-person-circle"></i> Akun</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link active"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
<script>
    function goBack() {
        window.history.back();
    }
</script>