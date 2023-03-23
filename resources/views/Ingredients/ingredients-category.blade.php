@extends('layouts.app')


@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('page')
<x-navbar.navbar>
    <x-slot:title>
        <div class="navbar-title">Category Ingredients</div>
    </x-slot:title>

    <x-button.icon-text-primary id="create-category-ingredients-btn" class="btn-nav" icon="plus-icon" text="Create Category Ingredients" onClick="changeContent('ingredients/category/create-category')"></x-button.icon-text-primary>
</x-navbar.navbar>


@endsection
