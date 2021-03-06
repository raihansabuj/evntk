<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel {

    public $name;
    public $email;
    public $phone;
    public $subject;
    public $body;
    public $verifyCode;
    public $contact_person;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            //array('contact_person,name, email, subject, body', 'required'),
            array('name, email, subject', 'required'),
            // email has to be a valid email address
            array('email', 'email'),
            array('phone, body, contact_person, ', 'safe'),
            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'verifyCode' => Yii::t('ContactForm', 'verifyCode'),
            'body' => Yii::t('ContactForm', 'body'),
            'phone' => Yii::t('ContactForm', 'phone'),
            'contact_person' => Yii::t('ContactForm', 'contact_person'),
        );
    }

}
