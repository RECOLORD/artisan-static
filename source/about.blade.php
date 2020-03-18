@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>test</h1>

    <p>My name is {{ $page->owner->name }}</p>

    <h2>Links:</h2>

@endsection
