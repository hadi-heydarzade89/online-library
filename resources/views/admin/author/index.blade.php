@extends('layouts.app')

@section('content')
    {{--{{dd($categories)}}--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        {{ __('All Authors') }}
                        <div class="card-link">
                            <a class="" href="{{route('authors.create')}}">
                                {{__('Create Author')}}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($authors))
                                @foreach($authors as $author)
                                    <tr>
                                        <td>
                                            {{$author->name}}
                                        </td>
                                        <td>
                                            {{$author->surname}}
                                        </td>
                                        <td>
                                            {{$author->description}}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        {{__('We dont have any authors yet.')}}
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
