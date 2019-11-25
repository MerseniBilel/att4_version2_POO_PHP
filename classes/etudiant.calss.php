<?php


require 'dbconnect.class.php';
    class Etudiant {
        private $cnx;


        public function __construct(){
            
            $db = new DataBase;
            $this->cnx = $db->dbConnect();
            if($this->cnx == NULL){
                echo "problem";
            }
        }

        public function ListAllStudent(){
            try{
                $req = 'SELECT * FROM students';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;                
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function ListWhereId($id){
            $req = 'SELECT * FROM students WHERE Id=:param_id';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':param_id',$id);
            if ($result->execute()){
                return $result;
            }
        }

        public function AddStudent($firstname,$lastname,$email,$phone){

            $req = 'INSERT INTO students(firstname,lastname,email,phone) VALUES (:param_fn,:param_ln,:param_email,:param_tel)';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':param_fn',$firstname);
            $result->bindParam(':param_ln',$lastname);
            $result->bindParam(':param_email',$email);
            $result->bindParam(':param_tel',$phone);

            $result->execute();
            return $result;
            
        }


        public function RemoveStudent($id){
            $req = 'DELETE FROM students WHERE Id=:param_id';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':param_id',$id);
            $result->execute();
            return $result;
        }

        public function UpdateStudent($firstname,$lastname,$email,$phone,$id){

            $req ='UPDATE students SET 
                    firstname=:param_fn,
                    lastname=:param_ln,
                    email=:param_email,
                    phone=:param_tel 
                    WHERE Id=:param_id'; 

            $result = $this->cnx->prepare($req);

            $result->bindParam(':param_fn',$firstname);
            $result->bindParam(':param_ln',$lastname);
            $result->bindParam(':param_email',$email);
            $result->bindParam(':param_tel',$phone);
            $result->bindParam(':param_id',$id);
            if($result->execute()){
                return $result;
            }else{
                return "no resul";
            }         
        }



    }