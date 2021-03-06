<?php

namespace App\Http\Controllers;

use App\Models\CommentNews;
use App\Models\News;
use Illuminate\Http\Request;
use Session;
use Validator;
use Cookie;


class CommentNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $news_id)
    {
        
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|min:2|max:255',
            'email'     => 'required|email|max:255',
            'content'   => 'required|min:10|max:4000'
        ]);
        
        $news = News::find($news_id);
        
        $comment = new CommentNews();
        $comment->user_name = $request->input('user_name');
        $comment->email = $request->input('email');
        $comment->content = $request->input('content');
        $comment->news()->associate($news);
        
        if ($validator->fails())
        {
            return redirect()->to(route('news.single', [$news->slug]) . '#comment')
                             ->withInput()
                             ->withErrors($validator);
        }
        
        $comment->save();
        
        \Session::flash('success','Votre message a été posté. Merci !');
        
        Cookie::queue(Cookie::forever('user_name',$comment->user_name));
        Cookie::queue(Cookie::forever('email',$comment->email));
        
        return redirect()->to(route('news.single', [$news->slug]) . '#comment');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
