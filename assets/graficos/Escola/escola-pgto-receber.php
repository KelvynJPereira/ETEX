<canvas class="escola-receber"></canvas>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

<script>
    var ctx = document.getElementsByClassName('escola-receber');


    var chartGraph = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                    label: "MENSALIDADES DE ALUNOS",
                    data: [1, 2, 3, 4, 9, 6, 7, 8, 9, 10, 11, 12],
                    borderWidth: 2,
                    borderColor: 'rgba(23, 221, 79)',
                    backgroundColor: 'transparent'
                },
                {
                    label: "MATRICULAS EFETUADAS",
                    data: [2, 4, 4, 4, 5, 4, 4, 5, 4, 6, 4, 4],
                    borderWidth: 2,
                    borderColor: 'rgba(8, 2, 255)',
                    backgroundColor: 'transparent'
                }

            ]
        },
        options: {
            responsive: true,
            animation: {
                duration: 8000 // general animation time
            },
            title: {
                display: true,
                text: 'PAGAMENTOS A RECEBER'
            }
        }
    });

</script>
