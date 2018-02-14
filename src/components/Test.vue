<template>
	<div id="test">
		<p>我是测试页</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">1</div>
				<div class="col-md-4">2</div>
				<div class="col-md-4">3</div>
			</div>
		</div>
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