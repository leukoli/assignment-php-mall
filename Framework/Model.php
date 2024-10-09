<?php

namespace Framework;

/**
 * ORM Base Model
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class Model {
	
	public function find($id) {
        $stmt = $this->app->connection->prepare("SELECT * FROM {$this->table()} WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_CLASS, get_class($this));
    }

    public function findBy(array $conditions, array $orders=[]) {
        $placeholders = "";
        foreach ($conditions as $key => $value) {
            if(!empty($placeholders)){
                $placeholders .= " AND ";
            }
            $placeholders .= " $key = :{$key} ";
        }
        $orderSql = "";
        foreach ($orders as $key => $value) {
            if(empty($orderSql)){
                $orderSql = " ORDER BY ";
            }else{
                $orderSql .= ", ";
            }
            $orderSql .= " $key $value";
        }
        $stmt = $this->app->connection->prepare("SELECT * FROM {$this->table()} WHERE $placeholders $orderSql");
        foreach ($conditions as $key => &$value) {
            $stmt->bindParam(":$key", $value);
        }
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS, get_class($this));
    }

    public function all() {

        $stmt = $this->app->connection->prepare("SELECT * FROM {$this->table()}");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_CLASS, get_class($this));
        return $result;
    }

    public function allOrder($orderField) {

        $stmt = $this->app->connection->prepare("SELECT * FROM {$this->table()} ORDER BY $orderField");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $stmt = $this->app->connection->prepare("INSERT INTO {$this->table()} ($columns) VALUES ($placeholders)");

        foreach ($data as $key => &$value) {
            $stmt->bindParam(":$key", $value);
        }

        return $stmt->execute();
    }

    public function update($id, $data) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = :$key, ";
        }
        $set = rtrim($set, ", ");
        $stmt = $this->app->connection->prepare("UPDATE {$this->table()} SET $set WHERE id = :id");
        $stmt->bindParam(':id', $id);

        foreach ($data as $key => &$value) {
            $stmt->bindParam(":$key", $value);
        }

        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->app->connection->prepare("DELETE FROM {$this->table()} WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function table(){
    	if(!empty($this->table))
    		return $this->table;

		$split = explode('\\', get_class($this));
 
		return $this->table = strtolower(str_replace('Model','', $split[sizeof($split)-1]));
    }

}









