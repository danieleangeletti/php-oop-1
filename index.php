<?php
class Movie
{
    public $title;
    public $original_language;
    public $execution_time;
    public $producer;
    public $country_of_origin;
    public $genres = array();

    function __construct(string $title, string $original_language, string $execution_time, string $producer, string $country_of_origin, array $genres)
    {
        $this->title = $title;
        $this->original_language = $original_language;
        $this->execution_time = $execution_time;
        $this->producer = $producer;
        $this->country_of_origin = $country_of_origin;
        $this->genres = $genres;

    }
    public function get_details()
    {
        return 'title: ' . $this->title . ', ' . 'original language: ' . $this->original_language . ', ' . 'execution time: ' . $this->execution_time . ', ' . 'producer: ' . $this->producer . ', ' . 'country of origin: ' . $this->country_of_origin . ', ' . 'genres: ' . $this->genres;
    }
    public function set_genres($genre)
    {
        $this->genres[] = $genre;
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
            $scream_VI_genres = array('horror', 'suspense', 'slasher');
            $scream_VI = new Movie('Scream VI', 'English', '1h 57m', 'Matt Bettinelli-Olpin, Tyler Gillett', 'USA', $scream_VI_genres);
            echo $scream_VI->get_details();
            ?>
            <br>
            <?php
            $requiem_for_a_dream_genres = array('horror', 'thriller', 'dramatic');
            $requiem_for_a_dream = new Movie('Requiem for a Dream', 'English', '1h 37m', 'Darren Aronofsky', 'Poland', $requiem_for_a_dream_genres);
            echo $requiem_for_a_dream->get_details();
            ?>

        </div>
    </main>

    <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>