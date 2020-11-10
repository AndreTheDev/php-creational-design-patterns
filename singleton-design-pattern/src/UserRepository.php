<?php

namespace CreationalDesignPatterns\Singleton;

/**
 * User repository with Singleton Design Pattern applied
 */
class UserRepository
{
    /**
     * Instance of the repository
     *
     * @var UserRepository
     */
    private static $instance = null;

    /**
     * Connection status
     *
     * @var boolean
     */
    private $connected = false;

    /**
     * Class constructor
     */
    private function __construct()
    {
        var_dump("Connecting to database...");
        $this->connect();
    }

    /**
     * Get a new instance of this class just if it was not created before
     *
     * @return self
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
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
     * List the Users
     *
     * @return void
     */
    public function listUsers()
    {
        if (!$this->connected) {
            var_dump("It wasn't possible to list users: Database not connected");
            return;
        }

        var_dump("Listing users...");
    }

    /**
     * Get User by id
     *
     * @param integer $userId
     * @return void
     */
    public function getUserById(int $userId)
    {
        if (!$this->connected) {
            var_dump("It wasn't possible to get user by id: Database not connected");
            return;
        }

        var_dump("Getting user by id {$userId} ...");
    }

    /**
     * Count Users
     *
     * @return void
     */
    public function countUsers()
    {
        if (!$this->connected) {
            var_dump("It wasn't possible to count users: Database not connected");
            return;
        }

        var_dump("Counting users...");
    }
}