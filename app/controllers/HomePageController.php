<?php
    namespace App\Controllers;
    require_once( dirname(__FILE__, 2) . '/Database/DB.php');
    use App\Database\DB;

    class HomePageController {
        public function index() {

            $Db = new DB();
            $users = $Db->query("select * from users")->get();
            
            view('home/index');
        }
    }