<?php  $lang = $val['lang']; ?>
<script>
$(function(){
	$("#sel_lang").live("change",function(){
		
		$('#frm_lg').submit();
	});

	$("#sel_theme").live("change",function(){
		$('#frm_theme').submit();
	});
});
</script>
<div id="sidebar">
	<ul>
		<li>
			<h2><?php echo $language['categories'];?></h2>
			<ul>
				<li><a href="#"><?php echo $language['profile'];?></a></li>
				<li><a href="#"><?php echo $language['ch_pass'];?></a></li>
				<li><a href="#"><?php echo $language['my_page'];?></a></li>
				<li><a href="#"><?php echo $language['gallary'];?></a></li>
				<li><a href="#"><?php echo $language['logout'];?></a></li>
			</ul>
		</li>
	</ul>
	<form id="frm_lg" action="changeLanguage" method="post">
		<?php echo $language['lang_select'];?>
		<select id="sel_lang" name="sel_lang">
			<option value='en' <?php if($lang=='en'){?> selected <?php } ?>>English</option>
			<option value='fr' <?php if($lang=='fr'){?> selected <?php } ?>>français</option>
			<option value='dh' <?php if($lang=='dh'){?> selected <?php } ?>>Nederlands</option>
		</select>
	</form>
</div>
<!-- end #sidebar -->
		
		
		

