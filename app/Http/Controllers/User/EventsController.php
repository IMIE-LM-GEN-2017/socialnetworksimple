<?php

namespace App\Http\Controllers\User;
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all()->where('user_id', '=',Auth()->user()->id);

        // ...

        return view('_user.events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('_user.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data=$request->all();

        $data['user_id']=Auth()->user()->id;

        Event::create($data);

        \Session::flash('success', 'Évènement enregistré');

        return redirect()->route('user.events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('_user.events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('_user.events.edit', ['events' => $event]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        $event = Event::findOrFail($id);

        if ($event->update($request->all())) {
            \Session::flash('message', 'Évènement mis à jour');
            return redirect()->route('events.index');
        } else {
            \Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('events.edit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('events')->with([
            'flash_message' => 'Deleted',
        ]);
    }
}
