<?php 

class Format {
    public function formatDate($date) {
        return date('F j, Y, g:i a', strtotime($date));
    }

    public function textShorten($body) {
        
    }
}

?>