@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div style="color: red">
                                <ul>
                                    @if( is_object($errors) )
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    @else
                                        {{ $errors }}
                                    @endif
                                </ul>
                            </div>
                        @endif

                        <h3>编辑员工</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/team/{{  $team->id }} " enctype="multipart/form-data"  style="margin-left: -30%">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">名字</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control" name="name"  value="{{  $team->name }}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">头像</label>
                                <div class="col-md-6">
                                    <input id="email" type="file"  class="form-control" name="photo" autofocus>
                                    <img src="{{  $team->photo }}" width="50" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">年级</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="title"  value="{{  $team->title }}" autofocus>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">科目</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="honor"  value="{{$team->honor}}" autofocus>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">教学理念</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="4" name="good_at" >{{$team->good_at}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">简介</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="5" name="introduce" >{{$team->introduce}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        修改
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

@endsection