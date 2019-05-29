



<canvas class="escola-despesas"></canvas>



<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

<script>
    var ctx = document.getElementsByClassName('escola-despesas');


    var chartGraph = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                    label: "PAGAMENTO DE FUNCIONÁRIOS",
                    data: [0, 0, 0, 0, 0],
                    borderWidth: 2,
                    borderColor: 'rgba(224, 0, 0)',
                    backgroundColor: 'transparent'
                }]
        },
        options: {
            responsive: true,
            animation: {
                duration: 10000 // general animation time
            },
            title: {
                display: true,
                text: 'DESPESAS DA INSTITUIÇÃO'
            }
        }
    });
</script>

