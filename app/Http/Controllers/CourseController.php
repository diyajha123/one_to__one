<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursePostRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CourseController extends Controller
{

    public function index()
    {
        $courses= Course::all();
        return view('course.index', ['courses' => $courses]);
    }
    public function create()
    {
        return view('course.create');

    }



    public function store(CoursePostRequest $request):RedirectResponse
    {

        $course = Course::create($request->validated());
        $course->hobbies = implode(',',$request->input('hobbies'));
        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $course = Course::find(1);
        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
