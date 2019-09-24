@extends('layouts.app')

@section('content')
<section class="hero is-medium is-primary is-info">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Listado de proyectos
      </h1>
      <h2 class="subtitle">
        Primary bold subtitle
      </h2>
    </div>
  </div>
</section>
<section class="project-nav">
  <div class="container">
    <!-- Main container -->
    <nav class="level">
      <!-- Left side -->
      <div class="level-left">
        <div class="level-item">
          <p class="subtitle is-5">
            <strong>{{ $projects->count() }}</strong> proyectos
          </p>
        </div>
        <div class="level-item">
          <form method="get">
            <div class="field has-addons">
              <p class="control">
                <input class="input" type="text" name="name" value="{{ old('name') }}" placeholder="Buscar un proyecto">
              </p>
              <p class="control">
                <button class="button">
                  Buscar
                </button>
              </p>
            </div>
          </form>
        </div>
      </div>

      <!-- Right side -->
      <div class="level-right">
        <p class="level-item"><a href="{{ route('project.index') }}">Todos</a></p>
        <p class="level-item"><a href="{{ route('project.index', ['active']) }}">Activos</a></p>
        <p class="level-item"><a href="{{ route('project.index', ['featured']) }}">Destacados</a></p>
      </div>
    </nav>
  </div>
</section>
<section class="project-list">
  <div class="container">
    <div class="columns is-multiline">
      @forelse($projects as $project)
      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-16by9">
              <img src="{{ asset('img/logo-client.jpg') }}" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-6">
                  {{ $project->name }}
                  @if($project->featured)
                  <span class="icon">
                    <i class="fas fa-star"></i>
                  </span>
                  @endif
                </p>
                <p class="subtitle is-6">{{ $project->country->name }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @empty
      <div class="column">
        <h3>No hay resultados</h3>
      </div>
      @endforelse
    </div>
  </div>
</section>
@endsection
