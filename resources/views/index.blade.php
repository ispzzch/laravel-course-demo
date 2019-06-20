@extends('layouts.blog')

@section('content')


  <!-- Page Header -->
  <header class="masthead" style="background-position-y: -10em;background-image: url('https://pgw.udn.com.tw/gw/photo.php?u=https://uc.udn.com.tw/photo/2019/03/21/realtime/6076102.jpeg&x=0&y=0&sw=0&sh=0&sl=W&fw=1050&exp=3600')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>新知所向</h1>
            <span class="subheading">你與網站的距離有多遠</span>
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
          <a href="{{ route('post.show', $post->id) }}">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{ $post->user->name }}</a>
            on {{ date('d-m-Y', strtotime($post->created_at)) }}
            <!-- Authentication Links -->
              @guest
              @else
              <a href="{{ route('post.edit', $post->id) }}">編輯</a>
              <form method="POST" action="{{ route('post.delete', $post->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-outline-danger p-2">刪除</button>
              </form>
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
