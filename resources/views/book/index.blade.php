

@extends('layouts.master')


@section('title')
    All Books
@endsection




@section('content')
    <h1>All Books</h1>

    @foreach($books as $title => $book)

        <div class="book">
            <h1>{{ $title }}</h1>
            Authored by {{ $book['author'] }}

        </div>


    @endforeach

@endsection

