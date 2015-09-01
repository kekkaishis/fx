<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>标题</title>
<link rel="stylesheet" href="/Public/admin/css/app.min.css" type="text/css">

</head>
<body>
	<div class="app ng-scope app-header-fixed">
				<header id="header" class="app-header navbar bg-primary" role="menu">
			<!-- navbar header -->
			<div class="navbar-header ng-scope box-shadow-inset dk">
				<button class="pull-right visible-xs">
					<i class="ti-settings"></i>
				</button>
				<button class="pull-right visible-xs">
					<i class="ti-menu"></i>
				</button>
				<!-- brand -->
				<a class="navbar-brand text-lt ng-scope">
					<i class="pull-right ti-arrow-circle-down text-sm m-v-xs m-l-xs"></i>
					<i class="glyphicon glyphicon-th-large text-md"></i> 
					<img src="/Public/admin/img/logo.png" alt="." class="hide"> 
					<span class="hidden-folded m-l-xs ng-binding">
						<?php echo (L("SYSTEM_NAME")); ?><sup class="text-xs font-thin ng-binding"><?php echo (L("SYSTEM_VERSION")); ?></sup>
					</span>
				</a>
				<!-- / brand -->
			</div>
			<!-- / navbar header -->

			<!-- navbar collapse -->
			<div class="navbar-collapse hidden-xs ng-scope">
				<!-- nav -->
				<ul class="nav navbar-nav navbar-left">
					<li><a class="ng-scope" href="<?php echo U('index/index');?>">首页</a></li>
					<li><a class="ng-scope" href="<?php echo U('system/index');?>">系统</a></li>
					<li><a class="ng-scope" href="<?php echo U('user/index');?>">用户</a></li>
					<li><a class="ng-scope" href="<?php echo U('share/index');?>">分销</a></li>
				</ul>
				<!-- / nav -->

				<!-- nabar right -->
				<ul class="nav navbar-nav navbar-right m-r-n">
					<li>
						<a href="" class="ng-scope"> 
							<i class="glyphicon glyphicon-trash" style="font-size:12px;top: 2px;"></i>
							 <span><?php echo (L("ADMIN_EMPTY_CACHE")); ?></span>
						</a>
					</li>
					<li>
						<a href="" class="ng-scope"> 
							<i class="glyphicon glyphicon-check" style="top: 2px;"></i> 
							<span><?php echo (L("ADMIN_OPEN_HOME")); ?></span>
						</a>
					</li>
					<li>
						<a class="clear no-padding-h ng-scope" id="user-list" > 
							<img src="/Public/admin/img/a0.jpg" class="navbar-img pull-right">
							<span class="hidden-sm m-l">admin</span> 
							<b class="caret m-h-xs hidden-sm"></b>
						</a>
						
						<ul id="user-list-ul" class="dropdown-menu pull-right no-b-t ng-scope bottom-left am-collapse"  style="top: 48px; left: 0px; display: none; visibility: visible;">
			                <li>
			                  <a ui-sref="page.settings" href="#/page/settings"><?php echo (L("USER_SAVE_INFO")); ?></a>
			                </li>
			                <li>
			                  <a ui-sref="signin" href="#/signin"><?php echo (L("USER_LOGOUT")); ?></a>
			                </li>
		              	</ul>
		              	
					</li>
				</ul>
				<!-- / navbar right -->

				<!-- search form -->
				<form class="navbar-form navbar-form-sm navbar-right visible-xs ng-pristine ng-valid" role="search">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-btn">
								<button type="submit"
									class="btn btn-sm no-bg btn-icon no-shadow no-padder">
									<i class="ti-search"></i>
								</button>
							</span> 
							<input type="text"
								class="form-control input-sm no-bg no-border ng-pristine ng-valid"
								placeholder="Search...">
						</div>
					</div>
				</form>
				<!-- / search form -->
			</div>
			<!-- / navbar collapse -->
		</header>
		<aside id="aside" class="app-aside hidden-xs bg-dark lt"
	ng-class="{'show animated fadeInLeft' : app.asideCollapse}"
	ng-include="'views/aside.html'">
	<div class="app-aside-inner ng-scope affix-top" bs-affix=""
		style="position: relative;">
		<!-- uiView: aside@ -->
		<div class="app-aside-body scrollable hover ng-scope" ui-view="aside@">
			<nav ui-nav="" class="ng-scope">
				<ul class="nav">
					<li class="nav-header h4 m-v-sm">UI Kits</li>
						<li class="menu-list">
					      <a>
					        <span class="pull-right text-muted">
					          <i class="fa fa-caret-down"></i>
					        </span>
					        <i class="icon glyphicon glyphicon-list text-lt"></i>
					        <span class="font-normal">权限管理</span>
					      </a>
					      <ul class="nav nav-sub bg">
					        <li ui-sref-active="active">
					          <a  href="<?php echo U('auth/group');?>">角色管理</a>
					        </li>
					        <li ui-sref-active="active">
					          <a href="<?php echo U('auth/rule');?>">菜单管理</a>
					        </li>
					      </ul>
					    </li>
					</ul>	
			</nav>
		</div>
		<div class="app-aside-footer p text-xs text-center">
			<span><strong class="text-lt">3.5</strong>GB</span>
			<div class="progress progress-xs bg no-margin m-h-xs inline w-xs">
				<div class="progress-bar progress-bar-info" style="width: 30%"></div>
			</div>
			<span>10GB</span>
		</div>
	</div>
