@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="table-responsive">
        <table class="table mb-0 thead-border-top-0 table-striped">
            <thead>
                <tr>
                    <th class="w-30px" class="text-center">{{ __('#id') }}</th>
                    <th>{{ __('account') }}</th>
                    <th>{{ __('name') }}</th>
                    <th>{{ __('email') }}</th>
                    <th class="text-center width: 120px;">{{ __('created_at') }}</th>
                </tr> 
            </thead>
            <tbody class="list" id="users">
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <div class="badge">#{{ $user->id }}</div>
                        </td>
                        <td>
                            <div class="badge">{{ $user->host }}</div>
                        </td>
                        <td> 
                            <p class="mb-0">{{ $user->name }}</p>
                        </td>
                        
                        <td>
                            <p class="mb-0">{{ $user->email }}</p>
                        </td>
                        
                        <td class="text-center"><i class="material-icons icon-16pt text-muted-light mr-1"></i> {{ $user->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection