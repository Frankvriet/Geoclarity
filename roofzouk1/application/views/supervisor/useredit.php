
<div class="container" style="margin-top:100px;">	
	
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading"><b><?php echo get_phrase('user_edit');?></b></div>
				<div class="panel-body">
					<form name="registerfrm" id="registerfrm" method="post" class="form-horizontal">
					<?php if ($MsgFailed!="") {?>
						<div class="alert alert-danger">
							<?php echo $MsgFailed;?>
						</div>
						<?php }?>
						<?php if ($MsgSuccess!="") {?>
						<div class="alert alert-success">
							<?php echo $MsgSuccess;?>
						</div>
						<?php }?>
					<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('user_email');?></label>
							<div class="col-sm-8">
						    	<input type="text" class="form-control" id="email" name="email" placeholder="User email" required value="<?php echo $userInfo->email?>">
						    </div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('password');?></label>
							<div class="col-sm-8">
						    	<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" >
						    </div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('user_name');?></label>
							<div class="col-sm-8">
						    	<input type="text" class="form-control" id="username" name="username" placeholder="User Name" required value="<?php echo $userInfo->username?>">
						    </div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('home_phone');?></label>
							<div class="col-sm-8">
						    	<input type="text" class="form-control" id="homephone" name="homephone" placeholder="Home Phone" required value="<?php echo $userInfo->homephone?>">
						    </div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('mobile_phone');?></label>
							<div class="col-sm-8">
						    	<input type="text" class="form-control" id="mobilephone" name="mobilephone" placeholder="Mobile Phone" required value="<?php echo $userInfo->mobilephone?>">
						    </div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('user_role');?></label>
							<div class="col-sm-8">
								<select name="userrole" class="form-control">
									<option value="INSTALLER"><?php echo get_phrase('INSTALLER');?></option>
									<option value="EXPERT_TECH" <?php echo $userInfo->user_roles == "EXPERT_TECH" ? "selected": ""?>><?php echo get_phrase('EXPERT_TECH');?></option>
									<option value="DELIVERY" <?php echo $userInfo->user_roles == "DELIVERY" ? "selected": ""?>><?php echo get_phrase('DELIVERY');?></option>
									<option value="DEVICE_COLLECTOR" <?php echo $userInfo->user_roles == "DEVICE_COLLECTOR" ? "selected": ""?>><?php echo get_phrase('DEVICE_COLLECTOR');?></option>
									<option value="MONEY_RECOLLECT" <?php echo $userInfo->user_roles == "MONEY_RECOLLECT" ? "selected": ""?>><?php echo get_phrase('MONEY_RECOLLECT');?></option>
								</select>
						    </div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('vehicle_type');?></label>
							<div class="col-sm-8">
								<select name="vehicletype" class="form-control">
									<option value="VAN"><?php echo get_phrase('VAN');?></option>
									<option value="TRUCK" <?php echo $userInfo->vehicletype == "TRUCK" ? "selected": ""?>><?php echo get_phrase('TRUCK');?></option>
									<option value="BIKE" <?php echo $userInfo->vehicletype == "BIKE" ? "selected": ""?>><?php echo get_phrase('BIKE');?></option>
									<option value="CAR" <?php echo $userInfo->vehicletype == "CAR" ? "selected": ""?>><?php echo get_phrase('CAR');?></option>
									<option value="DRONE" <?php echo $userInfo->vehicletype == "DRONE" ? "selected": ""?>><?php echo get_phrase('DRONE');?></option>
									<option value="PLANE" <?php echo $userInfo->vehicletype == "PLANE" ? "selected": ""?>><?php echo get_phrase('PLANE');?></option>
									<option value="SHIP" <?php echo $userInfo->vehicletype == "SHIP" ? "selected": ""?>><?php echo get_phrase('SHIP');?></option>
									<option value="BOAT" <?php echo $userInfo->vehicletype == "BOAT" ? "selected": ""?>><?php echo get_phrase('BOAT');?></option>
								</select>
						    </div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label"><?php echo get_phrase('vehicle_reg');?></label>
							<div class="col-sm-8">
						    	<input type="text" class="form-control" id="vehicle_reg" name="vehicle_reg" placeholder="Vehicle Leg" required value="<?php echo $userInfo->vehicle_reg?>">
						    </div>
						</div>
						
						<div class="form-group">
						 	<div class="col-sm-12">
						 	<input type="submit" class="btn btn-primary" value="<?php echo get_phrase('submit');?>" />
						 	<input type="button" class="btn btn-info" value="<?php echo get_phrase('cancel');?>" onclick="location.href='<?php echo base_url()?>index.php/supervisor/users'">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</div>
<script type="text/javascript">
            //<![CDATA[
            //var dataForm = new RegisternForm('form-validate', true);
            $(document).ready(function () {
                $('.table').dataTable();
            });
            //]]>
        </script>