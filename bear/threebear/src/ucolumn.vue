<template>
<div id="myChart" :style="{width: '300px', height: '300px'}"></div>
</template>

<script>  
export default {
  name: '',
  data () {
    return {
      msg: ''
    }
  },
  mounted(){

      this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=city/sel',{}, {
          headers: {
   
          },
          emulateJSON: true
      }).then(function(response) { 
        //链式调用执行
        // 这里是处理正确的回调
        console.log(response)
        this.drawLine(response.body.city,response.body.num);
      }, function(response) {
          // 这里是处理错误的回调
          console.log(response)
      });
   
  },
  methods: {
    drawLine(data1,data2){
        // 基于准备好的dom，初始化echarts实例
        let myChart = this.$echarts.init(document.getElementById('myChart'))
        // 绘制图表
        myChart.setOption({
            title: { text: '在Vue中使用echarts' },
            tooltip: {},
            xAxis: {
                data: data1
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: data2
            }]
        });
    }
  }
}
</script>

<style> </style>