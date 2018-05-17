<?php namespace Bantenprov\TarifPemakaianBahuJalan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The TarifPemakaianBahuJalanModel class.
 *
 * @package Bantenprov\TarifPemakaianBahuJalan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPemakaianBahuJalanModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'tarif_pemakaian_bahu_jalan';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
