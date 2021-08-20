<?php

require_once('./app/Database.php');

class User extends Database
{

    /**
     * Trazer um unico usuario especifico
     */

    public function getUser(string $value, string $field = "id"): array
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM users WHERE $field = :value"
        );

        $query->bindParam(':value', $value, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC) ?? [false];

        return $user ? $user : [];
    }

    /**
     * Trazer apenas dados do usuario autenticado
     */
    public function getMe(): array
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM users WHERE id = :value"
        );

        $query->bindParam(':value', $_SESSION['id'], PDO::PARAM_STR);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC) ?? [false];
    }

    /**
     * Criar um novo usuario baseado no registro
     */
    public function postUser(array $data): bool
    {
        try {
            $query = $this->pdo->prepare(
                "INSERT INTO users (name, email, password) VALUES(:name, :email, :password)"
            );
    
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
    
            $query->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $query->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $query->bindParam(':password', $data['password'], PDO::PARAM_STR);
            
            return $query->execute();
        } catch(PDOException $exception) {
            echo 'Deu problema.';
            die();
        }
    }

    public function putUser()
    {

    }
}
