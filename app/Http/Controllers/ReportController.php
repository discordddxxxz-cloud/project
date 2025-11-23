<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();

        return view('report.index', compact('reports'));
    }

    public function create()
    {
        return view('report.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Report::create($data);

        return redirect()->route('reports.index');
    }

    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $data = $request->validate([
            'number' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $report->update($data);

        return redirect()->route('reports.index');
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->route('reports.index');
    }
}
