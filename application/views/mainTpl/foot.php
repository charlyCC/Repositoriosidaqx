<?php 
$js = isset($js) ? $js : NULL;

if(!is_null($js)){
	foreach ($js as $jsData) {
		?>
		<script href="<?php echo $jsData["local"] ? "../../assets/$jsData[path]$jsData[fileName].js" : "$jsData[path]$jsData[fileName].js"; ?>" ></script>
		<?php
	}
}
?>
</body>
</html>