<?php

require_once 'BaseDatabase.php';

class SqlServerDatabaseTest extends BaseDatabase
{
    protected $uri = 'dblib://sa:Pa$$word!@mssql-container/migratedatabase';

    /**
     * @var \ByJG\DbMigration\Migration
     */
    protected $migrate = null;

    public function getExpectedUsersVersion1()
    {
        return [
            ["id" => 1, "name" => 'John Doe', 'createdate' => 'Jan 10 2016 12:00:00:AM'],
            ["id" => 2, "name" => 'Jane Doe', 'createdate' => 'Dec 30 2015 12:00:00:AM']
        ];
    }

    public function setUp()
    {
        $this->migrate = new \ByJG\DbMigration\Migration(new \ByJG\Util\Uri($this->uri), __DIR__ . '/../example/sql_server');
        parent::setUp();
    }
}
