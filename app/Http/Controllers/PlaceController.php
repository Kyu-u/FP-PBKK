<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
class PlaceController extends Controller
{
    public function createplace(Request $request)
    {
        if(Auth::user()){
            $request->validate([
                'name' => 'required',
                'location' => 'required',
                'price' => 'required',
            ]);
            if ($request->hasFile('file')) {
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
    
                // Save the file locally in the storage/public/ folder under a new folder named /product
                $request->file->store('public/images/');
    
                // Store the record, using the new file hashname which will be it's new filename identity.
                $place = new Place([
                    "name" => $request->get('name'),
                    "file" => $request->file->hashName(),
                    "price" => $request->get('price'),
                    "location" => $request->get('location'),
                ]);
                $place->save(); // Finally, save the record.
            }
    
            return redirect()->route('landing');
        }
        return redirect()->route('signin');

    }

    public function landingpage()
    {
        $places = Place::all()->toArray();
        return view('landing', compact('places'));
    }

    public function bookingpage($placeid)
    {
        $place = Place::where('id',$id)->first();
        return view('landing', compact('place'));
    }
}
