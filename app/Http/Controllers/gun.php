<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gun extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::insert("insert into employee (name,email,phn_no,address,age,gender,salary) values ('11','23','5','22','8','43','34')");
        //
        return view('gun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $gun_id = request('gun_id');
        $user_nid = request('user_nid');
        $gun_catagory = request('gun_catagory');
        $brand_name = request('brand_name');
        $gun_price = request('gun_price');
    
        DB::insert('insert into gun (gun_id,user_nid,gun_catagory,brand_name,gun_price) values (?,?,?,?,?)', [$gun_id, $user_nid, $gun_catagory, $brand_name, $gun_price]);
        setcookie('user_nid',$user_nid);
        return redirect('gun')->with('success', 'data added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $data=DB::select('SELECT * FROM `gun`');
        return View('showgun',['gun'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
