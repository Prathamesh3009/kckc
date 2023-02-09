<?php
class Database{
    private $db_host="localhost";
    private $db_user="root";
    private $db_pass="";
    private $db_name="testing";


    private $mysqli= "";
    private $result=array();
    private $conn=false;


    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            $this->conn=true;
            if($this->mysqli->connect_error){
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        }else{
            return true;
        }

    }
    //Insert into Database
    public function insert($table,$params=array()){
        // Check to see if the table exists
        if($this->tableExists($table)){
        // print_f($params);
            // Seperate $params's Array KEYs and VALUEs and Convert them to String Value
            $table_columns = implode(', ', array_keys($params));
            $table_value = implode("', '", $params);
            // Make the query to insert to the database
            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->insert_id);
                return "true"; // The data has been inserted
            }else{
                array_push($this->result,$this->mysqli->error);
                return false; // The data has not been inserted

            }
        }else{
                return false; // Table does not exist
        }

    }
    //for checking table exits or not
    private function tableExists($table){
        $sql="SHOW TABLES FROM  $this->db_name LIKE '$table'";
        $tableInDb= $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows==1){
                return true; // The table exists
            }else{
                array_push($this->result, $table."does not exist in this database. ");
                return false; // The table does not exist

            }
        }

    }
    // Public function to return the data to the user
    public function getresult(){
        $val= $this->result;
        $this->result= array();
        return $val;
    }
    //closing the connection
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn= false;
                return true;
            }

        }else{
            return false;
        }
    }
}


?>