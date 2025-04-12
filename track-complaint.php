<?php
// Database credentials
$host = 'localhost';
$db   = 'smartcity';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the form submission
$statusMessage = '';
if (isset($_POST['track'])) {
    $complaintID = $conn->real_escape_string($_POST['complaint_id']);

    $sql = "SELECT * FROM complaints WHERE complaint_id = '$complaintID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $statusMessage = "📝 <strong>Complaint Status:</strong> " . $row['status'] .
                         "<br><strong>Description:</strong> " . $row['description'] .
                         "<br><strong>Last Updated:</strong> " . $row['updated_at'];
    } else {
        $statusMessage = "❌ No complaint found with ID: <strong>$complaintID</strong>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Track Complaint – SmartCity Connect</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; padding: 2em; }
        .track-box {
            background: white; padding: 2em; max-width: 500px;
            margin: auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            width: 100%; padding: 10px; margin-top: 10px; margin-bottom: 20px;
            border: 1px solid #ccc; border-radius: 6px;
        }
        button {
            background-color: #0077cc; color: white; padding: 10px 20px;<?php
// Database credentials
$host = 'localhost';
$db   = 'smartcity';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the form submission
$statusMessage = '';
if (isset($_POST['track'])) {
    $complaintID = $conn->real_escape_string($_POST['complaint_id']);

    $sql = "SELECT * FROM complaints WHERE complaint_id = '$complaintID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $statusMessage = "📝 <strong>Complaint Status:</strong> " . $row['status'] .
                         "<br><strong>Description:</strong> " . $row['description'] .
                         "<br><strong>Last Updated:</strong> " . $row['updated_at'];
    } else {
        $statusMessage = "❌ No complaint found with ID: <strong>$complaintID</strong>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Track Complaint – SmartCity Connect</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; padding: 2em; }
        .track-box {
            background: white; padding: 2em; max-width: 500px;
            margin: auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            width: 100%; padding: 10px; margin-top: 10px; margin-bottom: 20px;
            border: 1px solid #ccc; border-radius: 6px;
        }
        button {
            background-color: #0077cc; color: white; padding: 10px 20px;
            border: none; border-radius: 6px; cursor: pointer;
        }
        .result { margin-top: 20px; background: #e9f5ff; padding: 15px; border-radius: 6px; }
    </style>
</head>
<body>

<div class="track-box">
    <h2>🔍 Track Your Complaint</h2>
    <form method="POST" action="">
        <label for="complaint_id">Enter Complaint ID:</label>
        <input type="text" id="complaint_id" name="complaint_id" required />
        <button type="submit" name="track">Track Complaint</button>
    </form>

    <?php if ($statusMessage): ?>
        <div class="result">
            <?= $statusMessage ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>

            border: none; border-radius: 6px; cursor: pointer;
        }
        .result { margin-top: 20px; background: #e9f5ff; padding: 15px; border-radius: 6px; }
    </style>
</head>
<body>

<div class="track-box">
    <h2>🔍 Track Your Complaint</h2>
    <form method="POST" action="">
        <label for="complaint_id">Enter Complaint ID:</label>
        <input type="text" id="complaint_id" name="complaint_id" required />
        <button type="submit" name="track">Track Complaint</button>
    </form>

    <?php if ($statusMessage): ?>
        <div class="result">
            <?= $statusMessage ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
