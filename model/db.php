<?php
    

    function get_connect()
    {
        $host = "localhost";
        $dbname = "ph19074_examphp1";
        $user = "root";
        $pass = "";

        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user ,$pass);
        $conn->SetAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        return $conn ;
    }

    function execute($sql)
    {
       
        try {
            $conn =  get_connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function query_one($sql)
    {


        try {
            $conn =  get_connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ;
        } catch (PDOException $e) {
            throw $e;
        }
               
    }

    function query($sql)
    {
        try {
            $conn =  get_connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row ;
        } catch (PDOException $e) {
            throw $e;
        }
               
    }


   
?>