<html>
<head>
<title>Urban Dictionary</title>

<link rel="stylesheet" href="../Urban Dictionary/CSS/urban_stylesheet.css">
</head>

<body>
    <?php include("Process/processurban.php"); ?>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id="frmUrban">
        <div class="urban_dictionary_panel">
            <div id="urban_dictionary_header">Urban Dictionary</div>
            <div id="urban_dictionary_definition_panel">
                <input type="text" id="urban_dictionary_txtbox" name="urban_word">
                <button class="urban_dictionary_btn" name='submit'>Find Me The Word</button>
                <label id="urban_dictionary_error" name="urban_dictionary_error"><?php echo $urban_error?></label>
                <label id="urban_dictionary_word">Word Of The Day</label>
                <label id="urban_dictionary_word1"><?php echo $urban_word?></label>
                <div id="urban_dictionary_definition">
                    <label id="urban_dictionary_definition0">Definition: </label>
                    <label id="urban_dictionary_definition1" name="urban_definition"><?php echo $urban_definition?></label>
                </div> 
                <div id="urban_dictionary_example"> 
                    <label id="urban_dictionary_example_1">Example 1 :</label>
                    <label id="urban_dictionary_example1" name="urban_dictionary_example1"> <?php echo $urban_example1?> </label>
                    <label id="urban_dictionary_example_2">Link: </label>
                    <label id="urban_dictionary_example2" name="urban_link"> <?php echo $urban_link?> </label>
                    <label id="urban_dictionary_example_3">Author by:</label>
                    <label id="urban_dictionary_example3" name="urban_author"> <?php echo $urban_author?></label>
                    <label id="urban_dictionary_example_4">Written Date:</label>
                    <label id="urban_dictionary_example4" name="urban_written"> <?php echo $urban_written?></label>
                   
                </div> 
                
            </div>
        </div>
    </form>
</body>

</html>