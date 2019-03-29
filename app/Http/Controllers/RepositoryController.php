<?php

namespace App\Http\Controllers;

use App\Repository;
use Illuminate\Http\Request;

use GrahamCampbell\GitHub\Facades\GitHub;

class RepositoryController extends Controller
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
        dump($request->all());
        $Github = new Github;
dump($Github);
        dump($Github::me()->organizations());

        // dump(GitHub::getDefaultConnection());
        // dump(GitHub::connection('main')->repo()->show('GrahamCampbell', 'Laravel-GitHub'));

        // $repos = GitHub::api('repo')->all();
        
        // dump($repos);

        dd('teste');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Repository $repository)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function edit(Repository $repository)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repository $repository)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repository $repository)
    {
        //
    }
}
