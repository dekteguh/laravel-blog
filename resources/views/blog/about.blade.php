@extends('layouts.main')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8">
            <article class="post-item post-detail">
                  <div class="post-item-body">
                      <div class="padding-10">
                          <h1>About</h1>
                          <p>This is About Page</p>
                        </div>
                  </div>
              </article>

          </div>

          @include('layouts.sidebar')
      </div>
  </div>
@endsection