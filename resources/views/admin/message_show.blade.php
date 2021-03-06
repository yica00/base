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

                        <h3>查看留言</h3>
                        <form class="form-horizontal" role="form" method="get" action=" " >
                            <div class="form-group">
                                <label class="col-md-3 control-label">名字</label>
                                <div class="col-md-8">
                                    <input id="email" class="form-control" name="name"  value="{{  $message->name }}"  disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">电话</label>
                                <div class="col-md-8">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->phone  }}" disabled="true" autofocus>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-3 control-label">邮箱</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="email"  class="form-control" name="email" value="{{  $message->email }}" disabled="true" autofocus>--}}
                                {{--</div>--}}
                            {{--</div>--}}



                            <div class="form-group">
                                <label class="col-md-3 control-label">留言时间</label>
                                <div class="col-md-8">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->created_at  }}" disabled="true" autofocus>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-3 control-label">留言内容</label>
                                <div class="col-md-8">
                                    <div id="xx2" style="border-style:solid;border-color:#b1b7ba;padding: 10px;border-radius:5px">{!!  $message->message !!}</div>
                                    {{--<textarea rows="10" cols="50" disabled="true" class="form-control" id="xx2"></textarea>--}}
                                </div>
                            </div>


                        </form>
                            <div><a href="/admin/message" style="float: right">返回留言列表</a></div>
                    </div>
                </div>
            </div>

        </div>

@endsection