<?php 
	echo '<form action="core/login.php" method="POST">';
	echo '<div class="modal-header">
            <h5 class="modal-title">Login</h5>
        </div>';
    echo  '<div class="modal-body">
		   		<label>Username
					<input type="text" placeholder="username" name="username">
				</label>
				<label>Password
					<input type="password" placeholder="password" name="password">
				</label>
    	   </div>';
    echo '<div class="modal-footer">
            <button class="success button" type="submit">Log In</button>
            <button class="alert button" type="button" ng-click="cancel()">Cancel</button>
        </div>';
    echo '</form>';
?>