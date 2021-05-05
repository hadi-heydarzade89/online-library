@extends('layouts.app')

@section('content')
    {{--{{dd($categories)}}--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">{{ __('All Books') }}
                        <a class="" href="{{route('books.create')}}">
                            {{__('Create Book')}}
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Book</th>
                                <th>Short Description</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>Author</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->short_description}}</td>
                                    <td>
                                        {{$book->description}}
                                        {{--                                        <a href="{{route('categories.edit',['category'=>$category->id])}}">{{__('Edit')}}</a>--}}
                                    </td>
                                    <td>
                                        {{$book->status}}
                                    </td>
                                    <td>
                                        {{$book->category->name}}
                                    </td>
                                    <td>
                                        {{$book->authors->pluck('surname')}}
{{--                                        {{$book->authors->name}}--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
