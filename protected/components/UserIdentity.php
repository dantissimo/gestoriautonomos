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
	public function authenticate()
	{
		$model=new Users;
		$md5_pass = md5($this->password);
		
		$model = $model->findByAttributes(array('user'=>$this->username,'password'=>$md5_pass));
		if(isset($model)){
			$this->setState('id_user', $model->id_user);
			$this->setState('id_client',$model->id_client);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}