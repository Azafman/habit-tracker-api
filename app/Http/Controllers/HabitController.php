<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitRequest;
use App\Http\Resources\HabitResource;
use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return HabitResource::collection(
            Habit::all()
        );//collection is to several
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHabitRequest $request)
    {
        $data = $request->only(['title', 'uuid', 'user_id']);

        $habit = Habit::create($data);
        //only user_id and title are requiered

        return HabitResource::make($habit);
        //return response->json([data => contentHabitResource]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        return HabitResource::make($habit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Habit $habit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        //
    }
}
