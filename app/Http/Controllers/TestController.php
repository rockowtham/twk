<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        echo "3, 5, 9, 15, X  - Please create new function for finding X value <br><br>";
        $this->findx();
        echo "<br> =========================================================================== <br>";
        echo "(Y + 24)+(10 × 2) = 9 <br><br>";
        $this->findy();
        echo "<br> =========================================================================== <br>";
        echo " If 1 = 5 , 2 = 25 , 3 = 325 , 4 = 4325 Then 5 = X <br><br>";
        $this->findPattern();

    }

    /*
     * 3, 5, 9, 15, X  - Please create new function for finding X value
     * X value is solved based on the pattern
     */
    public function findx()
    {
        $i = 0;
        $number_sequence = Array("3", "5", "9", "15");
        echo $number_sequence[$i] . '<br>';
        foreach (range(1, 8) as $number) {

            if (0 === $number % 2) {
                echo $number_sequence[$i] + $number . '<br>';
                $i++;
                continue;
            }
        }

    }

    /* Y value Evaluates to
    * (Y + 24)+(10 × 2) = 99  =>
    * (Y+24)+(20) = 99
    *(Y+24) = 99-20
    *(Y+24) = 79
    *Y = 55
    */

    public function findy()
    {
        Echo "Output for (Y + 24)+(10 × 2) = 99  => ";
        $x = 99;
        $y = ($x - 20) - 24;
        echo $y;

    }

    /*
     * If 1 = 5 , 2 = 25 , 3 = 325 , 4 = 4325 Then 5 = X
     * X is Solved as per the Pattern
     */
    public function findPattern()
    {
        $x = "";
        $x = "1=5";
        $temp = "";
        echo $x . "<br>";
        foreach (range(2, 5) as $number) {
            $x = "";
            for ($i = $number; $i >= $number; $i--) {
                $temp .= $i; //caches the full loop temporarily
            }
            echo $number . "=" . strrev($temp) . '5' . "<br>";
        }

    }
}
