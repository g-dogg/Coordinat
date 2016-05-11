<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbUserClass
 *
 * @author g-dogg
 */
class dbUserClass
{
    
    private $query;
    
    public function select($row = '', $tblName)
    {
        if(!$row)
        {
            $this->query = "select {$row} from {$tblName}";
        }
        else
        {
            $this->query = "select * from {$tblName}";
        }
        return $this->query;
    }
    
    public function update()
    {
        
    }
}
