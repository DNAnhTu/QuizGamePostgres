<nav id="navBar" class="navbar1">
        <?php
                session_start();
        ?>
                <div class= "mobButton">
                        <a class="logo" href="../index.html" >SuperApp</a> 
                        <b id="menuButton"onclick="mobileMenu()">&#9776;</b>
                </div>
                <div id= "mobileMenu" style="display: none;">
                        <a hhref="../index.html"></a>
                        <a href="../basics.html"></a>
                        <a href="../more.html"></a>
                        <a href="../quiz.php">Quiz</a>
                        <?php if(isset($_SESSION["role"])) {
                                if($_SESSION["role"]=="admin"){ ?>
                                        <a href="administrator.php">Administrator</a>
                                        <a href="moderator.php">Moderator</a>
                                        <a href="user.php">User</a>
                            <?php }
                                else if($_SESSION["role"]=="moderator"){ ?>
                                        <a href="moderator.php">Moderator</a>
                                        <a href="user.php">User</a>
                            <?php    }
                                else if($_SESSION["role"]=="user"){?>
                                        <a href="user.php">User</a>
                            <?php     }
                        }
                        if(isset($_SESSION["log_status"])) {  ?>
                                <a id="signoutButton" href="logout.php">logout</a>
                    <?php }
                        else { ?>
                                <a id="signinButton" href="../login.html">login</a>
                                
                        <?php } ?>
                </div>
                

                <div class="desktopMenu">
                    
                        <?php 
                                if(isset($_SESSION["log_status"])) {  ?>
                                       <a id="signoutButton" href="logout.php">logout</a>
                        <?php }
                                else { ?>
                                        <a id="signinButton" href="../login.html">login</a>
                        <?php   } 
                                if(isset($_SESSION["role"])) {
                                        if($_SESSION["role"]=="admin"){ ?>
                                               <div class="dropdown">
                                                   <button class="dropbtn" onclick="location.href='user.php'"><?php echo $_SESSION["username"]; ?> <i class='fas fa-user-check'></i></button>
                                                        <div class="dropdown-content">
                                                        <a href="moderator.php">Moderator</a>
                                                        <a href="administrator.php">Administrator</a>
                                                        </div>
                                                </div>
                                <?php   }
                                        else if($_SESSION["role"]=="moderator"){ ?>
                                                <div class="dropdown">
                                                   <button class="dropbtn" onclick="location.href='user.php'"><?php echo $_SESSION["username"]; ?> <i class='fas fa-user-check'></i></button>
                                                        <div class="dropdown-content">
                                                                <a href="moderator.php">Moderator</a>
                                                        </div>
                                                </div>
                                <?php   }
                                        else if($_SESSION["role"]=="user"){  ?>
                                                <div class="dropdown">
                                                   <button class="dropbtn" onclick="location.href='user.php?select=3'"><?php echo $_SESSION["username"]; ?> <i class='fas fa-user-check'></i></button>
                                                </div>
                                <?php   }
                                }
                        ?>
                        <a class="logo" href="../index.html">QuizApp</a> 
                        <!--<a href="../basics.html"></a>     
                        <a href="../more.html"></a>-->
                        <a href="../quiz.php">Quiz</a>
                        
                </div>	
        </nav>