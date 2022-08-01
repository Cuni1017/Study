<?php


class sql_function{

        public $DB_HOST = 'localhost';
        public $DB_USER = 'root';
        public $DB_PWD  = '1qaz2wsx';
        public $DB_NAME = 'study';
        
        public function __construct($DB_HOST,$DB_USER,$DB_PWD,$DB_NAME) {   
            $this->mysql_address  = $DB_HOST;
            $this->mysql_username = $DB_USER;
            $this->mysql_password = $DB_PWD;
            $this->mysql_database = $DB_NAME;
            $this -> link = mysqli_connect($this->mysql_address,$this->mysql_username, $this->mysql_password,$this->mysql_database);
            if(mysqli_connect_errno()){
                $this->error_message = "MYsql連接不成功 " . mysqli_connect_error();
                echo $this->error_message;
            }
                mysqli_query($this->link , "SET NAMES utf8");
                mysqli_query($this->link , "SET CHARACTER_SET_database= utf8");
                mysqli_query($this->link , "SET CHARACTER_SET_CLIENT= utf8");
                mysqli_query($this->link , "SET CHARACTER_SET_RESULTS= utf8");
        }
        

        public function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
            $select_sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
            echo $select_sql;
            //$stmt = con()->query($sql);
            $result = mysqli_query($this->link, $select_sql);
            var_dump($result);
            if(!is_object($result))return "資料查詢錯誤";
                return $result;
        }

        function insert_me($table = null,$data_array = array()){
            if($table === NULL)return false;
            if(count($data_array) == 0) return false;
            $col = array();
            $dat = array();
            foreach ($data_array as $key => $value) {
                    //$value  = $value -> real_escape_string();
                $col[] = $key;
                $dat[] = "'$value'";
                $columns = join(",",$col );
                $data = join(",",$dat);
            }
            $insert_sql = "INSERT INTO " . $table . "(" . $columns . ")VALUES(" . $data . ")";
            echo $insert_sql;
            mysqli_query($this->link, $insert_sql);
        }

        function update_me($table= null,$rows_array = null,$key= null,$id= null){
            if($table == null){
                echo "table is null";
                return false;
            }
            if($id == null) return false;
            if($rows_array == null) return false;
            if(count($rows_array) == 0) return false;
            $set = [];
            foreach($rows_array as $k => $v) {
                $set[] = " `$k`='$v'";
            }
            $upsate_sql = "UPDATE $table SET ". implode(', ', $set) ." WHERE $key= '" .$id. "' ";
            echo $upsate_sql ;
            mysqli_query($this->link, $upsate_sql);
        }

        function delete_me($table = null, $key = null, $id = null) {
            if ($table===null) return false;
            if($id===null) return false;
            if($key===null) return false;
            $delete_sql ="DELETE FROM $table WHERE " . $key . " = " . "\"" . $id . "\"";
            echo $delete_sql;
            return mysqli_query($this->link, $delete_sql);        
        }
        function __destruct() {                   // 解構子
            mysqli_close($this->link);
        }
}   


?>






























