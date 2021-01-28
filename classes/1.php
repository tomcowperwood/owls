<?php
class File
{
    #Path to file
    public $file;
    #Link to opened file
    public $fp;
    #Constructor
    public function __construct($file){
        $this->file = $file;
        #Check if file is able to write in
        if(!is_writable($this->file)){
            echo "File {$this->file} is unable to write";
            exit;
        }
        #Opening file to writing
        $this->fp = fopen($this->file, 'a');


    }
    #Destructor
    public function __destruct(){
        fclose($this->fp);
    }
    #Method to write into the file
    public function write($text){
        #$text - string to write into the file
    if(fwrite($this->fp , $text . PHP_EOL) === FALSE){
        echo "File {$this->file} is unable to write";
        exit;
    }

    }
    // $x = new File(__DIR__.'/classes/file.txt');
    // // __DIR__.'/text.txt' - goes to constructor

    // $x->write('String #1');
    // $x->write('String #2');
}

    
?>