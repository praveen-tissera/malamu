<?php 
// print_r($this->session->userdata);
if(isset($this->session->userdata['userID'])){
    echo "<div class='dropdown pt-4'>
                        <a class='text-capitalize' id='dLabel' data-target='#' href='' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                          <strong>  Hi, ";
                             echo $this->session->userdata['firstName'];
                            echo "<span class='caret'></span></strong>
                        </a>

                        <ul class='dropdown-menu' aria-labelledby='dLabel'>
                            <li>
								<a href=''>Payment Options</a>
							</li>
							<li>
								<a href=''>Redeem Refer Points</a>
							</li>
							<li role='separator' class='divider'></li>
							<li><a href='". base_url('index.php/user/userLogout') ."'>Log Out</a></li>
                        </ul>
                    </div>";

                //   end of user profile menu

                    echo "<ul class='left-menu pt-5'>
                        <li><a href='" . base_url('index.php/user/userDashBoard')."'><strong>Dashboard</strong></a></li>
                        <li><a href='" . base_url('index.php/user/viewWallet')."'><strong>My Wallet</strong></a></li>
                        <li><a href='" . base_url('index.php/user/viewInviteFriend')."'><strong>Invite Friends<strong></a></li>
                        <li><a href='" . base_url('index.php/user/viewHelp')."'><strong>Help</strong></a></li>
                    
                    </ul>";




}else{
    echo "<h3>Error loading user menu!</h3>";
}

?>

