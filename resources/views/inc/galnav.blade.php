<nav class="navbar navbar-default" style="margin-top: 5%">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Photo Show</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="/">Home</a></li>
      @auth ('web')
        <li><a href="{{ route('gal.create') }}">Create Album</a></li>
      @endauth
    </ul>
  </div>
</nav>
