<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon Tab -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

    <!-- Link Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- File css -->
    <link rel="stylesheet" href="style.css">

    <!-- Title -->
    <title>SMUT</title>
</head>

<body>

    <!-- Nav Bar -->
    <nav>

        <!-- Search Friends -->
        <div class="nav-left">
            <img src="./images/logo.png" alt="Logo">
            <input type="text" placeholder="Search SMUT..">
        </div>

        <!-- Nav right -->
        <div class="nav-right">
            <span class="profile"></span>

            <a href="#">
                <i class="fa fa-bell"></i>
            </a>

            <a href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>
    </nav>


    <!-- Container -->
    <div class="container">

        <!-- Control Panel Left -->
        <div class="left-panel">
            <ul>
                <li>
                    <span class="profile"></span>
                    <p>Aashish Panthi</p>
                </li>
                <li>
                    <i class="fa fa-user-friends"></i>
                    <p>Friends</p>
                </li>
                <li>
                    <i class="fa fa-flag"></i>
                    <p>Pages</p>
                </li>
                <li>
                    <i class="fas fa-calendar-week"></i>
                    <p>Events</p>
                </li>
                <li>
                    <i class="fas fa-hands-helping"></i>
                    <p>Offers</p>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    <p>Favourites</p>
                </li>
            </ul>

            <!-- Footer Links -->
            <div class="footer-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Advance</a>
                <a href="#">More</a>
            </div>
        </div>


        <!-- Middle Panels -->
        <div class="middle-panel">

            <!-- Create Content -->
            <div class="post create">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/girl.jpg" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind, Aashish ?" />
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="fa fa-image"></i>
                        <span>Photo/Video</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-smile"></i>
                        <span>Feeling/Activity</span>
                    </div>
                </div>
            </div>

            <!-- Post Content -->
            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/girl.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Anuska Sharma</p>
                        <span class="time">12 hrs ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>

                <div class="post-content">
                    Roses are red <br>
                    Violets are blue <br>
                    I'm ugly & you are too😏
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Ramesh GC</p>
                        <span class="time">2 days ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>

                <div class="post-content">
                    Mountains are so cool
                    <img src="images/mountains.jpg" />
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>
            

        <!-- Control Panel Right -->
        </div>
        <div class="right-panel">

            <!-- Friends Section -->
            <div class="friends-section">
                <h4>Friends</h4>
                <a class='friend' href="#">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <p class="name">Henry Mosely</p>
                </a>

                <a class='friend' href="#">
                    <div class="dp">
                        <img src="./images/shoes.jpg" alt="">
                    </div>
                    <p class="name">George</p>
                </a>
                
            </div>
        </div>
    </div>
</body>

</html>