<?php

/**
 * Created by PhpStorm.
 * User: mallanic
 * Date: 30/03/16
 * Time: 10:28
 */
namespace Luxury\Api;

use Model\UserQuery;

class Users extends Base\Query
{

    function __construct()
    {
        $this->query = new UserQuery();
        $this->modelClass = "Model\\User";
    }

    /**
     * Get Users
     *
     * @param string $orderBy {@from query} Order Query By Entry
     * @param array $filterBy {@from query} Filter Query By Entry
     * @param integer $limit {@from query} Set Limit of Query
     * @param integer $page {@from query} Set Page from Limit of Query
     * @param boolean $count {@from query} Set if Return Count of Element}
     * @return mixed[]
     */
    public function index($orderBy = null, $filterBy = null, $limit = null, $page = null, $count = false) {
        return (new \ReflectionMethod(__CLASS__, '_index'))->invokeArgs($this, func_get_args());
    }cpa

    /**
     *
     * Create a User
     *
     * @param integer $roleId
     * @param string $firstName
     * @param string $lastName
     * @param string $mail
     * @param string $phone
     * @param integer $defaultShop
     * @param integer $fidelity
     * @param boolean $isEnabled
     */
    public function post($roleId, $firstName, $lastName, $mail, $phone, $defaultShop, $fidelity, $isEnabled) {

    }

    /**
     *
     * Update a User from Id
     *
     * @param integer $id
     * @param integer $roleId
     * @param string $firstName
     * @param string $lastName
     * @param string $mail
     * @param string $phone
     * @param integer $defaultShop
     * @param integer $fidelity
     * @param boolean $isEnabled
     */
    public function put($id, $roleId, $firstName, $lastName, $mail, $phone, $defaultShop, $fidelity, $isEnabled) {

    }


    /**
     *
     * Patch a Role from Id with specific entry
     *
     * @param integer $id
     * @param integer $roleId
     * @param string $firstName
     * @param string $lastName
     * @param string $mail
     * @param string $phone
     * @param integer $defaultShop
     * @param integer $fidelity
     * @param boolean $isEnabled
     */
    public function patch($id, $roleId = null, $firstName = null, $lastName = null, $mail = null, $phone = null, $defaultShop = null, $fidelity = null, $isEnabled = null) {

    }


}