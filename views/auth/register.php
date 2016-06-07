<?php 
	echo '<form action="core/register.php" method="POST">';
        echo '<div class="modal-header">
                <h5 class="modal-title">Register</h5>
              </div>';
        echo  '<div class="modal-body">
                    <div class="row">
                        <div class="small-12 medium-6 columns">
                            <label>First Name
                                <input type="text" placeholder="First Name" name="firstname">
                            </label>
                        </div>
                        <div class="small-12 medium-6 columns">
                            <label>Last Name
                                <input type="text" placeholder="Last Name" name="lastname">
                            </label>
                        </div>
                        <div class="small-12 columns">   
		   		            <label>Username
					           <input type="text" placeholder="Username" name="username">
				            </label>
                        </div>
                        <div class="small-12 columns">   
                            <label>Email
                                <input type="text" placeholder="Email" name="email">
                            </label>
                        </div>
                        <div class="small-12 columns">   
                            <label>Confirm Email
                                <input type="text" placeholder="Confirm Email" name="comfirmemail">
                            </label>
                        </div>
                        <div class="small-12 medium-6 columns">
    				        <label>Password
    					       <input type="password" placeholder="Password" name="password">
    				        </label>
                        </div>
                        <div class="small-12 medium-6 columns">
                            <label>Retype Password
                               <input type="password" placeholder="Retype Password" name="retypepassword">
                            </label>
                        </div>
                        <div class="small-12 columns">
                            <label>Select Birthday</label>
                        </div>
                        <div class="small-12 medium-4 columns">
                            <select name="month">';
                                for ($m=1;$m<=12;$m++)
                                {
                                    $month = date('F', mktime(0,0,0,$m, 1, date('Y')));
                                    echo "<option value=$month>$month</option>";
                                }
            
                        echo  '</select></div>
                        <div class="small-12 medium-4 columns">
                            <select name="date">';
                                for ($d=1; $d<=31; $d++)
                                {
                                    $date = $d;
                                    echo "<option value=$date>$date</option>";
                                }
                        echo '</select>
                        </div>
                        <div class="small-12 medium-4 columns">
                            <select name="year">';
                                for ($y=0;$y<=111; $y++)
                                {
                                    $year = date('Y', strtotime("last day of -$y year"));
                                    echo "<option name='$year'>$year</option>";
                                }                            
                        echo '</select>
                    </div>
                    <div class="small-12 columns">
                        <input type="radio" name="gender" value="female"><label for="female">Female</label>
                        <input type="radio" name="gender" value="male"><label for="male">Male</label>
                    </div>
                </div> 
    	   </div>';
    echo '<div class="modal-footer">
            <button class="success button" type="submit" value="register">Register</button>
            <button class="alert button" type="button" ng-click="cancel()">Cancel</button>
        </div>';
    echo '</form>';
?>


