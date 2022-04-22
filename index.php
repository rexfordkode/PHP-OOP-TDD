<?php

class Video {

    public $type;
    public $duration;
    public $published = false;
    public $titles;

    public function __construct($type, $duration, $published){
        $this->type = $type;
        $this->duration = $duration;
        $this->published = $published;
    }

    public function play() {

        return $this->published ? "The video is playing": "This video is not yet available.";
    }
    public function pause() {
            return $this->published ? "The video is paused": "";
    }
}
header('Content-Type:text/plain',true);

$introduction = new Video();
$introduction->published = true;
$introduction->author = 'Devrex';
echo $introduction->play(), PHP_EOL, $introduction->pause(), PHP_EOL, $introduction->author;



$video2 = new Video();
// var_dump($introduction);