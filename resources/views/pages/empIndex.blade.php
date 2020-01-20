@extends('layouts.base')

@section('content')
<h1>Employee: {{ $emps -> count() }}</h1>

<ul>

    @foreach ($emps as $emp)

        <li>employee: {{ $emp -> name }}  {{ $emp -> lastname }} | quantità di task connessi: {{ $emp -> tasks() -> count() }}</li>

    @endforeach

</ul>

@endsection