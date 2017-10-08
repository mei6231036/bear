<template>
	<div>
		<div class="breadcrumbs" id="breadcrumbs">					
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">分类管理</li>
						</ul><!-- .breadcrumb -->

					
					</div><table id="sample-table-1" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th class="center">
				<label>
					<input class="ace" type="checkbox">
					<span class="lbl"></span>
				</label>
			</th>
			<th>分类名称</th>
			<th>父级ID</th>
			<th class="hidden-480">路径</th>
			<th><i class="icon-time bigger-110 hidden-480"></i></th>
			
		</tr>
	</thead>

	<tbody>
		<tr v-for="(val,index) in data">
			<td class="center">
				<label>
					<input class="ace" type="checkbox">
					<span class="lbl"></span>
				</label>
			</td>
			<td>
				<span class="label label-sm label-warning">{{val.typename}}</span>
			</td>
			<td>{{val.parent_id}}</td>
			<td class="hidden-480">路径</td>
			<td>
				<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
					<button class="btn btn-xs btn-success">
						<i class="icon-ok bigger-120"></i>
					</button>

					<button class="btn btn-xs btn-info">
						<i class="icon-edit bigger-120"></i>
					</button>

					<button class="btn btn-xs btn-danger" @click="del(val,index)">
						<i class="icon-trash bigger-120"></i>
					</button>

					<button class="btn btn-xs btn-warning">
						<i class="icon-flag bigger-120"></i>
					</button>
				</div>
			</td>
		</tr>
	</tbody>
</table></div>
</template>

<script>
export default {

 data(){return{
 	data:[],

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
	      
	 		this.data=response.body
	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });

	    
	},
	methods: {
    del: function (val) {



    	this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=type/del',
		 {params:{id:val.id}},
		 {
	        emulateJSON: true
	     }
		 ).then(function(response){

	        //这里是处理正确的回调

	       console.log(response.body.code)
			
	      if(response.body.code==200)
	      {
    		this.data.splice(val,1);
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