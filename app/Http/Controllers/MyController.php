<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class MyController extends Controller
{
    private $proizvodi = [
        ['id' => 1, 'ime' => 'tastatura', 'opis' => 'Odlicna tastatura.'],
        ['id' => 2, 'ime' => 'mis', 'opis' => 'Precizan mis.'],
        ['id' => 3, 'ime' => 'monitor', 'opis' => 'Monitor sa visokom rezolucijom.'],
        ['id' => 4, 'ime' => 'kuciste', 'opis' => 'Providno kuciste sa neonskim dodacima.'],
        ['id' => 5, 'ime' => 'graficka kartica', 'opis' => 'AMD Vega 2.'],
    ];
 
    public function saberi($broj1, $broj2 = 0)
    {
        $zbir = $broj1 + $broj2;
        return view(
            'rezultat',
            [
                'b1' => $broj1,
                'b2' => $broj2,
                'z' => $zbir
            ]
        );
    }
 
    public function proizvodi($mode, $show)
    {
        return view(
            'proizvodi',
            [
                'mode' => $mode,
                'show' => $show,
                'proizvodi' => $this->proizvodi,
            ]
        );
    }
 
    public function proizvod($id)
    {
        foreach ($this->proizvodi as $proizvod) {
            foreach ($proizvod as $key => $value) {
                if ($key == 'id' && $value == $id) {
                    $nadjeniProizvod = $proizvod;
                    break;
                }
            }
        }
        
        return view(
            'proizvod',
            [
                'proizvod' => $nadjeniProizvod
            ]
        );
    }
}