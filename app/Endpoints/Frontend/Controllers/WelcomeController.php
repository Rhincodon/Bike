<?php

namespace App\Endpoints\Frontend\Controllers;

use App\Core\Http\Controller;
use App\Core\Http\Features\ShowViewFeature;

class WelcomeController extends Controller
{
    public $features = [
        'welcome' => [ShowViewFeature::class, ['view' => 'frontend::welcome']],
    ];
}
