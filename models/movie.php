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