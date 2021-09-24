	<script>
		$(document).ready(function() {
            access_check();
        });

        function back_()
        {
        	$.ajax({
	            url : "<?php echo base_url('Signin/logout')?>",
	            type: "POST",
	            async: false,	            
	            dataType: "JSON",
	            success: function(data)
	            {            	
	            	if(data.status)
	            	{
	            		window.location.href = 'https://www.e-matchad.com/reminder/';
	            	}
	            	else
	            	{
	            		alert('gagal');
	            	}            	
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	               alert('Error adding / update data');
	            }
	        });
        }
	</script>
</body>
</html>