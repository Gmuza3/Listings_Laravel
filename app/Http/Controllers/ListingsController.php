<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index()
    {

        $listings = Listing::query()
        ->orderby('created_at','desc')
        ->paginate(10);

        return view('listings.index',['listings' => $listings]);
    }
    public function create()
    {
        return view('listings.create');
    }
    public function store(Request $request)
    {   
       try{
         $data = $request->validate([
            'title' => 'required|string|max:255',
            'tags' => 'nullable|string|max:150',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email',
            'website' => 'required|url',
            'location' => 'nullable|string|max:255',
            'description' => 'string|nullable',
        ]);

        $data ['user_id'] = $request->user()->id;

        $listing = Listing::create($data);

        return redirect()->route('listings.show',['listing' =>$listing])->with(['message'=>'Listing Add Succesfully']);
       }catch(\Throwable $e){
            abort(500);
       }
    }
    public function show(Listing $listing)
    {   
        if($listing->user_id !== request()->user()->id){
            abort(403);
        }
        return view('listings.show',['listing' =>$listing]);
    }
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {   try{
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'tags' => 'nullable|string|max:150',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'location' => 'nullable|string|max:255',
            'description' => 'string|nullable',
        ]);
        if($listing->user_id !== request()->user()->id){
            abort(403);
        }
        $data['user_id'] = $request->user()->id;

        $listing->update($data);
        
        return to_route('listings.show',$listing)->with(['Message' => 'Listing Change Succesfully']);
        }catch(\Throwable $e){
            abort(500);
       }
    }
    public function destroy(Listing $listing)
    {   
        $listing->delete($listing);
        return to_route('listings.index')->with(['Message' => 'Listing Delete Succesfully']);
    }
}
