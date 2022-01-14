</div> <!-- /wrapper -->

<footer>
	<p>&copy <?php echo date("Y"); ?></p>
</footer>
<script type="text/javascript">
	$('.ui.dropdown')
		.dropdown();
	$('.ui.radio.checkbox')
		.checkbox();
	$('.message .close')
		.on('click', function() {
			$(this)
				.closest('.message')
				.transition('fade');
		});
</script>
</body>

</html>