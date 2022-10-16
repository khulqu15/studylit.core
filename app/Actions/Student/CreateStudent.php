<?php

namespace App\Actions\Student;


use App\Enums\StudentType;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Enum;

class CreateStudent
{
    public function store(array $input): Student
    {
        $this->validation($input);
        return Student::create([
            'user_id' => Auth::id(),
            'country' => $input['country'],
            'province' => $input['province'],
            'city' => $input['city'],
            'district' => $input['district'],
            'village' => $input['village'],
            'address' => $input['address'],
            'postcode' => $input['postcode'],
            'type' => $input['type'],
            'instance' => $input['instance'],
            'major' => $input['major'],
            'class' => $input['class'],
            'interest' => $input['interest'],
            'talent' => $input['talent'],
            'passion' => $input['passion'],
        ]);
    }

    public function validation(array $input): void
    {
        Validator::make($input, [
            'country' => ['required', 'string', 'max:100'],
            'province' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'district' => ['required', 'string', 'max:100'],
            'village' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'postcode' => ['required', 'string', 'max:100'],
            'type' => ['required', 'string', new Enum(StudentType::class)],
            'instance' => ['required', 'string', 'max:100'],
            'major' => ['required', 'string', 'max:100'],
            'class' => ['required', 'string', 'max:100'],
            'interest' => ['nullable', 'json'],
            'talent' => ['nullable', 'json'],
            'passion' => ['nullable', 'json'],
        ])->validate();
    }
}
