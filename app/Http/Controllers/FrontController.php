<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Car;
use App\Models\Admin\Order_list;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index()
    {
        $sliders = $this->getSliders();
//        $items = $this->getItem();
        $teams = $this->getTeam();
        $envs = $this->getEnv();
        $envsss = $this->getEnvss();
        $envsssss = $this->getEnvssss();
        $envssssss = $this->getEnvssssss();
        $envssssssss = $this->getEnvssssssss();
        $envssssssssss = $this->getEnvssssssssss();
        $honors = $this->getHonor();
        $equipments = $this->getEquipment();
//        $newss = $this->getNews();
//        $cases = $this->getCases();
//        $noliges = $this->getNlige();
        $arti = Article::find(39);

        return view('front.index',compact('envssssssss','envsss','arti','sliders','envssssss'
            ,'envsssss','newss','envs','equipments','envssssssssss','teams','honors'));
    }


    public function getLink(){
        $Articles = Article::where('pid',26)->orderBy('serial_number','desc')->orderBy('id','desc')->take(14)->get();
        return $Articles;
    }
    public function getItem(){
        $Articles = Article::with('team')->with('articles')->where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->get();
        return $Articles;
    }
    public function getVitness(){
        $Articles = Article::where('pid',28)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $Articles;
    }
    public function getNlige(){
        $Articles = Article::whereIn('pid',[14,15])->orderBy('serial_number','desc')->orderBy('id','desc')->take(14)->get();
        return $Articles;
    }
    public function getNews(){
        $articles = Article::where('pid',13)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getActive(){
        $articles = Article::where('pid',5)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getDish(){
        $articles = Article::where('pid',3)->orderBy('serial_number','desc')->orderBy('id','desc')->take(10)->get();
        return $articles;
    }
    public function getStore(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->take(10)->get();
        return $articles;
    }
    public function getEnv(){
        $articles = Article::where('pid',33)->orderBy('serial_number','desc')->orderBy('id','asc')->take(6)->get();
        return $articles;
    }
    public function getEnvss(){
        $articles = Article::where('pid',36)->orderBy('serial_number','desc')->orderBy('id','asc')->take(6)->get();
        return $articles;
    }
    public function getEnvssss(){
        $articles = Article::where('pid',39)->orderBy('serial_number','desc')->orderBy('id','asc')->take(6)->get();
        return $articles;
    }
    public function getEnvssssss(){
        $articles = Article::where('pid',42)->orderBy('serial_number','desc')->orderBy('id','asc')->take(6)->get();
        return $articles;
    }
    public function getEnvssssssss(){
        $arts = Article::where('pid',45)->get();
        $ids = getIds($arts);
        $articles = Article::with(['articles'=>function($query){
            $query->orderBy('serial_number','desc')
                ->orderBy('id','asc');
        }])->whereIn('id',$ids)
            ->orderBy('serial_number','desc')
            ->orderBy('id','asc')->get();
        return $articles;
    }
    public function getEnvssssssssss(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','asc')->take(3)->get();
        return $articles;
    }
    public function getHonor(){
        $articles = Article::where('pid',5)->orderBy('serial_number','desc')->orderBy('id','asc')->take(6)->get();
        return $articles;
    }
    public function getEquipment(){
        $articles = Article::where('pid',51)->orderBy('serial_number','desc')->orderBy('id','asc')->take(11)->get();
        return $articles;
    }
    public function getAbout(){
        $articles = Article::find(33);
        return $articles;
    }
    public function getService(){
        $articles = Article::where('pid',44)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
        return $articles;
    }
    public function getCases(){
        $articles = Article::with('articles')->where('pid',6)
            ->orderBy('id','asc')->take(4)->get();
        foreach ( $articles as $k=>$article ){
            $pattern = "/(?:\/Uploads).*?(?=\")/";
            preg_match_all($pattern,$article->articles[0]->comtent,$matches);
            $articles[$k]->ims = $matches[0];
        }
        return $articles;
    }
    public function getBrands(){
        $article = Article::where('pid',6)->orderBy('serial_number','desc')
            ->orderBy('id','desc')->take(12)->get();
        return $article;
    }
    public function getTeam(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','asc')->take(6)->get();
        return $articles;
    }
    public function getModels(){
        $article = Article::find(15);
        return $article;
    }

    public function getTeachers(){
        $introduce = Teams::take(6)->get();
        return $introduce;
    }
    public function getProduct()
    {
        $firsts = Article::where('pid',3)->orderBy('serial_number','desc')->take(6)->get();
//        $arrs = [];
//        for( $j=0;$j<count($firsts);$j++ ){
//            $seconds = Article::where('pid',$firsts[$j]->id)->orderBy('serial_number','desc')->get();
//            $thirds = Article::where('pid',$seconds[0]->id)->orderBy('serial_number','desc')->get();
//            $articles = Article::select('id','title','link','thumbnail')->orderBy('id','asc')
//                ->where('pid',$thirds[0]->id)->orderBy('serial_number','desc')->take(6)->get();
//            $firsts[$j]->articles = $articles;
//            $arrs[] = $firsts[$j];
//        }
        return $firsts;
    }
    public function getProdetail($products){
        $ids = getIds($products);
        $product = Article::select( 'title', 'id','thumbnail','link','comtent')->whereIn('pid', $ids)->orderBy('id', 'desc')->take(6)->get();
        return $product;
    }
    public function getSliders()
    {
        $sons = Article::select('thumbnail','link','id','pid')->where('pid',30)
            ->orderBy('id','desc')->orderBy('serial_number','desc')->get();
        return $sons;
    }



    public function about( $id=8 ){
        $article = Article::find($id);
        return view('front.about',compact('article','id'));
    }
    public function culture(){
        $article = Article::find(10);
        return view('front.about',compact('article'));
    }
    public function brand(){
        $article = Article::find(11);
        $article->comtent = get_article_imgs($article->comtent,10);
        return view('front.brand',compact('article'));
    }
    public function video(){
        $article = Article::where('pid',12)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($article,6);
        return view('front.video',compact('article','pages'));
    }

    public function video_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.video_in',compact('article','up_down'));
    }

    public function menu_list(){
        $articles = Article::where('pid',3)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(9);
        $pages = getPage($articles,9);
        return view('front.menu',compact('articles','pages'));
    }

    public function store_list(){
        $articles = Article::where('pid',4)->orderBy('id','desc')->paginate(3);
        $pages = getPage($articles,3);
        return view('front.store',compact('articles','pages'));
    }

    public function store_dedail($id){
        $article = Article::find($id);
        $article->comtent = get_article_imgs($article->comtent,40);
        return view('front.store_in',compact('article'));
    }

    public function classs( $id=12  ){
        $articles = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
//        $pages = getPage($articles,3);
        return view('front.class',compact('articles','pages','id'));
    }
    public function class_detail($id){
        $article = Article::find($id);
//        $article->comtent = get_article_imgs($article->comtent,40);
        return view('front.class_in',compact('article'));
    }
    public function jzkc(){
        $articles = Article::where('pid',129)->orderBy('serial_number','desc')->orderBy('id','desc')->get();
        return view('front.jzkc',compact('articles'));
    }

    public function active_list(){
        $articles = Article::where('pid',5)->orderBy('id','desc')->paginate(3);
        $pages = getPage($articles,3);
        return view('front.active',compact('articles','pages'));
    }

    public function active_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.active_in',compact('article','up_down'));
    }

    public function join_detail( $id=13 ){
        $article = Article::find($id);
        return view('front.join',compact('article','id'));
    }

    public function join_suply(){
        return view('front.suply');
    }

    public function organization(){
        $article = Article::find(12);
        $nav = 2;
        $sty = "/organization";
        return view('front.about',compact('nav','article','sty'));
    }
    public function speech(){
        $article = Article::find(13);
        $nav = 2;
        $sty = "/speech";
        return view('front.about',compact('nav','article','sty'));
    }
    public function history(){
        $articles = Article::where('pid',14)->get();
        $nav = 2;
        $sty = "/history";
        return view('front.history',compact('nav','sty','articles'));
    }
    public function team(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->paginate(8);
        return view('front.team',compact('articles','pages'));
    }
    public function team_detail($id){
        $team = Article::find($id);
//        $articles = Article::whereIn('id',$ids)->orderBy('serial_number','desc')->get();
        return view('front.team_in',compact('team','articles'));
    }

    public function environment( $id=15 ){
        $articles = Article::where('pid',$id)->orderBy('serial_number','desc')->paginate(8);
        return view('front.environ',compact('articles','pages','id'));
    }
    public function environment_detail($id){
        $team = Article::find($id);
//        $articles = Article::whereIn('id',$ids)->orderBy('serial_number','desc')->get();
        return view('front.environ_in',compact('team','articles'));
    }

    public function student( ){
        $articles = Article::where('pid',54)
            ->orderBy('serial_number','desc')->paginate(6);
        $id = 0;
        return view('front.student',compact('articles','pages','id'));
    }
    public function student_detail($id){
        $team = Article::find($id);
//        $articles = Article::whereIn('id',$ids)->orderBy('serial_number','desc')->get();
        return view('front.student_in',compact('team','articles'));
    }

    public function honor(){
        $articles = Article::where('pid',12)->get();
        return view('front.environ',compact('articles'));
    }
    public function env(){
        $articles = Article::where('pid',11)->orderBy('serial_number','desc')->get();
        return view('front.environ',compact('articles'));
    }


    public function news( $id=13 ){
        $articles = Article::where('pid',6)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
//        $pages = getPage($articles,6);
        return view('front.news',compact('articles','pages','id'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.news_in',compact('pid','article','up_down'));
    }

    public function item( $id=16 )
    {
        $article = Article::with('articles')->find($id);
        return view('front.item', compact('article', 'id'));
    }
    public function item_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.item_in',compact('pid','article','up_down'));
    }
    public function equipment()
    {
        $articles = Article::with('articles')->where('pid', 7)->paginate(8);
        $pages = getPage($articles,8);
        return view('front.equip', compact('articles', 'pages'));
    }
    public function equipment_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.equip_in',compact('pid','article','up_down'));
    }




    public function product( $id=0 ){
//        $cid = Input::get('cid');
//        $tid = Input::get('tid');
//        $seconds = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
//        if( !$cid ){
//            $cid = $seconds[0]->id;
//        }
        $thirds = Article::where('pid',3)->orderBy('id','asc')->first();
        if( !$id ){
            $id = $thirds->id;
        }
        $title = Article::find($id);
        $articles = Article::where('pid',$id)->orderBy('serial_number','desc')
            ->orderBy('id','asc')->paginate(9);
        $pages = getPage($articles,9);
        return view('front.product',compact('articles','pages','id','thirds','title'));
    }
    public function product_detail($id){
        $article = Article::find($id);
        $article->comtent = get_article_imgs($article->comtent,30);
        $up_down = get_up_down_page($id,$article->pid);
//        $third = Article::find($article->pid);
//        $second = Article::find($third->pid);
        $pid = $article->pid;
        return view('front.product_in',compact('article','pid','up_down'));
    }


    public function doctor(){
        $nav = 4;
        $articles = Article::where('pid',4)->get();
        $article = Article::find(4);
        return view('front.doctor',compact('nav','articles','article'));
    }


    public function our_case(  ){
        $articles = Article::with('articles')->where('pid',6)->orderBy('id','asc')->paginate(6);
        foreach ( $articles as $k=>$article ){
            $pattern = "/(?:\/Uploads).*?(?=\")/";
            preg_match_all($pattern,$article->articles[0]->comtent,$matches);
            $articles[$k]->ims = $matches[0];
//            $articles[$k]->ims = get_article_imgs($article->articles[0],2)[0];
        }
        $pages = getPage($articles,6);
        return view('front.case',compact('articles','pages','id'));
    }
    public function case_detail($id){
        $article = Article::with('articles')->find($id);
        foreach ( $article->articles as $k=>$artic ){
            $img = [];
            $pattern = "/(?:\/Uploads).*?(?=\")/";
            preg_match_all($pattern,$artic->comtent,$matches);
            $article->articles[$k]->comtent = $matches[0];
        }
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.case_in',compact('article','up_down'));
    }

    public function budge(){
        return view('front.budge');
    }

    public function sales_list( $id = 67 ){
        $nav = 7;
        $articles = Article::where('pid',23)->orderBy('id','asc')->get();
        $order_lists = Order_list::where('article_id',$id)->orderBy('id','desc')->paginate(10);
        $pages = getPage($order_lists,10);
        return view('front.list',compact('nav','articles','order_lists','pages','id'));
    }

    public function service(){
        $article = Article::find(7);
        return view('front.service',compact('article'));
    }
    public function witness(){
        $articles = Article::where('pid',28)->orderBy('serial_number','desc')->paginate(8);
        $pages = getPage($articles,8);
        return view('front.witness',compact('articles','pages'));
    }
    public function witness_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.witness_in',compact('article','up_down'));
    }

    public function contact(){
        $articles = Article::where('pid',18)->orderBy('id','asc')->get();
        return view('front.contact',compact('articles'));
    }
    public function message(){
        return view('front.online');
    }

    public function way()
    {
        $articles = Article::where('pid',5)->orderBy('id','asc')->get();
        return view('front.way', compact('articles'));
    }


    public function formartData($data)
    {
        foreach ($data as $da){
            $da->iterm = explode(',',$da->iterm);
        }
        return $data;
    }

    public function search(){
        $type =  Input::get('type');
        $value =  Input::get('value');

        if( !$type || !$value ){
            return back();
        }
        $arr = ['introduce','title'];

        $id = 17;
        $url = '?type='.$type.'&value='.$value;
        $seconds = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
        $cid = $seconds[0]->id;
        $thirds = Article::where('pid',$cid)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
        $tid = $thirds[0]->id;
        $cids= getIds($seconds);
        $all_thirds = Article::whereIn('pid',$cids)->get();
        $all_ids = getIds($all_thirds);

        $articles = Article::whereIn('pid',$all_ids)->where($arr[$type-1],'like','%'.$value.'%')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.product',compact('articles','pages','id','url','seconds','thirds','cid','tid'));
    }
}
