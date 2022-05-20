<?php
   
    include __DIR__.'\Database.php';
  
    class Login
    {
        public $login_id;
        public $login_name;
        public $login_password;
        public $login_entry_date;
        public $login_update_date;

        // Setters and Getters
        public function set_login_id($login_id)
        {
            $this->login_id = $login_id;
        }

        public function set_login_name($login_name)
        {
            $this->login_name = $login_name;
        }

        public function set_login_password($login_password)
        {
            $this->login_password = $login_password;
        }

        public function set_login_entry_date($login_entry_date)
        {
            $this->login_entry_date = $login_entry_date;
        }

        public function set_login_update_date($login_update_date)
        {
            $this->login_update_date = $login_update_date;
        }

        public function get_login_id()
        {
            return $this->login_id;
        }

        public function get_login_name()
        {
            return $this->login_name;
        }

        public function get_login_password()
        {
            return $this->login_password;
        }

        public function get_login_entry_date()
        {
            return $this->login_entry_date;
        }

        public function get_login_update_date()
        {
            return $this->login_update_date;
        }

        /* END GETTERS AND SETTERS */

        //FUNCTIONS

        public function __construct()
        {
            $this->connObj = DBConnect::connect();
        }

        public function Login_Insert($login_name, $login_password)
        {
            $conn = $this->connObj;
            $insert_login = "CALL Insert_Login('$login_name', '$login_password')";
            if (!mysqli_query($conn, $insert_login)) {
                echo 'Error: '.$insert_login.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record created successfully';
            }

    
        }

        public function Login_Select()
        {
            $conn = $this->connObj;
            $select_login = 'CALL Select_user_login()';
            $select_login_result = mysqli_query($conn, $select_login) or exit(mysqli_error($conn));
            if (mysqli_num_rows($select_login_result) > 0) {
                while ($row = mysqli_fetch_array($select_login_result)) {
                    echo $row['Login_id'];
                    echo $row['Login_Name'];
                    echo $row['Login_Password'];
                    echo $row['Login_Entry_Date'];
                    echo $row['Login_Update_Date'];
                    echo '<br>';
                }
            }

     
        }

        public function Login_Update($login_id, $login_name, $login_password)
        {
            $conn = $this->connObj;
            $update_login = "CALL Update_user_login('$login_id', '$login_name', '$login_password')";
            if (!mysqli_query($conn, $update_login)) {
                echo 'Error: '.$update_login.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not enter';
            } else {
                echo 'New record updated successfully';
            }
        }

        public function Login_Delete($login_id)
        {
            $conn = $this->connObj;
            $delete_login = "CALL Delete_user_login('$login_id')";
            if (!mysqli_query($conn, $delete_login)) {
                echo 'Error: '.$delete_login.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not deleted';
            } else {
                echo 'This record deleted successfully';
            }
        }

        public function Login_UserName($login_id)
        {
            $conn = $this->connObj;
            $username_login = "CALL UserName('$login_id')";
            $result = mysqli_query($conn, $username_login);
            if (!$result) {
                echo 'Error: '.$result.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not founded';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['Login_Name'];
                }
                echo '<br>';
                echo 'This record is founded successfully';
            }
        }

        public function Login_ID($login_name, $login_password)
        {
            $conn = $this->connObj;
            $login_id = "CALL Login_ID('$login_name', '$login_password')";
            $result = mysqli_query($conn, $login_id);
            if (!$result) {
                echo 'Error: '.$login_id.'<br>'.mysqli_error($conn);
                echo '<br>';
                echo 'not founded';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['Login_id'] == 0) {
                        echo '<br>';
                        echo 'not founded';
                        echo '<br>';
                    } else {
                        return $row['Login_id'];

                        echo '<br>';
                    }
                    //echo "This record is founded successfully = " + $row['login_id'];
                    //echo "This a match";
                }
            }
        }
    }
?>

