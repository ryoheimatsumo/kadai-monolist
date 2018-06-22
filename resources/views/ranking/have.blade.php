@extends('layouts.app')

@section('content')
    <h1>have</h1>tランキング</h1>
    @include('items.items', ['items' => $items])
@endsection