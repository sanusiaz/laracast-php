Hello welcome to the notes page

<?php
    foreach ( $notes as $note ) {
        dd($note);
        echo $note['user_id'];
    }
?>