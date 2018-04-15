@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-default group">
          <div class="card-header">{{ $group->name }}</div>

          <div class="card-body">
            <div class="card-text">
              <h4>Information:</h4>
              <p>{{ $group->info }}</p>
            </div>

            <div class="card-text">
              <h4>Conditions:</h4>
              <p>{{ $group->conditions }}</p>
            </div>

            <div class="card-text">
              <h4>Contacts:</h4>
              <p>{{ $group->contacts }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
