	<footer>
		<div class="container">
			<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> | <?php echo SITE_NAME; ?> | {elapsed_time}s</span></p>
		</div>
	</footer>
	<script src="<?= base_url('resources/js/jquery-1.12.1.min.js'); ?>"></script>
	<script src="<?= base_url('resources/js/jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"></script>
    <?php 
	    if (isset($add_js)) {
	    	foreach ($add_js as $file_js) {
	    		echo '<script src="'.base_url('resources/js/'.$file_js).'"></script>';
	    	}
	    }
    ?>
  </body>
</html>