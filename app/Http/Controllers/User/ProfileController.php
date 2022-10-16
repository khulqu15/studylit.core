<?php

namespace App\Http\Controllers\User;

use App\Actions\User\PhotoProfileUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use const http\Client\Curl\AUTH_ANY;

class ProfileController extends Controller
{
    public function formIndex(): Response
    {
        return Inertia::render('Profile/PhotoProfile');
    }

    public function update(Request $request, PhotoProfileUpdate $action): RedirectResponse
    {
        $action->update($request);
        return redirect()->route('dashboard');
    }
}
