@extends('layouts.app')

@section('content')
<section class="hero is-medium is-primary is-bold">
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
<section>
  <div class="columns is-multiline">
    @forelse($projects as $project)
      <div class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-16by9">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-4">{{ $project->name }}</p>
                <p class="subtitle is-6">{{ $project->country->name }}</p>
              </div>
            </div>

            <div class="content">{{ $project->short_desc }}</div>
          </div>
        </div>
      </div>
    @empty
      <div class="column">
        <h3>No hay resultados</h3>
      </div>
    @endforelse
  </div>
</section>
@endsection
