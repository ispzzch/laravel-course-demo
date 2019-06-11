@extends('layouts.blog')

@section('content')


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://pmcvariety.files.wordpress.com/2019/01/the-world-between-us-003-cr-res.jpg?w=1000&h=563&crop=1')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>社會新知</h1>
            <span class="subheading">你那些所遺忘的議題與惡的距離</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($posts as $post)
        <div class="post-preview">
          <a href="{{ route('post', $post->id) }}">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{ $post->user->name }}</a>
            on {{ $post->created_at }}
            <!-- Authentication Links -->
            @guest
            @else
            <a href="{{ route('post.create') }}">編輯</a>
            <a href="{{ route('post.delete', $post->id) }}">刪除</a>
            @endguest
          </p>
        </div>
        <hr>
        @endforeach
        <!-- Pager -->
      </div>
    </div>
  </div>

  <hr>



@endsection
