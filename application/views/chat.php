<?= $this->session->userdata('id') ?>
<input type="text" name="session" id="session">
<button type="button" id="kirim">Kirim</button>
<script type="text/javascript" src="<?= base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('node_modules/socket.io/node_modules/socket.io-client/socket.io.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#kirim').click(function() {
			var socket = io.connect('http://'+window.location.hostname+':3000');
			socket.emit('kirim',{
				untuk : $('#session').val(), 
			});
		})
	});
	var socket1 = io.connect('http://'+window.location.hostname+':3000');
	// socket1.on('<?= $this->session->userdata('id') ?>',function(data) {
	// 	alert('hai');
	// })
	socket1.on('terima',function(data) {
		alert('hai');
	})
</script>