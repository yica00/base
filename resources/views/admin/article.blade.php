@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <table class="tablePanel2" >
            <tr>
                <th>名称</th>
                <th width="50%" ></th>
                <th>操作</th>
            </tr>
            @foreach($permission as $sort)
                <tr >
                    <td>{{ $sort->title  }} </td>
                    <td> </td>
                    <td>
                        <a class="act-btn" href="/admin/article/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" href="/article/{{$sort->id}}/look">查看内容</a>
                        <a class="act-btn" href="/article/{{$sort->id}}/addson">添加内容</a>
                       @if( $sort->pid != 0 )
                            <a class="act-btn" href="/article/{{$sort->id}}/delete">删除</a>
                        @endif
                        </td>
                </tr>
            @endforeach
        </table>
        <div class="pagenav">
            {{--{{ $permission->links() }}--}}
        </div>
    </div>

@endsection