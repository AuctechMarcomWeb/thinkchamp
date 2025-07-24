<?php
include 'db_con.php';

$date = $_GET['date'] ?? date('Y-m-d');

$booked = [];
$res = $con->query("SELECT time_slot FROM enrollment_form WHERE booking_date = '$date'");
while ($row = $res->fetch_assoc()) {
    $booked[] = $row['time_slot']; 
}

$start = 0; 
for ($i = 0; $i < 24; $i++) {
    $from = $start + $i;
    $to = $from + 1;

    $fromTime = date("g:i A", strtotime("$from:00"));
    $toTime = date("g:i A", strtotime("$to:00"));

    $timeLabel = "$fromTime - $toTime"; 
    $slotValue = $timeLabel;

    if (in_array($slotValue, $booked)) {
        echo "<div class='slot-box slot-booked'>
                <div class='slot-time'>$timeLabel</div>
                <div class='slot-status'><i class='bi bi-x-circle-fill'></i> Booked</div>
              </div>";
    } else {
        echo "<div class='slot-box slot-available'>
                <div class='slot-time'>$timeLabel</div>
                <button type='button' class='btn btn-success w-100' data-bs-toggle='modal'
                    data-bs-target='#bookingModal' onclick=\"fillSlot('$date', '$slotValue', '$timeLabel')\">Book</button>
              </div>";
    }
}
?>