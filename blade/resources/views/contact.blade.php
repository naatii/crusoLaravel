@extends('layouts.landing')

@section('title', 'Contact')

@section('content')

    <h1>Contact</h1>
    @component('_components.card')
    @slot('title', 'Contacto')
    @slot('content', )
        <form action="">
            <label for="name">
                name
                <input type="text" name="name" id="name" placeholder="Nombre">
            </label>
        </form>
    @endslot
    @endcomponent
@endsection