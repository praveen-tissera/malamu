<nav class="navbar mb-0">
		<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"></a>
				</div>
				<p class="navbar-text pull-right">
					<a href="<?php echo base_url('index.php/user/userDashBoard'); ?>">
						<span class="nav-home"><i class="fas fa-wallet"></i></span>
					</a>
					&nbsp;&nbsp;
					<strong>Wallet #
											<?php if (isset($this->session->userdata['userID'])) {
												$wallet_number = sprintf("%03d", $this->session->userdata['userID']);
												echo $wallet_number;
											} ?>
					</strong>
				</p>
		</div>
	</nav>