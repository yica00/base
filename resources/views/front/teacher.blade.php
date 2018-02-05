@extends('front.base')
@section('content')
    <link rel="stylesheet" href="/css/paginate.css">
<!-- bread -->
<div class="bread">
  <h2>师资团队</h2>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <ul class="teacher_list_o teacher_list_in">
        @foreach( $teams as $team )
          <li>
            <a href="/team/{{$team->id}}">
              <span class="pic"><img src="{{$team->photo}}" alt="" /></span>
              <div class="txt">
                <h2>{{$team->name}}</h2>
                <p>{{$team->honor}}</p>
                <p>{{$team->title}}</p>
              </div>
            </a>
          </li>
            @endforeach
        </ul>
{{$teams->links()}}
    <!-- end -->
  </div>
</div>


<!-- footer -->
@endsection