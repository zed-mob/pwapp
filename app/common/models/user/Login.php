<?php

namespace common\models\user;

use Yii;
use yii\base\Model;
use common\models\user\User as AppUser;
use mdm\admin\models\User as MdmUser;

/**
 * This is the model class for User Login.
 */
class Login extends Model
{
	public $username;
    public $password;
    public $rememberMe = true;

    private $_user  = false;
	private $_email = false; // this will indicate that email is used to login

    /**
     * @inheritdoc
     */
    public function rules()
    {
		return [
            // username/email and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

	/**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
		$_userfound = false;
		$_uservalid = false;

        if (!$this->hasErrors())
		{
            $user  = $this->getUser();
			$email = $this->getUserByEmail();

			if ($user) {
				$_userfound = true;
				$_uservalid = $user->validatePassword($this->password);
			} elseif ($email) {
				$this->_email = true;
				$_userfound   = true;
				$_uservalid   = $email->validatePassword($this->password);
			}

            if (!$_userfound || !$_uservalid) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
			if ($this->_email === false) {
				return Yii::$app->getUser()->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
			} else {
				return Yii::$app->getUser()->login($this->getUserByEmail(), $this->rememberMe ? 3600 * 24 * 30 : 0);
			}
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = MdmUser::findByUsername($this->username);
        }

        return $this->_user;
    }

    /**
     * Finds user by [[username]] actual value is email
     *
     * @return User|null
     */
    public function getUserByEmail()
    {
        if ($this->_user === null) {
			$_username = AppUser::findByEmail($this->username);
			if ($_username === null) {
				$this->_user = false;
			} else {
				$this->_user = MdmUser::findByUsername($_username->username);
			}
        }

        return $this->_user;
    }
}
