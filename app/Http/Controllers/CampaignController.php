<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampaignValidator;
use App\Services\CampaignService;
use Illuminate\Http\Request;

class CampaignController extends Controller
{

    protected $campaignService;

    public function __construct()
    {
        $this->campaignService = new CampaignService();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get the campaigns for the authenticated user
        $campaigns = auth()->user()->campaigns;

        // return the campaigns view with the campaigns
        return view('campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return the create view
        return view('campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CampaignValidator $campaignValidator)
    {
        try {
            // create a new campaign and store it in variable
            $campaign = auth()->user()->campaigns()->create($campaignValidator->validated());

            $this->campaignService->generateBannerImage($campaign);

            // return back with a success message
            return back()->with('success', 'Campaign created successfully.');
        } catch (\Exception $e) {

            // return back with an error message
            return back()->with('error', 'There was an error creating the campaign.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
