<?php
    /**
     * Logs user out
     */
    ini_set("session.cookie_httponly", 1);

    session_start();
    session_destroy();
    exit;
?>