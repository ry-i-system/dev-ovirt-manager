@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <p>{{ __('Physical server status') }}</p>
                            <div class="table-responsive col-md-6">
                                <table class="table table-bordered">
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
                            <br>
                            <p>{{ __('IP address status') }}</p>
                            <div class="table-responsive col-md-6">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>VLAN1 {{ __('In use') }}</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>VLAN1 {{ __('Available') }}</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>VLAN2 {{ __('In use') }}</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>VLAN2 {{ __('Available') }}</td>
                                        <td>100</td>
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
                    <div class="card shadow">
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
