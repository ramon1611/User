<?php
/**
 * File: user.class.php
 * Project: Ticketsystem
 * File Created: Tuesday, 19th December 2017 12:44:29 pm
 * @author ramon1611
 * -----
 * Last Modified: Friday, 2nd February 2018 11:14:27 am
 * Modified By: ramon1611
 */

/**
 * Namespace ramon1611
 */
namespace ramon1611\Libs;

/**
 * Class User
 * 
 * @api
 * @package User
 */
class User {
    private $_id = NULL;
    private $_name = NULL;
    private $_mail = NULL;
	private $_profilePic = NULL;
    private $_passwordHash = NULL;
    
    /**
     * Constructor
     * 
     * @param array $userData Array of user data. Default is NULL
     * @return void
     */
    public function __construct( array $userData = NULL ) {
        if ( isset( $userData ) )
            $this->set( $userData );
    }

    /**
     * Set user data
     * 
     * @param array $userData Array of user data
     * @return bool
     */
    public function set( array $userData ) {
        if ( isset( $userData ) ) {
			if ( !array_key_exists( 'profilePic', $userData ) )
					$userData['profilePic'] = NULL;
			
            if ( isset( $userData['id'], $userData['name'], $userData['mail'], $userData['passwordHash'] ) ) {
                $this->_id              = $userData['id'];
                $this->_name            = $userData['name'];
                $this->_mail            = $userData['mail'];
				$this->_profilePic		= $userData['profilePic'];
                $this->_passwordHash    = $userData['passwordHash'];

                return true;
            } else
                return false;
        } else
            return false;
    }

    /**
     * Get user data
     * 
     * @param void
     * @return array Returns an array of user data
     */
    public function get() {
        return array(
            'id'            => $this->_id,
            'name'          => $this->_name,
            'mail'          => $this->_mail,
			'profilePic'	=> $this->_profilePic,
            'passwordHash'  => $this->_passwordHash
        );
    }

    /**
     * Check user credential
     * 
     * @param string $password Plain text password
     * @return bool
     */
    public function checkCredential( string $password ) {
        return password_verify( $password, $this->_passwordHash );
    }
}
?>
