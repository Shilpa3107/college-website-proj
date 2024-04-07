<script>
								 $(document).ready(function() {
								$('input.vname').typeahead({
               						 name: 'vname',
               						 remote: 'name.php?query=%QUERY'

  									 });
									 })
								</script>
								Search Client : <input type="text" id="vname" name="vname">