<!DOCTYPE html>
<html>
    <head>
        <title>Time Sheet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="../../CSS/Time_Sheet.css" rel="stylesheet" type="text/css"/>
         <!-- add icon link -->
        <link rel="shortcut icon" href="/favicon.ico">
    </head>
    <body>
        <form action="../Main/Process Main/process_login.php" method="post">
            <div class="Login">
                <div id="Login_1">
                    <div id="Login_Title"><i class="bi bi-clock-history"></i> Time Sheet</div>
                    <div id="Login_1_Heading">
                        Get exclusive access to
                        <br>your Time Sheet
                    </div>
                    
                    <div id="Login_1_Paragraph">
                        We are in the process of developing our online platform, where we aim to make the 
                        concept as a user-friendly as possible. We therefore send and receive access continuously,
                        focusing on the timely manner tasks are finished with your Time Sheet.
                    </div>
                </div>
                <div id="Login_2">
                    <div id='Login_Account'>
                        <label id="Login_label1">Don't have an Account?</label>
                        <button id="Login_Create_Account">Create Profile</button>
                    </div>
                    <div id='Login_Email_Password'>
                        <i class="bi bi-envelope-fill" id="email"></i> <input type="text" name="Username" value="" id="Login_Email" placeholder="Email"/>
                        
                        <i class="bi bi-key-fill" id="password"></i> <input type="password" name="Password" value="" id="Login_Password" placeholder="Password"/>
           
                        <div id="Login_Button">
                            <button id="Login_btn" name="Login">Login</button>
                            <label id="user" style="display:inline;"></label>
                            <br>
                            <a href="" id="Login_Forget_Password">Forget Password?</a>
                        </div>
                        
                        <div id="Login_links">
                            
                            <img src="../../Images/9251394351556105319-128.png" class="dot" alt=""/>
                            <img src="../../Images/18265738341599780998-128.png" class="dot" alt=""/>
                            <img src="../../Images/2659939281579738432-128.png" class="dot" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
