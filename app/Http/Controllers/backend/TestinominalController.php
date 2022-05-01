<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Suscriber;
use App\Models\Testinominal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestinominalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows']=Testinominal::all();
        return view('backend.testinominal.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testinominal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row=Testinominal::create($request->all());
        if($row)
        {
            $request->session()->flash('success','Suscribers  Added ');
        }
        else
        {
            $request->session()->flash('error','Suscribers Add failed, Try again');

        }
        return Redirect()->route('testinominals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data['row']=Testinominal::find($id);
        return view('backend.testinominal.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row']=Testinominal::find($id);
        return view('backend.testinominal.edit',compact('data'));
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
        $data['row'] = Testinominal::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('testinominals.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Update Successfully');
        } else {
            $request->session()->flash('error', 'Update failed');
        }
        return redirect()->route('testinominals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = Testinominal::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Data Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Data Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('testinominals.index' );
    }

}
