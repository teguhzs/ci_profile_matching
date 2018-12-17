<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('bobot_gap')) {
    function bobot_gap($gap)
    {
        switch($gap)
        {
        case 0:
            return 6;
            break;
        case 1:
            return 5.5;
            break;
        case -1:
            return 5;
            break;
        case 2:
            return 4.5;
            break;
        case -2:
            return 4;
            break;
        case 3:
            return 3.5;
            break;
        case -3:
            return 3;
            break;
        case 4:
            return 2.5;
            break;
        case -4:
            return 2;
            break;
        case 5:
            return 1.5;
            break;
        case -5:
            return 1;
            break;
        }
    }
}

?>