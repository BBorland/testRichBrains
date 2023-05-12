<?php
function getCornersCount(string ...$shapeName)
{
    $results = [];
    foreach ($shapeName as $name) {
        $name = strtolower($name);
        switch ($name) {
            case 'square':
                $results[] = "square - 4";
                break;
            case 'circle':
                $results[] = "circle - 0";
                break;
            case 'triangle':
                $results[] = "triangle - 3";
                break;
            default:
                $results[] = "$name - not defined";
                break;
        }
    }
    foreach ($results as $result) {
        echo $result . "\n";
    }
}
