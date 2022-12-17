<?php

class DB {
    var object $connection;
    var string $sql;
    var string $table;

    // Connection Function
    function __construct()
    {
        $this->connection = mysqli_connect("localhost", "root", "", "my_data");
    }

    // Function that take table name
    function table($table)
    {
        $this->table = $table;
        return $this;
    }

    // Select Function
    function select(string $columns):object
    {   
        $this->sql = "SELECT $columns FROM `$this->table`";
        return $this;
    }

    // Implementing a where-conditional function
    function where(string $column, string $operator, string $value):object
    {
        $this->sql .= " WHERE `$column` $operator '$value'";
        return $this;
    }

    // Function that select all rows
    function all():array
    {
        $query = mysqli_query($this->connection, $this->sql);
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

    // Function that select only one row
    function first():array
    {
        $query = mysqli_query($this->connection, $this->sql);
        return mysqli_fetch_assoc($query);
    }

    // Execute Function
    function execute():int
    {
        mysqli_query($this->connection, $this->sql);
        return mysqli_affected_rows($this->connection);
    }

    // Delete Function
    function delete():object
    {
        $this->sql = "DELETE FROM '$this->table'";
        return $this;
    }

    // Insert Function
    function insert(array $data):object
    {
        $columns = "";
        $values = "";
        foreach ($data as $key => $value) {
            $columns .= "`$key` ,";
            $values .= "'$value' ,";
        }
        $columns = rtrim($columns, ",");
        $values = rtrim($values, ",");

        $this->sql = "INSERT INTO `$this->table` ($columns) VALUES ($values) ";
        return $this;
    }

    ### Implementing Update Function ###
    function update(array $data):object
    {
        $columns = "";
        $values = "";
        foreach ($data as $key => $value) {
            $columns .= "`$key,";
            $values .= "'$value,";
        }
        $columns = rtrim($columns, ",");
        $values = rtrim($values, ",");
        $columns = trim($columns, "`");
        $values = trim($values, "'");

        $this->sql = "UPDATE `$this->table` SET `$columns` = '$values' ";
        return $this;
    }

    ### Implementing And Operator Function ###
    function and(string $column, string $operator, string $value):object
    {
        $this->sql .= " AND `$column` $operator '$value'";
        return $this;
    }

    ### Implementing OR Operator Function ###
    function or(string $column, string $operator, string $value):object
    {
        $this->sql .= " OR `$column` $operator '$value'";
        return $this;
    }

    ### Implementing Inner Join Query Function (join) ###
    function join(string $table):object
    {
        $this->sql .= " INNER JOIN `$table`";
        return $this;
    }

    ### Implementing Inner Join Query Function (on) ###
    function on(string $table_one_column_name, string $operator, string $table_two_column_name):object
    {
        $this->sql .= " ON $table_one_column_name $operator $table_two_column_name";
        return $this;
    }
}

?>