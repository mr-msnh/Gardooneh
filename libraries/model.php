<?php
class Model
{
    private $connection;

    public function __construct()
    {
        try
        {
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
            $this->connection = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        }
        catch(PDOException $error)
        {
            $errorMessage = date("h:i:s  -  Y/m/d")."\n---------\n".$error."\n_______________________________\n\n";

            $FileAppend = fopen("./logs/database_connection.txt", "a");
            fwrite($FileAppend, $errorMessage);
            fclose($FileAppend);

            echo "connection lost";
            exit();
        }
    }

    public function queryExceute($query, $params = null)
    {
        $statement = ($this->connection)->prepare($query);
        if(isset($params))
        {
            if(is_array($params))
            {
                foreach($params as $counter=>$value)
                {
                    $statement->bindValue($counter+1,$value);
                }
            }
        }
        $resultQuery = $statement->execute();

        if($resultQuery)
        {
            $resultData = $statement->fetchAll();
            return $resultData;
        }
        else
        {
            return false;
        }
    }

    public function generalQuerySelecte($tableName, $tableFields = null, $limitRows = null, $onlyActive = true, $desc = true)
    {
        $query = "SELECT ";

        //Table Fildes
        if(isset($tableFields))
        {
            $stringTableFileds = "";
            for($counter = 0; $counter<count($tableFields); $counter++)
            {
                if($counter != count($tableFields)-1)
                {
                    $stringTableFileds .= "`".$tableFields[$counter]."`, ";
                }
                else
                {
                    $stringTableFileds .= "`".$tableFields[$counter]."` ";
                }
            }
            $query .= $stringTableFileds."FROM ";
        }
        else
        {
            $query .= "* FROM ";
        }

        //Table Name
        $query .= "`".$tableName."` ";

        //Records Active Only
        if($onlyActive == true)
        {
            $query .= "WHERE `active` = 1 ";
        }
        else
        {
            $query .= "";
        }

        //Records Order By
        if($desc == true)
        {
            $query .= "ORDER BY `id` DESC ";
        }
        else
        {
            $query .= "ORDER BY `id` ";
        }

        //Records Limition
        if(isset($limitRows))
        {
            $query .= "LIMIT 0, ".$limitRows;
        }
        else
        {
            $query .= "";
        }
        
        $resultData = $this->queryExceute($query);
        return $resultData;
    }
}