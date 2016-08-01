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
    //private $theme;
    private $description;
    private $ticketHolder;
    private $ticketHelper;
    private $status = 0;
    private $ticket;
    private $formValidator;

    public function __construct(\Db $db)
    {
        parent::__construct($db);
        $this->formValidator = new validateFormProblemModel;
    }

    public function getTicket($theme)
    {
        $query = "SELECT theme FROM tickets WHERE theme = :theme";
        $handler = $this->db->prepare($query);
        $this->ticket = $handler->execute(["theme"]);

    }

    public function newTicket()
    {
        ;
        $validateTicket = $formValidator->getValidatedProblem()->validateForm();

        $query = "INSERT INTO "; //TODO доделать запрос в соответствии с табл
        $handler = $this->model->db->prepare($query);
        $handler->execute([]);
    }

    public function updateTicketStatus()
    {
        switch ($this) {
            case 'value':
                # code...
                break;

            default:
                # code...
                break;
        }
    }

    public function updateTicketStatus()
    {
        $query = "UPDATE problems SET status = :status";

    }
}
