<?php

namespace restaurant\lib;

class DB
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "Projekt";

    private \PDO $connection;

    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    ) {
        if (!empty($host)) {
            $this->host = $host;
        }

        if (!empty($port)) {
            $this->port = $port;
        }

        if (!empty($username)) {
            $this->username = $username;
        }

        if (!empty($password)) {
            $this->password = $password;
        }

        if (!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertMenuRecord(string $pageName, string $url): bool
    {
        $sql = "INSERT INTO NavigationMenu(menuName, url) VALUE ('" . $pageName . "', '" . $url . "')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function getMenuItems(): array
    {
        $sql = "SELECT menuName, menuUrl FROM NavigationMenu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $menuItem) {
            $finalMenu[$menuItem['menuName']] = $menuItem['menuUrl'];
        }

        return $finalMenu;
    }

    public function getMenu(): array
    {
        $sql = "SELECT * FROM NavigationMenu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }


    public function getItems(): array
    {
        $sql = "SELECT id, title, img, rating, reviews, price, category FROM food";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function getItemsByID(int $id): array
    {
        $sql = "SELECT * FROM food WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    


    public function insertItem(string $img, string $title, int $rating, int $reviews, float $price, string $category): bool
    {
        $sql = "INSERT INTO food(img, title, rating, reviews, price, category) VALUE ('" . $img . "', '" . $title . "', '" . $rating . "', '" . $reviews . "', '" . $price . "', '" . $category . "')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }




    public function deleteItem(int $id): bool
    {
        $sql = "DELETE FROM food WHERE id = " . $id;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function updateItem(int $id = NULL, string $img = "", string $title = "", int $rating = NULL, int $reviews = NULL, float $price = NULL, string $category = ""): bool
    {
        $sql = "UPDATE food SET";

        if (!empty($img)) {
            $sql .= " img = '" . $img . "'";
        }

        if (!empty($title)) {
            $sql .= ", title = '" . $title . "'";
        }

        if (!empty($rating)) {
            $sql .= ", rating = '" . $rating . "'";
        }

        if (!empty($reviews)) {
            $sql .= ", reviews = '" . $reviews . "'";
        }

        if (!empty($price)) {
            $sql .= ", price = '" . $price . "'";
        }

        if (!empty($category)) {
            $sql .= ", category = '" . $category . "'";
        }

        $sql .= " WHERE id = " . $id;

        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    
    


    public function getItemsByCategory(string $category): array
    {
        $category = $this->connection->quote($category);
        $sql = "SELECT * FROM food WHERE category = $category";
        $query = $this->connection->query($sql);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}
