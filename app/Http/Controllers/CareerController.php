<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationSubmitted;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    public function index()
    {
        return view('carrieres');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'position' => ['required', 'string', 'max:255'],
            'experience' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'cv' => ['required', 'file', 'mimes:pdf', 'max:5120'],
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        $application = JobApplication::create([
            ...$validated,
            'cv_path' => $cvPath,
        ]);

        try {
            Mail::to(config('mail.from.address'))
                ->send(new JobApplicationSubmitted($application));
        } catch (\Throwable) {
            // La candidature reste enregistrée même si l'email échoue
        }

        return redirect()
            ->route('carrieres')
            ->with('success', 'Votre candidature a bien été envoyée. Nous l\'étudierons et vous recontacterons si votre profil correspond à nos besoins.');
    }
}
