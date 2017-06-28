@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;营销服务&nbsp;&nbsp;--</h2>
        <p>Marketing services</p>
      </div>
      <!-- <p class="page_nav clearfix">
          <a href="about.html" class="on">星维简介</a><a href="about.html">企业文化</a><a href="office.html">办公环境</a><a href="office.html">优秀团队</a><a href="office.html">荣誉资质</a>
      </p> -->
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div  class="base_top">
      <p style="color:red;font-size:24px;">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p>
      <br/>
      <p>宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="sub_con_t clearfix">
      <div class="dl_l fr">
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
          <form class="on_form" action="/front/message" method="post">
            {{  csrf_field() }}
            <p><input type="text" value="" name="name" id="" class="input" placeholder="姓名"></p>
            <p><input type="text" value="" name="email" id="" class="input" placeholder="邮箱"></p>
            <p><input type="text" value="" name="phone" id="" class="input" placeholder="手机"></p>
            <p><textarea name="message" class="textarea" id="" value="" placeholder="留言"></textarea></p>
            <p><button type="submit" class="submit_but">&nbsp;</button></p>
          </form>
        </div>
        <div class="img fl">
          <img src="images/quote.jpg">
        </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection