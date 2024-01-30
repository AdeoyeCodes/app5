<?php
session_start();
?>

<?php
include "head.php";
?>

<body style= "background-color: #f0f0f0;">
  <h3 style= "margin-top: 12dvh; text-align: center; font-family: sans-serif;"> <b>THIS IS YOUR STUDIO</b> </h3>

    <div class="container" style="background-color: white; padding-top: 10dvh; border-radius: 9dvh; padding-bottom: 5dvh;">
        <h3>Select your Video </h3>
        <br /><br />
        <p> VIDEO MAX FILE SIZE: 2MB </p>
        <form id="uploadForm" action="db3.php" method="post" enctype="multipart/form-data">
            <input type="file" id="videoUpload" name="video" style="width: 26%; margin-left: 18dvh;" class="form-control" accept="video/*" required>
            <br /><button class="btn btn-primary"><b>Upload</b></button>
        </form>
        
        <div id= "progressBarContainer" style= "margin-top: 20px;">
         <div id= "progressBar"></div>
        </div>

        <div id="videoContainer" style="margin-top: 20px;">
      </div>
    </div>

    <script src="js/board2.js"></script>
</body>
</html>
