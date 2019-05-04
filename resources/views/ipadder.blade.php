@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">{{ __('IP Address List') }}</div>

                <div class="card-body">
                    <pre>{{ $vlan1_lists }}</pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
