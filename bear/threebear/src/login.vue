<template>
	<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">login</span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												输账号密码！
											</h4>

											<div class="space-6"></div>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="账号" v-model="admin.a_name" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" v-model="admin.pwd" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														
									<button type="button" class="width-35 pull-right btn btn-sm btn-primary" @click="aaa(admin)">
															<i class="icon-key"></i>
															戳我登陆
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										

											
										</div><!-- /widget-main -->


						
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div>
		</div>

		</div>
</template>

<script>
	export default {

 data(){return{
 	
 	admin:{a_name:'',a_pwd:''},
 	aa:[],

 }},

	methods: {
    aaa: function (val) {

    console.log(this.$router)

		 this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=login/index',
		 {params:val},
		 {
	        emulateJSON: true
	     }
		 ).then(function(response){

	        //这里是处理正确的回调

	        console.log(response.bodyText)
	      if(response.body.error==0)
	      {
			this.$router.push('/')
	      }

	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });


	    
	}
    }
  
	
	
	 
	
 
}
	
</script>

<style>
	
</style>