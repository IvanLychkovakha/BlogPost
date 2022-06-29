<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/posts">Post Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent" >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(auth()->user())
                    <li class="nav-item"><a class="nav-link {{request()->routeIs('user.profile') ? 'active' : ''}}" href="/profile">My Posts</a></li>
                    <li class="nav-item"><a class="nav-link {{request()->routeIs('posts.create') ? 'active' : ''}}" href="/posts/create">Add Post</a></li>
                @else
                    <li class="nav-item"><a class="nav-link {{request()->routeIs('auth.signin') ? 'active' : ''}}" href="/sign-in">Sign In</a></li>
                @endif
                <li class="nav-item"><a class="nav-link {{request()->routeIs('posts.index') ? 'active' : ''}}" aria-current="page" href="/">Blog</a></li>
            </ul>
            @if(auth()->user())
                <a href="#" name="logout-btn">Logout</a>
            @endif
        </div>
    </div>
</nav>
