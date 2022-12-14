<?php

namespace App\Image;

class Resize{

    private $image;
    private $type;

    public function __construct(string $file){
        $this->image = imagecreatefromstring(file_get_contents($file));
        

        //INFO
        $info = pathinfo($file);
        $this->type = $info['extension'] == 'jpg' ? 'jpeg' : $info['extension'];
    }

    public function resize($newWidth, $newHeight = -1){
        $this->image = imagescale($this->image, $newWidth, $newHeight);
    }

    //imprime a imagem na tela
    public function print($quality = 100){
        header('Content-Type: image/'.$this->type);
        $this->output(null, $quality);
        exit;
    }

    //salva a img no disco
    public function save($localFile, $quality = 100){
        $this->output($localFile, $quality);
    }

    //Executa a saida da imagem
    private function output($localFile, $quality = 100){
        switch($this->type){
            case "jpeg":
                imagejpeg($this->image, $localFile, $quality);
            break;

            case "png":
                imagepng($this->image, $localFile, $quality);
            break;

            case "bmp":
                imagewbmp($this->image, $localFile, $quality);
            break;

            case "gif":
                imagegif($this->image, $localFile, $quality);
            break;

            case "webp":
                imagewebp($this->image, $localFile, $quality);
            break;
        }
        
    }

}