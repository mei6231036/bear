<template>
	<div class="sidebar" id="sidebar">
					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li>
							<router-link to="/type" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 分类管理 </span>

								<b class="arrow icon-angle-down"></b>
								</router-link>

							<ul class="submenu">
								<li>
									<router-link to="/typeadd">
										<i class="icon-double-angle-right"></i>
										添加分类
									</router-link>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->
					<ul class="nav nav-list">
						<li>

								<router-link to="/gift" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> 礼物管理 </span>
								
								<b class="arrow icon-angle-down"></b>
								</router-link>

							<ul class="submenu">
								<li>
									<router-link to="/giftadd" >
										<i class="icon-double-angle-right"></i>
										添加礼物
									</router-link>
								</li>
							</ul>
						</li>
						
					</ul><!-- /.nav-list -->
					
					<ul class="nav nav-list">
						<li>

								<router-link to="/anchor" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 主播管理 </span>

								<b class="arrow icon-angle-down"></b>
								</router-link>

							<ul class="submenu">
								<li>
									<router-link to="/anchoradd" >
										<i class="icon-double-angle-right"></i>
										添加主播
									</router-link>
								</li>
							</ul>
						</li>
						
					</ul><!-- /.nav-list -->



				</div>
</template>
<script src='/static/assets/js/jquery-2.0.3.min.js'></script>
<script src="/static/assets/js/bootstrap.min.js"></script>
<script src="/static/assets/js/typeahead-bs2.min.js"></script>	
<script src="/static/assets/js/ace-elements.min.js"></script>
<script src="/static/assets/js/ace.min.js"></script>

<script>

</script>
		

<style>
</style>