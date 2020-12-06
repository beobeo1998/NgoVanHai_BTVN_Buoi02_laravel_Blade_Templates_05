@extends('layout.master')
@section('content')
<header class="masthead" style="background-image: url('frontend/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @if(isset($posts))
          @foreach ($posts as $item)
            <div class="post-preview">
                <a href="post.html">
                <h2 class="post-title">
                    {{ $item->name }}
                </h2>
                <h3 class="post-subtitle">
                    {{ $item->title }}
                </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a></p>
            </div>
            <hr>
          @endforeach
        @endif
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>
@endsection
