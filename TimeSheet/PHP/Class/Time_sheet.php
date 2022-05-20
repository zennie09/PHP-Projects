<?php
    require_once('/PHP Projects/TimeSheet/PHP/Class/Database.php');
    class Timesheet
    {
        public $timesheet_id;
        public $timesheet_wt_id;
        public $timesheet_client_full_name;
        public $timesheet_start_date;
        public $timesheet_end_date;
        public $timesheet_tts;
        public $timesheet_ts_hours;
        public $timesheet_ts_minutes;
        public $timesheet_ts_comments;
        public $timesheet_login_id;
        public $timesheet_entry_date;
        public $timesheet_update_date;

        // Setters and Getters
        public function set_timesheet_id($timesheet_id)
        {
            $this->timesheet_id = $timesheet_id;
        }

        public function set_timesheet_wt_id($timesheet_wt_id)
        {
            $this->timesheet_wt_id = $timesheet_wt_id;
        }

        public function set_timesheet_client_full_name($timesheet_client_full_name)
        {
            $this->timesheet_client_full_name = $timesheet_client_full_name;
        }

        public function set_timesheet_start_date($timesheet_start_date)
        {
            $this->timesheet_start_date = $timesheet_start_date;
        }

        public function set_timesheet_end_date($timesheet_end_date)
        {
            $this->timesheet_end_date = $timesheet_end_date;
        }

        public function set_timesheet_tts($timesheet_tts)
        {
            $this->timesheet_tts = $timesheet_tts;
        }

        public function set_timesheet_ts_hours($timesheet_ts_hours)
        {
            $this->timesheet_ts_hours = $timesheet_ts_hours;
        }

        public function set_timesheet_ts_minutes($timesheet_ts_minutes)
        {
            $this->timesheet_ts_minutes = $timesheet_ts_minutes;
        }

        public function set_timesheet_ts_comments($timesheet_ts_comments)
        {
            $this->timesheet_comments = $timesheet_ts_comments;
        }

        public function set_timesheet_login_id($timesheet_login_id)
        {
            $this->timesheet_login_id = $timesheet_login_id;
        }

        public function set_timesheet_entry_date($timesheet_entry_date)
        {
            $this->timesheet_entry_date = $timesheet_entry_date;
        }

        public function set_timesheet_update_date($timesheet_update_date)
        {
            $this->timesheet_update_date = $timesheet_update_date;
        }

        public function get_timesheet_id()
        {
            return $this->timesheet_id;
        }

        public function get_timesheet_wt_id()
        {
            return $this->timesheet_wt_id;
        }

        public function get_timesheet_client_full_name()
        {
            return $this->timesheet_client_full_name;
        }

        public function get_timesheet_start_date()
        {
            return $this->timesheet_start_date;
        }

        public function get_timesheet_end_date()
        {
            return $this->timesheet_end_date;
        }

        public function get_timesheet_tts()
        {
            return $this->timesheet_tts;
        }

        public function get_timesheet_ts_hours()
        {
            return $this->timesheet_ts_hours;
        }

        public function get_timesheet_ts_minutes()
        {
            return $this->timesheet_ts_minutes;
        }

        public function get_timesheet_ts_comments()
        {
            return $this->timesheet_ts_comments;
        }

        public function get_timesheet_login_id()
        {
            return $this->timesheet_login_id;
        }

        public function get_timesheet_entry_date()
        {
            return $this->timesheet_entry_date;
        }

        public function get_timesheet_update_date()
        {
            return $this->timesheet_update_date;
        }

        /* END GETTERS AND SETTERS */

        //FUNCTIONS

        public function __construct()
        {
            $this->connObj = DBConnect::connect();
        }

        public function TimeSheet_Insert($timesheet_wt_id, $timesheet_client_full_name, $timesheet_start_date, $timesheet_end_date, $timesheet_tts,
                                         $timesheet_ts_hours, $timesheet_ts_minutes, $timesheet_ts_comments, $timesheet_login_id)
        {
            $conn = $this->connObj;
            $insert_timesheet = "CALL Insert_TimeSheet('$timesheet_wt_id', '$timesheet_client_full_name', '$timesheet_start_date', '$timesheet_end_date', 
                                                       '$timesheet_tts', '$timesheet_ts_hours', '$timesheet_ts_minutes', '$timesheet_ts_comments','$timesheet_login_id')";
            if (!mysqli_query($conn, $insert_timesheet)) {
                echo 'Error: '.$insert_timesheet.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record created successfully';
            }

        }

        public function TimeSheet_Select()
        {
            $conn = $this->connObj;
            $select_timesheet = 'CALL Select_time_sheet()';
            $select_timesheet_result = mysqli_query($conn, $select_timesheet) or exit(mysqli_error($conn));
            if (mysqli_num_rows($select_timesheet_result) > 0) {
                while ($row = mysqli_fetch_array($select_timesheet_result)) {
                    echo $row['TimeSheet_id'];
                    echo ' ';
                    echo $row['TimeSheet_Work_Title_id'];
                    echo ' ';
                    echo $row['TimeSheet_Client_Full_Name'];
                    echo ' ';
                    echo $row['TimeSheet_Start_Date'];
                    echo ' ';
                    echo $row['TimeSheet_End_Date'];
                    echo ' ';
                    //echo $row['TimeSheet_Total_Time_Spent'];
                    echo ' ';
                    echo $row['Timesheet_Login_id'];
                    echo ' ';
                    echo $row['TimeSheet_Entry_Date'];
                    echo ' ';
                    echo $row['TimeSheet_Update_Date'];
                    echo '<br>';
                }
            }

        }

        public function TimeSheet_Update($timesheet_id, $timesheet_wt_id, $timesheet_start_date, $timesheet_end_date, $timesheet_tts,
                                         $timesheet_login_id)
        {
            $conn = $this->connObj;
            $update_timesheet = "CALL Update_Timesheet('$timesheet_id', '$timesheet_wt_id', '$timesheet_start_date', '$timesheet_end_date', 
                                                  '$timesheet_tts', '$timesheet_login_id')";
            if (!mysqli_query($conn, $update_timesheet)) {
                echo 'Error: '.$update_timesheet.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record updated successfully';
            }
        }

        public function TimeSheet_Delete($timesheet_id)
        {
            $conn = $this->connObj;
            $delete_timesheet = "CALL Delete_time_sheet('$timesheet_id')";
            if (!mysqli_query($conn, $delete_timesheet)) {
                echo 'Error: '.$delete_timesheet.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'This record deleted successfully';
            }
        }


        public function TimeSheet_Summary($timesheet_login_id)
        {
            $conn = $this->connObj;
            $timesheet_summary = "CALL time_sheet_summary('$timesheet_login_id')";
            $select_timesheet_summary = mysqli_query($conn, $timesheet_summary) or exit(mysqli_error($conn));
            if (mysqli_num_rows($select_timesheet_summary) > 0) {
                while ($row = mysqli_fetch_array($select_timesheet_summary)) 
			    {
                    echo"<tr>";		
                    echo "<td>".$row['Work_Title_Name']."</td>";   
                    echo "<td>".$row['TimeSheet_Client_Full_Name']."</td>";
                    echo "<td>".date( 'm/d/y g:i A', strtotime($row['TimeSheet_Start_Date']))."</td>";
                    echo "<td>".date( 'm/d/y g:i A', strtotime($row['TimeSheet_End_Date']))."</td>";
                    echo "<td>".$row['TimeSheet_Days']."</td>";
                    echo "<td>".$row['TimeSheet_Hours']."</td>";
                    echo "<td>".$row['TimeSheet_Minutes']."</td>";
                    echo "<td>".$row['TimeSheet_Comment']."</td>"; 
                    echo "<td>".date( 'm/d/y g:i A', strtotime($row['TimeSheet_Entry_Date']))."</td>"; 
                    echo "</tr>";
                    echo "<br>";
                }
        }else{
            echo "<h1>There is no record in the system!!! </h1>";
        }
    }
}