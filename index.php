<?php

class Video {

    public $type;
    public $duration;
    public $published = false;
    public $titles;

    public function play() {

        return $this->published ? "The video is playing": "This video is not yet available.";
    }
    public function pause() {
            return $this->published ? "The video is paused": "";
    }
}
$introduction = new Video();
echo $introduction->play();



$video2 = new Video();
// var_dump($introduction);