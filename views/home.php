<h1>BookDB</h1>
<p>Welcome to the book DB site.</p>

<div style="width=500px;">
    <canvas id="myChartOne"></canvas>
</div>

<div style="width=500px;">
    <canvas id="myChartTwo"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<?php 
$authors=[];
$counts=[];



foreach($booksByAuthor as $item) {
    $authors[]=$item->first_name." ".$item->last_name;
    $counts[]=$item->book_count;
}
$authorsJson=json_encode($authors);
$countsJson=json_encode($counts);
?>
<script>
    const myChartOne=document.getElementById("myChartOne")
        new Chart(myChartOne, {
        type: 'bar',
        data: {
        labels: <?php echo $authorsJson ?>, 
        datasets: [{
            label: '# of Games',
            data: <?php echo $countsJson; ?>,  
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