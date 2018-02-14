<template>
	<div id="test">
		<p>我是测试页</p>
	</div>
</template>

<script>
	export default{
		mounted:function(){
			$('#test p').css('color','red');
		}
	}
</script>

<style lang="scss" scoped type="text/css">
	
</style>