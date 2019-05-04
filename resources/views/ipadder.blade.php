@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">{{ __('IP Address List') }}</div>

                <div class="card-body">
                    <strong>VLAN1</strong>
                    <form name="vlan1_ipaddr" method="POST" action="/ipaddr/vlan1">
                        @csrf
                        <div class="table-responsive-sm common-table">
                            <table class="table table-bordered table-sm">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('IP Address') }}</th>
                                        <th>{{ __('Used VM') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Comment') }}</th>
                                        <th>{{ __('Edit') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($vlan1_lists as $vlan1_list)
                                    <tr>
                                        <td>{{ $vlan1_list->vlan1_ipaddr }}</td>
                                        <td>{{ $vlan1_list->vm_name }}</td>
                                        @switch($vlan1_list->use_flag)
                                            @case(0)
                                                <td>{{ __('Used Server') }}</td>
                                                @break
                                            @case(1)
                                                <td>{{ __('Used Virtual IP') }}</td>
                                                @break
                                            @case(2)
                                                <td>{{ __('Used Network') }}</td>
                                                @break
                                            @case(3)
                                                <td>{{ __('Used Printer') }}</td>
                                                @break
                                            @case(4)
                                                <td>{{ __('Unused') }}</td>
                                                @break
                                        @endswitch
                                        <td>{{ __($vlan1_list->comment) }}</td>
                                        <td><input type="submit" class="btn btn-outline-secondary btn-sm" value="{{ __('Edit') }}"></td>
                                        <input type="hidden" value="{{ $vlan1_list->vlan1_ipaddr }}">
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <br>
                    <strong>VLAN2</strong>
                    <form name="vlan2_ipaddr" method="POST" action="/ipaddr/vlan2">
                        @csrf
                        <div class="table-responsive-sm common-table">
                            <table class="table table-bordered table-sm">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('IP Address') }}</th>
                                        <th>{{ __('Used VM') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Comment') }}</th>
                                        <th>{{ __('Edit') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($vlan2_lists as $vlan2_list)
                                    <tr>
                                        <td>{{ $vlan2_list->vlan2_ipaddr }}</td>
                                        <td>{{ $vlan2_list->vm_name }}</td>
                                        @switch($vlan2_list->use_flag)
                                            @case(0)
                                                <td>{{ __('Used Server') }}</td>
                                                @break
                                            @case(1)
                                                <td>{{ __('Used Virtual IP') }}</td>
                                                @break
                                            @case(2)
                                                <td>{{ __('Used Network') }}</td>
                                                @break
                                            @case(3)
                                                <td>{{ __('Used Printer') }}</td>
                                                @break
                                            @case(4)
                                                <td>{{ __('Unused') }}</td>
                                                @break
                                        @endswitch
                                        <td>{{ __($vlan2_list->comment) }}</td>
                                        <td><input type="submit" class="btn btn-outline-secondary btn-sm" value="{{ __('Edit') }}"></td>
                                        <input type="hidden" value="{{ $vlan2_list->vlan2_ipaddr }}">
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
