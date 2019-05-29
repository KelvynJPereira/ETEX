<?php

$id_escola_grafico = $_SESSION['id_escola_grafico'];
foreach ($id_escola_grafico as $escola):
    $id_escola_grafico = $escola['id_escola'];
endforeach;

include_once __DIR__ . '/../../../controller/EscolaController.class.php';
$controllerEscola = new EscolaController();
$data = $controllerEscola->quantidadeMatriculas($id_escola_grafico);
if(empty($data['matriculas_efetuadas'])):
    $data['matriculas_efetuadas'] = 0;
endif;

?>

<canvas class="escola-receber"></canvas>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

<script>
    var ctx = document.getElementsByClassName('escola-receber');


    var chartGraph = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                    label: "MATRICULAS EFETUADAS",
                    data: [0, 0, 0, 0, <?php echo $data['matriculas_efetuadas'];?>],
                    borderWidth: 2,
                    borderColor: 'rgba(8, 2, 255)',
                    backgroundColor: 'transparent'
                }

            ]
        },
        options: {
            responsive: true,
            animation: {
                duration: 10000 // general animation time
            },
            title: {
                display: true,
                text: 'PAGAMENTOS A RECEBER'
            }
        }
    });

</script>
