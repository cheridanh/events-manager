@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">{{ $event->title }}</h1>
            <hr>
            <p class="col-lg-8 mx-auto fs-5 text-muted my-5">
                {{ $event->description }}
            </p>
            <div class="d-inline-flex gap-2 mb-2 mt-5">
                <a href="{{ route('events.edit', $event) }}" class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                    Modifier
                </a>
                <form action="{{ route('events.destroy', $event) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-outline-danger btn-lg px-4 rounded-pill" type="submit" value="Supprimer">
                </form>
                <a href="{{ route('events.index') }}" class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                    Tous les évènements
                </a>
            </div>
        </div>
    </div>

@endsection
