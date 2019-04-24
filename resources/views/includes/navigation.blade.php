<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">Boosterthon Coding Challenge</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">View Ratings {!! Request::is('/') ? '<span class="sr-only">(current)</span>' : '' !!}</a>
            </li>
        </ul>
    </div>
</nav>

