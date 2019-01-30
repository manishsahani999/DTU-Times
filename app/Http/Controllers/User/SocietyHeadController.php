<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSociety;

class SocietyHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return auth()->user()->society()->get()->count();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.society_head.create');
    }

    /**
     * Store a newly created resource in storage.
     *
    * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSociety $request)
    {

        $society = auth()->user()->society()->create([
        'name' => $request->name, 
            'slug' => str_slug($request->name, "-"),
            'category' => $request->category,   
            'description' => $request->description, 
            'linkedin' => $request->linkedin, 
            'facebook' => $request->facebook, 
            'instagram' => $request->instagram, 
            'contact_mail' => $request->contact_mail, 
            'head_incharge' => $request->head_incharge, 
            'pr_incharge' => $request->pr_incharge, 
            'pr_contact_number' => $request->pr_contact_number,
            'head_contact_number' => $request->head_contact_number, 
            'website'  => $request->website 
        ]);
        return $society;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
    }
}