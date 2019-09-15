<nav class="navbar is-black" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo-white.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="{{ route('project.index') }}">
        Proyectos
      </a>
    </div>

    <div class="navbar-end">
      @guest
        <div class="navbar-item">
          <div class="buttons">
            @if (Route::has('register'))
                <a class="button is-primary" href="{{ route('register') }}">
                  <strong>{{ __('Register') }}</strong>
                </a>
            @endif
            <a class="button is-light" href="{{ route('login') }}">
              {{ __('Login') }}
            </a>
          </div>
        </div>
      @else
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            {{ Auth::user()->name }}
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      @endguest

    </div>
  </div>
</nav>
