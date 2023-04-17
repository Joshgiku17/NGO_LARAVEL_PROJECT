<?php
require_once('../models/dbconn.php');
class beneficiary_model extends dbconnection{
    private $id;
    private $name;
    private $phone;
    private $email;
    private $dob;
    private $ngo_id;

    public function __construct($id=null,$name="",$phone="",$email="",$dob="",$ngo_id=""){
        parent::__construct();
        $this->id=$id;
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
        $this->dob=$dob;
        $this->ngo_id=$ngo_id;
    }

    public function save_beneficiary($name){
        try {
            echo $name;
            
            // $insert=$this->db->prepare("insert into beneficians(names,phone,email,dob,ngo_id) values(?,?,?,?,?)");
            // $insert->execute([$name,$phone,$email,$dob,$ngo_id]);
            // return "new record inserted";
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}
?>