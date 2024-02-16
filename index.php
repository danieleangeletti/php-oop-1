<?php
class Movie
{
    public $title;
    public $original_language;
    public $execution_time;
    public $producer;
    public $country_of_origin;

    function __construct($title, $original_language, $execution_time, $producer, $country_of_origin)
    {
        $this->title = $title;
        $this->original_language = $original_language;
        $this->execution_time = $execution_time;
        $this->producer = $producer;
        $this->country_of_origin = $country_of_origin;
    }
    public function get_details()
    {
        return 'title: ' . $this->title . ', ' . 'original language: ' . $this->original_language . ', ' . 'execution time: ' . $this->execution_time . ', ' . 'producer: ' . $this->producer . ', ' . 'country of origin: ' . $this->country_of_origin;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>PHP OOP 1</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <?php
            $scream_VI = new Movie('Scream VI', 'English', '1h 57m', 'Matt Bettinelli-Olpin, Tyler Gillett', 'USA');
            echo $scream_VI->get_details();
            ?>
            <br>
            <?php
            $requiem_for_a_dream = new Movie('Requiem for a Dream', 'English', '1h 37m', 'Darren Aronofsky', 'Poland');
            echo $requiem_for_a_dream->get_details();
            ?>

        </div>
    </main>

    <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>