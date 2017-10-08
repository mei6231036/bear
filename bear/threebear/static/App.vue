<template>
  <div id="app">
  	<h1>{{msg}}</h1>
  	<naodai></naodai>
    <img src="./assets/logo.png">



		<router-view></router-view>
  </div>
</template>

<script>
import naodai from './naodai.vue'

export default {
	components: {
     naodai,
 },
 data(){return{
// 	msg:'从你喜欢我的那一刻起我便不喜欢你了'
 }}
 
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}

</style>
