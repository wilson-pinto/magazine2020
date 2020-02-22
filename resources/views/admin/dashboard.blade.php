@extends('admin.layouts.app')
@section('content')

<div class="col-md-12 mt-2">
     <div class="content-body bg-white shadow px-5 py-4">
          <div class="row px-3 py-2">
               <h4 class="font-primary-medium text-uppercase text-primary">Dashboard</h4>
          </div>
          <div class="row align-items-center">
               <div class="col-md-6">
                    <canvas id="myChart"></canvas>
               </div>
               <div class="col-md-5">
                    <canvas id="myDoughnut"></canvas>
               </div>
          </div>
          <hr class="border-bottom border-secondary mx-1 mt-5">
     </div>
</div>

@stop

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
     var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    
    // The data for our dataset
    data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
    label: 'Page Visits',
    backgroundColor: 'rgb(255, 204, 0)',
    borderColor: 'rgb(255, 170, 0)',
    data: [0, 10, 5, 2, 20, 30, 45]
    }]
    },
    
    // Configuration options go here
    options: {}
    });
</script>

<script>
     var myDoughnut = document.getElementById('myDoughnut').getContext('2d');
var data = {!! $data !!};
new Chart(myDoughnut, {
"type": "doughnut",
"data": data
});
</script>
@stop
