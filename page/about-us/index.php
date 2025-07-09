<?php
// About Us page for Minecraft server/website
$page_title = "About Our Minecraft Community";
$server_name = "BlockCrafters";
$established = "2015";
$current_version = "1.20";
$team_members = [
    ["name" => "Alex", "role" => "Founder & Head Builder", "join_date" => "2015"],
    ["name" => "Steve", "role" => "Redstone Engineer", "join_date" => "2016"],
    ["name" => "Endy", "role" => "Community Manager", "join_date" => "2018"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #55ff55;
            text-align: center;
            border-bottom: 2px solid #55ff55;
            padding-bottom: 10px;
        }
        h2 {
            color: #55ffff;
        }
        .team-member {
            background-color: #2d2d2d;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            border-left: 4px solid #5555ff;
        }
        .minecraft-icon {
            color: #ffaa00;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About <?php echo $server_name; ?></h1>
        
        <h2>Our Story</h2>
        <p>Welcome to <span class="minecraft-icon"><?php echo $server_name; ?></span>, a Minecraft community established in <?php echo $established; ?>.</p>
        <p>We're currently running Minecraft <?php echo $current_version; ?> with a focus on survival gameplay, creative building, and community events.</p>
        
        <h2>Our Team</h2>
        <?php foreach ($team_members as $member): ?>
            <div class="team-member">
                <strong><?php echo $member['name']; ?></strong> - <?php echo $member['role']; ?>
                <br><small>Member since <?php echo $member['join_date']; ?></small>
            </div>
        <?php endforeach; ?>
        
        <h2>Join Us</h2>
        <p>Connect to our server at: <strong>mc.<?php echo strtolower($server_name); ?>.com</strong></p>
        <p>We welcome players of all skill levels to join our growing community!</p>
    </div>
</body>
</html>