<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fileSort
 *
 * @author Ilyash
 */
class fileSort 
{

   public $fileHandler;
   public $sorted = array();
  
   public $filename;
   
   public function fileRead($filename)
   {
    $this->fileHandler = fopen($filename, 'r');      
    if($this->fileHandler)
    {
      while(!feof($this->fileHandler))
      {
          $readed[] = file_get_contents($this->fileHandler);
      }
      fclose($this->fileHandler);
     }
    return $readed;
    
   } 
}