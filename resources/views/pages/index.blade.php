@extends('welcome')
@section('content')
  <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($post as $row)
        <div class="post-preview">
          <a href="post.html">
            <img src="{{ URL::to($row->image) }}" style="height: 300px;">
            <h2 class="post-title">
              {{ $row->title }}
            </h2>
          </a>
          <p class="post-meta">Category 
            <a href="#">{{ $row->name }}</a>
            on Slug {{ $row->slug }}</p>
        </div>
        <hr>
        @endforeach

        

        <!-- Pager -->
        <div class="clearfix">
          {{ $post->links() }}
        </div>
      </div>
    </div>

@endsection