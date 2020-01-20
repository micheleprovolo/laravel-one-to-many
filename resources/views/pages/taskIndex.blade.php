@extends('layouts.base')

@section('content')
<h1>Task: {{ $tasks -> count() }}</h1>

<ul>

    @foreach ($tasks as $task)

        <li>id: {{ $task -> id }} | nome task: {{ $task -> name }} | employee associato: {{ $task -> employee -> name }} {{ $task -> employee -> lastname }}</li>

    @endforeach

</ul>

@endsection