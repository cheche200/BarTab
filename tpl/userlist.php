		<div class="row">
			<div class="col-sx-12">
				<h2><?=$conf->user_list_title;?></h2>
				<ul class="list-group" id="user-listings">
<?php
foreach($list as $user)
{
?>
					<li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <?=$user->real_name;?><span class="badge badge-info"> <?=$user->account;?> <?=$conf->currency_string;?></span><span class="badge alert-info"><?=($user->admin?$conf->admin_string:'');?></span></li>
<?php
}
?>
				</ul>
			</div>
		</div>