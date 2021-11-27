		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">copyright by Darmawan Ilham R</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
	<script src="../assets/vendor/tabledata/script.js"></script>
	<script src="../assets/vendor/tabledata/boostrapDatatable.js"></script>
	<script src="../assets/vendor/tabledata/dataTableJquery.js"></script>
	
	<script>
			$(document).ready(function(){
        $('#example').DataTable();

                //LOGIN JAM ANALOG
				setInterval(function(){
					jam = new Date().getHours();
					menit = new Date().getMinutes();
					detik = new Date().getSeconds();

					// Penambahan angka 0 di depan menit
					if(menit < 10){
						menit = '0' + menit
					}

					//penerapan PM & AM
					if( jam > 12 && jam < 24){
						text = ' PM'
					}else{
						text = ' AM'
					}

					$('#jam').html(jam + ' : ' + menit + ' : ' +  detik + text);
				}, 1000)

                //VALIDASI PASSWORD
                $('#show').click(function(){
                    if($(this).is(':checked')){
                        $('#pass').attr('type','text')
                    }else{
                        $('#pass').attr('type','password')
                    }
                })

                $('#pass').keyup(function(){
                     x = $(this).val()
                     console.log(x)
                    if(x.length < 7) {
                        $('#msg').html('<b class="text-danger">Password Minimal 8 Karakter</b>')
                    }else if(x.length > 7){
                        $('#msg').html('')
                    }
                 })
				
			} );
	</script>
</body>

</html>