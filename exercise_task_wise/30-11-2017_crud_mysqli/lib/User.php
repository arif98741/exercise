<?php

include_once "Session.php";
include_once "Database.php";

class User {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function userRegistration($data) { //form validation method 
        $name = $data['name'];
        $username = $data['username'];
        $email = $data['email'];
        $address = $data['address'];
        $chk_email = $this->emailCheck($email);
        $password = md5($data['password']);

        if ($name == '' or $username == '' or $email == '' or $password == '' or $address == '') {
            $msg = "<div class='alert alert-info' style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Field Must Not be Empty</div>";
            return $msg;
        } else {
            if (strlen($username) <= 3) { //for checking character length
                $msg = "<div class='alert alert-danger'   style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Username is too Short</div>";
                return $msg;
            } elseif (preg_match('/[^a-z0-9_-]+/i', $username)) { //for checking character validation
                $msg = "<div class='alert alert-danger'  style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Username Must Only Contain alphanumerical, dashes, </div>";
                return $msg;
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) { //for checking email validation
                $msg = "<div class='alert alert-danger'  style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Email is Not Valid</div>";
                return $msg;
            }
            if ($chk_email == true) { //for checking email availability in database
                $msg = "<div class='alert alert-danger'  style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Email is already Exist</div>";
                return $msg;
            }
            if (strlen($data['password']) < 6) { //for checking character length of password
                // $data['password'] is used because we have make password md5 first.
                //and here we have used directly by array $data['password']
                $msg = "<div class='alert alert-danger'   style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Password must contain 6 characters </div>";
                return $msg;
            } elseif (preg_match('/[^a-z0-9_-]+/i', $password)) { //for checking character validation
                $msg = "<div class='alert alert-danger'  style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Password must contain alphanumeric characters(a-z,A-Z,_,0-9,@)</div>";
                return $msg;
            }
        }

        $sql = "insert into tbl_user (name,username,email,address,password) values(:name,:username,:email,:address,:password)";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':username', $username);
        $query->bindValue(':email', $email);
        $query->bindValue(':address', $address);
        $query->bindValue(':password', $password);
        $result = $query->execute();
        if ($result) {
            $msg = "<div class='alert alert-success' style='max-width:500px; margin: 0 auto;'><strong>Congratulations!</strong> You Have been Registered.</div>";
            return $msg;
        } else {
            $msg = "<div class='alert alert-danger' style='max-width:500px; margin: 0 auto;'><strong>Error!!</strong> Sorry, there has been problem in inserting data. Contact with administrator.</div>";
            return $msg;
        }
    }

    public function emailCheck($email) {
        $sql = "select email from tbl_user where email= :email";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //get username and password from table for login
    public function getLoginUser($email, $password) {
        $sql = "select * from tbl_user where email= :email AND password = :password LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    //login method
    public function userLogin($data) {

        $email = $data['email'];
        $chk_email = $this->emailCheck($email);
        $password = md5($data['password']);

        if ($email == '' or $password == '') {
            $msg = "<div class='alert alert-info' style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Field Must Not be Empty</div>";
            return $msg;
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) { //for checking email validation
                $msg = "<div class='alert alert-danger'  style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Email is Not Valid</div>";
                return $msg;
            }
            if ($chk_email == false) { //for checking email availability in database
                $msg = "<div class='alert alert-danger'  style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Email is Not Exist</div>";
                return $msg;
            }
        }

        $result = $this->getLoginUser($email, $password);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        if ($result) {
            Session::initialization();
            Session::set("login", true);
            Session::set("id", $result->id);
            Session::set("name", $result->name);
            Session::set("username", $result->username);
            Session::set("loginmsg", "<div class='alert alert-success'  ><strong>Sucess!</strong> You are Logged In!.</div>");
            header("location: index.php");
        } else {
            $msg = "<div class='alert alert-danger'  style='max-width:500px; margin: 0 auto;'><strong>Error!</strong> Data Not Found.</div>";
            return $msg;
        }
    }

    //show userlist
    public function showusers()
    {
        $sql = "select * from tbl_user order by id desc";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }


    //update userprofile
    public function updateuser()
    {
       
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'id' => $_POST['id']
        );

        $sql = "update tbl_user set name = :name, email = :email, password = :password where id = :id";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindValue(":name", $data['name']);
        $stmt->bindValue(":email", $data['email']);
        $stmt->bindValue(":password", $data['password']);
        $stmt->bindValue(":id", $data['id']);
        if($stmt->execute())
        {
             $msg = "<div class='alert alert-success'  id='msg'><strong>Success!</strong> Data Updated Sucessful.</div>";
            return $msg;
        }
        
    }

    //delete user
    public function deleteuser($data)
    {
        $id = $data['id'];

        $sql = "delete from tbl_user where id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);

        if($stmt->execute())
        {
             $msg = "<div class='alert alert-success'  id='msg'><strong>Success!</strong> Data Deleted Sucessful.</div>";
            return $msg;
        }else{
             $msg = "<div class='alert alert-warning'  id='msg'><strong>Error!</strong> Data Deleted Failed.</div>";
            return $msg;
        }
    }

     //search user
    public function searchuser($keyword)
    {
        $keyword = "%".$keyword."%";
        
        $sql = "select * from tbl_user where name LIKE  ? or address LIKE  ? or email LIKE  ? or username LIKE  ?";
        $stmt = $this->db->pdo->prepare($sql);
        
        if($stmt->execute(array($keyword,$keyword,$keyword,$keyword)))
        {
             return $stmt->fetchAll(PDO::FETCH_OBJ);
        }else{
            return false;
        }
    }




}

?>