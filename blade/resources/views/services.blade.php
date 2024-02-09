@extends('layouts.landing')

@section('title', 'Services')

@section('content')

    <h1>Services</h1>
    @component('_components.card')
        @slot('title', 'Services 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae veniam corporis repellendus suscipit ex qui officiis ullam molestiae perferendis dicta ipsum architecto quibusdam sint magnam reprehenderit, nesciunt ipsa a itaque!')            
    @endcomponent
    @component('_components.card')
        @slot('title', 'Services 2')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae veniam corporis repellendus suscipit ex qui officiis ullam molestiae perferendis dicta ipsum architecto quibusdam sint magnam reprehenderit, nesciunt ipsa a itaque!')            
    @endcomponent
    @component('_components.card')
        @slot('title', 'Services 3')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae veniam corporis repellendus suscipit ex qui officiis ullam molestiae perferendis dicta ipsum architecto quibusdam sint magnam reprehenderit, nesciunt ipsa a itaque!')            
    @endcomponent
    
@endsection