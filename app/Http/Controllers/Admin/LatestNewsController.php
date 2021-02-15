<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LatestNews;
use Carbon\Carbon;
use DB;
use Auth;

class LatestNewsController extends Controller
{
    protected $activeMenu = ['admin','latestnews'];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestnews = LatestNews::All();
        $data['title'] = 'Latest News';
        $data['latestnews'] = $latestnews;
        $data['active'] = $this->activeMenu;

        return view('admin.latestnews.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $latestnew = new LatestNews();
        $data['title'] = 'Add Latest News';
        $data['latestnew'] = $latestnew;
        $data['active'] = $this->activeMenu;

        return view('admin.latestnews.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'news_title' => 'required',
            'news_attachment' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
            'news_links' => 'required',
        ]);

        $latestnew = new LatestNews();
        $latestnew = $this->updateData($latestnew, $request);

        return redirect('admin/latestnews/index')->with('message', 'Latest News are successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $latestnew = LatestNews::findOrFail($id);

        $data['title'] = 'Latest news Details';
        $data['latestnew'] = $latestnew;
        $data['active'] = $this->activeMenu;

        return view('admin.latestnews.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $latestnew = LatestNews::findOrFail($id);
        $data['title'] = 'Edit Latest News';
        $data['latestnew'] = $latestnew;
        $data['active'] = $this->activeMenu;

        return view('admin.latestnews.edit', $data);
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
        $request->validate([
            'news_title' => 'required',
            'news_attachment' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
            'news_links' => 'required',
        ]);

        $latestnew = LatestNews::findOrFail($id);
        $latestnew = $this->updateData($latestnew, $request);

        return redirect(route('admin.latestnews.show', $latestnew->id))->with('message', 'Latest news are successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latestnew = LatestNews::findOrFail($id);
        $latestnew->delete();

        return redirect()->back()->with('message', 'Latest news are successfully deleted');
    }

    public function updateData($latestnew, $request)
    {
        $latestnew->news_title = $request->get('news_title');
        $latestnew->news_image = $request->news_attachment->store('LatestnewsAttachments', 'public');
        $latestnew->news_link = $request->get('news_links');
        $latestnew->save();

        return $latestnew;
    }
}
