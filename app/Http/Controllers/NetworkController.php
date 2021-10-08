<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::first();
        $network = Network::all();
        return view("backoffice.sections.network.all", compact("profile", "network"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Profile::first();
        return view("backoffice.sections.network.create", compact("profile"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $network = new Network();
        $network->name = $request->name;
        $network->url = $request->url;
        $network->icon  = $request->icon;
        $network->save();
        return redirect()->route("network.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function show(Network $network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function edit(Network $network)
    {
        $profile = Profile::first();
        return view("backoffice.sections.network.edit", compact("network", "profile"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Network $network)
    {
        $network->name = $request->name;
        $network->url = $request->url;
        $network->icon = $request->icon;
        $network->save();
        return redirect()->route("network.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function destroy(Network $network)
    {
        $network->delete();
        return redirect()->route("network.index");
    }
}
