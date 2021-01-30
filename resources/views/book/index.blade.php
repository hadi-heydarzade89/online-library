@extends('layouts.app')

@section('content')
    {{--{{dd($categories)}}--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                @foreach($books as $book)
                    <div class="col-2 col-lg-3">
                        <div>{{__('book name: ')}} <br /> {{$book->name}}</div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
