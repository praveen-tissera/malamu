<?php 
// print_r($this->session->userdata);
if(isset($this->session->userdata['userID'])){
    
    echo "<br><div class='btn-group settings mt-5'>
        <button type='button' class='btn btn-default user-name'>";
        echo $this->session->userdata['firstName'] .'&nbsp;' . $this->session->userdata['lastName'];
        
        echo "</button>
        <button type='button' class='btn btn-default dropdown-toggle user-name-btn' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <span class='glyphicon glyphicon-cog'></span>
            <span class='sr-only'>Toggle Dropdown</span>
        </button>
        <ul class='dropdown-menu'>
            <li><a href='". base_url('index.php/user/withdrawStepOne') ."'>Withdraw</a></li>
            <li><a href='" . base_url('index.php/user/viewuserredeem') ."'>Redeem Refer Money</a></li>
            
            <li role='separator' class='divider'></li>
            <li><a href='". base_url('index.php/user/userLogout') ."'>Log Out</a></li>
        </ul>
    </div>";


    echo "<br><div class='btn-group settings-mobile mt-5'>
      
        <button type='button' class='btn btn-default dropdown-toggle user-name-btn' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <span class='glyphicon glyphicon-cog'></span>
            <span class='sr-only'>Toggle Dropdown</span>
        </button>
        <ul class='dropdown-menu'>
            <li><a href='". base_url('index.php/user/withdrawStepOne') ."'>Withdraw</a></li>
            <li><a href='" . base_url('index.php/user/viewuserredeem') ."'>Redeem Refer Money</a></li>
            
            <li role='separator' class='divider'></li>
            <li><a href='". base_url('index.php/user/userLogout') ."'>Log Out</a></li>
        </ul>
    </div>";



                //   end of user profile menu

                    echo "<ul class='left-menu pt-5 pl-4 pr-4'>
                        <li class='mt-4 mb-4'><a class='btn-block text-left' href='" . base_url('index.php/user/userDashBoard')."'>Dashboard <i class='fas fa-home pull-right'></i></a></li>
                        <li class='mt-4 mb-4'><a class='btn-block text-left' href='" . base_url('index.php/user/viewMyWallet')."'>My Wallet <i class='fas fa-wallet pull-right'></i></a></li>
                        <li class='mt-4 mb-4'><a class='btn-block text-left' href='" . base_url('index.php/user/viewInviteFriend')."'>Invite Friends <i class='fas fa-users pull-right'></i></a></li>
                        <li class='mt-4 mb-4'><a class='btn-block text-left' href='" . base_url('index.php/user/viewHelp')."'>Help <i class='fas fa-question-circle pull-right'></i></a></li>
                    
                    </ul>";

                    echo "<ul class='left-menu-mobile pt-5 pl-2 pr-4'>
                        <li class='mt-4 mb-4'><a class='btn-block  mt-4' href='" . base_url('index.php/user/userDashBoard')."'><i class='fas fa-home fa-2x'></i></a></li>
                        <li class='mt-4 mb-4'><a class='btn-block  mt-4' href='" . base_url('index.php/user/viewMyWallet')."'><i class='fas fa-wallet fa-2x'></i></a></li>
                        <li class='mt-4 mb-4'><a class='btn-block  mt-4' href='" . base_url('index.php/user/viewInviteFriend')."'><i class='fas fa-users fa-2x'></i></a></li>
                        <li class='mt-4 mb-4'><a class='btn-block  mt-4' href='" . base_url('index.php/user/viewHelp')."'><i class='fas fa-question-circle fa-2x'></i></a></li>
                    
                    </ul>";




}else{
    echo "<h3>Error loading user menu!</h3>";
}

?>

