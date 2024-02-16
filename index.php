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
        $genres_list = '';
        foreach ($this->genres as $genre) {
            $genres_list .= $genre . ' ';
        }
        return 'title: ' . $this->title . ', ' . 'original language: ' . $this->original_language . ', ' . 'execution time: ' . $this->execution_time . ', ' . 'producer: ' . $this->producer . ', ' . 'country of origin: ' . $this->country_of_origin . ', ' . 'genres: ' . $genres_list;
    }
    public function set_genre($genre)
    {
        $this->genres[] = $genre;
    }
    public function get_title()
    {
        return $this->title;
    }
    public function get_original_language()
    {
        return $this->original_language;
    }
    public function get_execution_time()
    {
        return $this->execution_time;
    }
    public function get_producer()
    {
        return $this->producer;
    }
    public function get_country_of_origin()
    {
        return $this->country_of_origin;
    }
    public function get_genres()
    {
        $genres_list = '';
        foreach ($this->genres as $genre) {
            $genres_list .= $genre . ' ';
        }
        return $genres_list;
    }

}
$scream_VI_genres = array('horror', 'suspense', 'slasher');
$scream_VI = new Movie('Scream VI', 'English', '1h 57m', 'Matt Bettinelli-Olpin, Tyler Gillett', 'USA', $scream_VI_genres);

$requiem_for_a_dream_genres = array('horror', 'thriller', 'dramatic');
$requiem_for_a_dream = new Movie('Requiem for a Dream', 'English', '1h 37m', 'Darren Aronofsky', 'Poland', $requiem_for_a_dream_genres);
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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Original language</th>
                        <th scope="col">Execution time</th>
                        <th scope="col">Producer</th>
                        <th scope="col">Country of origin</th>
                        <th scope="col">Genres</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $scream_VI->get_title() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_original_language() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_execution_time() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_producer() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_country_of_origin() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_genres() ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $requiem_for_a_dream->get_title() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_original_language() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_execution_time() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_producer() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_country_of_origin() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_genres() ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>