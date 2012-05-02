<?php $this->load->view('includes/header_view'); ?>


		<div id=content>
	
			<?php 
				echo validation_errors('<div class=error_message>', '</div>');
				
				echo $this->session->flashdata('message');
				
				if (!empty($message)) echo '<div class=message>'.$message.'</div>';
				if (!empty($error_message)) echo '<div class=error_message>'.$error_message.'</div>';
				if (!empty($success_message)) echo '<div class=success_message>'.$success_message.'</div>';
			?>
	
	<?php $this->load->view('pages/'.$page); ?>

		</div>

<?php $this->load->view('includes/footer_view'); ?>