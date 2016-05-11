<?php

namespace formProblem;

class formProblemClass
{
	private $themeProblem;
	private $textProblem;
	private $args = [
		'theme' => FILTER_SANITIZE_STRING,
		'problemText' => FILTER_SANITIZE_STRING
	];
      private $filteredArray = [];

 	public function validateFormData()
 	{
   		try
   		{
     			$this->filteredArray = filter_input_array(INPUT_POST, $this->args);
   		}
   		catch (Exception $ex)
   		{
      			echo "Ошибка входных данных: " . $ex->getMessage();
   		}
   	return $this;
 	}

      public function getProblemTheme()
      {
        if(!empty($filteredArray))
        {
          return $this->filteredArray['theme'];
        }
      }
      public function getProblemText()
      {
        if(!empty($filteredArray))
        {
          return $this->filteredArray['problemText'];
        }
      }
}