<template>
<div id="app">
	开始日期<date-picker field="myDate"
				 placeholder="选择日期"
				 v-model="date"
				 format="yyyy-mm-dd" class="aa">
	</date-picker>
	结束日期<date-picker field="myDate"
				 placeholder="选择日期"
				 v-model="date1"
				 format="yyyy-mm-dd" class="aa">
</date-picker>
{{date}}
</div>
</template>

<script>
import myDatepicker from 'vue-datepicker-simple/datepicker-2.vue';
 
export default {
  data () {
    return {
    	
      date:'',
      date1:'',
      
    }
  },
  components: {
    'date-picker': myDatepicker
  }
}
</script>

<style>
	.vue-datepicker{display: inline-block}
</style>