<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "bakry");
    if ($conn->connect_error) {
        $error="Connection Failed: ".$conn->connect_error;
    }

    function select($table,$query="1"){
        global $conn;
        $sql="SELECT * FROM ".$table." WHERE ".$query.";";
        $res=$conn->query($sql);
        if ($res) {
            if (mysqli_num_rows($res) > 0) {
                $data=[];
                while ($x = mysqli_fetch_assoc($res)) {
                    $data[]=$x;
                }
                return $data;
            }
        }
        return [];
    }

    function insert($table,$columns,$values){
        global $conn;
        $sqlquery = "INSERT INTO ".$table." (".$columns.") VALUES (".$values.")";
        $conn->query($sqlquery);
    }

    function update($table,$data){
        global $conn;
        $sqlquery = "UPDATE ".$table." SET ".$data.";";
        $conn->query($sqlquery);
    }

    function delete($table,$id){
        global $conn;
        $sqlquery = "DELETE FROM ".$table." WHERE id='".$id."';";
        $conn->query($sqlquery);
    }

    //Auth
    $auth["status"]=false;
    $auth["user"]=[];

    if(isset($_SESSION["auth"])){
        $auth["status"]=true;
        $auth["user"]=$_SESSION["auth"];
    }
    if(isset($_COOKIE['auth'])){
        $auth["status"]=true;
        $auth["user"]=json_decode($_COOKIE['auth'],true);
    }

    //Register
    if($_SERVER['REQUEST_METHOD'] === 'POST'&&isset($_POST["register"]) ){
        
        
        if ( $_POST["email"] == "" || $_POST["password"] == "" || $_POST["name"] == "" )
        {
            header("Location: Register.php");
        }
        
        else
        {
            insert("users","name,email,password","'".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."'");
            header("Location: login.php");
        }
        
        
    }

    //Login
    if($_SERVER['REQUEST_METHOD'] === 'POST'&&isset($_POST["login"])){
        $user=select("users",'email="'.$_POST['email'].'" AND password="'.$_POST["password"].'"');
        if(count($user)==0){
            header("Location: login.php");
        }else{
            if(isset($_POST["Stay_Login"])&&$_POST["Stay_Login"]=='on'){
                setcookie('auth', json_encode($user[0]), time() + (86400 * 3), "/"); // 86400 = 1 day
            }else{
                $_SESSION["auth"]=$user[0];
            }
            header("Location: home.php");
        }
    }

    //logout
    if($_SERVER['REQUEST_METHOD'] === 'GET'&&isset($_GET["logout"])){
        unset($_SESSION["auth"]);
        unset($_COOKIE['auth']);
        setcookie('auth', null, time()-3600,'/');
        header("Location: home.php");
    }

    
    