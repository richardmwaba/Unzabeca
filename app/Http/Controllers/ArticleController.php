<?php

namespace App\Http\Controllers;

use App\ArticlePhotos;
use App\Articles;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Displays the article managing page and also retrieves all the
     * articles currently in the db
     */
    public function index()
    {
        $articles = Articles::orderBy('article_id', 'desc')->get();

        // returns the article management page
        return view('members.articles.article', compact('articles'));
    }

    /**
     * Displays article creation form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createArticle(){
        // returns article creation page
        return view('members.articles.articleForm');
    }

    /**
     * Stores the form data to the db
     *
     * @param $request
     * @return redirect
     */
    public function store(ArticleRequest $request){

        // validating image
        $this->validate($request, [
            'photo' => 'mimes:jpeg,png,bmp|size:5000'
        ]);

        // only stores title, author & body to articles table
        $article = Articles::create($request->all());

        // stores image using public disk
        $filename = $request->photo->store('photo', 'public');
        // saves to db
        ArticlePhotos::create([
            'article_id' => $article->article_id,
            'filename' => $filename
        ]);

        // redirects to article page with success msg
        return redirect('/members/articles')->with('status', 'Article successfully created!');
    }

    /**
     * Gets the article to be viewed from the db and recent articles
     * based on posted date
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id){
        $article = Articles::with('articlePhoto')->find($id);

        // gets other articles
        $others = Articles::orderBy('created_at', 'desc')->take(5)->get();

        return view('members.articles.view', compact('article', 'others'));
    }

    /**
     * Gets the edit form
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $article = Articles::with('articlePhoto')->find($id);

        return view('members.articles.articleEdit', compact('article'));
    }

    /**
     * Updates the article
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id){

        // validation
        $this->validate($request, [
            'articleTitle' => 'required',
            'author' => 'required',
            'articleBody' => 'required'
        ]);

        $article = Articles::findOrFail($id);

        $article->update($request->all()); // updates the article

        return redirect('/members/article/view/'.$id)
            ->with('status', 'Article has been successfully been updated!!');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $article = Articles::with('articlePhoto')->where('article_id', $id);

        $article->delete();

        return redirect()->back()->with('status', 'Article has been deleted successfully!!');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allArticles(){
        $articles = Articles::with('articlePhoto')->orderBy('created_at', 'desc')->get(); // paginate them

        return view('web view.article', compact('articles'));
    }

    public function articleView($id){
        $article = Articles::with('articlePhoto')->find($id);

        // gets other articles
        $others = Articles::with('articlePhoto')->orderBy('created_at', 'desc')->take(5)->get();

        return view('web view.articleView', compact('article', 'others'));
    }

}
