@extends('web.app')

@section('content')
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form action="{{route('posts.store')}}" enctype="multipart/form-data" method="POST">
    		    @csrf
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" required />
                    {!!$errors->first('title', '<p style="color:red;">:message</p>') ?? ''!!}

    		    </div>
                <div class="form-group">
                    <label for="categories">Categories <span class="require">*</span></label>
                    <select multiple class="form-control" name="categories[]" required>
                      @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                      @endforeach
                    </select>
                    {!!$errors->first('categories', '<p style="color:red;">:message</p>') ?? ''!!}
                </div>
 
    		    <div class="form-group">
    		        <label for="description">Description <span class="require">*</span></label>
    		        <textarea rows="5" class="form-control" name="content" required></textarea>
                    {!!$errors->first('description', '<p style="color:red;">:message</p>') ?? ''!!}
    		    </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" multiple name="images[]" required>
                    <label for="images">Choose Images <span class="require">*</span></label>
                    {!!$errors->first('images', '<p style="color:red;">:message</p>') ?? ''!!}

                  </div>
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
@endsection