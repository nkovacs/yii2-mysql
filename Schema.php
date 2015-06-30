<?php

namespace nkovacs\mysql;

class Schema extends \yii\db\mysql\Schema
{
    /**
     * @var string default type for Schema::TYPE_TEXT
     */
    public $defaultTextType = 'mediumtext';

    /**
     * Creates a query builder for the MySQL database.
     * @return QueryBuilder query builder instance
     */
    public function createQueryBuilder()
    {
        return new QueryBuilder($this->db, [], $this->defaultTextType);
    }
}
