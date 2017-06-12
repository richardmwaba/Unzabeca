<?php

namespace App\Http\Controllers;

use App\ArticlePhotos;
use App\Articles;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'photo' => 'mimes:jpeg,jpg,png,bmp|max:15000'
        ]);
        // stores image using public disk
        $filename = $request->photo->store('photo', 'public');

        $article_id = random_int(1000, 9999);

        // saves image path to db
        ArticlePhotos::create([
            'article_id' => $article_id,
            'filename' => $filename
        ]);

        // only stores title, author & body to articles table
        Articles::create([
            'article_id' => $article_id,
            'articleTitle' => $request->articleTitle,
            'author' => $request->author,
            'articleBody' => $request->articleBody
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
        $article = Articles::with('articlePhoto')->where('article_id', $id)->firstOrFail();

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
     * Handles deleting of articles and respective images
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $article = Articles::where('article_id', $id)->first();
        $articlePhoto = ArticlePhotos::where('article_id', $id)->first();

        $filePath = $articlePhoto->filename; // store photo path

        $article->delete(); // deletes the article in the database
        $articlePhoto->delete(); // deletes article photo info from database

        if ($filePath !== null){
            // getting the actual photo name by trimming
            $trimmed = trim($filePath, 'photo/');
            Storage::delete($trimmed); // deletes the image from the storage folder.
        }

        return redirect()->back()->with('status', 'Article has been deleted successfully!!');
    }

    /**
     * Handles the articles in the webview
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allArticles(){
        $articles = Articles::with('articlePhoto')->orderBy('created_at', 'desc')->paginate(5); // paginate them

        // trim function

        return view('web view.article')->with('articles', $articles);
    }

    /**
     * Handles the viewing of a single image
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articleView($id){
        $article = Articles::with('articlePhoto')->find($id);

        // gets other articles
        $others = Articles::with('articlePhoto')->orderBy('created_at', 'desc')->take(5)->get();

        return view('web view.articleView', compact('article', 'others'));
    }

}
