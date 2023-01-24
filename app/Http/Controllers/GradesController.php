<?php

namespace App\Http\Controllers;

use App\Models\Grades;
use App\Models\SubGrades;
use App\Http\Requests\StoreGradesRequest;
use App\Http\Requests\UpdateGradesRequest;

class GradesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gradesList = Grades::select('id', 'gradeName')->where('status', 1)->get();
        return view('grades', compact('gradesList'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subGradList()
    {
        $subGradesList = SubGrades::where('status', 1)->get();
        return view('grades', compact('subGradesList'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterSubGradList()
    {
        $subGradesList = SubGrades::where('status', 1)->get();
        return view('grades', compact('subGradesList'));
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
     * @param  \App\Http\Requests\StoreGradesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function show(Grades $grades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function edit(Grades $grades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradesRequest  $request
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradesRequest $request, Grades $grades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grades $grades)
    {
        //
    }
}
