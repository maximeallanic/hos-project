<?php
/**
 * Created by PhpStorm.
 * User: mallanic
 * Date: 30/03/16
 * Time: 16:21
 */

namespace Api\Base;


use Propel\Runtime\ActiveQuery\ModelCriteria;

class Query
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
     *
     * Get Collections
     *
     * @param string $orderBy {@from query} Order Query By Entry
     * @param array $filterBy {@from query} Filter Query By Entry
     * @param integer $limit {@from query} Set Limit of Query
     * @param integer $page {@from query} Set Page from Limit of Query
     * @param boolean $count {@from query} Set if Return Count of Element}
     * @return mixed[]
     */
    function _index($orderBy = null, $filterBy = null, $limit = null, $page = null, $count = false) {
        if ($page && $limit)
            $this->query->paginate($page, $limit);
        if ($orderBy)
            $this->query->orderById($orderBy);
        return $this->query->find()->toArray();
    }

    /**
     *
     * Find an Element from ID
     *
     * @param integer $id {@from path} ID Of Element
     * @return mixed
     */
    function _get($id) {
        return $this->query->findOneById($id)->toArray();
    }

    /**
     * @access private
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function _post($data) {
        $model = new $this->modelClass();
        foreach ($data as $key=>$value)
            $model->setByName($key, $value);
        return $model->save();
    }

    /**
     * @access private
     * @param integer $id
     * @param array $data
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function _put($id, $data) {
        $model = $this->query->findOneById($id);
        $model->setByName($data);
        return $model->save();
    }

    /**
     *
     * Delete an Element from ID
     *
     * @param integer $id {@from path} ID Of Element
     * @throws \Propel\Runtime\Exception\PropelException
     */
    function _delete($id) {
        $model = $this->query->findOneById($id);
        $model->delete();
    }
}