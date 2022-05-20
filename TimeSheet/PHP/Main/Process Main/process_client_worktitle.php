<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
                    <label for="lbl_Work_Title">Work Title:</label>
                    <select name="worktitle" id="work_title" onChange="reload()">
                    <option name="">Select Work Title</option>
                        <?php
                            include '../../Class/Work_title.php';
                            $obj = new Work_Title();
                            $obj->Work_Title_DropDown();
                        ?>
                   </select>
                   <br>
                   <br>
                   <div id="TimeSheet_WorkTitle_Client">
                   <label for="lbl_Client_Work_Title">Clients:</label>
                   <select name="client_work_title">
                   <option name="">Select Clients</option>
                   <?php $cat = $_GET['cat'];
                   echo $cat;
                   include '../../Class/Client.php';
                   $obj = new Client();
                   $obj->Client_DropDown($cat);
                   ?>
                </select>
               </div>
                   
                   <br>
                   
                   <div id="TimeSheet_Dates">
                        <label for="lbl_Start_Time">Start Time:</label>
                        <input type="date" id="start_time" name="start_time">
                        <br>
                        <br>
                        <label for="lbl_End_Time">End Time:</label>
                        <input type="date" id="end_time" name="end_time">
                        <br>
                        <br>
                    </div>

                    <br><br>
                     <div id="TimeSheet_Total_Time_Spent">
                    <input type="text" name="Total_Time_Spent" value="" />
                </div>
                   
                   <p>Your work title: </p><p name ="result" id="resultColorValue" ></p>

                   <input type="submit" value=submit name=submit>




     <script>
         function run() {
                document.getElementById("resultColorValue").innerHTML = document.getElementById("work_title").value;
            }

        function reload(){
            var vl = document.getElementById('work_title').value;
            //document.write(vl);
            
            self.location="process_client_worktitle.php?cat=" + vl;
        }
     </script>    