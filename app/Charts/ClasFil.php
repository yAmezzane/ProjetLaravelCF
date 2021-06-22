<?php

declare(strict_types=1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class ClasFil extends BaseChart
{

    /**
     * Determines the chart name to be used on the
     * route. If null, the name will be a snake_case
     * version of the class name.
     */
    public ?string $name = 'clasfilchart';

    /**
     * Determines the name suffix of the chart route.
     * This will also be used to get the chart URL
     * from the blade directrive. If null, the chart
     * name will be used.
     */
    public ?string $routeName = 'clasfilchart';

    /**
     * Determines the prefix that will be used by the chart
     * endpoint.
     */
    public ?string $prefix = 'chartjs';

    /**
     * Determines the middlewares that will be applied
     * to the chart endpoint.
     */
    //public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $users = \DB::table('classes')
        ->join('filieres', 'classes.filiere', '=', 'filieres.id')
        ->select(\DB::raw('count(*) as nbr, filieres.libelle as fil'))
        ->groupBy('fil')
        ->get();

        $label = collect([]);
        $data = collect([]);
        foreach ($users as $u){
            $label->push($u->nbr);
            $data->push($u->fil);
        }
        $chart=Chartisan::build();
        for($i=0; $i<count($label); $i++){
            $chart->dataset($data[$i],[$label[$i]]);
        }
        return $chart;
    }
}
