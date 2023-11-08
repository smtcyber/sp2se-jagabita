<body onload="timer=setTimeout('move()',4000)" style="background-color: #2F4F4F;">
	    <center>
			<img style="margin-top: 170px;" src="<?php echo base_url('assets/images/terimakasih.png'); ?>" height="500" width="600">
		</center>
</body>
<script>
	  var time = null
	  function move() {
	  window.location = '<?php echo site_url('c_panel');?>';
	  //window.location.reload();
	  //window.refresh();
	}
</script>