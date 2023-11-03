<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        if ($students->isEmpty()) {
            $data = [
                'message' => 'Student is empty',
                'data' => []
            ];

            return response()->json($data, 204);
        } else {
            $data = [
                'message' => 'Get All students',
                'data' => $students
            ];

            return response()->json($data, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'email' => 'required|email',
            'jurusan' => 'required|string'
        ]);
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        $student = Student::create($input);

        $data = [
            'message' => 'Student Created',
            'data' => $student
        ];

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            $data = [
                'message' => 'Student not Found',
                'data' => []
            ];

            return response()->json($data, 404);
        }
            $data = [
                'message' => 'Get Student',
                'data' => $student
            ];

            return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            $data = [
                'message' => 'Student not Found',
                'data' => []
            ];

            return response()->json($data, 404);
        }
        $input = [
            'nama' => $request->nama ?? $student->nama,
            'nim' => $request->nim ?? $student->nim,
            'email' => $request->email ?? $student->email,
            'jurusan' => $request->jurusan ?? $student->jurusan
        ];

        $student->update($input);

        $data = [
            'message' => 'Student Updated',
            'data' => $student
        ];

        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            $data = [
                'message' => 'Student not Found',
                'data' => []
            ];

            return response()->json($data, 404);
        }
        $student->delete();

        $data = [
            'message' => 'Student Deleted',
            'data' => $student
        ];

        return response()->json($data, 200);
    }
}
