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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <link href="../../CSS/Time_Sheet.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
            $(document).ready(function() {
            $('#timesheet_employee_table').DataTable();
        } );
    </script>
    </head>
    <body>
        <form action="../Main/Process Main/process_timesheet.php" method="post">
                <div class="timesheet_summary">          
                <div id="timesheet_header">
                        <div id="TimeSheet_Profile1">
                        <?php include '../Main/Process Main/process_username.php'; ?>
                        <input type="submit" name="log_out" class="log_out" value="Log Out">
                        </div>  
                        <div id="timesheet_header_title">Your Timesheet is Updated!</div>
                    <hr>
                    </div>
                    <div id="timesheet_employee">
                        <table id="timesheet_employee_table" class="display">
                            <thead>
                            <th>Work Title</th>
                            <th>Client's Full Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Days</th>
                            <th>Hours</th>
                            <th>Minutes</th>
                            <th>Comments</th>
                            <th>Entry Date</th>
                            </thead>
                            <?php include '../Main/Process Main/process_timesheet_summary.php'; ?> 
                        </table>
                    </div>
                </div>  
        </form>
    </body>  
</html>
