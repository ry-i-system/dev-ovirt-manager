@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">{{ __('Servers List') }}</div>

                <div class="card-body">
                    <pre>{{ $vms }}</pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
