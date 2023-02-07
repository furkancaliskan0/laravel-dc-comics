<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{

    public function home()
    {

        $people = Person::all();

        // $data = [
        //     'people' => $people
        // ];

        return view('pages.home', compact('people'));
    }

    //SHOW
    public function personShow(Person $person)
    {

        return view('pages.personShow', compact('person'));
    }

    //DELETE
    public function personDelete(Person $person)
    {

        $person->delete();

        return redirect()->route('home');
    }

    //CREATE
    public function personCreate()
    {

        return view('pages.personCreate');
    }

    //STORE
    public function personStore(Request $request)
    {

        $data = $request->validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'date_of_birth' => 'required|date',
            'height' => 'nullable|integer|min:50|max:200'
        ]);

        $person = new Person();

        $person->first_name = $data['first_name'];
        $person->last_name = $data['last_name'];
        $person->date_of_birth = $data['date_of_birth'];
        $person->height = $data['height'];

        $person->save();

        return redirect()->route('home');
    }

    //EDIT
    public function personEdit(Person $person)
    {

        return view('pages.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {

        // No validation
        // $data = $request -> all();

        // With validation
        $data = $request->validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'date_of_birth' => 'required|date',
            'height' => 'nullable|integer|min:50|max:200'
        ]);
        $person->first_name = $data['first_name'];
        $person->last_name = $data['last_name'];
        $person->date_of_birth = $data['date_of_birth'];
        $person->height = $data['height'];

        $person->save();

        return redirect()->route('home');
    }
}