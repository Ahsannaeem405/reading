<?php

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit();
}
require ('conn.php');
$a=$end=$time=null;

if(isset($_SESSION['date'])){

    $a=$_SESSION["date"];


}

if(isset($_SESSION['end']))
{

    $end=$_SESSION["end"];

}

if(isset($_SESSION['time']))
{

    $time=$_SESSION["time"];

}
?>

<!DOCTYPE HTML>
<html>
<head>
    <script>

        window.onload = function () {



            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Climate Monitoring Chart - IDF"
                },
                axisX:{

                    valueFormatString: "DD MMM YY HH:mm:ss",

                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true

                    }
                },
                axisY: {
                    title: "IDF",
                    includeZero: true,
                    crosshair: {
                        enabled: true
                    }
                },
                toolTip:{
                    shared:true
                },
                legend:{
                    cursor:"pointer",
                    verticalAlign: "bottom",
                    horizontalAlign: "left",
                    dockInsidePlotArea: true,
                    itemclick: toogleDataSeries
                },
                data:[ <?php



                    function random_color_part() {
                        return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                    }

                    function random_color() {
                        return random_color_part() . random_color_part() . random_color_part();
                    }



                    $sql = "SELECT * FROM sensors_lists where linetick=1 ";
                    $data2= mysqli_query($con,$sql);
                    while  ($result2=mysqli_fetch_array($data2)){
                    $idlast = $result2['id'];

                    if($a==null){
                        $sql1="SELECT * FROM  sensor_detail   where sensor_id=$idlast  ORDER BY ID DESC LIMIT 10";
                        $data1= mysqli_query($con,$sql1);

                    }
                    else{
                        $sql1="SELECT * FROM  sensor_detail   where sensor_id=$idlast AND Date >='$a' AND Date <='$end'  ORDER BY ID DESC LIMIT 10";

                        $data1= mysqli_query($con,$sql1);
                    }
                    ?> {
                    type: "line",
                    showInLegend: true,
                    name: "<?php echo $result2['Sensor_Location'];  ?>",
                    markerType: "square",
                    xValueFormatString: "DD MMM YY HH:mm:ss",
                    color: "#<?php echo random_color(); ?>",
                    dataPoints: [

                        <?php

                        while  ($result3=mysqli_fetch_array($data1))
                        {
                        $datenew=$result3['Date'];
                        $datenew2=$result3['Clock'];

                        $exp = explode("-", $datenew);
                        $a1=$exp[0];
                        $a2=$exp[1]-1;
                        $a3=$exp[2];


                        $exp2 = explode(":", $datenew2);
                        $a11=$exp2[0];
                        $a21=$exp2[1];
                        $a31=$exp2[2];
                        ?>

                        { x: new Date( <?php echo $a1.','.$a2.','.$a3.', '.$a11.','.$a21.','.$a31;  ?>), y: <?php echo $result3['temp'];  ?> },

                        <?php } ?>
                    ]
                },
                    <?php
                    };

                    ?>

                ]
            });

            chart.render();
            function toogleDataSeries(e){
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else{
                    e.dataSeries.visible = true;
                }
                chart.render();
            }


            setInterval(function(){

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:{
                        text: "Climate Monitoring Chart - IDF"
                    },
                    axisX:{

                        valueFormatString: "DD MMM YY HH:mm:ss",

                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true

                        }
                    },
                    axisY: {
                        title: "IDF",
                        includeZero: true,
                        crosshair: {
                            enabled: true
                        }
                    },
                    toolTip:{
                        shared:true
                    },
                    legend:{
                        cursor:"pointer",
                        verticalAlign: "bottom",
                        horizontalAlign: "left",
                        dockInsidePlotArea: true,
                        itemclick: toogleDataSeries
                    },
                    data:[ <?php



                        function random_color_part2() {
                            return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                        }

                        function random_color2() {
                            return random_color_part2() . random_color_part2() . random_color_part2();
                        }



                        $sql = "SELECT * FROM sensors_lists where linetick=1 ";
                        $data2= mysqli_query($con,$sql);
                        while  ($result2=mysqli_fetch_array($data2)){
                        $idlast = $result2['id'];

                        if($a==null){
                            $sql1="SELECT * FROM  sensor_detail   where sensor_id=$idlast  ORDER BY ID DESC LIMIT 10";
                            $data1= mysqli_query($con,$sql1);

                        }
                        else{
                            $sql1="SELECT * FROM  sensor_detail   where sensor_id=$idlast AND Date >='$a' AND Date <='$end'  ORDER BY ID DESC LIMIT 10";

                            $data1= mysqli_query($con,$sql1);
                        }
                        ?> {
                        type: "line",
                        showInLegend: true,
                        name: "<?php echo $result2['Sensor_Location'];  ?>",
                        markerType: "square",
                        xValueFormatString: "DD MMM YY HH:mm:ss",
                        color: "#<?php echo random_color2(); ?>",
                        dataPoints: [

                            <?php

                            while  ($result3=mysqli_fetch_array($data1))
                            {
                            $datenew=$result3['Date'];
                            $datenew2=$result3['Clock'];

                            $exp = explode("-", $datenew);
                            $a1=$exp[0];
                            $a2=$exp[1]-1;
                            $a3=$exp[2];


                            $exp2 = explode(":", $datenew2);
                            $a11=$exp2[0];
                            $a21=$exp2[1];
                            $a31=$exp2[2];
                            ?>

                            { x: new Date( <?php echo $a1.','.$a2.','.$a3.', '.$a11.','.$a21.','.$a31;  ?>), y: <?php echo $result3['temp'];  ?> },

                            <?php } ?>
                        ]
                    },
                        <?php
                        };

                        ?>

                    ]
                });

                chart.render();
                function toogleDataSeries(e){
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else{
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }


                }, 10000);

        }







    </script>
</head>
<body>

<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
