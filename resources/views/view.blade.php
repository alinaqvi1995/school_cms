@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @foreach ($user as $user)
                        
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            {{ $user->email }}
                        </div>
                    </div>
                    @endforeach

                    <div class="col-md-6">
                        <a href="/edit/{{ $user->id }}" class="btn btn-primary">Edit</a>
                        <a href="/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
