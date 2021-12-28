<?php

    class MasterModel extends  Database {
        public static function get_all_table($table){
            $db = Database::connect();
            $sql="SELECT * FROM $table";
            $stmt= $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $result;
        }

        public static function get_one_table($table, $id){
            $db =  Database::connect();
            $sql = "SELECT * FROM $table where product_id= $id";
            $stmt= $db->prepare($sql);
            $stmt->execute();
            $result= $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $result;
        }
        

        public static function count_column($table){
            $db =  Database::connect();
            $sql = "SELECT * FROM $table";
            $stmt= $db->prepare($sql);
            $stmt->execute();
            $result= $stmt->fetchColumn(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $result;
        }
    }
