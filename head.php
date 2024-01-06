<!DOCTYPE html>
<html>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="../analysis/dashboard.php">Home</a></li>
                    <li>
                        <a href="../user/viewUser.php">User</a>
                    </li>
                    <li>
                        <a href="#"><?php echo $_SESSION['fname'] ?></a>
                        <ul class="innerlist">
                            <li><a href="../user/viewProfile.php"><i class="fas fa-user"></i> Profile</a></li>
                            <li><a href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>