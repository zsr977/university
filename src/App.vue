<template>
  <div id="app">
    <img src="./assets/logo.png">
    <ul id="link">
      <li><router-link to="/">首页</router-link></li>
      <li><router-link to="/test">测试页</router-link></li>
    </ul>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
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
#link{
  list-style:none;
  text-align:center;
  color:blue;
  display:inline-block;
}
</style>