<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;
use Intervention\Image\Facades\Image;

class PhotoProfileUpdate
{
    public function update(Request $input)
    {
        $this->validation($input);
        $cover_name = '';
        $profile_name = '';
        $profile_file = $input->file('profile');
        if($profile_file && $input->hasFile('profile')) {
            if(!File::isDirectory(public_path().'/storage/profile-photos/')) {
                File::makeDirectory(public_path().'/storage/profile-photos/', 0777, true, true);
            }
            $img = Image::make($profile_file->path());
            $img_name = time().'-'.Str::slug(Auth::user()->name).'.'.$profile_file->extension();
            $img->resize(750, 750, function ($constraint) {
               $constraint->aspectRatio();
            })->save(public_path().'/storage/profile-photos/'.$img_name);
            $profile_name = $img_name;
        }
        $cover_file = $input->file('cover');
        if($cover_file && $input->hasFile('cover')) {
            if(!File::isDirectory(public_path().'/storage/cover-photos/')) {
                File::makeDirectory(public_path().'/storage/cover-photos/', 0777, true, true);
            }
            $img = Image::make($cover_file->path());
            $img_name = time().'-'.Str::slug(Auth::user()->name).'.'.$cover_file->extension();
            $img->resize(1000, 360, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path().'/storage/cover-photos/'.$img_name);
            $cover_name = $img_name;
        }
        return User::where('id', Auth::id())->update([
            'profile_photo_path' => $profile_name,
            'cover_photo_path' => $cover_name,
        ]);
    }

    public function validation(Request $request): void
    {
        Validator::make($request->all(), [
            'cover' => ['nullable', 'mimes:jpg,png,jpeg', 'max:2048'],
            'profile' => ['nullable', 'mimes:jpg,png,jpeg', 'max:2048']
        ])->validate();
    }
}
