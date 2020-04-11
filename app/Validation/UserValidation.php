<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class UserValidation extends Validation
{
    public function initialize()
    {
        $this->add(
            'username',
            new PresenceOf(
                [
                    'message' => 'The name is required',
                ]
            )
        );

        $this->add(
            'email',
            new PresenceOf(
                [
                    'message' => 'The e-mail is required',
                    // 'cancelOnFail' => true,
                ]
            )
        );

        $this->add(
            'email',
            new Email(
                [
                    'message' => 'Emailnya Salah',
                ]
            )
        );
        $this->setFilters('username', 'trim');
        $this->setFilters('email', 'trim');
    }
    // public function beforeValidation()
    // {
    //     // echo('before validation<br>');
    //     echo('return false sehingga validation tidak dilakukan');
    //     return false;
    // }

    // public function afterValidation($data, $entity, $messages)
    // {
    //     // ... Add additional messages or perform more validations
    //     echo('masuk after validation<br>');
    // }
    
}