<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        // Retrieve a list of reports (you can customize this)
        $reports = Report::orderBy('created_at', 'desc')->get();

        return view('admin.reports.report', compact('reports'));
    }

    public function create()
    {
        return view('admin.reports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $report = new Report([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'user_id' => Auth::id(), // Assign the authenticated user's ID to the report
        ]);

        $report->save();

        return redirect()->route('admin.reports.report')->with('success', 'Report submitted successfully.');
    }

    public function show(Report $report)
    {
        // Load related comments
        $report->load('comments');

        return view('admin.reports.show', compact('report'));
    }
}
