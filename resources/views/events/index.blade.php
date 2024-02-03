@extends('layouts.app')

@section('content')

    @if($events->isEmpty())
        <h1 class="mb-5 text-body-emphasis">Aucun évènement !</h1>
        <hr>
        <p class="mt-5">
            Liste vide. Veuillez créer des évènements pour les afficher !
        </p>
    @else
        <h1 class="mb-5 text-body-emphasis">Total : {{ $events->count() }} {{ Str::plural('évènement', $events->count()) }} !</h1>
        <hr>
        @foreach($events as $event)
            <div class="mt-5">
                <p class="col-lg-8 fs-5">
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                       href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
                </p>
            </div>
        @endforeach
    @endif

@endsection

@section('paginate')
    <div class="container mt-4">
        {{ $events->links() }}
    </div>
@endsection
