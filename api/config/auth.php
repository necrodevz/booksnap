<?php
    //session_start();
    
    // Mock login function
    function login($username, $password) {
        $cookie_name = "user";
        $cookie_value = "{$username}, {$password}";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
        
        //$_SESSION["user"] = $username;
        return TRUE;
    }

    // Mock logout function
    function logout() {
        setcookie("user", NULL);
        return TRUE;
    }
    
    // Checks if the User is logged in
    function checkLogin() {
        return isset($_COOKIE["user"]) ? TRUE : header('Location: /book');   
    }

?>