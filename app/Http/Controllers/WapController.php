<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;

class WapController extends Controller
{
    public function index()
    {
        $sliders = $this->getSliders();
        $items = $this->getItem();
        $teams = $this->getTeams();
        $envs = $this->getEnv();
//        $honors = $this->getHonor();
        $equipments = $this->getEquipment();
        $newss = $this->getNews();
        $cases = $this->getCases();

//        $noliges = $this->getNlige();

        return view('front.wap.index',compact('items','noliges','teams','sliders','cases','honors','newss','envs','equipments'));
    }


    public function getNews(){
        $articles = Article::where('pid',13)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getEquipment(){
        $articles = Article::where('pid',7)->orderBy('serial_number','desc')->orderBy('id','asc')->take(9)->get();
        return $articles;
    }
    public function getEnv(){
        $articles = Article::where('pid',11)->orderBy('serial_number','desc')->orderBy('id','asc')->take(6)->get();
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
    public function getTeams()
    {
        $teams = Teams::orderBy('id', 'asc')->get();
        return $teams;
    }
    public function getItem(){
        $Articles = Article::with('team')->with('articles')->where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->get();
        return $Articles;
    }
    public function getSliders(){
        $sons = Article::select('thumbnail','link','id','pid')->where('pid',125)
            ->orderBy('id','desc')->orderBy('serial_number','desc')->get();
        return $sons;
    }
    public function getStar(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getHonor(){
        $Articles = Article::where('pid',265)->orderBy('serial_number','desc')->orderBy('id','desc')->take(4)->get();
        return $Articles;
    }

    public function getPic(){
        $Articles = Article::where('pid',44)->orderBy('serial_number','asc')->get();
        foreach ( $Articles as $k=>$Arti ){
            if( $Arti->serial_number == 50 || $Arti->serial_number == 60 || $Arti->serial_number == 90){
                $Articles[$k]->comtent = get_article_imgs($Arti->comtent,40);
            }
        }
        return $Articles;
    }
    public function getClass(){
        $cat = Article::where('pid',2)->get();
        $ids = getIds($cat);
        $Articles = Article::whereIn('pid',$ids)->orderBy('serial_number','asc')->get();
        return $Articles;
    }
    public function getWork(){
        $teams = Article::with('articles')->orderBy('serial_number','desc')->where('pid',5)->take(5)->get();
        return $teams;
    }

    public function items( ){
        $articles = Article::with('team')->with('articles')->where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->get();
        return view('front.wap.item',compact('articles','id','cates','up_down'));
    }

    public function item_detail($id=16){
        $article = Article::with('articles')->find($id);
        return view('front.wap.item_in', compact('article', 'id'));
    }

    public function item_news($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.wap.item_news',compact('pid','article','up_down'));
    }

    public function our_case( ){
        $articles = Article::with('articles')->where('pid',6)->orderBy('id','asc')->paginate(6);
        foreach ( $articles as $k=>$article ){
            $pattern = "/(?:\/Uploads).*?(?=\")/";
            preg_match_all($pattern,$article->articles[0]->comtent,$matches);
            $articles[$k]->ims = $matches[0];
//            $articles[$k]->ims = get_article_imgs($article->articles[0],2)[0];
        }
        $pages = getPage($articles,6);
        return view('front.wap.case',compact('articles','pages','id'));
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
        return view('front.wap.case_in',compact('article','up_down'));
    }

    public function equipment()
    {
        $articles = Article::with('articles')->where('pid', 7)->paginate(8);
        $pages = getPage($articles,8);
        return view('front.wap.equip', compact('articles', 'pages'));
    }
    public function equipment_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.wap.equip_in',compact('pid','article','up_down'));
    }

    public function team(){
        $teams = Teams::select('id','name','photo','title')->orderBy('id','asc')->paginate(8);
//        $pages = getPage($teams,8);
        return view('front.wap.team',compact('teams','pages'));
    }
    public function team_detail($id){
        $team = Teams::find($id);
//        $articles = Article::whereIn('id',$ids)->orderBy('serial_number','desc')->get();
        return view('front.wap.team_in',compact('team','articles'));
    }
    public function team_compus($id){
        $team = Teams::with(['rcases'=>function( $qurey ) use($id) {
            $qurey->where('cate',1)->where('team_id',$id)->take(8);
        }])->find($id);
        return view('front.wap.compus_in2',compact('team'));
    }

    public function star(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.star',compact('articles','pages'));
    }
    public function star_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.wap.star_in',compact('article','up_down'));
    }

    public function work(){
        $articles = Article::where('pid',5)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.work',compact('articles','pages'));
    }
    public function work_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.wap.work_in',compact('article','up_down'));
    }
    public function honor(){
        $article = Article::find(12);
        $articles = Article::where('pid',12)->orderBy('serial_number','desc')->orderBy('id','desc')->get();
        return view('front.wap.environ',compact('articles','article'));
    }
    public function envs(){
        $article = Article::find(11);
        $articles = Article::where('pid',11)->orderBy('serial_number','desc')->orderBy('id','desc')->get();
        return view('front.wap.environ',compact('articles','article'));
    }
    public function honor_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.wap.honor_in',compact('article','up_down'));
    }

    public function news( $id=13 ){
        $articles = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        return view('front.wap.news',compact('articles','pages','id'));
    }

    public function new_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.wap.news_in',compact('pid','article','up_down'));
    }

    public function active_list( ){
        $articles = Article::where('pid',259)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.active',compact('articles','pages'));
    }
    public function active_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.wap.active_in',compact('pid','article','up_down'));
    }

    public function about(){
        $article = Article::find(9);
        return view('front.wap.about',compact('article'));
    }
    public function culture(){
        $article = Article::find(10);
        return view('front.wap.about',compact('article'));
    }
    public function video(){
        $articles = Article::where('pid',10)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.video',compact('articles','pages'));
    }
    public function video_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.wap.video_in2',compact('article','up_down'));
    }
    public function compus($id=28){
        $cates = Article::where('pid',11)->get();
        $article = Article::with('articles')->find($id);
        return view('front.wap.compus',compact('article','cates','id'));
    }
    public function compus_detail($id){
        $arti = Article::find($id);
        $article = Article::with('articles')->find($arti->pid);
        return view('front.wap.compus_in',compact('article'));
    }

    public function contact(){
        return view('front.wap.contact',compact('schools','classs'));
    }

    public function message(){
        return view('front.wap.order');
    }


}
