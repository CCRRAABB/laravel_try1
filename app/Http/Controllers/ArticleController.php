<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Query\Builder;

use DB;
use App\Commands\DuplicateTalkCommand;
use App\Http\Requests\CreateArticleRequest;
use App\Tag;
use Carbon\Carbon;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;



class ArticleController extends Controller
{

    /**
     *this is the second and third way of using middleware
     */
    /*
    public function __construct(){
        $this->middleware('auth',['only'=>'create']);
    }
*/

    /**
     *middleware self define
     */
    /*
    public function __construct(){
        $this->middleware('demo');
    }
*/
    /**
     * @return \Illuminate\View\View
     *
     */
    public function index(){

       // $img=Image::make('ff.jpg');


        // {!! $article->render() !!}
    /*
         Cache::put('key','value',);
         return Auth::user();
         $collection=collect([1,2,3]);
         dd(collect([1,2,3])->all());
         session(['key'=>'value']);
         $value=session('key');
    */

        //$r=Redis::connection();




        //Storage::disk('local')->put('file.txt','123');
        //$contents=Storage::get('ff.jpg');
       //dd($contents);

        //$articles=Article::latest('publish_at')->get();
        $articles=Article::latest('publish_at')->paginate(3);

        //$articles=DB::table('articles')->paginate(3);
        return  view('article/index',compact('articles'));
    }

    public function show(Article $article){
         return view('article/show',compact('article'));
    }

    public function create(){
/*this is one way of auth*/
       /*
       if(Auth::guest()){
            return ('you can not see');
        }
       */

        $tags= tag::lists('name','id');
       // $tags=tag::all();
        //$name=$tags'name'
        return view('article/create',compact('tags'));
    }

    public function store(Request $request){
       // $input=Request::all();
        //dd($request->input('tag'));

        //dd(Auth::id());

        $article=Auth::user()->articles()->create($request->all());
        $this->validate($request,['title'=>'required|min:3','body'=>'required']);
        $tagIds=$request['tag_list'];
        $article->tag()->attach($tagIds);

        /*
        $input=$request->all();
        $input['user_id']=Auth::id();
        $tagsId=$input['tag'];
        //$input->tags()->attach
        //dd($tagsId);
        $input->tags()->attach($tagsId);
        Article::create($input);
        */

       //flash('you are right')->important();
        Session::flash('flash_message','you article has been created');
        return redirect('articles');
    }

    public function edit(Article $article){

        $tags=tag::lists('name','id');
        return view('article/edit',compact('article','tags'));
    }

    public function update(Article $article,CreateArticleRequest $request){

        $input=$request->all();
        $article->update($input);
        $article->tag()->sync($request['tag_list']);
        return redirect('articles');


    }

    public function destroy(Article $article){

        $article->delete();

        return redirect('articles');
    }


}
