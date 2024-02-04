@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>Author: {{ $book->writer->name }}</p>
    <p>Published: {{ $book->publication_date }}</p>
    <!-- Add other book details as needed -->
@endsection
