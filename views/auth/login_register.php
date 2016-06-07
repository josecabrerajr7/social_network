<?php
	if (logged_in() === false) {
          	echo '<li><a href="views/auth/logout.php">Logout</a></li>';
        } else {
          	echo '<li ng-controller=\'LoginController\'><a ng-click="loginModal()">Login</a></li>
				  <li ng-controller=\'RegisterController\'><a ng-click="registerModal()">Register</a></li>';
        }
 ?>