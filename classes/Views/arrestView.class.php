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
                         var piechart_options = {
                            title: 'Top crimes in NFL',
                            width: 400,
                            height: 300
                         };
                         
                         var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
                         piechart.draw(data, piechart_options);

                         var barchart_options = {
                            title: 'Top 10 Crimes in NFL',
                            width: 600,
                            height: 300
                         };
                         var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
                         barchart.draw(data, barchart_options);
                       }

                     </script>
                     <table class='columns' style='margin-top: 60px;'>
                       <tr>
                         <td><div id='piechart_div' style='border: 1px solid #ccc'></div></td>
                         <td><div id='barchart_div' style='border: 1px solid #ccc'></div></td>
                       </tr>
                     </table>
                     <div class='panel-default' style='margin-top: 40px; width: 500px;'>
                       <h4>Search by Player</h4>
                       <form class='form-inline'>
                         <div class='form-group'>
                           <div class='col-sm-12 input-group'>
                             <span class='input-group-addon><i class='fa fa-search'></i></span>
                             <input type='text' class='form-control' id='search' name='search' placeholder='Search by Player name'>
                           </div>
                         </div>
                         <div class='form-group'>
                           <div class='col-sm-4'>
                             <button type='submit' class='btn btn-success'>Search</button>
                           </div>
                         </div 
                     </div>";

      return $this->html;
    }

  }


