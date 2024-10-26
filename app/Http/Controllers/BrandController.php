<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandValidator;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // show
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // show the create view
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandValidator $brandValidator)
    {
        try {
            // create a new brand and store it in variable
            $brand = auth()->user()->brands()->create($brandValidator->validated());

            // return back with a success message
            return back()->with('success', 'Brand created successfully.');
        } catch (\Exception $e) {
            // return back with an error message
            return back()->with('error', 'There was an error creating the brand.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
