<?php

include('vendor/autoload.php');
// include "App/Library/Math.php";

use App\Library\Math;
use Carbon\Carbon;
use Next\Calc;

echo Math::add(3, 4);
echo Carbon::now()->addDay();
// echo Calc::minus(4, 3);
