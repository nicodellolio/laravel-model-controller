@extends('layouts.app')

@section('content')


    <div class="container movie_container">
        <div class="row row-cols-2 g-4">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card h-100 p-3 border-5 border-warning">
                    <div class="card-title titolo fw-semibold">
                        {{ $movie['title'] }}
                    </div>

                    <div class="subtitles d-flex justify-content-between pb-3 fs-3">
                        <div class="card-subtitle fs-2">
                            {{ $movie['original_title'] }}
                        </div>
                        <div class="">
                            {{ $movie['date'] }}
                        </div>

                    </div>

                    <div class="card-footer d-flex justify-content-between fs-3 p-3 bg-warning">
                        <div class="text">
                            {{ $movie['nationality'] }}
                        </div>
                        <div class="text fs-2 fw-bold">
                            {{ $movie['vote'] }}
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection
