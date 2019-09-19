
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<!--<script src="{{ asset('js/admin/script.js') }}"></script>-->
		<script type="text/javascript" src="{{ asset('js/select2.full.min.js') }}"></script>
		<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
		<script>
        	$(function () {
	            // Replace the <textarea id="editor1"> with a CKEditor
	            // instance, using default configuration.
	            CKEDITOR.replace('editor');
	               //bootstrap WYSIHTML5 - text editor
	               $(".textarea").wysihtml5();
         	});
      	</script>

      	<script>

      		$(document).ready(function() {
          		$(".select2").select2();
      		});
    	</script>

	</body>
</html>