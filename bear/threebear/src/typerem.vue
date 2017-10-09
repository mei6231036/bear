<template>
	<div class="col-xs-12">
		<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类名称</label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="typename" class="col-xs-10 col-sm-5" type="text" v-model="val.typename">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">上级分类</label>

										<div class="col-sm-9">
											<select name="" id="" v-model="val.parent_id" >
												<option value="0" selected="true">顶级分类</option>
												<option :value="v.id" v-for="v in data">{{v.typename}}</option>
											</select>
										</div>
									</div>
								

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" @click="aaa(val)">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>

									
	 </form>
	</div>
</template>

<script>
	export default {

 data(){return{
 	data:[],
 	val:{typename:'',id:'',parent_id:''},

 }},
 	mounted: function() {
			this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=type/sel',{}, {
			        headers: {
			 
			        },
			        emulateJSON: true
			    }).then(function(response) { 
			    	//链式调用执行
			      // 这里是处理正确的回调
			        console.log(response)
			      
			 		this.data=response.body.arr
			 
			    }, function(response) {
			        // 这里是处理错误的回调
			        console.log(response)
			    });
			
			
			
			
			this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=type/upone',{params:{id:this.$route.params.id}},
			 {
		        emulateJSON: true
		     }).then(function(response) { 
	    	//链式调用执行
	      // 这里是处理正确的回调

	        console.log(response)
	 		this.val=response.body.arr

	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });

	    
	},
	methods: {
		aaa: function (val) {



		 this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=type/up',
		 {params:val},
		 {
	        emulateJSON: true
	     }
		 ).then(function(response){

	        //这里是处理正确的回调

	        console.log(response.bodyText)
	      if(response.body.code==200)
	      {
			this.$router.push('/type')
	      }

	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });


	    
	},
   
  
  }
	
	
	 
	
 
}
</script>

<style>
	
</style>