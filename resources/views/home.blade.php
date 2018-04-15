@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        {!! Form::open(['url' => '/groups/search', 'method' => 'get']) !!}
          <div class="input-group">
            <input
              class="form-control border-secondary py-2"
              type="search"
              name="s"
              value="{{ $search !== null ? $search : '' }}"
              placeholder="Search..."
            >
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        {!! Form::close() !!}
      </div>

      <div class="col text-right">
          <h4>
            <a href="/groups/create" class="btn btn-primary">
                Create <i class="fa fa-plus"></i>
            </a>
          </h4>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col">
        <groups :groups="{{ $groups }}" />
      </div>
    </div>
  </div>
@endsection
