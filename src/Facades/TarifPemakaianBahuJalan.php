<?php namespace Bantenprov\TarifPemakaianBahuJalan\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The TarifPemakaianBahuJalan facade.
 *
 * @package Bantenprov\TarifPemakaianBahuJalan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPemakaianBahuJalan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tarif-pemakaian-bahu-jalan';
    }
}
