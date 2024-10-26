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
            'prompt' => $campaign['prompt'],
            'n' => 1,
            'size' => '1024x1024',
            'response_format' => 'url',
        ]);

        // get the url from data in response
        if (isset($response->data[0]['url'])) {
           $campaign->update([
               'banner_image' => $response->data[0]['url'],
               'meta'         => $response,
           ]);
        }

        // return the response
        return $response;
    }
}
