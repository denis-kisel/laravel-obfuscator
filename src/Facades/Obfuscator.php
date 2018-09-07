<?php namespace DenisKisel\Obfuscator\Facades;

use Illuminate\Support\Facades\Facade;

class Obfuscator extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \DenisKisel\Obfuscator\Obfuscator::class;
    }

}