<?php

/**
 * Created by PhpStorm.
 * User: mallanic
 * Date: 30/03/16
 * Time: 10:28
 */
namespace Api;

use User;

class Users
{
    function index() {
        return [];
    }

    function get($id) {
        return [];
    }

    function post($firstName, $lastName, $role, $mail, $phone, $defaultShop, $fidelity, $isEnabled) {
        $author = new User();
        $author->setFirstname($firstName);
        $author->setLastname($lastName);
        $author->setRole($role);
        $author->setMail($mail);
        $author->setPhone($phone);
        $author->setDefaultshop($defaultShop);
        $author->setFidelity($firstName);
        $author->setIsenabled($isEnabled);
        $author->save();
    }

    function put($id, $data) {

    }

    function patch($id, $data) {

    }

    function delete($id) {

    }
}