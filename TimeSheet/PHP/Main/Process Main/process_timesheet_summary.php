<?php
    session_start();
    include '/PHP Projects/TimeSheet/PHP/Class/Time_sheet.php';
    $user_id = '';
    $user_id = $_SESSION['logged_in_user_id'];
    if (isset($user_id)) {
    }
          $summary_timesheet = new Timesheet();
          $summary_timesheet->TimeSheet_Summary($user_id);
     
 ?>   
