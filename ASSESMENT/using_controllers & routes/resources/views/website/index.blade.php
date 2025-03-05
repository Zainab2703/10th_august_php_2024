@extends('layouts.base')

@section('content')
    <h2>Students List</h2>
    <ul>
        @foreach($students as $student)
            <li>{{ $student->name }} ({{ $student->email }})</li>
        @endforeach
    </ul>
@endsection
