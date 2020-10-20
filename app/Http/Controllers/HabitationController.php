<?php

namespace App\Http\Controllers;

use App\Category;
use App\Habitation;
use App\Http\Requests\StoreHabitationRequest;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateHabitationRequest;
use App\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HabitationController extends Controller
{
    /**
     * View of home with all habitation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //Permet de récupérer tous les articles de la base de données
        $habitation = Habitation::all();

        //Retourne la vue home avec les habitation
        return view('home')->with('habitation', $habitation);
    }

    /**
     * View of habitation ordering by created_at field
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function habitation()
    {
        $habitation = Habitation::orderBy('created_at', 'desc')->get();
        return view('habitation')->with('habitation', $habitation);
    }

    /**
     * View of habitationMaison ordering by created_at field
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function habitationMaison()
    {
        $habitation = Habitation::wherecategory_id('1')->get();
        return view('habitation')->with('habitation', $habitation);
    }

    /**
     * View of habitationVilla ordering by created_at field
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function habitationVilla()
    {
        $habitation = Habitation::wherecategory_id('2')->get();
        return view('habitation')->with('habitation', $habitation);
    }

    /**
     * View of habitationAppartement ordering by created_at field
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function habitationAppartement()
    {
        $habitation = Habitation::wherecategory_id('3')->get();
        return view('habitation')->with('habitation', $habitation);
    }

    /**
     * View add post with categories inside request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $categories = Category::all();
        return view('addHabitation')->with('categories', $categories);
    }

    /**
     * Store post into database
     * @param StoreHabitationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreHabitationRequest $request)
    {
        $params = $request->validated();
        //Création du slug
        $params['slug'] = Str::slug($params['nom'], '-');
        Storage::put('public/habitation', $params['image1']);
        $params['image1'] = 'habitation/'.$params['image1']->hashName();
        Storage::put('public/habitation', $params['image2']);
        $params['image2'] = 'habitation/'.$params['image2']->hashName();
        Storage::put('public/habitation', $params['image3']);
        $params['image3'] = 'habitation/'.$params['image3']->hashName();
        $params['user_id'] = Auth::id();
        Habitation::create($params);
        return redirect()->route('habitation');
    }

    public function update(UpdateHabitationRequest $request, $slug)
    {
        $params = $request->validated();
        $habitation = Habitation::where('slug', $slug)->firstOrFail();

        dd($params);

        $habitation->update($params);
        return redirect()->route('habitation');
    }


    /**
     * Details of post
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($slug)
    {
        $habitation = Habitation::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('editHabitation')
            ->with('habitation', $habitation)
            ->with('categories', $categories);
    }

    /**
     * Details of post
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details($slug)
    {
        $habitation = Habitation::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('detailsHabitation')
            ->with('habitation', $habitation)
            ->with('categories', $categories);
    }

    /**
     * Details of post
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function reservation($slug)
    {
        $habitation = Habitation::where('slug', $slug)->firstOrFail();
        return view('reservationHabitation')
            ->with('habitation', $habitation);
    }

    /**
     * Delete post into database
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove($id)
    {
        $habitation = Habitation::findOrFail($id);
        Storage::delete('public/'.$habitation->image);
        $habitation->delete();
        return redirect()->route('habitation');
    }




}
