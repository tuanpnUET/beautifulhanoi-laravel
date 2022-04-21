<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Festival;

class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $festivals = Festival::paginate(4);
        return view('admin.festival.index', compact('festivals','festivals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.festival.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $festival = new Festival;
        $festival->categoryId = 3;
        $festival->name = $request->name;
        $festival->description = $request->description;
        $festival->duration = $request->duration;
        $festival->image = '';
        $festival->save();
        return redirect()->route('festival.index')->with('success', 'データが追加されました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $festival = Festival::find($id);
        return view('admin.festival.show', ['festival' => $festival]);
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
        $festival = Festival::findOrFail($id);
        return view('admin.festival.edit', compact('festival','festival'));
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
        $festival = Festival::findOrFail($id);
        $festival->name = $request->input('name');
        $festival->description = $request->input('description');
        $festival->duration = $request->input('duration');
        $festival->image = '';
        $festival->save();
        return redirect()->route('festival.index')->with('success', 'データが更新されました');
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
        $festival = Festival::findOrFail($id);
        $festival->delete();
        return redirect()->route('festival.index')->with('success', '正常に削除されました');
    }
}
