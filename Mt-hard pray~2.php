<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MyTube Video Example Page</title>
    <link rel="icon" href="MyTube.svg" alt="icon">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>MyTube</h1>
    <button onclick="location.href='https://mytube.cryptical-corp.repl.co/'">Home</button>
    <button onclick="location.href='https://mytube.cryptical-corp.repl.co/videos.php'">Videos</button>
    <h1>‎</h1>
    <video src="uploads/hard pray~2.mp4" controls></video>
    <h2>Hard Pray</h2>
    <nav>
        <h3>Upload Date: <?php echo date("d/m/Y"); ?></h3>
        <h3>Description:</h3>
        <p>Lil bro prayed to hard 💀</p>
        <h3>Uploader: MyTubeShitposts</h3>
    </nav>
</body>
</html>