<?php
// =====================================
// PERSONAL PROFILE INFORMATION
// =====================================

$name = "Jestoni Dela Cruz Catubag";
$course = "BS Information Technology";
$year = "2nd Year College";
$location = "Bohol, Philippines";
$email = "jestonicatubag123@gmail.com";

$about = "Hello! I am an IT student who enjoys exploring technology, learning programming, and creating websites. I am always willing to learn new things, improve my skills, and challenge myself.";

$education = [
    "School" => "Mater Dei College",
    "Degree" => "Bachelor of Science in Information Technology",
    "Year Level" => "2nd Year College"
];

$skills = [
    "HTML",
    "CSS",
    "PHP",
    "Java",
    "Web Development",
    "Problem Solving"
];

$hobbies = [
    "Playing Online Games",
    "Watching Anime",
    "Listening to Music",
    "Learning Programming"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Personal Portfolio</title>

    <style>
        /* GENERAL STYLING */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #0f172a;
            color: #e2e8f0;
            line-height: 1.7;
        }

        /* NAVIGATION BAR */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            background: #111c35;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid #26334e;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #a78bfa;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav ul a {
            text-decoration: none;
            color: #cbd5e1;
            transition: 0.3s;
        }

        nav ul a:hover {
            color: #a78bfa;
        }

        /* HERO SECTION */
        .hero {
            min-height: 480px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 70px 10%;
            gap: 40px;
            background: linear-gradient(
                135deg,
                #111c35,
                #312e81,
                #1e1b4b
            );
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text .welcome {
            color: #c4b5fd;
            font-size: 17px;
            letter-spacing: 2px;
        }

        .hero-text h1 {
            font-size: 45px;
            margin: 15px 0;
            color: white;
        }

        .hero-text h1 span {
            color: #a78bfa;
        }

        .hero-text p {
            color: #cbd5e1;
            margin-bottom: 25px;
        }

        .hero-text a {
            display: inline-block;
            background: #8b5cf6;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .hero-text a:hover {
            background: #7c3aed;
            transform: translateY(-3px);
        }

        /* PROFILE IMAGE */
        .profile-picture {
            width: 260px;
            height: 260px;
            border-radius: 50%;
            border: 6px solid #a78bfa;
            background: #26334e;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            flex-shrink: 0;
            box-shadow: 0 0 35px rgba(167, 139, 250, 0.3);
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* MAIN CONTENT */
        .container {
            max-width: 1100px;
            margin: auto;
            padding: 55px 25px;
        }

        .section-title {
            text-align: center;
            font-size: 30px;
            margin-bottom: 35px;
            color: #c4b5fd;
        }

        /* CARDS */
        .card {
            background: #1e293b;
            padding: 28px;
            border-radius: 15px;
            margin-bottom: 25px;
            border: 1px solid #334155;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #8b5cf6;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            color: #a78bfa;
            margin-bottom: 15px;
            font-size: 22px;
        }

        .card p {
            color: #cbd5e1;
            margin-bottom: 8px;
        }

        /* TWO COLUMN LAYOUT */
        .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        /* SKILLS AND HOBBIES */
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .tag {
            background: #312e81;
            color: #ddd6fe;
            padding: 9px 17px;
            border-radius: 25px;
            font-size: 14px;
            border: 1px solid #4c1d95;
            transition: 0.3s;
        }

        .tag:hover {
            background: #7c3aed;
            color: white;
        }

        /* CONTACT SECTION */
        .contact {
            text-align: center;
        }

        .contact p {
            margin: 12px 0;
        }

        .contact a {
            color: #a78bfa;
            text-decoration: none;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        /* FOOTER */
        footer {
            background: #080f20;
            text-align: center;
            padding: 25px;
            color: #94a3b8;
            border-top: 1px solid #26334e;
        }

        footer span {
            color: #a78bfa;
        }

        /* MOBILE RESPONSIVE DESIGN */
        @media (max-width: 768px) {

            nav {
                flex-direction: column;
                gap: 15px;
                padding: 18px 10px;
            }

            nav ul {
                gap: 12px;
                flex-wrap: wrap;
                justify-content: center;
            }

            nav ul a {
                font-size: 13px;
            }

            .hero {
                flex-direction: column-reverse;
                text-align: center;
                padding: 50px 20px;
            }

            .hero-text h1 {
                font-size: 32px;
            }

            .profile-picture {
                width: 190px;
                height: 190px;
            }

            .two-columns {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 35px 18px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav>
        <div class="logo">MyPortfolio.</div>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- HERO / INTRODUCTION -->
    <section class="hero" id="home">

        <div class="hero-text">

            <p class="welcome">WELCOME TO MY PERSONAL WEBSITE</p>

            <h1>
                Hello, I'm <span>
                    <?php echo htmlspecialchars($name); ?>
                </span>
            </h1>

            <p>
                <?php echo htmlspecialchars($course); ?>
                <br>
                <?php echo htmlspecialchars($year); ?>
                <br>
                <?php echo htmlspecialchars($location); ?>
            </p>

            <a href="#about">Discover More</a>

        </div>

        <!-- CHANGE YOUR PHOTO HERE -->
        <div class="profile-picture">
            <img src="profile.png"
                 alt="My Profile Photo"+
        </div>

    </section>

    <main class="container">

        <!-- ABOUT ME -->
        <section class="card" id="about">

            <h2>About Me</h2>

            <p>
                <?php echo htmlspecialchars($about); ?>
            </p>

        </section>

        <!-- EDUCATION AND PERSONAL INFORMATION -->
        <div class="two-columns">

            <section class="card" id="education">

                <h2>Educational Background</h2>

                <?php foreach ($education as $label => $value): ?>

                    <p>
                        <strong>
                            <?php echo htmlspecialchars($label); ?>:
                        </strong>

                        <?php echo htmlspecialchars($value); ?>
                    </p>

                <?php endforeach; ?>

            </section>

            <section class="card">

                <h2>Personal Information</h2>

                <p>
                    <strong>Name:</strong>
                    <?php echo htmlspecialchars($name); ?>
                </p>

                <p>
                    <strong>Course:</strong>
                    <?php echo htmlspecialchars($course); ?>
                </p>

                <p>
                    <strong>Location:</strong>
                    <?php echo htmlspecialchars($location); ?>
                </p>

            </section>

        </div>

        <!-- SKILLS -->
        <section class="card" id="skills">

            <h2>My Skills</h2>

            <div class="tags">

                <?php foreach ($skills as $skill): ?>

                    <span class="tag">
                        <?php echo htmlspecialchars($skill); ?>
                    </span>

                <?php endforeach; ?>

            </div>

        </section>

        <!-- HOBBIES -->
        <section class="card" id="hobbies">

            <h2>Hobbies and Interests</h2>

            <div class="tags">

                <?php foreach ($hobbies as $hobby): ?>

                    <span class="tag">
                        <?php echo htmlspecialchars($hobby); ?>
                    </span>

                <?php endforeach; ?>

            </div>

        </section>

        <!-- CONTACT INFORMATION -->
        <section class="card contact" id="contact">

            <h2>Contact Information</h2>

            <p>
                <strong>Email:</strong>

                <a href="mailto:<?php echo htmlspecialchars($email); ?>">
                    <?php echo htmlspecialchars($email); ?>
                </a>
            </p>

            <p>
                <strong>Location:</strong>
                <?php echo htmlspecialchars($location); ?>
            </p>

        </section>

    </main>

    <!-- FOOTER -->
    <footer>

        <p>
            &copy; <?php echo date("Y"); ?>

            <span>
                <?php echo htmlspecialchars($name); ?>
            </span>

            | All Rights Reserved.
        </p>

        <p>Personal Portfolio | PHP, HTML5 and CSS3</p>

    </footer>

</body>
</html>