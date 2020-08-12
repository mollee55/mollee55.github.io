<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNL Game Dev Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main2.css" />
    <?php
        $sender = $_GET['sender'];
        $sender = strip_tags($sender);
        $subject = $_GET['subject'];
        $subject = strip_tags($subject);
        $message = $_GET['message'];
        $message = strip_tags($message);

        if (!empty($_GET))
        {
            exec('python server_email.py ' . $sender . ' \'' . $subject . '\' \'' . $message . '\'');
            // exec('python server_email.py rclafferty@huskers.unl.edu \'Testing the script\' \'Testing! Hi!\'');
            // exec('python server_email.py rclafferty@huskers.unl.edu \'Testing the script\' \'' . $message . '\'');
        }
    ?>
</head>
<body>
    <div id="header">
        <h1><a href="index.html"><span class="logo_hover">UNL</span> Game <span class="logo_hover">Dev</span> Club</a></h1>
        <h2>Let's make a game</h2>
    </div>
    <div id="menubar">
        <ul>
            <li><a href="https://UNL-Game-Dev-Club.github.io/index.html">Home</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/projects.html">Projects</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/news.html">News</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/resources.html">Resources</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/contact.html">Contact Us</a></li>
        </ul>
    </div>
    <div class="body_text">
        <div class="body_text_content">
            <h1>Welcome to the UNL Game Development Club</h1>
            <p>We are UNL's only club focused on learning to develop video games. We meet weekly on Sundays at 7 pm in Avery Hall. All are welcome and there are no pre-requisites to join.</p>
            <p><b>Our mission: To teach students effective professional game design techniques.</b> We accomplish this by working through game development projects in our meetings, such as demos or active projects. We also provide students the opportunity to showcase their skills at game development competitions ("game jams").</p>
            <p>The group is still fairly new and growing, but we will update the website as new exciting projects and events arise.</p>
        </div>
        <div id="email_section">
            <form action="">
                Sender email: <input type="text" name="sender" placeholder="hhusker1@unl.edu"><br>
                Subject: <input type="text" name="subject" placeholder="Hi All You Awesome People!">
                <textarea rows=30 placeholder="Hi [awesome recipient]!
        
I'm emailing you to inform you of [message].

Talk to you soon!

[Your super cool game dev signature here]" name="message"></textarea>
                <input type="submit" value="Send Email">
            </form>
        </div>
    </div>
    <div class="footer">
        <ul>
            <li><a href="https://UNL-Game-Dev-Club.github.io/index.html">Home</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/projects.html">Projects</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/news.html">News</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/resources.html">Resources</a></li>
            <li><a href="https://UNL-Game-Dev-Club.github.io/contact.html">Contact Us</a></li>
        </ul>
    </div>
</body>
</html>