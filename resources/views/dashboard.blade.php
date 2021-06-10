@extends('layouts.app')
@section('title','Dashboard')
@section('body')
@php $active = 'dashboard' @endphp
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3>Dashboard</h3>
                <hr>
            </div> 
            <div class="col-4 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">
                        {{$data['assets']}}  
                        </h5>
                        <small class="card-text">
                         Assets 
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">
                        {{$data['supplier']}}  
                        </h5>
                        <small class="card-text">
                        Supplier
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">
                        {{$data['storage']}}  
                        </h5>
                        <small class="card-text">
                        Storage
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-12"></div>
            <div class="col-4">
                <canvas id="total_asset" width="100px" height="100px"></canvas>
            </div>
        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>

 <script>
   var myChart = new Chart(document.getElementById('total_asset').getContext('2d'),{
            type: 'bar',
            data: {
                labels: [
                   'Distributed',
                   'Processing',
                   'Declined'
                
                ],
                datasets: [{
                    label: 'Distribution Assets',

                    data: [
                        {{$data['status'] ['distributed']}},
                        {{$data['status'] ['processing']}},
                        {{$data['status'] ['declined']}}
                    ],
                    backgroundColor: [
                        'green',
                        'blue',
                        'red',
                        

                        
                    ],
                    borderColor: [
                        'green',
                        'blue',
                        'red',
                        
                       
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    
</script>

@endsection
