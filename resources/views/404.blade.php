@extends('layouts.app')

@section('content')


  @if (!have_posts())
    <div class="404" style="background:url(/wp-content/uploads/2021/08/image1.jpeg); width: 100%; height: 100vh; background-size: cover;">
      </div>
      <div style="position: absolute;
      top: 3rem;
      left: 0;
      right: 0;
      text-align: center;
      top: 30%;
      background: rgba(255,255,255, 0.8);
      padding: 2rem;">
        <h1 style="font-weight: bold;">404</h1>
        <p style="font-weight: 100;">The page you requested was not found</p>
      </div>
    </div>

  @endif
@endsection
