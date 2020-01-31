<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graphique</title>

        <!-- Fonts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



        <link rel="stylesheet" href="{{mix('/css/app.css')}}">

    </head>

    <body>

<h1>Graphique</h1>

<div class="container">
<canvas id="myChart"></canvas>
</div>

<script>

let myChart = document.getElementById('myChart').getContext('2d');

Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';

let massPopChart = new Chart(myChart,{

type:'bar',
data:{
    labels:['debut','Janvier', 'Fevrier', 'Mars', 'Avril', 'mai', 'Juin'],
    datasets:[{
        label:'note /40',
        data:[0,15,12,20,30,25,15],
        backgroundColor:['green','pink','grey','purple','blue','yellow','black'],

    }]

},
options:{
    title:{
        display:true,
        text:'Ton évolution dans la matière',
        fontSize:25
    },
    legend:{
        position: 'right'
    },
    layout:{
        padding:50,
        right:0,
        bottom:0,
        top:0
    },
    tooltips:{
        //enabled:true
    }
}



});

</script>



    </body>
</html>
