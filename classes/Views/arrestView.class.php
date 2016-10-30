<?php

  class arrestView extends View {

    public function getHTML() {
      //create the draftOptions view

      $this->html = "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
                     <script type='text/javascript'>
                       google.charts.load('current', {'packages':['corechart']});
                       google.charts.setOnLoadCallback(drawChart);
                       
                       function drawChart() {
                
                         var jsonData = $.ajax({
                             url: 'getData.php',
                             dataType: 'json',
                             async: false
                         }).responseText;
                         
                         var data = new google.visualization.arrayToDataTable(eval(jsonData));
                         var options = {
                            title: 'Top crimes in NFL'
                         };
                         
                         var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                         chart.draw(data, options);
                       }

                     </script>
                     <div id='chart_div'></div>";

      return $this->html;
    }

  }


