<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $student = DB::transaction(function () use ($request) {
            $student = Student::create($request->validated('student'));
            
            if (!empty($request->validated('address')['cep']))
                $student->address()->create($request->validated('address'));

            $guardians = [];
            foreach ($request->validated('guardians') as $guardian)
                if (!empty($guardian['cpf']))
                    array_push($guardians, $guardian);
                
            if (!empty($guardians))
                $student->guardians()->createMany($request->validated('guardians'));

            return $student;
        });

        return redirect()->route('students.index', $student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return redirect()->route('students.edit', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        DB::transaction(function () use ($request, $student) {
            $student->update($request->validated('student'));

            if (!empty($request->validated('address')['cep']))
                $student->address()->update($request->validated('address'));

            $guardians = [];
            foreach ($request->validated('guardians') as $guardian)
                if (!empty($guardian['cpf']))
                    array_push($guardians, $guardian);
                
            if (!empty($guardians))
                $student->guardians->delete();
                $student->guardians()->createMany($request->validated('guardians'));
        });

        return redirect()->route('students.index', $student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }
}
