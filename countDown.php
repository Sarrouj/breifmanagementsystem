
    <?php
        function countDown($startdate, $endDate){
        $start_date = strtotime($startdate.' 00:00:00');
        $end_date = strtotime($endDate . ' 23:59:59');

            while(true){
                $current_date = time();
                $time_remaining = $end_date - $start_date;
                if ($current_date < $start_date) {
                    $time_remaining = 0;
                } else {
                    $time_remaining = $end_date - $current_date;
                }
                $days = floor($time_remaining / (60 * 60 * 24));
                $hours = floor(($time_remaining % (60 * 60 * 24)) / (60 * 60));
                $minutes = floor(($time_remaining % (60 * 60)) / 60);
                $seconds = $time_remaining % 60;
                // Format countdown message
            $countdown = "$days days, $hours hours, $minutes minutes, $seconds seconds";
            return $countdown;
            // Flush the output buffer to send the data immediately
            ob_flush();
            flush();
            // Sleep for 1 second
            sleep(1);
            }
        }
?>

<?php 
    require_once './countDown.php';
    $countDown = countDown($row['dateDeb'], $row['dateFin']);
?>

