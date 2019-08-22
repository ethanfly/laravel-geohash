<?php

namespace GeoHash\Facades;


use Illuminate\Support\Facades\Facade;

class GeoHash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'geohash';
    }

}
