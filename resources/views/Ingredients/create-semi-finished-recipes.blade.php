@extends('layouts.app')


@section('sidebar')
    @include('partials.sidebar')
@endsection


@section('appbar')
    <x-navbar.navbar search="false">
        <x-slot:title>
            <div class="navbar-title">Semi-Finished Recipes</div>
        </x-slot:title>
    </x-navbar.navbar>
@endsection

@section('page')
@endsection
