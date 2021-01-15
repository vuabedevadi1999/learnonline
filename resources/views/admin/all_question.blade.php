@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê danh sách bài học
            </div>
            <div class="row w3-res-tb">
                <form action="{{URL::to('/api/question')}}" method="get">
                    <div class="col-sm-5 m-b-xs">
                        <select style="max-width: 300px" name ="lession" class="input-sm form-control w-sm inline v-middle">
                            @foreach($lessions as $lession)
                                @if(isset($lession_id))
                                    @if($lession_id==$lession->id)
                                        <option value="{{$lession->id}}" selected="selected">{{$lession->name}}</option>
                                    @else
                                        <option value="{{$lession->id}}">{{$lession->name}}</option>
                                    @endif
                                @else
                                    <option value="{{$lession->id}}">{{$lession->name}}</option>
                                @endif

                            @endforeach
                        </select>
                        <button style="width: 100px;" class="btn btn-secondary">Xem</button>
                    </div>
                </form>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="font-weight-bold"><b>ID</b></th>
                        <th class="font-weight-bold">Question</th>
                        <th class="font-weight-bold">Answer 1</th>
                        <th class="font-weight-bold">Answer 2</th>
                        <th class="font-weight-bold">Correct Answer</th>
                        <th class="font-weight-bold">Status</th>
                        <th class="font-weight-bold">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Item -->
                    @foreach($questionnaire as $question)
                    <tr>
                        <td>
                            <span class="font-weight-bold">{{$question->id}}</span>
                        </td>
                        <td class ="text-style" style="max-width: 150px;">
                            <span class="font-weight-bold">
                                {{$question->question}}
                            </span>
                        </td>
                        <td class = "text-style"><span class="font-weight-bold">{{$question->answer1}}</span></td>
                        <td class = "text-style"><span class="font-weight-bold">{{$question->answer2}}</span></td>
                        <td class = "text-style"><span class="font-weight-bold">{{$question->correctAnswer}}</span></td>
                        @if($question->status==1)
                            <td><span class="font-weight-bold text-success">Paid</span></td>
                        @else
                            <td><span class="font-weight-bold text-danger">Cancel</span></td>
                        @endif
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="icon icon-sm">
                                                        <span class="fas fa-ellipsis-h icon-dark"></span>
                                                    </span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{URL::to('/api/question/detail/'.$question->id)}}"><span class="fas fa-eye mr-2"></span>View Details</a>
                                    <a class="dropdown-item" href="{{URL::to('/api/question/edit/'.$question->id)}}"><span class="fas fa-edit mr-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger" href="{{URL::to('/api/question/delete/'.$question->id)}}"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Item -->
                    </tbody>
                </table>
                <div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            {{$questionnaire->links()}}
                        </ul>
                    </nav>
                    <div class="font-weight-bold small">Showing <b>{{sizeof($questionnaire)}}</b> entries</div>
                </div>
            </div>
        </div>
    </div>
@endsection
