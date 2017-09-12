<?php  
/**
* 
*/
class User extends AppModel {
	public $validate = array(
        'first_name' => array(
            'rule' => 'notBlank'
        ),
        'last_name' => array(
            'rule' => 'notBlank'
        ),
        'middle_name' => array(
            'rule' => 'notBlank'
        )
    );
}
?>