<?php

namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
class StatController extends Controller {

    public function StatAction() {
        $cnx=$this->getDoctrine()->getManager();
        $captures=$cnx->getRepository('applicationBundle:Capture')->findAll();
        $res=array();
        $dates=array();
        foreach($captures as $cle)
        { array_push($res,$cle->getValeurMesure());
       $dt_format=$cle->getDateCapture()->format('Y-m-d');
       
         array_push($dates,$dt_format);
          
            }
           
        $series = array(
        array("name" => "Valeur de tempèrature",  'color' => 'red',  "data" => $res) );
   $categories = $dates;
               

    $ob = new Highchart();
    $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
    $ob->title->text('Changements de température mensuels');
    $ob->xAxis->title(array('text'  => "Mois"))->categories($categories);
    $ob->yAxis->title(array('text'  => "Valeur de température"));
    $ob->series($series);


    return $this->render('applicationBundle:Stat:Stat.html.twig', array('chart' => $ob));
}
}
