<canvas id="temperatureChart" width="400" height="200"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    var ctx = document.getElementById('temperatureChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [], // Pour les étiquettes de l'axe X
            datasets: [{
                label: 'Températures',
                data: [], // Pour les données de température
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
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

    function fetchDataAndUpdateChart() {
        fetch('/temperatures')
            .then(response => response.json())
            .then(data => {
                // Mettre à jour les données du graphique avec les nouvelles températures
                myChart.data.labels = data.map((_, i) => Temp ${i+1});
                myChart.data.datasets[0].data = data;
                myChart.update();
            });
    }

    // Appeler fetchDataAndUpdateChart toutes les 10 secondes
    setInterval(fetchDataAndUpdateChart, 10000);

    // Appeler fetchDataAndUpdateChart une première fois au chargement de la page
    fetchDataAndUpdateChart();
</script>