</aside>
		<div id="content" class="app-content ng-scope">
		<div class="ng-scope">
		<div class="p-md ng-scope">
		
<div class="panel panel-default">
	<div class="panel-heading"><?php echo (L("USER_AUTH_GROUP")); ?></div>
	<div class="panel-body">
		<button type="button" ng-click="addRandomItem(row)"
			class="btn btn-sm btn-success">
			<i class="glyphicon glyphicon-plus"> </i> <?php echo (L("COMMON_ADD")); ?>
		</button>
	</div>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th class="">first name</th>
				<th class="">last name</th>
				<th class="">birth date</th>
				<th class="st-sort-descent">balance</th>
				<th width="250">操作</th>
			</tr>
		</thead>
		<tbody>
			<!-- ngRepeat: row in displayedCollection -->
			<tr class="ng-scope">
				<td class="ng-binding">Olivier</td>
				<td class="ng-binding">Renard</td>
				<td class="ng-binding">"1987-04-25T00:00:00.000Z"</td>
				<td class="ng-binding">785</td>
				<td>
					<button type="button" ng-click="removeItem(row)"
						class="btn btn-xs btn-default">
						<i class="fa fa-times"></i>
					</button>
				</td>
			</tr>
			<!-- end ngRepeat: row in displayedCollection -->
			<tr class="ng-scope">
				<td class="ng-binding">Olivier</td>
				<td class="ng-binding">Frere</td>
				<td class="ng-binding">"1987-04-25T00:00:00.000Z"</td>
				<td class="ng-binding">133</td>
				<td>
					<button type="button" ng-click="removeItem(row)"
						class="btn btn-xs btn-default">
						<i class="fa fa-times"></i>
					</button>
				</td>
			</tr>
			<!-- end ngRepeat: row in displayedCollection -->
			<tr class="ng-scope">
				<td class="ng-binding">Laurent</td>
				<td class="ng-binding">Frere</td>
				<td class="ng-binding">"1987-05-21T00:00:00.000Z"</td>
				<td class="ng-binding">70</td>
				<td>
					<button type="button" ng-click="removeItem(row)"
						class="btn btn-xs btn-default">
						<i class="fa fa-times"></i>
					</button>
				</td>
			</tr>
			<!-- end ngRepeat: row in displayedCollection -->
		</tbody>
	</table>
</div>

		</div>
		</div>
		</div>
	</div>
	<script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
$(function(){
	$('.menu-list').on('click',function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		}else{
			$('.menu-list').removeClass('active');
			$(this).addClass('active');
		}
		
	});
	
	$('#user-list').on('click',function(){
		$('#user-list-ul').toggle('normal');
	});
});
</script>

</body>
</html>