<?php
   
   function consume_csv($filename='', $delimiter=','){
    if(!file_exists($filename) || !is_readable($filename) ){
        return false;
    }

    $header = NULL;
    $data = array();
    if( ($handle = fopen($filename, 'r')) !==FALSE ){
       while( ($row = fgetcsv($handle, 1000, $delimiter)) !==FALSE ) {
           if(!$header){
            $header = $row;
           } else{
            $data[] = (object) array_combine($header, $row);
           }
       }
       fclose($handle);
    }
    return $data;
   }

   $data = consume_csv('students_details.csv');

/* 
   echo "<pre>";
   print_r($data);
   echo "</pre>"; */

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos bootcamp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1 class="mt-5 text-center">Datos del bootcamp FSJ20</h1>
    <section class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Enero</th>
                    <th scope="col">Febrero</th>
                    <th scope="col">Marzo</th>
                    <th scope="col">Promedio</th>
                </tr>
            </thead>


            <tbody>
            
                <?php
                    foreach($data as $key=>$value){
                       echo "<tr>";
                        echo "<th scope='row'>". $key+1 ."</th>";
                        echo "<td>". $value->nombres. "</td>";
                        echo "<td>". $value->Enero. "</td>";
                        echo "<td>". $value->Febrero. "</td>";
                        echo "<td>". $value->Marzo. "</td>";
                        // Funcionalidad promedio
                        $promedio = number_format((($value->Enero + $value->Febrero+ $value->Marzo )/3), 2);
                        echo "<td>". $promedio. "</td>";
                       echo  "</tr>";
                    }

                ?>
            </tbody>
        </table>

        <canvas id="myChart"></canvas>

    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
            type: 'bar',
            data: {
                //metodos de ordenamientos 
                labels: <?php 
                   $headers = array_keys((array)$data[0]);
                   array_shift($headers);
                   echo json_encode($headers);
                   
                // echo json_encode(array_keys((array)$data[0])); 
                ?>,
                datasets: [{
                label: 'Promedio',
                data: <?php 

                $val = array_values((array)$data[0]);
                array_shift($val);
                echo json_encode($val);
                // echo json_encode(array_values((array)$data[0])); 
                
                ?>,
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
</body>
</html>
