<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customer extends Controller
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
        return view('customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $user_nid = request('user_nid');
        $name = request('name');
        $address = request('address');
        $phn_num = request('phn_num');
        $lisence_num = request('lisence_num');
        $mail = request('mail');
        DB::insert('insert into customer (user_nid,name,address,phn_num,lisence_num,mail) values (?,?,?,?,?,?)', [$user_nid, $name, $address, $phn_num, $lisence_num, $mail]);
        setcookie('user_nid',$user_nid);
        return redirect('customer')->with('success', 'data added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data=DB::select("Select user_nid, name,(cus_join_date) as 'years' from customer;");
       return view ('showcustomer')->with('customer',$data);
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
