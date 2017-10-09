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
		<span class="input-icon">
		<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text"v-model="sear" @blur="sea">
		<i class="icon-search nav-search-icon"></i>
								</span>
					
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

					<button class="btn btn-xs btn-info" @click="rem(val.id)">
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
</table>
<ul class="pagination">
    <li><a href="javascript:;"  @click="page(1)">&laquo;</a></li>
    <li><a href="javascript:;" @click="page(1)">首页</a></li>
    <li><a href="javascript:;" @click="page(prev)">上一页</a></li>
    <li><a href="javascript:;" @click="page(next)">下一页</a></li>
    <li><a href="javascript:;" @click="page(end)">尾页</a></li>

    <li><a href="javascript:;" @click="page(end)">&raquo;</a></li>
</ul>
</div>
</template>

<script>
export default {

 data(){return{
 	data:[],
 	sear:'',
 	prev:1,
 	next:2,
 	end:'',

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
	 		this.prev=response.body.prev
	 		this.next=response.body.next
	 		this.end=response.body.end

	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });

	    
	},
	methods: {
    del: function (val,index) {



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
    		this.data.splice(index,1);
	      }

	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });
   },
   sea:function ()
   {
	this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=type/sel',{params:{name:this.sear}}, {
	        headers: {
	 
	        },
	        emulateJSON: true
	    }).then(function(response) { 
	    	//链式调用执行
	      // 这里是处理正确的回调
	        console.log(response)
	      
	 		this.data=response.body.arr
	 		this.prev=response.body.prev
	 		this.next=response.body.next
	 		this.end=response.body.end

	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });
   },
   rem :function (id)
   {
   	this.$router.push('/typerem/'+id);
   },
   page:function (page)
   {
   		this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=type/sel',{params:{page:page,name:this.sear}}, {
	        headers: {
	 
	        },
	        emulateJSON: true
	    }).then(function(response) { 
	    	//链式调用执行
	      // 这里是处理正确的回调
	        console.log(response)
	      
	 		this.data=response.body.arr
	 		this.prev=response.body.prev
	 		this.next=response.body.next
	 		this.end=response.body.end

	 
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