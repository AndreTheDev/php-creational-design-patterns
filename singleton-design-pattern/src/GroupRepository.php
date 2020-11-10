<?php

namespace CreationalDesignPatterns\Singleton;

/**
 * Group repository
 */
class GroupRepository
{
    /**
     * Connection status
     *
     * @var boolean
     */
    private $connected = false;

    /**
     * Class constructor
     */
    public function __construct()
    {
        var_dump("Connecting to database...");
        $this->connect();
    }

    /**
     * Connect to database
     *
     * @return void
     */
    private function connect()
    {
        $this->connected = true;
        var_dump("Connected to database :)");
    }

    /**
     * List Groups
     *
     * @return void
     */
    public function listGroups()
    {
        if (!$this->connected) {
            var_dump("It wasn't possible to list groups: Database not connected");
            return;
        }

        var_dump("Listing groups...");
    }

    /**
     * Get Group by id
     *
     * @param integer $groupId
     * @return void
     */
    public function getGroupById(int $groupId)
    {
        if (!$this->connected) {
            var_dump("It wasn't possible to get group by id: Database not connected");
            return;
        }

        var_dump("Getting group by id {$groupId} ...");
    }

    /**
     * Count Groups
     *
     * @return void
     */
    public function countGroups()
    {
        if (!$this->connected) {
            var_dump("It wasn't possible to count groups: Database not connected");
            return;
        }

        var_dump("Counting groups...");
    }
}