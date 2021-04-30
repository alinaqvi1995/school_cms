@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $users->id }}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $users->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $users->email }}">
                        </div>

                        <button class="btn btn-success">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
