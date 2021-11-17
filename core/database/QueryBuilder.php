<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function login(string $email, string $password): User
    {
        $statement = $this->pdo->prepare("select * from users where email='$email' AND password='$password'");

        $statement->execute();

        $user = $statement->fetch();

        if (!$user) {
            throw new Exception("Error logging you in.");
        }

        unset($user['password']);

        return new User($user);
    }

    public function searchUsers(string $searchTerm = ""): array
    {
        $searchTerm = strtolower($searchTerm);

        $statement = $this->pdo
            ->prepare("select * from users where lower(name) like '%$searchTerm%' or lower(email) like '%$searchTerm%'");

        $statement->execute();

        $usersData = $statement->fetchAll();

        if (!count($usersData)) {
            return [];
        }

        return array_map(
            function ($user) {
                unset($user['password']);

                return new User($user);
            },
            $usersData
        );
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        $statement = $this->pdo->prepare($sql);

        $statement->execute($parameters);
    }
}
