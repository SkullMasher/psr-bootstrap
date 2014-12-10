<?php
function calculate_string($mathString)
{
    $mathString = trim($mathString);     // trim white spaces
    // remove any non-numbers chars; exception for math operators
    $mathString = ereg_replace('[^0-9\+-\*\/\(\) ]', '', $mathString);
 
    $compute = create_function("", "return (" . $mathString . ");");
    return 0 + $compute();
}
