<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-5 border-info">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-3" href="#">Inventory App</a>
    <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto mb-3 mb-lg-0">
          <a class="nav-link" href="{{url('/app')}}">Home</a>
          <a class="nav-link" href="{{url('/app/create')}}">Tambah</a>
          <a class="nav-link" href="{{url('/app/edit')}}">Edit</a>
          <a class="nav-link disabled">Logout</a>  
      </div>
    </div>
  </div>
</nav>