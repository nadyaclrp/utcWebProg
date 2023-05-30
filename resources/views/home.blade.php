@extends('layout.master')
@section('title', 'Home Page')
@section('content')
    <div class="h-10 w-[90%] bg-orange-200 m-auto font-bold p-2 mb-2">Highlight Book Section</div>
    <div class="w-[90%] flex flex-row  p-2 mb-2 m-auto ">
        <div class="bg-red-200 w-[30%] h-[15vw]"></div>
        <div class="">
            {{-- @foreach ($highlights as $high)
            <h1>{{ $high->Post->title }}</h1>
            <h3>{{ $high->Post->description }}</h3>
            @endforeach --}}
        </div>
    </div>
    <div class="h-10 w-[90%] bg-orange-200 m-auto font-bold p-2 mb-2">Latest Book Section</div>
    <div class="w-[90%] flex flex-row  p-2 mb-2 m-auto ">
        {{-- @foreach ($mosted as $most)
        <div class="grid grid-cols-4">
            {{ $most->title }}
        </div>
        @endforeach --}}
    </div>
    <div class="h-10 w-[90%] bg-orange-200 m-auto font-bold p-2 mb-2">Book Series Review</div>
    <div class="w-[90%] grid grid-cols-3  p-5 mb-2 m-auto gap-5">
        @php
            use App\Models\Post;
            $books = App\Models\Post::all();
        @endphp
        @foreach ($books as $book)
        <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">

                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="{{ $book->image }}" />
                <div class="p-5">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $book->title }}
                    </h5>
                    <a href="/detail/{{ $book->id }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read post
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
    </div>
@endsection
