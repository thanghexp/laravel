<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckArticlesRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     *  Get list of articles 15-09
     *
     **/
    public function index()
    {
        $articles = Articles::all();
        return view("articles.index")->with("articles", $articles);
    }

    /**
     * Show info
     *
     */
    public function show()
    {

    }

    /**
     * Create Form for add new Articles
     *
     * @param array $data
     * @return
     */
    public function create()
    {
        $data['name'] = 'LeePhuoc';

        return view('articles.create', isset($data) ? $data : NULL);
    }

    /**
     * Save one recored for Article Table
     *
     * @param object $article
     *1
     */
    public function store(CheckArticlesRequest $request)
    {
        print_r($request); die;

        // lấy dữ liệu từ form
        $dulieu_tu_input = $request->all();

        //dùng hàm create của laravel 5 để đưa hết thông tin lấy từ input và lưu vào trong database
        Articles::create($dulieu_tu_input);

        // chuyển hướng người dùng đến trang hiển thị danh sách bài viết
        return redirect('articles');
    }

    /**
     * Update data of article table with $id
     *
     * @param object $article
     * @return view
     */
    public function edit($id)
    {
        $articles = Articles::findOrFail($id);

        return view('articles.edit', compact('articles'));
    }

    /**
     * Create Form for update Articles
     *
     * @param array $data
     * @return
     */
    public function update($id, CheckArticlesRequest $request) 
    {
        $article = Articles::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('edit');
    }

    
}
