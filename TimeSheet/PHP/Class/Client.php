<?php

 require_once('/PHP Projects/TimeSheet/PHP/Class/Database.php');
    class Client
    {
        public $client_id;
        public $client_f_name;
        public $client_l_name;
        public $client_full_name;
        public $client_work_title_id;
        public $client_entry_date;
        public $client_update_date;

        // Setters and Getters
        public function set_client_id($client_id)
        {
            $this->client_id = $client_id;
        }

        public function set_client_f_name($client_f_name)
        {
            $this->client_f_name = $client_f_name;
        }

        public function set_client_l_name($client_l_name)
        {
            $this->client_l_name = $client_l_name;
        }

        public function set_client_full_name($client_full_name)
        {
            $this->client_full_name = $client_full_name;
        }

        public function set_client_work_title_id($client_work_title_id)
        {
            $this->client_work_title_id = $client_work_title_id;
        }

        public function set_client_entry_date($client_entry_date)
        {
            $this->client_entry_date = $client_entry_date;
        }

        public function set_client_update_date($client_update_date)
        {
            $this->client_update_date = $client_update_date;
        }

        public function get_client_id()
        {
            return $this->client_id;
        }

        public function get_client_f_name()
        {
            return $this->client_f_name;
        }

        public function get_client_l_name()
        {
            return $this->client_l_name;
        }

        public function get_client_full_name()
        {
            return $this->client_full_name;
        }

        public function get_client_work_title_id()
        {
            return $this->client_work_title_id;
        }

        public function get_client_entry_date()
        {
            return $this->client_entry_date;
        }

        public function get_client_update_date()
        {
            return $this->client_update_date;
        }

        /* END GETTERS AND SETTERS */

        //FUNCTIONS

        public function __construct()
        {
            $this->connObj = DBConnect::connect();
        }

        public function Client_Insert($client_f_name, $client_l_name, $client_work_title_id)
        {
            $conn = $this->connObj;
            $insert_client = "CALL Insert_Clients('$client_f_name', '$client_l_name', '$client_work_title_id')";
            if (!mysqli_query($conn, $insert_client)) {
                echo 'Error: '.$insert_client.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record created successfully';
            }

           
        }

        public function Client_Select()
        {
            $conn = $this->connObj;
            $select_client = 'CALL Select_timesheet_Clients()';
            $select_client_result = mysqli_query($conn, $select_client) or exit(mysqli_error($conn));
            if (mysqli_num_rows($select_client_result) > 0) {
                while ($row = mysqli_fetch_array($select_client_result)) {
                    echo '<label>hi</label>';
                    echo $row['Client_id'];
                    echo $row['Client_First_Name'];
                    echo $row['Client_Last_Name'];
                    echo $row['Client_Full_Name'];
                    echo $row['Client_Work_Title_id'];
                    echo $row['Client_Entry_Date'];
                    echo $row['Client_Update_Date'];
                    echo '<br>';
                }
            }

    
        }

        public function Client_Update($client_id, $client_f_name, $client_l_name, $client_work_title_id)
        {
            $conn = $this->connObj;
            $update_client = "CALL Update_Clients('$client_id', '$client_f_name', '$client_l_name', '$client_work_title_id')";
            if (!mysqli_query($conn, $update_client)) {
                echo 'Error: '.$update_client.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record updated successfully';
            }
        }

        public function Client_Delete($client_id)
        {
            $conn = $this->connObj;
            $delete_client = "CALL Delete_timesheet_clients('$client_id')";
            if (!mysqli_query($conn, $delete_client)) {
                echo 'Error: '.$delete_client.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'This record deleted successfully';
            }
        }

        public function Client_DropDown()
        {
            $conn = $this->connObj;
            $clients = "CALL Clients_Works_1()";
            $result = mysqli_query($conn, $clients);
            if (!$result) {
                echo 'Error: '.$clients.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option data-from-dependent="'.$row['Client_Work_Title_id'].'">'.$row['Client_Full_Name'].'</option>';
                }
            }
        }
    }
