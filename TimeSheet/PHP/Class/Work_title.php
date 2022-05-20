<?php
     include __DIR__.'\Database.php';

    class Work_Title
    {
        public $Work_Title_id;
        public $Work_Title_name;
        public $Work_Title_entry_date;
        public $Work_Title_update_date;

        // Setters and Getters
        public function set_Work_Title_id($Work_Title_id)
        {
            $this->Work_Title_id = $Work_Title_id;
        }

        public function set_Work_Title_name($Work_Title_name)
        {
            $this->Work_Title_name = $Work_Title_name;
        }

        public function set_Work_Title_entry_date($Work_Title_entry_date)
        {
            $this->Work_Title_entry_date = $Work_Title_entry_date;
        }

        public function set_Work_Title_update_date($Work_Title_update_date)
        {
            $this->Work_Title_update_date = $Work_Title_update_date;
        }

        public function get_Work_Title_id()
        {
            return $this->Work_Title_id;
        }

        public function get_Work_Title_name()
        {
            return $this->Work_Title_name;
        }

        public function get_Work_Title_entry_date()
        {
            return $this->Work_Title_entry_date;
        }

        public function get_Work_Title_update_date()
        {
            return $this->Work_Title_update_date;
        }

        /* END GETTERS AND SETTERS */

        //FUNCTIONS

        public function __construct()
        {
            $this->connObj = DBConnect::connect();
        }

        public function Work_Title_Insert($Work_Title_name)
        {
            $conn = $this->connObj;
            $insert_work_title = "CALL Insert_Work_Title('$Work_Title_name')";
            if (!mysqli_query($conn, $insert_work_title)) {
                echo 'Error: '.$insert_work_title.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record created successfully';
            }

           
        }

        public function Work_Title_Select()
        {
            $conn = $this->connObj;
            $select_work_title = 'CALL Select_worktitle()';
            $select_work_title_result = mysqli_query($conn, $select_work_title) or exit(mysqli_error($conn));
            if (mysqli_num_rows($select_work_title_result) > 0) {
                while ($row = mysqli_fetch_array($select_work_title_result)) {
                    echo $row['Work_Title_id'];
                    echo $row['Work_Title_Name'];
                    echo $row['Work_Title_Entry_Date'];
                    echo $row['Work_Title_Update_Date'];
                    echo '<br>';
                }
            }

        }

        public function Work_Title_Update($Work_Title_id, $Work_Title_name)
        {
            $conn = $this->connObj;
            $update_work_title = "CALL Update_worktitle('$Work_Title_id', '$Work_Title_name')";
            if (!mysqli_query($conn, $update_work_title)) {
                echo 'Error: '.$update_work_title.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record updated successfully';
            }
        }

        public function Work_Title_Delete($Work_Title_id)
        {
            $conn = $this->connObj;
            $delete_work_title = "CALL Delete_worktitle('$Work_Title_id')";
            if (!mysqli_query($conn, $delete_work_title)) {
                echo 'Error: '.$delete_work_title.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'This record deleted successfully';
            }
        }

        public function Work_Title_DropDown()
        {
            $conn = $this->connObj;
            $work_titles = 'CALL Work_Titles()';
            $result = mysqli_query($conn, $work_titles);
            if (!$result) {
                echo 'Error: '.$work_titles.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option data-dependent-opt="'.$row['work_title_id'].'">'.$row['work_title_name'].'</option>';
                }
                

            }
        }
    }
?>

