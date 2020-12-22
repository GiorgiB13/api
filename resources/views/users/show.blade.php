@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <div>
                            {{$user->name}}
                        </div>

                        <div>
                            <img src="{{asset('images/'.$user->image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
