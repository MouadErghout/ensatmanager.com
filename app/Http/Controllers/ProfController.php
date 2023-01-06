<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Profs.index',['Profs'=>$list = Prof::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Profs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->nom.$request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        $P = new Prof();
        $P->user_id=User::where('Name','=',$request->nom.$request->prenom)->first()->id;
        $P->nom = $request->nom;
        $P->prenom = $request->prenom;
        $P->save();
        return Redirect('Prof');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $P = Prof::find($id);
        return view('Profs.show',['Prof'=>$P,
            'User'=>$P->User,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function edit(Prof $prof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prof $prof)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prof $prof)
    {
        //
    }
}
