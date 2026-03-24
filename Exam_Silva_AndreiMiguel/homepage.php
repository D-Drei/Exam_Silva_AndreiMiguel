<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
    exit;
}

$anime_titles = [
    "Attack on Titan",
    "Oregairu",
    "Haikyuu",
    "Classroom of the Elite",
    "Golden Time",
    "No Game No Life",
    "Quintessential Quintuplets",
    "Spy X Family",
];

$anime_images = [
    "aot.jpg",
    "oregairu.jpg",
    "Haikyu.jpg",
    "cote.jpg",
    "gt.jpg",
    "ngnl.jpg",
    "qq.jpg",
    "spyx.jpg",
];

$anime_eps = [1, 1, 1, 1, 1, 1, 1, 1];

$anime_desc = [
    "Set in a world where humanity is forced to live in cities surrounded by three enormous walls that protect them from gigantic man-eating humanoids referred to as Titans",
    "The series follows Hachiman Hikigaya, a pessimistic, closeminded, and realistic teen, who is forced by his teacher to join the school's service club and work with two girls with issues of their own. They offer help and advice to others while dealing with their inner conflicts.",
    "The story follows Shoyo Hinata, a boy determined to become a great volleyball player despite his small stature.",
    "Set in the prestigious elite national high school 'Tokyo Metropolitan Advanced Nurturing School' established by the Japanese government. The story is about students assigned to four classes in the hierarchical order of 'A' 'B' 'C' and 'D' who are in constant competition over their three years of schooling to decide which gets to ultimately graduate in 'Class A', whose graduating members are said to be promised automatic acception in any desired career path or further education.",
    "Banri Tada is a newly admitted male student at a private law school in Tokyo. Due to the after-effects of a fall from a bridge shortly after his high school graduation, he has lost all of his memories prior to the accident",
    "The series follows Sora and his younger stepsister Shiro, two hikikomori who make up the identity of Blank, an undefeated group of gamers. One day, they are challenged by the god of games to chess and are victorious. As a result, the god summons them to Disboard, a world where stealing, war, and killing are forbidden, and all matters are decided through games, including national borders and even people's lives.",
    "The series follows the daily life of a high-school student Futaro Uesugi, who is hired as a private tutor for a group of identical quintuplets: Ichika, Nino, Miku, Yotsuba, and Itsuki Nakano.",
    "The story follows Agent Twilight, an enigmatic spy who has to build a family to execute a mission, not realizing that his adopted daughter is a telepath, and the woman he agrees to marry is a skilled assassin.",
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="video-bg-wrapper">
        <video class="video-bg" src="backgroundd.mp4" autoplay muted loop playsinline></video>
        <div class="video-overlay"></div>

        
        <nav class="navbar">
            <a href="index.php" class="navbar-brand">
                <img
                    class="navbar-logo"
                    src="logo.png"
                    onerror="this.style.background='#B22B27';this.src='';"
                    alt="Logo" />
                <span class="navbar-title">Luwmi Anime
                </span>
            </a>
            <div class="navbar-actions">
                <span style="color:#aaa;font-size:.9rem;margin-right:8px;">
                    Welcome
                </span>

                
            </div>
        </nav>

       
        <main class="homepage-main">
            

            <div class="anime-grid">
                <?php for ($i = 0; $i < count($anime_titles); $i++): ?>
                    <div class="anime-card">
                        <img
                            src="<?= htmlspecialchars($anime_images[$i]) ?>"
                            alt="<?= htmlspecialchars($anime_titles[$i]) ?>"
                            onerror="this.src='https://via.placeholder.com/300x220?text=No+Image';" />
                        <div class="anime-card-body">
                            <h3><?= htmlspecialchars($anime_titles[$i]) ?></h3>
                            <p><?= htmlspecialchars($anime_desc[$i]) ?></p>
                        </div>
                        <div class="anime-card-footer">
                            <span class="anime-ep">Ep. <?= $anime_eps[$i] ?></span>
                            <a href="#" class="btn-watch">Watch &#9654;</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </main>

        
        <footer>
            <div>Copyright &copy; 2026. All rights reserved.</div>
            <div>Designed with <span class="heart">&#9829;</span> | Computer Programming - D</div>
        </footer>
    </div>
</body>

</html>
