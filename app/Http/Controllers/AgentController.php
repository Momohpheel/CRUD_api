<?php

namespace App\Http\Controllers;
use App\Agents;
use Illuminate\Http\Request;
use App\Http\Resources\AgentResource;
use App\Http\Resources\AgentResourceCollection;
class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : AgentResourceCollection
    {
        //$agent = Agents::find($id);
        return new AgentResourceCollection(Agents::paginate());
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
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
        ]);

        $agent = Agents::create($request->all());

        return new AgentResource($agent);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) : AgentResource
    {
        $agent = Agents::find($id);
        return new AgentResource($agent);

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
        $person = Agents::find($id);
        
        $person->update($request->all());

        return new AgentResource($person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent = Agents::find($id);

        $agent->delete();

        return response()->json();
    
    }
}
