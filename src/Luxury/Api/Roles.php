<?php
/**
 * Created by PhpStorm.
 * User: mallanic
 * Date: 30/03/16
 * Time: 12:33
 */

namespace Api;

use Api\Base\Query;
use Model\RoleQuery;
use Model\Role;

/**
 * Class Roles
 * @package Api
 *
 */
abstract class Roles extends Query
{

    function __construct()
    {
        $this->query = new RoleQuery();
        $this->modelClass = "Model\\Role";
    }

    /**
     *
     * Create a Role with specific Permissions
     *
     * @param string $name Name of Role
     * @param array $permissions List of Permissions from api/permissions
     */
    public function post($name, $permissions) {
        return parent::create(
            func_get_args(),
            (new \ReflectionMethod($this, __FUNCTION__))->getParameters()
        );
    }

    /**
     *
     * Update a Role from Id
     *
     * @param integer $id {@from path} Id of Role
     * @param string $name {@from body} Name of Role
     * @param array $permissions {@from body} List of Permissions from api/permissions
     */
    public function put($id, $name, $permissions) {
        return parent::update(
            $id,
            func_get_args(),
            (new \ReflectionMethod($this, __FUNCTION__))->getParameters());
    }


    /**
     *
     * Patch a Role from Id with specific entry
     *
     * @param integer $id {@from path} Id Of Role
     * @param string $name {@from body} Name of Role
     * @param array $permissions {@from body} List of Permissions from api/permissions
     */
    public function patch($id, $name = null, $permissions = null) {
        return parent::updatePartially(
            $id,
            func_get_args(),
            (new \ReflectionMethod($this, __FUNCTION__))->getParameters()
        );
    }


}