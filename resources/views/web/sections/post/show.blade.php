@extends('web.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{$post->title}}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted {{$post->created_at->diffForHumans()}}</div>
                    <!-- Post categories-->
                    @foreach($post->categories as $item)
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$item->title}}</a>
                    @endforeach
                </header>
                <!-- Preview image figure-->
                <div class="mb-4" id='slick-image-slider'>
                    @foreach($post->images as $item)
                        <img class="img-fluid rounded" src="{{$item}}" style="width:900px !impotant;height:400px;" alt="...">
                    @endforeach
                </div>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{{$post->content}}</p>
                </section>
            </article>

        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search">
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        @php $numOfCol = $post->categories->count() % 3 != 0 ? round(($post->categories->count() / 3) + 1) : $post->categories->count() / 3; @endphp

                        @for($i = 0; $i < $numOfCol; $i++)
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    @foreach($post->categories as $item)
                                        @continue($i > 0 && $loop->iteration < $i * 3)
                                        <li><a href="#!">{{$item->title}}</a></li>

                                    @endforeach
                                </ul>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#slick-image-slider').slick({

     autoplay: true,
     autoplaySpeed: 2000,
    arrows : true,
  });
</script>
@endsection