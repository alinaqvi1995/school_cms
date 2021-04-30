@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="col-md-6">
                        <a href="view/{{ Auth::user()->id }}" class="btn btn-info">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
