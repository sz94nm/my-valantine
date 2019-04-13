<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::all();
        $data = [
            "options" => $options
        ];
        dd($data);
        return view('dashboard.table', $data);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        $data = [
            "option" => $option
        ];
        //dd($option);
        return view('dashboard.settings', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        $rules = [
            "brand" => "required",
            "profession" => "required",
            "email" => "required",
            "instagram" => "required",
            "facebook" => "required",
            "about" => "required",
            "contact" => "required",
        ];
        $data = $this->validate($request, $rules);
        if ($request->hasFile('cover')) {

            $path = $request->file('cover')->store('uploads');
//            $path = str_replace("public/images", "", $path);
            $data["cover"] = $path;
        }
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $filename ='profile.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());

            $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save('uploads/' . $filename);
            $data["profile"] = 'uploads/' . $filename;
        }
        $option->update($data);

        return Response::redirectTo("/dashboard/posts");






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }
}
