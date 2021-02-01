@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add new category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update',['category' => $category->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           autocomplete="name" autofocus value="{{$category->name}}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status"
                                       class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="status" name="status">
                                        <option
                                            value="enable" {{ $category->status == "enable" ? "selected" : '' }}>{{__('Enable')}}</option>
                                        <option
                                            value="disable" {{ $category->status == "disable" ? "selected" : '' }}>{{__('Disable')}}</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
