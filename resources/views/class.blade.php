@extends('welcome')
@section('content')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Subject</th>
            <th scope="col">Avatar</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classes as $user)
        <tr>
            <th  style="color: black" scope="row">
                {{$user->id}}
            </th>
            <td style="color: black">{{$user->name}}</td>
            <td style="color: black">
                {{$user->subject}}
            </td>
            <td style="color: black">
                <img src="{{$user->avatar}}" style="max-width: 150px">
            </td>
            <td style="color: black">
                @if($user->status==1)
                    <i class="fas fa-user-check" style="font-size: 30px;color: blue"></i>
                @else
                    <i class="fas fa-times-circle" style="font-size: 30px;color: red"></i>
                @endif
            </td>
            <td style="color: black">
                <a href=""><i class="fas fa-eye-dropper" style="color: orange;font-size: 25px"></i></a>
                <a href=""><i class="fas fa-trash-alt" style="color: firebrick;font-size: 25px"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div style="margin-left:30%">
        <nav aria-label="Page navigation example" style="justify-content: center">
            <ul class="pagination">
                {{$classes->links()}}
            </ul>
        </nav>
    </div>

@endsection
