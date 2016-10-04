@extends('layouts.master')
@section('content') 
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Roles</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <table>
                        <thead>                      
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>User</th>
                        <th>Author</th>
                        <th>Admin</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                             {{--  <form action="{{ route('admin.assign') }}" method="post">    --}} 
                                    <td>{{ $user->name }}</td>          
                                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                                    <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                                    <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                                    <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                                    {{ csrf_field() }}
                                    <td><button type="submit">Assign Roles</button></td>
              {{--                  </form> --}} 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
@endsection