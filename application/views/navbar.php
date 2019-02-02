<nav class="navbar mb-0">
		<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"></a>
				</div>
				<p class="navbar-text pull-right">
					<span class="nav-home"><i class="fas fa-home"></i></span>&nbsp;&nbsp;
					<strong>Wallet #
											<?php if (isset($this->session->userdata['userID'])) {
												$wallet_number = sprintf("%03d", $this->session->userdata['userID']);
												echo $wallet_number;
											} ?>
					</strong>
				</p>
		</div>
	</nav>