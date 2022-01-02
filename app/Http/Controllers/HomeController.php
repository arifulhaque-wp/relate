<?php

namespace App\Http\Controllers;

use App\Models\Property;

class HomeController extends Controller {
    public function home() {

        $latest_properties = Property::all();

        return view( 'welcome', [
            'latest_properties' => $latest_properties,
        ] );
    }
}
