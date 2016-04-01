<?php
/**
 * Created by PhpStorm.
 * User: mallanic
 * Date: 30/03/16
 * Time: 16:21
 */

namespace Api;


use Propel\Runtime\ActiveQuery\ModelCriteria;

abstract class BaseQuery
{
    /**
     * @var ModelCriteria
     */
    var $query = null;

    /**
     * @var string
     */
    var $modelClass = null;

    /**
     * @param string $orderBy (Order Query By Entry)
     * @param array $filterBy (Filter Query By Entry)
     * @param integer $limit (Set Limit of Query)
     * @param integer $page (Set Page from Limit of Query)
     * @return mixed[]
     */
    function index($orderBy = null, $filterBy = null, $limit = null, $page = null) {
        if ($page && $limit)
            $this->query->paginate($page, $limit);
        if ($orderBy)
            $this->query->orderById($orderBy);
        return $this->query->find()->toArray();
    }

    /**
     * @param integer $id (ID of Element)
     * @return mixed
     */
    function get($id) {
        return $this->query->findOneById($id);
    }

    /**
     * @param array $data
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function create($data) {
        $model = new $this->modelClass();
        $model->fromArray($data);
        return $model->save();
    }

    /**
     * @param integer $id
     * @param array $data
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function update($id, $data) {
        $model = $this->query->findOneById($id);
        $model->fromArray($data);
        $model->save();
    }

    /**
     * @param integer $id
     * @param array $data
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function updatePartially($id, $data) {
        $model = $this->query->findOneById($id);
        $model->fromArray($data);
        $model->save();
    }

    /**
     * @param integer $id
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function delete($id) {
        $model = $this->query->findOneById($id);
        $model->delete();
    }
}