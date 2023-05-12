function getCornersCount(string ...$shapeName)
{
    $results = [];
    foreach ($shapeName as $name) {
        $name = strtolower($name);
        switch ($name) {
            case 'square':
                $results[] = "квадрат - 4";
                break;
            case 'circle':
                $results[] = "круг - 0";
                break;
            case 'triangle':
                $results[] = "треугольник - 3";
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
