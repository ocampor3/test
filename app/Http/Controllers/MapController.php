<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GMaps;

class MapController extends Controller
{
    protected $config = [];

    public function __cunstruct()
    {
        $this->config['zoom'] = '8';
        $this->config['map_height'] = '600px';
        $this->config['scrollwheel'] = false;
        $this->config['geocodeCaching'] = true;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = \DB::table('articles')->where('Type', 'GeoLocation')->pluck('Title')->toArray();

        $this->config['center'] = ($articles) ? $articles[0] : '';
        GMaps::initialize($this->config);

        if ($articles) {
            foreach ($articles as $address) {
                $marker['position'] = $address;
                $marker['infowindow_content'] = $address;
                $marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/red-dot.png';
                GMaps::add_marker($marker);
            }
        }

        $map = GMaps::create_map();

        return view('welcome')->with('map', $map);
    }

    public function getCircle()
    {

        $articles = \DB::table('articles')->where('Type', 'GeoLocation')->pluck('Title')->toArray();
        $this->config['center'] = ($articles) ? $articles[0] : '';
        GMaps::initialize($this->config);

        if ($articles) {
            foreach ($articles as $address) {
                $circle['center'] = $address;
                $circle['radius'] = '500';
                $marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/red-dot.png';
                GMaps::add_circle($circle);
            }
        }

        $map = GMaps::create_map();

        return view('welcome')->with('map', $map);
    }
    public function getDirection()
    {
        $config['center'] = 'Mataas Na Kahoy';
        $config['zoom'] = '8';
        $config['map_height'] = '500px';
        $config['scrollwheel'] = false;
        $config['geocodeCaching'] = true;

        $config['directions'] = TRUE;
        $config['directionsStart'] = 'Mataas Na Kahoy';
        $config['directionsEnd'] = 'Robinsons Lipa City';
        $config['directionsDivID'] = 'directionsDiv';

        GMaps::initialize($config);
        $map = GMaps::create_map();

        return view('welcome')->with('map', $map);
    }

}