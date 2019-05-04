@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">{{ __('Account Information') }}</div>

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('E-Mail Address') }}</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
