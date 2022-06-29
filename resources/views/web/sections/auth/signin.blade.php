@extends('web.app')

@section('content')
<main class="text-center h-75">
    <form class="form-signin" method="POST" action="{{route('auth.access')}}">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        {!!$errors->first('email', '<p style="color:red;">:message</p>') ?? ''!!}

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
        {!!$errors->first('password', '<p style="color:red;">:message</p>') ?? ''!!}

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a href="/sign-up">First time on the website?</a>
    </form>
</main>

@endsection
