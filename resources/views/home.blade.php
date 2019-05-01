@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td colspan="2">{{ __('Physical server information') }}</td>
                                    </tr>
                                    <tr>
                                        <td>CPU {{ __('use rate') }}</td>
                                        <td>100 %</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Memory') }} {{ __('use rate') }}</td>
                                        <td>100 %</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Storage') }} {{ __('use rate') }}</td>
                                        <td>100 %</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Document Links') }}</div>
                        <div class="card-body">
                            <a href="">{{ __('OvirtManager usage manual') }}</a><br>
                            <a href="https://github.com/ry-i-system/dev-ovirt-manager">{{ __('OvirtManager source code (GitHub)') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
