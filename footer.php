<!-- Main Footer -->
</div>
<!-- ./wrapper -->
<footer class="main-footer mt-3">
    <strong>Copyright &copy; 2023-2024 <a href="https://balisolutionbiz.com">Bali Solution Biz</a>.</strong>
    All rights reserved.
</footer>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="asset-penjualan/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="asset-penjualan/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="asset-penjualan/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="asset-penjualan/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="asset-penjualan/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="asset-penjualan/plugins/raphael/raphael.min.js"></script>
<script src="asset-penjualan/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="asset-penjualan/plugins/jquery-mapael/maps/usa_states.min.js"></script>


<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php while ($b = mysqli_fetch_array($bulan)) {
                            echo '"' . $b['bulan'] . '",';
                        } ?>],
            datasets: [{
                label: 'Data Penjualan',
                data: [<?php while ($p = mysqli_fetch_array($penghasilan)) {
                            echo '"' . $p['hasil_penjualan'] . '",';
                        } ?>],


                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {}
        }
    });
</script>


<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>


<!-- AlertSweet -->



<!-- AdminLTE for demo purposes -->
<!-- <script src="asset-penjualan/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<scrasset-penjualandist /js/pages/dashboard2.js"></script>
    </body>

    </html>