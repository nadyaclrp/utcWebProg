@extends('layout.master')
@section('title', 'Post Detail Page')
@section('content')
{{-- <h1 class="font-lg">gdfdafads</h1> --}}
<h1 class="text-3xl">{{ $books->title }}</h1>
<h3 class="text-xl">{{ $books->description }}</h3>
<h3 class="text-xl">By {{ $books->author }} | {{ $books->date }}</h3>
@if ($books->readingTime < 5)
    <div class="bg-red-200 w-[20vw] h-[20vw] text-xl"> Quick Reads<div>
@elseif ($books->readingTime >= 5 && $books->readingTime < 8)
    <div class="bg-blue-200 w-[20vw] h-[20vw] text-xl"> Medium Reads<div>
@else
    <div class="bg-yellow-200 w-[20vw] h-[20vw] text-xl"> Long Reads<div>
@endif
<img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="{{ $books->image }}" />
<h4 class="text-lg">{{ $books->body }}</h4>
@endsection
