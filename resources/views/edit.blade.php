@extends('layouts.app') 

@section('content')
    <div class="container">
        <form action="{{ route('post.update', $post->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group row">
                <label for="title" class="col-sm-6 col-sm-offset-3 col-form-label">文章標題</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $post->title }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-6 col-sm-offset-3 col-form-label">代表圖</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control" id="img" name="image" placeholder="" value="{{ $post->image }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="content" class="col-sm-6 col-sm-offset-3 col-form-label">文章內容</label>
                <div class="col-sm-6 col-sm-offset-3">
                    <textarea class="form-control" id="body" name="body" placeholder="">
                        {!! $post->body !!}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" class="btn btn-primary" value="送出">
                </div>
            </div>
        </form>
    </div>
@endsection