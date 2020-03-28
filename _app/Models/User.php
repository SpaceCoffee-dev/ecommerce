<?php  

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Source\Models
 */
class User extends DataLayer{
    /**
     * User constructor.
     */
    public function __construct()
    {
    	//string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("tb_users", ["user_first_name", "user_last_name", "user_email", "user_password", "user_level", "user_status"], "user_id");
    }
}


?>