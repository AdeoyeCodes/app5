<?php 

session_start();

$servername = "localhost";
$username = "boluxcod_Bolu";
$password = "Boluwatife@30";
$dbname = "boluxcod_mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

$viewCount = 0;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_FILES['video']) && $_FILES['video']['error'] == 0) {
        $video = $conn->real_escape_string($_FILES['video']['name']);
        $video_temp = $_FILES['video']['tmp_name'];
        $video_path = "uploads/". $video;

        if(isset($_FILES['video']) && $_FILES['video']['error'] == 0 && strpos($_FILES['video']['type'], 'video/') === 0) {
           $_SESSION['video'] = $video_path;
           $sql = "INSERT INTO video (`video`) VALUES (\"" . $video . "\") ";

           if ($conn->query($sql) === TRUE){
            echo '<div style="margin-top: 20px; padding-bottom: 19px;">';
            echo '<video width="640" height="360" controls>';
            echo '<source src="' . $_SESSION['video'] . '" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
            echo '<p style="margin-top: 10px;"> You have ' . $viewCount . '  view(s)' . '</p>';
            echo '<button id="viewBtn" class="btn btn-success" onclick="incrementViewCount()"> View This Video </button>';
            echo '</div>';
        } else {
            echo "Try again. Database error: " . $conn->error;
        }
    } else {
        echo "Try again. Error moving file to uploads folder.";
    }
} else {
    echo "Try again. Error uploading video.";
}
} else {
echo "Try again. No file uploaded or an error occurred.";
}


$conn->close();
?>

