<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    //action getAll
    public function index() {
        $destinations = Destination::all();
        return view('admin.destination.index', ['destinations' => $destinations]);
    }

    //action create
    public function create() {
        return view('admin.destination.create');
    }
    
    //action store
    public function store(Request $request) {
        $destination = new Destination;
        return view('admin.destination.store');
    }

    //action edit
    public function edit(Request $request, $id) {
       //
    }
 
    //action update
    public function update(Request $request) {
        //
    }

    //action show
    public function show(Request $request, $id) {
        //
    }

    //action delete
    public function delete(Request $request) {
        //
    }
}
