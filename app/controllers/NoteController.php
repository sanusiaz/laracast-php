<?php
    namespace App\Controllers;
    require_once( dirname(__FILE__, 2) . '/Database/DB.php');
    use App\Database\DB;

    class NoteController {
        public function index() {

            $Db = new DB();
            $notes = $Db->query("select * from notes")->get();
            
            view('notes/index', [
                'notes' => $notes
            ]);
        }

        public function create()
        {
            view('notes/create');
        }

        public function store()
        {
            echo "Hit here";
        }
    }