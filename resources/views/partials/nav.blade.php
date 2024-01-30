<nav class="navbar bg-body-tertiary mb-3">
    <div class="container">
        <a href="{{ route('events.index') }}" class="navbar-brand">{{ config('app.name') }}</a>
            @if(! Route::is('events.create'))
            <form class="d-flex">
                <a href="{{ route('events.create') }}" class="navbar-brand btn btn-outline-success"><i class="bi-plus"></i>Créer un évènement</a>
            </form>
        @endif
    </div>
</nav>
