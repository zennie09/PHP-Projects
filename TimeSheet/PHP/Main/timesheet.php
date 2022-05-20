<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Time Sheet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="../../CSS/Time_Sheet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="timesheet_body">
        <form action="../Main/Process Main/process_timesheet.php" method="post">
            <div class="TimeSheet">
                <div id="TimeSheet_Title"><i class="bi bi-clock-history"></i> Time Sheet</div>
                <div id="TimeSheet_Profile">
                    <?php include '../Main/Process Main/process_username.php'; ?>
                    <input type="submit" name="log_out" class="log_out" value="Log Out">
                </div>                
                
                <hr id="TimeSheet_line">
                <div class="TimeSheet_Form">
                    <div id="Timesheet_WTC">
                        
                            <label for="lbl_Work_Title" id="wt_label">Work Title:</label>
                            <select class="form-control" id="TimeSheet_WorkTitle"  name="occupations">
                            <option value="">-- Select Work Title --</option>
                            <?php

                                require '../../data.php';
                                $occupations = loadOcc();
                                foreach ($occupations as $occupation) {
                                    echo "<option id='".$occupation['Work_Title_id']."' value ='".$occupation['Work_Title_id']."'>"
                                    .$occupation['Work_Title_Name'].'</option>';
                                }

                            ?>
                            </select>
                        
                        
                        
                            <label for="lbl_Client_Work_Title" id="ct_label">Clients:</label>
                            <select class="form-control" id="clients" name="clients">
                                <option value="">-- Select Client --</option>
                            </select>
                          
                       
                    </div>
                    
                    <label for="lbl_Start_Time" id="st_label">Start Time:</label>
                    <input type="datetime-local" id="start_time" name="start_time">
                    <br>
                    <br>
                    <label for="lbl_End_Time" id="et_label">End Time:</label>
                    <input type="datetime-local" id="end_time" name="end_time" onchange="getDays()">

                    <div id="TimeSheet_Total_Time_Spent">
                        <input type="text" id="Total_Time_Spent"  name="Total_Time_Spent" />
                        <label id="lbl_days">DAYS</label>
                        <input type="text" id="Total_Time_Spent_hours"  name="Total_Time_Spent_hours" />:
                        <label id="lbl_hrs">HOURS</label>
                        <input type="text" id="Total_Time_Spent_minutes"  name="Total_Time_Spent_minutes" />
                        <label id="lbl_mins">MINUTES</label>
                    </div>
                    <div id="TimeSheet_Comment">
                        <label for="lbl_Comment" id="lbl_Comment">Comments:</label>
                        <textarea name="Timesheet_Comment_txa" rows="4" cols="20" id="Timesheet_Comment_txa" ><?php echo isset($_POST['Timesheet_Comment_txa']) ? $_POST['Timesheet_Comment_txa'] : ''; ?></textarea>
                    </div>
                    <div id="TimeSheet_Submit">
                        <input type="submit" value="Submit Time Sheet" name="Submit" class="btn_submit"/>
                    </div>
                </div>
            </div>
        </form>
    </body>

    <script>
$(document).ready(function(){
  elem = document.getElementById("start_time")
  var now = new Date();
  var iso = new Date(now.getTime() - now.getTimezoneOffset() * 60000).toISOString();
  var minDate = iso.substring(0,iso.length-8);
  elem.value = minDate
  elem.max = minDate
});

$(document).ready(function(){
  elem = document.getElementById("end_time")
  var now = new Date();
  var iso = new Date(now.getTime() - now.getTimezoneOffset() * 60000).toISOString();
  var minDate = iso.substring(0,iso.length-8);
  elem.value = minDate
  elem.min = minDate
});

/*START */
$(document).ready(function(){
            $("#TimeSheet_WorkTitle").change(function(){
                var occ_id = $("#TimeSheet_WorkTitle").val();
                $.ajax({
                    url: '../../data.php',
                    method: 'post',
                    data: 'occ_id=' + occ_id
                    }).done(function(clients){
                        //console.log(clients);
                        clients = JSON.parse(clients);
                        $('#clients').empty();
                        $('#clients').append('<option>--- Select Client ---</option>')
                        clients.forEach(function(client){
                            $('#clients').append('<option>' + client.Client_Full_Name + '</option>')
                            
                        })
                    })
                })
            })
/*END */

/*START */
  function getDays() {
    var start_date = new Date(document.getElementById('start_time').value);
    var end_date = new Date(document.getElementById('end_time').value);
    //Here we will use getTime() function to get the time difference
    var time_difference = end_date.getTime() - start_date.getTime();
    //Here we will divide the above time difference by the no of miliseconds in a day
    var days_difference = parseInt(time_difference / (1000 * 3600 * 24));
    //alert(days);

      // Get hours
    var diff = end_date.valueOf() - start_date.valueOf();
    var diffInHours = parseInt(Math.abs(diff) / (1000 * 60 * 60) % 24)

    var difference = end_date.getTime() - start_date.getTime(); // This will give difference in milliseconds
    var diffInMins =  parseInt(Math.abs(difference) / (1000 * 60) % 60);

    document.getElementById('Total_Time_Spent').value = days_difference;
    document.getElementById('Total_Time_Spent_hours').value = diffInHours;
    document.getElementById('Total_Time_Spent_minutes').value = diffInMins;
  }

  /*END */

  
</script>
  
</html>
