<?php


class File
{

  public $fp;
  public $file;

  public function __cunstruct($file)
  {
    $this->file = $file;
    if(!is_writable($this->file)) {
      echo "File $this->file";
      exit;
    }
    $this->fp = fopen($this->file, 'a');
  }

  public function __destruct()
  {
    fclose($this->fp);
  }

  public function write($text) {
    if(fwrite($this->fp, $text . PHP_EOL) === FALSE) {
      echo "Not file ($this->file)";
      exit;
    }
  }
}