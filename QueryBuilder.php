<?php

namespace nkovacs\mysql;

class QueryBuilder extends \yii\db\mysql\QueryBuilder
{
    /**
     * Constructor.
     * @param Connection $connection the database connection.
     * @param array $config name-value pairs that will be used to initialize the object properties
     */
    public function __construct($connection, $config = [], $textType = 'mediumtext')
    {
        $this->typeMap[Schema::TYPE_TEXT] = $textType;
        parent::__construct($connection, $config);
    }
}
