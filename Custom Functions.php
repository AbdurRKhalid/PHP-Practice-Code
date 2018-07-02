<?php
    function calculate_age($date_Of_Birth) {
        return 2018 - $date_Of_Birth;
    }

    function calculate_days($total_age) {
        return 365 * $total_age;
    }
?>