<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
App::uses('AuthComponent', 'Controller/Component');


class Usuario extends AppModel {

     public $name = 'Usuario';


    public function beforeSave($options = array()) {

            if (isset($this->data[$this->alias]['password'])) {
                $passwordHasher = new BlowfishPasswordHasher();
                $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
                );
            }
            return true;

        // if (isset($this->data['Usuario']['senha'])) {
        // // $password = &$this->data['Usuario']['senha'];
        // $passwordHasher = new SimplePasswordHasher();
        // $this->data[$this->alias]['password'] = $passwordHasher->hash(
        //     $this->data[$this->alias]['password']);

        // }
        // return parent::beforeSave($options);
        }

    public $validate = array(
        'login' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        ),
        'senha' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )
        ),

    );
}