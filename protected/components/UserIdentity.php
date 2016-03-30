<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	
	private $id, $_username;

	public function authenticate()
	    {

       
            $options = Yii::app()->params['ldap'];
          
            $connection = ldap_connect($options['host']);

            $record = Usuarios::model()->findByAttributes(array('nome'=>$this->username));

            if ($record === null) {

            	$this->errorCode = self::ERROR_USERNAME_INVALID;
            }
            elseif($connection){

                try
                {
                   $bind = @ldap_bind($connection, $this->username.$options['domain'], $this->password);
                }
                catch (Exception $e){
                    echo $e->getMessage();
                }
                if(!$bind){
                	$this->errorCode = self::ERROR_PASSWORD_INVALID;
                } 
                else{
	                 $this->id=$record->id;
                     $this->username=$record->nome;
                     $this->setState('nome', $record->nome);
                     $this->setState('id', $record->id);
                     $this->errorCode = self::ERROR_NONE;
                } 
            }
            return !$this->errorCode;
        }
	
}
/*
public function authenticate()
    {
       
            $options = Yii::app()->params['ldap'];
          
            $connection = ldap_connect($options['host']);

            $user = Yii::app()->db->createCommand()
			    ->select('*')
			    ->from('usuarios')
			    ->where("nome=':nome'", array(':nome'=>$this->username))
			    ->queryRow();

			$user = count($user);
            
			Yii::log($user, 'error');

            if(($connection) && ($user > 0))
            {
                try
                {
                   $bind = @ldap_bind($connection, $this->username.$options['domain'], $this->password);
                }
                catch (Exception $e){
                    echo $e->getMessage();
                }
                if(!$bind) $this->errorCode = self::ERROR_PASSWORD_INVALID;
                else $this->errorCode = self::ERROR_NONE;
            }
            return !$this->errorCode;

    }
	
}
*/
/*
			$options = Yii::app()->params['ldap'];
			//$dc_string = "dc=" . implode(",dc=",$options['dc']);
			 
			$connection = ldap_connect($options['host']);
			//ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
			//ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
			 
			if($connection)
			{
			    // Note: in general it is bad to hide errors, however we're checking for an error below
			    //$bind = @ldap_bind($connection, "uid={$this->username},ou={$options['ou']},{$dc_string}", $this->password);
			    $bind = @ldap_bind($connection, $this->username.$options['domain'], $this->password);
			 
			    if(!$bind) $this->errorCode = self::ERROR_PASSWORD_INVALID;
			    else $this->errorCode = self::ERROR_NONE;
			}
			return !$this->errorCode;

			*/