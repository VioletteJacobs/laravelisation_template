<?php

namespace App\Http\Controllers;

use App\Models\Backoffice;
use App\Models\Li_nav;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBack()
    {
        return view ("pages.Backoffice");
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
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function show(Backoffice $backoffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(Backoffice $backoffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Backoffice $backoffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Backoffice $backoffice)
    {
        //
    }
    // autres pages 
    public function indexBackNav()
    {
        $DBNav= Li_nav::all();
        return view ("pages.BackNav", compact("DBNav"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNav()
    {
        return view ("pages.Createnav");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNav(Request $request)
    {
        $newEntry = new Li_nav;
        $newEntry->ContenuLi = $request->ContenuLi;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function showNav($id)
    {
        $show= Li_nav::find($id);
        return view ("pages.showNav", compact ("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function editNav($id)
    {
        $editNav = Li_nav::find($id);
        return view("pages.editNav", compact("editNav"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function updateNav(Request $request, $id)
    {
        $update = Li_nav::find($id);
        $update->ContenuLi = $request->ContenuLi;
        $update->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function destroyNav($id)
    {
        $destroyNav= Li_nav::find($id);
        $destroyNav->delete();
        return redirect()->back();
    }


    public function indexBackPortfolio()
    {
        return view ("pages.BackPortfolio");
    }

    public function indexBackService()
    {
        return view ("pages.BackService");
    }
    public function indexBackTitres()
    {
        return view ("pages.Backoffice");
    }
}
