@extends('web.app')

@section('content')

<main class="text-center">
    <form class="form-signin" action="{{route('auth.create')}}" method="POST">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <label for="name" class="sr-only">Name</label>
        <input type="name" name="name" class="form-control" value='{{old('name')}}' placeholder="Name" required="" autofocus="">
        {!!$errors->first('email', '<p style="color:red;">:message</p>') ?? ''!!}

        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" value='{{old('email')}}' placeholder="Email address" required="" autofocus="">
        {!!$errors->first('email', '<p style="color:red;">:message</p>') ?? ''!!}

        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
        {!!$errors->first('password', '<p style="color:red;">:message</p>') ?? ''!!}

        <label for="password_confirmation" class="sr-only">Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
</main>

@endsection
