<nav class="navbar navbar-expand-lg bg-white shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">Animated WB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">login</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a class="nav-link" href="/logout">logout</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>