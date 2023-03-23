<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $user_content  = DB::table('users_cover')
                        ->leftJoin('users_cover_content','users_cover.id','=','users_cover_content.users_cover_id')
                        ->where('users_cover.slug',$slug)
                        ->select('users_cover_content.*')
                        ->orderBy('users_cover_content.sorter','asc')
                        ->get();

        $user = DB::table('users_cover')
                ->join('users','users_cover.users_id','users.id')
                ->where('users_cover.slug',$slug)
                ->select('users.name','users_cover.*')
                ->first();

        if (count($user_content) !=0){
            $data['row']            = $user_content;
            $data['users']          = $user;
            $data['status']         = "success";
            return view('welcome',$data);
        }else{
            $data['row']        = "slug or url not found";
            $data['status']     = "failed";
            $data['users']      = 'not found';
            return view('error',$data);
        }

        
    }

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
