@extends('layouts.app')

@section('content')


    <div class="">
        <ul>
            @foreach ($movies as $movie)
                <li>
                    {{ $movie['title'] }}
                </li>
            @endforeach
        </ul>
    </div>


@endsection
