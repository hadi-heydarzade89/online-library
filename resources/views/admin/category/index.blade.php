@extends('layouts.app')

@section('content')
    {{--{{dd($categories)}}--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">{{ __('Add new category') }}
                        <a class="" href="{{route('categories.create')}}">
                            {{__('Create Category')}}
                        </a></div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <a href="{{route('categories.edit',['category'=>$category->id])}}">{{__('Edit')}}</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $category['id']) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button>Delete</button>
                                        </form>
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
