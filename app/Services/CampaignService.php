<?php

namespace App\Services;

use App\Models\Campaign;
use OpenAI;

class CampaignService
{

    /**
     * OpenAI client
     *
     * @var OpenAI\Client
     */
    protected OpenAI\Client $openAiClient;

    public function __construct()
    {
        $this->openAiClient = OpenAI::client(env('OPEN_AI_API_KEY'));
    }

    public function generateBannerImage(Campaign $campaign)
    {
        // generate the banner image
        $response = $this->openAiClient->images()->create([
            'model' => 'dall-e-3',
            'prompt' => $this->getFormattedPrompt($campaign),
            'n' => 1,
            'size' => '1024x1024',
            'response_format' => 'url',
        ]);

        foreach ($response->data as $data) {
            $campaign->update([
                'banner_image' => $data->url,
                'meta'         => json_encode($response->toArray()),
            ]);
        }

        // return the response
        return $response;
    }

    public function getFormattedPrompt($campaign)
    {
        // get the Brand for campaign
        $brand = $campaign->brand;

        $prompt = "Create Banner for Brand ". $brand->name . " for Campaign " . $campaign->name . " with the following prompt: " . $campaign->prompt;

        // add the brand mission, vision, and values to the prompt
        $prompt .= " Brand Mission: " . $brand->mission;

        $prompt .= " Brand Vision: " . $brand->vision;

        $prompt .= " Brand Values: " . $brand->values;

        // add the color pallete to the prompt
        $prompt .= " Brand Color Pallete: " . $brand->color_palate;

        // return the prompt
        return $prompt;
    }

}
