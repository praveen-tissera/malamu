                     
                     <!-- this is a componet to load into every profile pages -->
					 <div class="row pt-4">
					
						<div class="col-sm-2 col-md-2">
							<strong class="pl-4">Wallet #
                            <?php if (isset($this->session->userdata['userID'])) {
                                $wallet_number = sprintf("%03d", $this->session->userdata['userID']);
                                echo $wallet_number;
                            } ?>
                            </strong> 
						</div>
						
                        <div class="col-sm-6 col-md-8">
							<div class="col-sm-3 col-md-3 text-center pull-left">Money Accumulated<br>
								$105 Points
							</div>
							<div class="col-sm-6 col-md-6 col-md-offset-3 text-center">Money Untill Payout<br>
								$895 Points
							
							</div>
							<div class="col-sm-12 col-md-12 pt-2">

								<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
										60%
									</div>
                            	</div>
							</div>
                            
                        
                        </div>
                        <div class="take-surve">
                            <button type="button" class="btn btn-primary">Take Survey</button>
                            
                        </div>



					</div>