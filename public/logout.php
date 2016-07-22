<?php
require_once 'functions.php';
function pageController() {
	session_start();
    clearSession();
    redirect("login2.php");
}
pageController();