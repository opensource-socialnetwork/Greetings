<script>
$(document).ready(function(){
		var greetingsComponent = <?php echo json_encode(ossn_plugin_view('greetings/greetings'));?>;
		$('.newsfeed-middle').prepend(greetingsComponent);
});
</script>