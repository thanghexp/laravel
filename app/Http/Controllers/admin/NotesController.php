<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Note;

class NotesController extends Controller
{
    /**
     * Show data to table
     *
     * @param object $notes;
     * @param array $data;
     * @return void;
     */
    public function index()
    {
        $notes = Note::all();
    }

    /**
     * Create data with note
     *
     * @param object Notes
     * @param array $data
     * @return void
     */
    public function create()
    {
        $data['title_head'] = 'Form Create a new Notes';
        return view('notes/create', $data);
    }

    /**
     * Save data to Notes table
     *
     * @param object $notes
     * @param array $data
     * @return void
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')) {
            $notes = new Notes();
            $data = $request->input();
            print_r($data);
            die;
        }
        
    }

    /**
     * Update data with $data
     *
     * @param object
     */
    public function update()
    {

    }
    
    /**
     *
     */
    public function edit() 
    {
        
    }

}
