@extends('welcome')
@section('content')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Avatar</th>
            <th scope="col">FullName</th>
            <th scope="col">Sex</th>
            <th scope="col">Birthday</th>
            <th scope="col">Email</th>
            <th scope="col">Country</th>
            <th scope="col">Job</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th style="color: black" scope="row">
                {{$user->id}}
            </th>
            <td>
                <img src="{{$user->avatar}}" style="max-width: 50px">
            </td>
            <td style="color: black">{{$user->fullName}}</td>
            <td  style="color: black">
                @if($user->sex==1)
                    Nam
                @else
                    Nữ
                @endif
            </td>
            <td style="color: black">
                {{date("Y-m-d",$user->birthday)}}
            </td>
            <td style="color: black">{{$user->email}}</td>
            <td style="color: black">{{$user->country}}</td>
            <td style="color: black">{{$user->job}}</td>
            <td style="color: black">
                @if($user->role==1)
                    Admin
                @else
                    Normal
                @endif
            </td>
            <td style="text-align: center;color: black">
                @if($user->status==1)
                    <i class="fas fa-user-check" style="font-size: 30px;color: blue"></i>
                @else
                    <i class="fas fa-times-circle" style="font-size: 30px;color: red"></i>
                @endif
            </td>
            <td style="text-align: center;color: black">
                <a href=""><i class="fas fa-eye-dropper" style="color: orange;font-size: 25px"></i></a>
                <a href=""><i class="fas fa-trash-alt" style="color: firebrick;font-size: 25px"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div style="margin-left: 35%">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{$users->links()}}
            </ul>
        </nav>
    </div>
@endsection
