<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $applications = JobApplication::latest()->get();
        $messages = ContactMessage::latest()->get();

        return view('admin.dashboard', compact('applications', 'messages'));
    }

    public function showApplication(JobApplication $application)
    {
        return view('admin.application-show', compact('application'));
    }

    public function updateApplication(Request $request, JobApplication $application)
    {
        $request->validate([
            'status' => ['required', 'in:en_attente,en_cours,accepte,refuse'],
        ]);

        $application->update(['status' => $request->status]);

        return redirect()
            ->route('admin.applications.show', $application)
            ->with('success', 'Statut mis à jour.');
    }

    public function downloadCv(JobApplication $application)
    {
        if (! Storage::disk('public')->exists($application->cv_path)) {
            abort(404, 'CV introuvable.');
        }

        $filename = 'CV_' . str_replace(' ', '_', $application->name) . '.pdf';

        return Storage::disk('public')->download($application->cv_path, $filename);
    }

    public function showMessage(ContactMessage $message)
    {
        return view('admin.message-show', compact('message'));
    }
}
