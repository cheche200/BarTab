<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?=$conf->title;?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?=$conf->get_data_url('css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?=$conf->get_data_url('css/bootstrap-theme.min.css');?>">
	<style>
		body{padding: 10px; padding-top: 70px;}
	</style>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=$conf->get_base_url('itemlist');?>"><?=$conf->title;?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
          <ul class="nav navbar-nav">
            <li class="<?=@$nav['itemlist'];?>"><a href="<?=$conf->get_base_url('itemlist');?>"><?=$conf->item_list_title;?></a></li>
            <li class="<?=@$nav['userlist'];?>"><a href="<?=$conf->get_base_url('userlist');?>"><?=$conf->user_list_title;?></a></li>
            <li class="<?=@$nav['userview'];?>"><a href="<?=$conf->get_base_url('userview');?>"><?=$conf->user_string;?></a></li>
            <li class="dropdown <?=@$nav['admin'];?>">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$conf->admin_string;?><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="<?=$conf->get_base_url('admin/users');?>"><?=$conf->users_string;?></a></li>
					<li><a href="<?=$conf->get_base_url('admin/items');?>"><?=$conf->items_string;?></a></li>
					<li><a href="<?=$conf->get_base_url('admin/transactions');?>"><?=$conf->transaction_string;?></a></li>
					<li><a href="<?=$conf->get_base_url('admin/signin');?>"><?=$conf->signin_string;?></a></li>
					<li><a href="<?=$conf->get_base_url('admin/signout');?>"><?=$conf->signout_string;?></a></li>
				</ul>
			</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <div class="container">