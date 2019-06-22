@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">{{ __('Servers List') }}</div>

                <div class="card-body">
                    <pre>{{ $vms['vm'] }}</pre>
                    <pre>{{ $vmlists }}</pre>
                    {{-- <form name="server_detail" method="POST" action="/servers/server_detail">
                        @csrf
                        <div class="table-responsive-sm common-table">
                            <table class="table table-bordered table-sm">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Detail') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($vms['vm'] as $vm)
                                    <tr>
                                        <td>{{ $vm->name }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form> --}}
                    <form name="server_detail" method="POST" action="/servers/server_detail">
                        @csrf
                        <div class="table-responsive-sm common-table">
                            <table class="table table-bordered table-sm">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Detail') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($vmlists as $vmlist)
                                    <tr>
                                        <td>{{ $vmlist->vm_name }}</td>
                                        <td></td>
                                        <td></td>
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
