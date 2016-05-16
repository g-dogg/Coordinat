<?php
/**
 * Description of addrersClass
 *
 * @author g-dogg
 */

class address
{

    public function selectAddress($where, $field, $oredering)
    {
        if(isset($where) and isset($field) and isset($oredering))
        {
            $query = "select {$field} from {$where} order by {$oredering}";
        }
        elseif ()
        {
            # code...
        }
    }

    public function updateAddress()
    {

    }*/
}