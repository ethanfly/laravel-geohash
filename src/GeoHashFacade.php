<?php
namespace GeoHash;


use Illuminate\Support\Facades\Facade;

class GeoHashFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return GeoHash::class;
    }

}
