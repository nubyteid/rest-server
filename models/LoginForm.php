<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\httpclient\Client;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
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
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
        
    //     $client = new Client();
    //     $response = $client->createRequest()
    //     ->setMethod('post')
    //     ->setUrl('http://localhost/rest-app/web/index.php?r=auth/login')
    //     ->setData(['username' => $this->username, 'password' => $this->password])
    //     ->send();
    //     $session = Yii::$app->session;
    //     //set default error, You can use flash message
    //     $session->set('message', 'login error kaka..');
        
    //         if ($response->isOk) {
    //         $status = $response->data['status'];
    //         $message = $response->data['message'];
    //         $data = $response->data['data'];
    //         // check login success
    //         if($status==='success' and !empty($data)){
    //             $user=[
    //             'id' => $data['id'],
    //             'username' => $data['username'],
    //             'authKey' => $data['token'],
    //             'accessToken' => $data['token'],
    //             ];
    //             // save to session for reading in model user
    //             $session->set('user', $user);
        
    //             // create instance form model user
    //             if($user = User::findIdentity($user['id'])){
    //             $session->remove('message');
    //             return Yii::$app->user->login($user, $this->rememberMe ? 3600*24*30 : 0);
    //             }
    //         }
    // }
    // return false;
    }
    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */

    public function client()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;

    }
    
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }


}
