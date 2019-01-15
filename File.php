<?php


class File
{

    public $fp;
    public $file;
    public $fd;

    public function __construct($file)
    {
        $this->file = $file;
        if(!is_writable($this->file)){
            echo "Файл {$this->file} недоступен для записи";
            exit;
        }
        $this->fp = fopen($this->file, 'a');
        $this->fd = fopen($this->file, 'r');
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function write($text){
        if (fwrite($this->fp, $text . PHP_EOL) === FALSE) {
            echo "Не могу произвести запись в файл ($this->file)";
            exit;
        }
    }

    public function read(){
        echo "<p><b>Данные из файла</b></p>";
        while(!feof($this->fd))
        {
            $str = htmlentities(fgets($this->fd));
            echo $str."<br>";
        }
    }


}