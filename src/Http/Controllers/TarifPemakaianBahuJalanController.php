<?php namespace Bantenprov\TarifPemakaianBahuJalan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\TarifPemakaianBahuJalan\Facades\TarifPemakaianBahuJalan;
use Bantenprov\TarifPemakaianBahuJalan\Models\TarifPemakaianBahuJalanModel;

/**
 * The TarifPemakaianBahuJalanController class.
 *
 * @package Bantenprov\TarifPemakaianBahuJalan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPemakaianBahuJalanController extends Controller
{
    public function demo()
    {
        return TarifPemakaianBahuJalan::welcome();
    }
}
