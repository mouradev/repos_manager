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
        try {
            $create_repo = GitHub::api('repo')->create($request->input('name'), 'This is the description of a repo', 'http://my-repo-homepage.org', false);
            $Repository = Repository::create([
                'name' => $request->input('name'),
                'url' => $create_repo['html_url'],
                'ssh_url' => $create_repo['ssh_url'],
            ]);

            // Adiciona o user atual como colaborator
            $User = \Auth::user();
            GitHub::api('repo')->collaborators()->add(env('GITHUB_USERNAME'), $request->input('name'), $User->github_username, ['private' => true]);

            return view('repository-success', [
                'Repository' => $Repository,
            ]);
        } catch(\Exception $e) {
            return redirect()->back()->with('error', [$e->getMessage()]);
        }
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
