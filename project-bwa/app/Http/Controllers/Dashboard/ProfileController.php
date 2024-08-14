<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //costum
    public function delete()
    {
        // //get user
        // $get_user_photo = DetailUser::where('users_id', Auth::user()->id)->first();
        // $path_photo = $get_user_photo['photo'];

        // //second update value to null
        // $get_user_photo = DetailUser::where('users_id', Auth::user()->id)->first();
        // if ($get_user_photo) {
        //     $data = DetailUser::find($get_user_photo['id']);
        //     $data->photo = NULL;
        //     $data->save();
        //     // ...
        // } else {
        //     // Handle the case where $get_user_photo is null
        // }

        // //delete file photo
        // $data = 'storage/'.$path_photo;
        // if(File::exists($data)){
        //     File::delete($data);
        // }else{
        //     File::delete('storage/app/public/'.$path_photo);            
        // }

        // toast()->success('Delete has been success');
        // return back();

    }
}
