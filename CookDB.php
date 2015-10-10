<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CookDB
 *
 * @author RAMAMS3
 */
class CookDB extends mysqli{
    //put your code here
    // single instance of self shared among all instances
    private static $instance = null;


    // db connection config vars
    private $user = "tendril";
    private $pass = "s1llysally";
    private $dbName = "cook";
    private $dbHost = "localhost";
    
    
    public function getConn() {
  //      $con = mysql_connect("tendriltechcom.ipagemysql.com", "tendril", "s1llysally");
        $con = mysql_connect("localhost", "tendril", "s1llysally");
       // mysql_select_db ( "cookdb");
if (!$con) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '
           . mysqli_connect_error());
}
//set the default client character set 

return $con;

        
    }
    
}
