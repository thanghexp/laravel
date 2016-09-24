<?php

namespace App\Http\Controllers\Admin;

use App\Articles;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckArticlesRequest;

class ArticlesController extends Controller
{
    public $title_head = 'ARTICLES';
    
    /**
     *  Get list of articles 15-09
     *
     **/
    public function index($article = '')
    {
        $data['title_head'] = $this->title_head;
        $data['articles'] = Articles::paginate(10);
        
        if(isset($article) && !empty($article)) {
            $data['row_article'] = Articles::findOrFail($article);
        }
        
        return view("admin.articles.index", $data);
    }

    /**
     * Show info
     *
     */
    public function show($articles)
    {
        if(isset($articles)) {
            $articles = new Articles();
            //$data = $articles->findOrFail($articles);

        }

    }

    /**
     * Create Form for add new Articles
     *
     * @param array $data
     * @return
     */
    public function create()
    {
        $data['title_head'] = $this->title_head;

        return view('admin.articles.create', isset($data) ? $data : NULL);
    }

    /**
     * Save one recored for Article Table
     *
     * @param object $article
     *1
     */
    public function store(CheckArticlesRequest $request)
    {
        // lấy dữ liệu từ form
        $dulieu_tu_input = $request->all();

        //dùng hàm create của laravel 5 để đưa hết thông tin lấy từ input và lưu vào trong database
        Articles::create($dulieu_tu_input);

        // chuyển hướng người dùng đến trang hiển thị danh sách bài viết
        return redirect('Admin/articles');
    }

    /**
     * Update data of article table with $id
     *
     * @param object $article
     * @return view
     */
    public function edit($articles)
    {
        $data['row_article'] = Articles::findOrFail($articles);
        $data['title_head'] =  $this->title_head;

        return view('Admin.articles.edit', $data);
    }

    /**
     * Create Form for update Articles
     *
     * @param array $data
     * @return
     */
    public function update($articles, CheckArticlesRequest $request)
    {
        $article = Articles::findOrFail($articles);
        $article->update($request->all());

        return redirect('Admin/articles');
    }

    /**
     * Delete
     * @param array $ids
     * @return void
     */
    public function destroy(Request $request)
    {
        if($request->isMethod('DELETE')) {
            $ids = $request->input('data');
            $id = $request->input('id');

            if(isset($ids) && is_array($ids)) {
                foreach($ids as $id) {
                    Articles::findOrFail($id)->delete($id);
                }
            } else {
                Articles::findOrFail($id)->delete($id);
            }
        }

    }

}
