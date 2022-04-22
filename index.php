<?php

class Video {

    private $type;
    private $duration;
    private $published = false;
    private $title;
    private $playStatus;

    // public function __construct(string $type='mp4', float $duration=800, string $published="default"){
    //     $this->type = $type;
    //     $this->duration = $duration;
    //     $this->published = $published;
    // }    
    
public function setPublished(bool $state){
    $this->published = $state;
}
private function getPublished(){
    return $this->published;
}

    public function play() {
        if($this->getPublished()){
            $this->playStatus = true;
            return 'The video is playing';
        }
        return "This video is not yet available.";
    }
    public function pause() {
            return $this->published ? "The video is paused": "";
    }

    // public function __destruct()
    // {
    //     var_dump("Destroying instance of".get_class());
    // }

    /**
     * Get the value of titles
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of titles
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
       return $this->title = $title;

    }
}
// header('Content-Type:text/plain',true);

$introduction = new Video;
$introduction->setPublished(true);
$introduction->setTitle('Introduction to TDD');

echo $introduction->getTitle(),PHP_EOL;
echo $introduction->play(),PHP_EOL,$introduction->pause(),PHP_EOL;

