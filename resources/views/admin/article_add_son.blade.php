@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>

    <h3 style="float: right;margin-top: 2%"><a href="@if( $id == 0 )
                /admin/article
              @else
                /article/{{ $id }}/look
               @endif">返回上级</a></h3>
    <div class="main-wrap fadeInRight">
        <h3><a>添加【@if( $article ){{$article->title}}@else 顶层 @endif】的子类</a></h3>
        <form class="form-horizontal" action="/article/add_son/{{ $id }}" enctype="multipart/form-data" method="post" >
            {{ csrf_field()  }}
            <div class="form-group">

                <hr style="border-bottom-color: #000000;height:2px;">
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
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">栏目标题</label>
                <div class="col-md-8">
                    <input  class="form-control" name="title"   autofocus>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">缩略图</label>
                <div class="col-md-8">
                    <input class="form-control"  name="thumbnail" type="file" >
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">链接地址</label>
                <div class="col-md-8">
                    <input  class="form-control" name="link"   autofocus>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">排序数字</label>
                <div class="col-md-8">
                    <input  class="form-control" name="serial_number" value="0" type="number"  autofocus>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">是否设置导航</label>
                <div class="col-md-8">
                    <select name="is_nav" class="form-control">
                        <option value="0" >不设导航</option>
                        <option value="1" >设导航</option>
                    </select>
                </div>
            </div>

            <input name="pid" hidden="hidden" value="{{ $id }}">

            <div class="form-group">
                <label  class="col-md-2 control-label">简介</label>
                <div class="col-md-8">
                    <textarea class="form-control" rows="3"  name="introduce" ></textarea>
                </div>
            </div>

            @if( $id != 0 )
            <div class="form-group">
                <label  class="col-md-2 control-label">正文</label>
                <div class="col-md-8">
                    <script id="container" name="comtent" type="text/plain"> </script>
                </div>
            </div>
            <!-- 加载编辑器的容器 -->

            <!-- 配置文件 -->
            <script type="text/javascript" src="/akl/Ueditor/ueditor.config.js"></script>
            <!-- 编辑器源码文件 -->
            <script type="text/javascript" src="/akl/Ueditor/ueditor.all.js"></script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container', {
                    autoHeightEnabled: true,
                    autoFloatEnabled: true,
                    initialFrameWidth : 'auto',
                    initialFrameHeight: 400
                });


            </script>
            @endif
            <input class="btn btn-primary" style="margin-left: 40%" type="submit" name="send" value="添加" />
        </form>
    </div>

@endsection