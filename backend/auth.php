<?php
    //session_start();
    
    function login($username, $password) {
        $cookie_name = "user";
        $cookie_value = "{$username}, {$password}";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
        
        //$_SESSION["user"] = $username;
        return TRUE;
    }

    function logout() {
        setcookie("user", NULL);
        return TRUE;
    }
    
    function checkLogin() {
        return isset($_COOKIE["user"]) ? TRUE : header('Location: /book');   
    }

?>