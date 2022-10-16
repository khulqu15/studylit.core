<?php

namespace App\Http\Controllers\Student;

use App\Actions\Student\CreateStudent;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class StudentController extends Controller
{
    public function formIndex(): Response
    {
        return Inertia::render('Student/Form');
    }

    public function formStore(Request $request, CreateStudent $action)
    {
        $action->store($request->all());
        return redirect()->route('photo-profile.form');
    }
}
