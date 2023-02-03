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
        $query = [];
        $subGradesList = SubGrades::where('status', 1)->get();
        return view('grades', compact(['subGradesList', 'query']));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterSubGradList(StoreGradesRequest $request)
    {

        $count = 0;
        $query = [];
        foreach($request->all() as $key=>$all) {
            if ($all) {
                $count = $count + 1;
            }
            if($key != '_token' && $all){
                $query[$key] = $all;
            }
        }
        $gradesList = [];
        $gradesListDB = SubGrades::where('status', 1)->get();
        $firstGradesList = $this->firstList($gradesListDB, $request);
        foreach ($gradesListDB as $grades) {
            $check = 0;
            $arr = json_decode($grades);
            foreach ($arr as $key=>$grade) {
                if ($key == 'ni' && $request->ni) {
                    $c = $request->ni;
                } else if ($key == 'cr' && $request->cr) {
                    $c = $request->cr;
                } else if ($key == 'mo' && $request->mo) {
                    $c = $request->mo;
                } else if ($key == 'c' && $request->c) {
                    $c = $request->c;
                } else if ($key == 's' && $request->s) {
                    $c = $request->s;
                } else if ($key == 'p' && $request->p) {
                    $c = $request->p;
                } else if ($key == 'si' && $request->si) {
                    $c = $request->si;
                } else {
                    continue;
                }
                if (str_contains($grade, 'MAX') || str_contains($grade, 'Max')) {
                    $c_db = explode(" ", $grade);
                    if ($c_db[0] >= $c) {
                        $check = $check + 1;
                    }
                } else if (str_contains($grade, '-')) {
                    $c_db = explode("-", $grade);
                    if ($c_db[0] < $c  && $c <= $c_db[1]) {
                        $check = $check + 1;
                    }
                } else {
                    $c_db = $grade;
                    if ($c_db == $c) {
                        $check = $check + 1;
                    }
                }
            }
            if ($check === ($count - 1)) {
                array_push($gradesList, $grades);
            }
        }
        $subGradesList = [...$firstGradesList, ...$gradesList];
        $count = count($subGradesList);
        return view('grades', compact(['subGradesList', 'query', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function firstList($gradesList, $request)
    {
        $count = 0;
        $query = [];
        foreach($request->all() as $key=>$all) {
            if ($all) {
                $count = $count + 1;
            }
            if($key != '_token' && $all){
                $query[$key] = $all;
            }
        }
        $subGradesList = [];
        foreach ($gradesList as $grades) {
            $check = 0;
            $arr = json_decode($grades);
            foreach ($arr as $key=>$grade) {
                if ($key == 'ni' && $request->ni) {
                    $c = $request->ni;
                } else if ($key == 'cr' && $request->cr) {
                    $c = $request->cr;
                } else if ($key == 'mo' && $request->mo) {
                    $c = $request->mo;
                } else if ($key == 'c' && $request->c) {
                    $c = $request->c;
                } else if ($key == 's' && $request->s) {
                    $c = $request->s;
                } else if ($key == 'p' && $request->p) {
                    $c = $request->p;
                } else if ($key == 'si' && $request->si) {
                    $c = $request->si;
                } else {
                    continue;
                }
                if (str_contains($grade, '-')) {
                    $c_db = explode("-", $grade);
                    if ($c_db[0] == $c) {
                        $check = $check + 1;
                    }
                } else {
                    $c_db = $grade;
                    if ($c_db == $c) {
                        $check = $check + 1;
                    }
                }
            }
            if ($check === ($count - 1)) {
                array_push($subGradesList, $grades);
            }
        }
        return $subGradesList;
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
