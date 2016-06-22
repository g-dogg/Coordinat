<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ticketModel
 *
 * @author g-dogg
 */
class ticketModel extends Model
{
    private $theme;
    private $description;
    private $ticketHolder;
    private $ticketHelper;
    private $status;
    
    public function __construct(\Db $db) 
    {
        parent::__construct($db);
    }
    
    public function getThemeTicket($theme)
    {
        $query = "SELECT theme FROM tickets WHERE theme = :theme";
        $handler = $this->db->prepare($query);
        $handler->execute(["theme"]);
    }
}
