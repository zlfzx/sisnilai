<footer>
  <div class="container p-4">
    <span class="nama-footer">SMK NEGERI 1 KEDUNGWUNI</span>
  </div>
</footer>
  <script src="<?=base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
  <script src="<?=base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('assets/js/chart/Chart.bundle.min.js');?>"></script>  
  <script src="<?=base_url('assets/js/scroll-out.min.js');?>"></script>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',

  // The data for our dataset
  data: {
      labels: ["Semester1","Semester2","Semester3","Semester4","Semester5","Semester6"],
      datasets: [{
          label: "My First dataset",
          backgroundColor: 'transparent',
          borderColor: '#8E2DE2',
          data: [56,60,70,78,65],
      }]
  },

  // Configuration options go here
  options: {
      legend: {
          display: false,
      }
     
  }
});
</script>
</body>
</html>