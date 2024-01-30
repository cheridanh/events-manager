@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-5 bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">Total : {{ $events->count() }} évènements !</h1>
            <hr>
            @if($events->isEmpty())
                <p>
                    Vous n'avez aucun évènement pour le moment !!!
                </p>
            @else
                @foreach($events as $event)
                    <div class="mt-4">
                        <p class="col-lg-8 fs-5">
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
                        </p>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="mt-4">
            {{ $events->links() }}
        </div>
    </div>
@endsection
