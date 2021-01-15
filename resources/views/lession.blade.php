@extends('welcome')
@section('content')
    @foreach($lessions as $lession)
        <div>
            <a href="{{URL::to('danh-sach-cau-hoi/'.$lession->id)}}">{{$lession->name}}</a>
        </div>
    @endforeach
@endsection
