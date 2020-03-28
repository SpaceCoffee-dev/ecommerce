<?php  

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Source\Models
 */
class Modules extends DataLayer{
    /**
     * User constructor.
     */
    public function __construct()
    {
    	//string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("tb_modules", ["module_status", "module_name", "module_icon", "module_link"], "module_id");
    }
}


?>