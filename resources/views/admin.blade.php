@extends('layouts.app')

@section('content')

<div class="shoppage">
	<div class="shopheader_bg">
    	<div class="container">
			<div class="row">
				<h1 class="cover-heading text-center shopheader">Admin Dashboard</h1>
			</div>
		</div>
    </div>
    <div class="authpages">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>
                        <div class="panel-body">
                            <table>
                                <thead>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-Mail</th>
                                <th>Guest</th>
                                <th>User</th>
                                <th>Admin</th>
                                <th></th>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <form action="{{ route('admin.assign') }}" method="post">
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                                            <td><input type="checkbox" {{ $user->hasRole('Guest') ? 'checked' : '' }} name="role_guest"></td>
                                            <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                                            <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                                            {{ csrf_field() }}
                                            <td><button type="submit">Assign Roles</button></td>
                                        </form>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection