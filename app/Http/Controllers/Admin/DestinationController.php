<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $destinations = Destination::paginate(4);
        return view('admin.destination.index', compact('destinations','destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destination = new Destination;
        $destination->categoryId = 1;
        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->address = $request->address;
        $destination->link = $request->link;
        $destination->openingTime = $request->openingTime;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $destination->image = $name;
        }
        $destination->save();
        return redirect()->route('destination.index')->with('success', 'データが追加されました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destination = Destination::find($id);
        return view('admin.destination.show', ['destination' => $destination]);
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
        $destination = Destination::findOrFail($id);
        return view('admin.destination.edit', compact('destination','destination'));
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
        $destination = Destination::findOrFail($id);
        $destination->name = $request->input('name');
        $destination->description = $request->input('description');
        $destination->address = $request->input('address');
        $destination->link = $request->input('link');
        $destination->openingTime = $request->input('openingTime');
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $destination->image = $name;
        }
        $destination->save();
        return redirect()->route('destination.index')->with('success', 'データが更新されました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();
        return redirect()->route('destination.index')->with('success', '正常に削除されました');
    }
}
