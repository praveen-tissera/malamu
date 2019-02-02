<?php 
// print_r($this->session->userdata);
if(isset($this->session->userdata['userID'])){
    
    echo "<br><div class='btn-group mt-4'>
        <button type='button' class='btn btn-default'>";
        echo $this->session->userdata['firstName'] .'&nbsp;' . $this->session->userdata['lastName'];
        
        echo "</button>
        <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <span class='glyphicon glyphicon-cog'></span>
            <span class='sr-only'>Toggle Dropdown</span>
        </button>
        <ul class='dropdown-menu'>
            <li><a href='#'>Withdraw</a></li>
            <li><a href='" . base_url('index.php/user/viewuserredeem') ."'>Redeem Refer Money</a></li>
            
            <li role='separator' class='divider'></li>
            <li><a href='". base_url('index.php/user/userLogout') ."'>Log Out</a></li>
        </ul>
    </div>";




                //   end of user profile menu

                    echo "<ul class='left-menu pt-5 pl-4 pr-4'>
                        <li><a class='btn-block text-left' href='" . base_url('index.php/user/userDashBoard')."'><strong>Dashboard</strong> <i class='fas fa-home pull-right'></i></a></li>
                        <li><a class='btn-block text-left' href='" . base_url('index.php/user/viewMyWallet')."'><strong>My Wallet</strong> <i class='fas fa-wallet pull-right'></i></a></li>
                        <li><a class='btn-block text-left' href='" . base_url('index.php/user/viewInviteFriend')."'><strong>Invite Friends<strong> <i class='fas fa-users pull-right'></i></a></li>
                        <li><a class='btn-block text-left' href='" . base_url('index.php/user/viewHelp')."'><strong>Help</strong> <i class='fas fa-question-circle pull-right'></i></a></li>
                    
                    </ul>";




}else{
    echo "<h3>Error loading user menu!</h3>";
}

?>

