@extends('web.app')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach($posts as $item)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src={{asset($item->images[0])}} data-holder-rendered="true">
                <div class="card-body">
                    <p class="card-text">{{$item->title}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="/posts/{{$item->id}}">View</a>
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="/posts/{{$item->id}}/edit">Edit</a>
                        <a type="button" class="btn btn-sm btn-outline-danger" href="#" data-delete-post data-post_id={{$item->id}}>Delete</a>

                    </div>
                    <small class="text-muted">{{$item->created_at->diffForHumans()}}</small>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
      </div>
      <div class='d-flex justify-content-center'>
        {!! $posts->links() !!}
      </div>
    </div>

</div>

@endsection