<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;
use App\Note;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list = auth()->user()->notes()->get();
        return view('home', compact('list'));
    }

    /**
     * Show the create view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Create new record.
     *
     * @return redirect
     */
    public function new(NoteRequest $r)
    {
        auth()->user()->notes()->create($r->only(['name', 'phone', 'email']));
        return redirect()->route('home');
    }


    /**
     * Edit record.
     *
     * @return redirect
     */
    public function update($id)
    {
        $item = Note::where('user_id', auth()->user()->id)->whereId($id)->firstOrFail();
        return view('edit', compact('item'));
    }

    /**
     * Process edit record.
     *
     * @return redirect
     */
    public function edit(NoteRequest $r, $id)
    {
        $item = auth()->user()->notes()->whereId($id)->firstOrFail();
        $item->update($r->only(['name','email','phone']));

        return redirect()->route('home');   
    }

    /**
     * Process delete record.
     *
     * @return redirect
     */
    public function delete($id)
    {
        $item = Note::where('user_id', auth()->user()->id)->whereId($id)->firstOrFail();
        $item->delete();
        return redirect()->route('home');   
    }

    /**
     * Other call functions
     *
     * @return 404 error
     */
    public function __call($method, $parameters)
    {
        abort(404);
    }
}
