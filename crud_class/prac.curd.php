<?php
class Database{
    private $db_host="localhost";
    private $db_user="root";
    private $db_pass="";
    private $db_name="testing";

    private $conn=false;
    private $mysqli="";
    private $result= array();


    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
           $this->conn=true;
            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;
            }

        }else{
            return true;
        }
    }

    public function insert($table,$params=array()){
        if($this->tableExists($table)){

            $table_columns= implode(', ',array_key($params));
            $table_value= implode(', ',$params);
            $sql="INSERT INTO $table ( $table_columns)VALUES ($table_value)";

            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->insert_id);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return true;

            }
           
        }else{
            return false;
        }

    }
    private function tableExists($table){
        $sql= "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb= $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result,$table."Does not exists in this database.")
                return false;
            }
        }
    }



    public function __destruct(){
        if($this->conn){
            if( $mysqli->close()){
              retrun true;
            }
        }else{
            return false;
        }
    }
    
}


?>