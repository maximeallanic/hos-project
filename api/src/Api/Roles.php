<?php
/**
 * Created by PhpStorm.
 * User: mallanic
 * Date: 30/03/16
 * Time: 12:33
 */

namespace Api;

use RolesQuery;
use Role;

class Roles
{
    var $roleQuery;

    function __construct()
    {
        $this->roleQuery = new RolesQuery();
    }

    /**
     * @param string $orderBy (Order Query By Entry)
     * @param array $filterBy (Filter Query By Entry)
     * @param integer $limit (Set Limit of Query)
     * @param integer $page (Set Page from Limit of Query)
     * @return Role[]
     */
    function index($orderBy = null, $filterBy = null, $limit = null, $page = null) {
        $query = $this->roleQuery;
        if ($page && $limit)
            $query->paginate($page, $limit);
        if ($orderBy)
            $query->orderById($orderBy);
        return $this->roleQuery->find();
    }

    function get($id) {
        return $this->roleQuery->findOneById($id);
    }

    /**
     * @param string $name (Name of Role)
     * @param array $permissions (List of Permission from api/permissions)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function post($name, $permissions) {
        $role = new Role();
        $role->setName($name);
        $role->setPermissions($permissions);
        $role->save();
    }

    function put($id, $data) {

    }

    function patch($id, $data) {

    }

    function delete($id) {

    }
}