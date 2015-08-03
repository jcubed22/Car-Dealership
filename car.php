<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;

        function __construct($make_model, $miles, $price)
        {
            $this->name = $make_model;
            $this->odometer = $miles;
            $this->cost = $price;
        }

        function setMake($new_make)
        {
            $this->name = $new_make;
        }
        function setPrice($new_price)
        {
            $float_price = (float) $new_price;
            if ($float_price != 0) {
                $formatted_price = number_format($float_price, 2);
                $this->cost = $formatted_price;
            }
        }
        function setMiles($new_miles)
        {
            $this->odometer = $new_miles;
        }

        function getMake()
        {
            return $this->name;
        }

        function getPrice()
        {
            return $this->cost;
        }

        function getMiles()
        {
            return $this->odometer;
        }

    }

    $first_car = new Car("2014 Porsche 911", 7864, 114991);
    $second_car = new Car("2011 Ford F450", 14241, 55995);
    $third_car = new Car("2013 Lexus RX 350", 20000, 44700);
    $fourth_car = new Car("Mercedes Benz CLS550", 37979, 38392);
    $fourth_car->setPrice("706.345897");

    // $porsche = new Car();
    // $porsche->make_model = "2014 Porsche 911";
    // $porsche->price = 114991;
    // $porsche->miles = 7864;
    //
    // $ford = new Car();
    // $ford->make_model = "2011 Ford F450";
    // $ford->price = 55995;
    // $ford->miles = 14241;
    //
    // $lexus = new Car();
    // $lexus->make_model = "2013 Lexus RX 350";
    // $lexus->price = 44700;
    // $lexus->miles = 20000;
    //
    // $mercedes = new Car();
    // $mercedes->make_model = "Mercedes Benz CLS550";
    // $mercedes->price = 39900;
    // $mercedes->miles = 37979;

    $cars = array($first_car, $second_car, $third_car, $fourth_car);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cars</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            // foreach ($cars as $car) {
            //     echo "<li> $car->name </li>";
            //     echo "<ul>";
            //         echo "<li> $$car->cost </li>";
            //         echo "<li> Miles: $car->odometer </li>";
            //     echo "</ul>";
            // }
        ?>
    </ul>
</body>
</html>
