<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ListingController extends Controller
{

    public function index() {
        if (auth()->check()) {
            return redirect('/listings');
        }

        return view('index');
    }

    public function show(Request $request) {
        if ($request->has('search')) {
            session()->put('search', $request->input('search'));
        }

        $listings = auth()->user()->listings()->latest('created_at')->filter(request(['search']))->paginate(5)
        ->appends(['search' => $request->input('search')]);
        
        return view('listings.all',  compact('listings'));
    }

    public function add() {
        return view('listings.add');
    }

    public function store(Request $request) {
        
        $formFields = $request->validate([
            'title' => 'required',
            'chapter' => 'required',
            'genre' => 'required'
        ]);

        if ($request->filled('link')){
            $formFields['link'] = $request['link'];
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);
        return redirect('/listings')->with('message', "You successfully added a new book!");
    }

    public function edit(Listing $listing) {
        if ($listing->user_id != auth()->id()){
            abort(403, "Unauthorized Action");
        }
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing) {
        if ($listing->user_id != auth()->id()){
            abort(403, "Unauthorized Action");
        }

        $formFields = $request->validate([
            'title' => 'required',
            'chapter' => 'required',
            'genre' => 'required'
        ]);

        if ($request->filled('link')){
            $formFields['link'] = $request['link'];
        }

        $listing->update($formFields);
        return redirect('/listings')->with('message', 'You updated the book successfully!');
 
    }

    public function destroy(Listing $listing) {
        if ($listing->user_id != auth()->id()){
            abort(403, "Unauthorized Action");
        }
    
        $listing->delete();

        return redirect('/listings')->with('message', 'Book deleted successfully!');

    }

    public function test(Request $request) {
        return redirect('/listings')->with('search', $request->input('search'));
    }
}
