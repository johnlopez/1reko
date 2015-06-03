<?php


class UserIdentity extends CUserIdentity
{
	private $_id;

	public function authenticate()
	{

		$user=Usuario::model()->find("LOWER(usuario)=?",array(strtolower($this->username)));

		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(($this->password)!==$user->clave)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->id;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}
}
