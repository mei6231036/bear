<template>
	<div id="an">
		<div class="breadcrumbs" id="breadcrumbs">					
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">主播管理</li>
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
			<th>主播名称</th>
			<th>真实姓名</th>
			<th>真实简介</th>
			<th>审核状态</th>

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
				<span class="label label-sm label-warning">{{val.name}}</span>
			</td>
			<td>杨蒜苗</td>
			<td>好吃懒做</td>
			<td>
				<select name="" id="" v-model="val.status" @change="sta(val)">
				<option value="1">审核通过</option>
				<option value="0">未审核</option>

			</select>
			
			</td>

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
import Vue from 'vue'
export default {

 data(){return{
 	data:[],
 	sear:'',
 	prev:1,
 	next:2,
 	end:'',
 	status:''

 }},
 	mounted: function() {

			this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=anchor/show',{}, {
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
    del: function (index) {
    	this.data.splice(index,1);
    },
    sea:function()
    {
    	this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=anchor/show',{params:{name:this.sear}}, {
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
    page:function (page)
   {
   		this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=anchor/show',{params:{page:page,name:this.sear}}, {
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
   sta:function(val)
   {
		this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=anchor/update',{params:{anchor_id:val.anchor_id,status:val.status}}, {
	        headers: {
	 
	        },
	        emulateJSON: true
	    }).then(function(response) { 
	    	//链式调用执行
	      // 这里是处理正确的回调

	      
	        console.log(response)


	 		

	 
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