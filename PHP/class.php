<?php


class User{
private $USer_id;    
private $USer_name;    
private $USer_position;    
private $USer_group;    

public function setId($User_id){
    $this->USer_id = $User_id;

}
public function setName($User_name){
    $this->USer_name = $User_name;

}
public function setPosition($USer_position){
    $this->USer_position = $USer_position;

}
public function setGroup($USer_group){
    $this->USer_group = $USer_group;

}
public function getName(){
    return $this->USer_name;

}

//წამოიღოს იუზერის სახელი და გვარი შეყვანილი Uer_ID-ის მიხედვით
public function getUserName(){
if(!empty($this->USer_name)){
    $serverName = "31.146.136.117"; 
    $connectioninfo = array("Database"=>"MDB","CharacterSet" => "UTF-8","PWD"=>"Master7","UID"=>"sa");
    $charset   = "UTF-8";
    $conn = sqlsrv_connect($serverName,$connectioninfo);
    $sql = "SELECT User_Name FROM [dbo].[Supervisor Users] where User_ID = '$this->USer_name'";
    $stmt = sqlsrv_query($conn, $sql );
    if($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
    return $row['User_Name'];
    }  
}
}
//წამოიღოს იუზერის პოზიცია(ინჯინერი,სუპერვაიზერი...)
public function getUserPosition(){
    if(!empty($this->USer_name)){
        $serverName = "31.146.136.117"; 
        $connectioninfo = array("Database"=>"MDB","CharacterSet" => "UTF-8","PWD"=>"Master7","UID"=>"sa");
        $charset   = "UTF-8";
        $conn = sqlsrv_connect($serverName,$connectioninfo);
        $sql = "SELECT User_Position FROM [dbo].[Supervisor Users] where User_ID = '$this->USer_name'";
        $stmt = sqlsrv_query($conn, $sql );
        if($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
        return $row['User_Position'];
        }  
    }
    }


}


//ეს ფუნქციები უკვე აღარ არის კლასის ნაწილი

//შეყვანილი სახელის მიხედვით წამოიღოს იუზერის პროექტები სადაც სუპერვაიზერია
function getUsersProjects($name){
    $array = array();
    $serverName = "31.146.136.117"; 
    $connectioninfo = array("Database"=>"MDB","CharacterSet" => "UTF-8","PWD"=>"Master7","UID"=>"sa");
    $charset   = "UTF-8";
    $conn = sqlsrv_connect($serverName,$connectioninfo);
    $sql = "
    select 
    * 
    from [dbo].[PROJECTS] 
    INNER JOIN [dbo].[Supervisors] 
    ON [dbo].[PROJECTS].[PRJ_Code] = [dbo].[Supervisors].[PRJ_Code]
    where [dbo].[Supervisors].[User_ID] = '$name'
	";
    $stmt = sqlsrv_query($conn, $sql );
    while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
    $array[] = $row;
    
    }  
    return $array;
}


//წამოიღოს იუზერის USER_ID სახელის მიხედვით
function getID($name){
   
        $serverName = "31.146.136.117"; 
        $connectioninfo = array("Database"=>"MDB","CharacterSet" => "UTF-8","PWD"=>"Master7","UID"=>"sa");
        
        $conn = sqlsrv_connect($serverName,$connectioninfo);
        $sql = "SELECT User_ID FROM [dbo].[Supervisor Users] where User_Name = N'$name'";
        $stmt = sqlsrv_query($conn, $sql );
        if($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
        return $row['User_ID'];
        }  
}


//წამოიღოს დეტალები პროექტებზე, პროექტის აიდის მიხედვით
function projectDetails($id){
    $array = array();
    $serverName = "31.146.136.117"; 
    $connectioninfo = array("Database"=>"MIS","CharacterSet" => "UTF-8","PWD"=>"Master7","UID"=>"sa");
    $charset   = "UTF-8";
    $conn = sqlsrv_connect($serverName,$connectioninfo);
    $sql = "
    select * from dbo.SAW  where PRJ_CODE = '$id'
	";
    $stmt = sqlsrv_query($conn, $sql );
    while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
    $array[] = $row;
    
    }  
    return $array;
}