@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">Créer un évènement !</h1>

            <form action="{{ route('events.store') }}" method="POST">
                @csrf

                <div class="form-floating m-4">
                    <input type="text" name="title" class="form-control" placeholder="Titre de l'évènement !" id="title" style="height: 70px">
                    {!! $errors->first('title', '<span class="col-lg-8 mx-auto fs-5" style="color: red">:message</span>') !!}
                    <label for="title">Titre de l'évènement !</label>
                </div>

                <div class="form-floating m-4">
                    <textarea name="description" class="form-control" placeholder="Description de l'évènement !" id="description" style="height: 100px"></textarea>
                    {!! $errors->first('description', '<span class="col-lg-8 mx-auto fs-5" style="color: red">:message</span>') !!}
                    <label for="description">Description de l'évènement !</label>
                </div>

                <div class="d-inline-flex gap-2">
                    <input class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="submit" value="Créer">
                    <a href="{{ route('events.index') }}" class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection
