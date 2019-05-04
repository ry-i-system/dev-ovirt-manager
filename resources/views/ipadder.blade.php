@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">{{ __('IP Address List') }}</div>

                <div class="card-body">
                    <p>VLAN1</p>
                    <pre>{{ $vlan1_lists }}</pre>
                    <br>
                    <p>VLAN2</p>
                    <pre>{{ $vlan2_lists }}</pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
