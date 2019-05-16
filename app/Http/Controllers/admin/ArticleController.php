<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * 顯示建立部落格文章列表。
     */
    public function index(){
        $articles = Article::all();
            return view('admin.article.index',['articles' => $articles]);
    }
    
    /**
     * 顯示建立部落格新文章的表單。
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * 儲存一篇部落格新文章。
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->image = $request->image;
        $article->shortcontent = $request->shortcontent;
        $article->content = $request->content;
        $article->save();

        return redirect('admin/article');
    }

    //刪除文章
    //找到對的id才可以刪除
    public function delete($id){
        $article = Article::find($id);
        $article->delete();

        return redirect('admin/article');
    }

    //更新文章

    public function edit($id){
        $article = Article::find($id);
        // dd($article);
        return view('admin.article.edit' , ['article' => $article]);
    }

    public function update($id, Request $request)
    {
        //dd($article);
        $article = Article::find($id);

        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
        ]);

        $article->title = $request->input('title');
        $article->image = $request->input('image');
        $article->shortcontent = $request->input('shortcontent');
        $article->content = $request->input('content');
        $article->save();
        //dd($article);
        return redirect('admin/article');
    }
    
}
