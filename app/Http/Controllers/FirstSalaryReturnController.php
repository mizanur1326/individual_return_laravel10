<?php

namespace App\Http\Controllers;

use App\Models\FirstSalaryReturn;
use Illuminate\Http\Request;

class FirstSalaryReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend/first_salary_return');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'nid' => 'required|string|max:20',
        'dob' => 'required|date',
        'etin' => 'required|string|max:20',
        'circle' => 'required|string|max:50',
        'taxes_zone' => 'required|string|max:50',
        'assessment_year' => 'required|string|max:10',
        'spouse' => 'nullable|string|max:255',
        'address' => 'required|string|max:255',
        'telephone' => 'nullable|string|max:15',
        'mobile' => 'required|string|max:15',
        'email' => 'nullable|email|max:255',
        'past_savings' => 'nullable|numeric',
        'ornaments' => 'nullable|integer',
        'vehicle' => 'nullable|string|max:255',
        'furniture' => 'nullable|numeric',
        'financial_assets' => 'nullable|string|max:255',
        'land_house' => 'nullable|string|max:255',
    ]);

    // Store the validated data in the database
    FirstSalaryReturn::create($validatedData);

    // Redirect back with a success message
    return redirect()->route('first-salary-return.index')->with('success', 'Salary return successfully stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FirstSalaryReturn $firstSalaryReturn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FirstSalaryReturn $firstSalaryReturn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FirstSalaryReturn $firstSalaryReturn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FirstSalaryReturn $firstSalaryReturn)
    {
        //
    }
}
