<?php

    session_start();
    include '../../Class/Login.php';
    include '../../Class/Time_sheet.php';

    $user_id = '';
    $user_id = $_SESSION['logged_in_user_id'];
    if (isset($user_id)) {
      
    }
    
      if (isset($_POST['Submit'])) {
          if (isset($_POST['occupations'])) {
              $work_title = $_POST['occupations'];
          } else {
              $work_title = 'Please enter your work title!!';
          }

          if (isset($_POST['clients'])) {
              $client_work_title = $_POST['clients'];
          } else {
              $client_work_title = 'Please enter your Clients Full Name!!';
          }

          if (isset($_POST['start_time'])) {
              $start_time_date = $_POST['start_time'];
          } else {
              $start_time_date = 'Please enter your Start date';
          }

          if (isset($_POST['end_time'])) {
              $end_time_date = $_POST['end_time'];
          } else {
              $end_time_date = 'Please enter your End date!!';
          }

          if (isset($_POST['Total_Time_Spent'])) {
              $tts_day = $_POST['Total_Time_Spent'];
          } else {
              $tts_day = 'Please enter your Total Time Spent in Hours !';
          }

          if (isset($_POST['Total_Time_Spent_hours'])) {
              $tts_hour = $_POST['Total_Time_Spent_hours'];
          } else {
              $tts_hour = 'Please enter your Total Time Spent in Hours !';
          }

          if (isset($_POST['Total_Time_Spent_minutes'])) {
              $tts_mins = $_POST['Total_Time_Spent_minutes'];
          } else {
              $tts_mins = 'Please enter your Total Time Spent in Minutes !';
          }

          if (isset($_POST['Timesheet_Comment_txa'])) {
              $tts_comment = $_POST['Timesheet_Comment_txa'];
          } else {
              $tts_comment = 'Please enter your Comments !';
          }
          $insert_timesheet = new Timesheet();
          $insert_timesheet->set_timesheet_login_id($user_id);
          $insert_timesheet->set_timesheet_wt_id($work_title);
          $insert_timesheet->set_timesheet_client_full_name($client_work_title);
          $insert_timesheet->set_timesheet_start_date($start_time_date);
          $insert_timesheet->set_timesheet_end_date($end_time_date);
          $insert_timesheet->set_timesheet_tts($tts_day);
          $insert_timesheet->set_timesheet_ts_hours($tts_hour);
          $insert_timesheet->set_timesheet_ts_minutes($tts_mins);
          $insert_timesheet->set_timesheet_ts_comments($tts_comment);

          echo '<br>';
          echo '<br>';
          echo $insert_timesheet->get_timesheet_wt_id();
          echo '<br>';
          echo $insert_timesheet->get_timesheet_client_full_name();
          echo '<br>';
          echo $insert_timesheet->get_timesheet_start_date();
          echo '<br>';
          echo $insert_timesheet->get_timesheet_end_date();
          echo '<br>';
          echo $insert_timesheet->get_timesheet_tts();
          echo '<br>';
          echo $insert_timesheet->get_timesheet_ts_hours();
          echo '<br>';
          echo $insert_timesheet->get_timesheet_ts_minutes();
          echo '<br>';
          echo $tts_comment;
          echo '<br>';
          echo $insert_timesheet->get_timesheet_login_id();
          echo '<br>';

          echo '<br>';

          if ($insert_timesheet->get_timesheet_wt_id() == '' || $insert_timesheet->get_timesheet_client_full_name() == '' || $insert_timesheet->get_timesheet_login_id() == '' ||
              $insert_timesheet->get_timesheet_start_date() == '' || $insert_timesheet->get_timesheet_end_date() == '' ||
              $insert_timesheet->get_timesheet_tts() == '' || $insert_timesheet->get_timesheet_ts_hours() == '' ||
              $insert_timesheet->get_timesheet_ts_minutes() == '' || $tts_comment == '' ||
              $insert_timesheet->get_timesheet_login_id() == '') {
              //echo '<script>alert("Please Fill out the Form!! Thank You!!")</script>';
              header('Location:../../Main/timesheet.php');
              exit();
          } else {
              $insert_timesheet->TimeSheet_Insert($insert_timesheet->get_timesheet_wt_id(), $insert_timesheet->get_timesheet_client_full_name(),
                                                  $insert_timesheet->get_timesheet_start_date(), $insert_timesheet->get_timesheet_end_date(),
                                                  $insert_timesheet->get_timesheet_tts(), $insert_timesheet->get_timesheet_ts_hours(),
                                                  $insert_timesheet->get_timesheet_ts_minutes(), $tts_comment, $insert_timesheet->get_timesheet_login_id());

              $insert_timesheet->set_timesheet_login_id('');
              $insert_timesheet->set_timesheet_wt_id('');
              $insert_timesheet->set_timesheet_client_full_name('');
              $insert_timesheet->set_timesheet_start_date('');
              $insert_timesheet->set_timesheet_end_date('');
              $insert_timesheet->set_timesheet_tts('');
              header('Location:../../Main/timesheet_summary.php');
          }
      }
