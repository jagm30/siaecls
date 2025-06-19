<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title></title>
    <style>
            /** 
            * Set the margins of the PDF to 0
            * so the background image will cover the entire page.
            **/
            @page {
                margin: 0cm 0cm;
            }

            /**
            * Define the real margins of the content of your PDF
            * Here you will fix the margins of the header and footer
            * Of your background image.
            **/
            body {
                margin-top:    3.5cm;
                margin-bottom: 1cm;
                margin-left:   1cm;
                margin-right:  1cm;
                font-family: "Tahoma", serif;
            }
            table {
               border-collapse: collapse;
               border:1px solid black;
              width: 100%;
            }

            th, td {
              text-align: left;
              padding: 5px;
              border:1px solid black;
            }

            /*tr:nth-child(even){background-color: #f2f2f2}*/

            th {
              background-color: #ECEDED;
              color: black;
            }
            /** 
            * Define the width, height, margins and position of the watermark.
            **/
            #watermark {
                position: fixed;
                bottom:   0px;
                left:     0px;
                top:     0px;
                /** The width and height may change 
                    according to the dimensions of your letterhead
                **/
                width:    21cm;
                height:   28cm;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
            }
            div.page_break{
                page-break-before: always;
            }
        </style>
</head>
<body>
     <div id="watermark">
             <img src="{{ public_path().'/img/fondo_boletin.jpg' }}" width="100%" height="100%">
        </div>

        <main> 

        @foreach($rows as $row)
        <div id="contenido" class="contenido">
            <!-- Encabezado-->
           
        	<p style=" top: 62px;left: 275px; height:15px; width:300px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; "> {{$row->NOMBRE}}</p>
            <p style=" top: 104px;left: 278px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">2°A</p>
            <p style=" top: 104px;left: 371px; height:15px; width:105px;  text-align: center;  position: absolute;font-weight: bold;font-size: 11px; color:black; background:none; ">  PREPARATORIA</p>
            <p style=" top: 101px;left: 476px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 10px; color:black; background:none; ">  2024-2025<br>SEMESTRE PAR</p>

            <!-- Calificaciones-- 1er parcial -->
            <p style=" top: 257px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESP1<=5) color:red; @endif">{{$row->INGLESP1}}</p>
            <p style=" top: 288px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONHISP1<=5) color:red; @endif">{{$row->CONHISP1}}</p>
            <p style=" top: 319px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->RQP1<=5) color:red; @endif">{{$row->RQP1}}</p>
            <p style=" top: 349px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CSOC3P1<=5) color:red; @endif">{{$row->CSOC3P1}}</p>
            <p style=" top: 380px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TSMP1<=5) color:red; @endif">{{$row->TSMP1}}</p>
            <p style=" top: 410px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGP1<=5) color:red; @endif">{{$row->TCULDIGP1}}</p>
            <p style=" top: 440px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCP1<=5) color:red; @endif">{{$row->ESPSOCP1}}</p>
            <p style=" top: 470px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITP1<=5) color:red; @endif">{{$row->PLITP1}}</p>
            <p style=" top: 515px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABP1<=5) color:red; @endif">{{$row->S3FLABP1}}</p>
            <p style=" top: 545px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABP1<=5) color:red; @endif">{{$row->S4FLABP1}}</p>
            <p style=" top: 575px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDP1<=5) color:red; @endif">{{$row->ORIEDP1}}</p>
            <p style=" top: 605px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULP1<=5) color:red; @endif">{{$row->CCULP1}}</p>
            <p style=" top: 637px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPP1<=5) color:red; @endif">{{$row->CDEPP1}}</p>
            <p style=" top: 667px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALP1<=5) color:red; @endif">{{$row->FORVALP1}}</p>
            <p style=" top: 698px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPP1<=5) color:red; @endif">{{$row->DISCPP1}}</p>
           
        <!-- Inasistencias 1er parcial -->
            <p style=" top: 257px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->INGLESP1I}}</p>
            <p style=" top: 288px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CONHISP1I}}</p>
            <p style=" top: 319px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->RQP1I}}</p>
            <p style=" top: 349px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CSOC3P1I}}</p>
            <p style=" top: 380px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TSMP1I}}</p>
            <p style=" top: 410px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TCULDIGP1I}}</p>
            <p style=" top: 440px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP1I}}</p>
            <p style=" top: 470px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PLITP1I}}</p>
            <p style=" top: 515px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S3FLABP1I}}</p>
            <p style=" top: 545px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S4FLABP1I}}</p>
            <p style=" top: 575px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDP1I}}</p>
            <p style=" top: 605px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CCULP1I}}</p>
            <p style=" top: 637px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CDEPP1I}}</p>
            <p style=" top: 667px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORVALP1I}}</p>
            <p style=" top: 698px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCPP1I}}</p>


             <!-- Calificaciones-- 2do parcial -->
            <p style=" top: 257px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESP2<=5) color:red; @endif ">{{$row->INGLESP2}}</p>
            <p style=" top: 288px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONHISP2<=5) color:red; @endif ">{{$row->CONHISP2}}</p>
            <p style=" top: 319px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->RQP2<=5) color:red; @endif ">{{$row->RQP2}}</p>
            <p style=" top: 349px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CSOC3P2<=5) color:red; @endif ">{{$row->CSOC3P2}}</p>
            <p style=" top: 380px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TSMP2<=5) color:red; @endif ">{{$row->TSMP2}}</p>
            <p style=" top: 410px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGP2<=5) color:red; @endif ">{{$row->TCULDIGP2}}</p>
            <p style=" top: 440px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCP2<=5) color:red; @endif ">{{$row->ESPSOCP2}}</p>
            <p style=" top: 470px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITP2<=5) color:red; @endif ">{{$row->PLITP2}}</p>
            <p style=" top: 515px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABP2<=5) color:red; @endif ">{{$row->S3FLABP2}}</p>
            <p style=" top: 545px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABP2<=5) color:red; @endif ">{{$row->S4FLABP2}}</p>
            <p style=" top: 575px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDP2<=5) color:red; @endif ">{{$row->ORIEDP2}}</p>
            <p style=" top: 605px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULP2<=5) color:red; @endif ">{{$row->CCULP2}}</p>
            <p style=" top: 637px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPP2<=5) color:red; @endif ">{{$row->CDEPP2}}</p>
            <p style=" top: 667px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALP2<=5) color:red; @endif ">{{$row->FORVALP2}}</p>
            <p style=" top: 698px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPP2<=5) color:red; @endif ">{{$row->DISCPP2}}</p>
        <!-- Inasistencias 2do parcial -->
            <p style=" top: 257px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->INGLESP2I}}</p>
            <p style=" top: 288px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CONHISP2I}}</p>
            <p style=" top: 319px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->RQP2I}}</p>
            <p style=" top: 349px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CSOC3P2}}</p>
            <p style=" top: 380px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TSMP2I}}</p>
            <p style=" top: 410px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TCULDIGP2I}}</p>
            <p style=" top: 440px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP2I}}</p>
            <p style=" top: 470px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP2I}}</p>
            <p style=" top: 515px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S3FLABP2I}}</p>
            <p style=" top: 545px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S4FLABP2I}}</p>
            <p style=" top: 575px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDP2I}}</p>
            <p style=" top: 605px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CCULP2I}}</p>
            <p style=" top: 637px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CDEPP2I}}</p>
            <p style=" top: 667px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORVALP2I}}</p>
            <p style=" top: 698px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCPP2I}}</p>    

            <!-- Calificaciones-- 3er parcial -->
            <p style=" top: 257px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESP3<=5) color:red; @endif ">{{$row->INGLESP3}}</p>
            <p style=" top: 288px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONHISP3<=5) color:red; @endif ">{{$row->CONHISP3}}</p>
            <p style=" top: 319px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->RQP3<=5) color:red; @endif ">{{$row->RQP3}}</p>
            <p style=" top: 349px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CSOC3P3<=5) color:red; @endif ">{{$row->CSOC3P3}}</p>
            <p style=" top: 380px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TSMP3<=5) color:red; @endif ">{{$row->TSMP3}}</p>
            <p style=" top: 410px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGP3<=5) color:red; @endif ">{{$row->TCULDIGP3}}</p>
            <p style=" top: 440px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCP3<=5) color:red; @endif ">{{$row->ESPSOCP3}}</p>
            <p style=" top: 470px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITP3<=5) color:red; @endif ">{{$row->PLITP3}}</p>
            <p style=" top: 515px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABP3<=5) color:red; @endif ">{{$row->S3FLABP3}}</p>
            <p style=" top: 545px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABP3<=5) color:red; @endif ">{{$row->S4FLABP3}}</p>
            <p style=" top: 575px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDP3<=5) color:red; @endif ">{{$row->ORIEDP3}}</p>
            <p style=" top: 605px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULP3<=5) color:red; @endif ">{{$row->CCULP3}}</p>
            <p style=" top: 637px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPP3<=5) color:red; @endif ">{{$row->CDEPP3}}</p>
            <p style=" top: 667px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALP3<=5) color:red; @endif ">{{$row->FORVALP3}}</p>
            <p style=" top: 698px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPP3<=5) color:red; @endif ">{{$row->DISCPP3}}</p>
        <!-- Inasistencias 3er parcial -->
            <p style=" top: 257px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->INGLESP3I}}</p>
            <p style=" top: 288px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CONHISPI}}</p>
            <p style=" top: 319px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->RQP3I}}</p>
            <p style=" top: 349px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CSOC3P3I}}</p>
            <p style=" top: 380px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TSMP3I}}</p>
            <p style=" top: 410px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TCULDIGP3I}}</p>
            <p style=" top: 440px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP3I}}</p>
            <p style=" top: 470px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PLITP3I}}</p>
            <p style=" top: 515px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S3FLABP3I}}</p>
            <p style=" top: 545px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S4FLABP3I}}</p>
            <p style=" top: 575px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDP3I}}</p>
            <p style=" top: 605px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CCULP3I}}</p>
            <p style=" top: 637px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CDEPP3I}}</p>
            <p style=" top: 667px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORVALP3I}}</p>
            <p style=" top: 698px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCPP3I}}</p>  

            <!-- Calificaciones-- promedio -->
            <p style=" top: 257px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESPROM<=5) color:red; @endif ">{{$row->INGLESPROM}}</p>
            <p style=" top: 288px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONHISPROM<=5) color:red; @endif ">{{$row->CONHISPROM}}</p>
            <p style=" top: 319px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->RQPROM<=5) color:red; @endif ">{{$row->RQPROM}}</p>
            <p style=" top: 349px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CSOC3PROM<=5) color:red; @endif ">{{$row->CSOC3PROM}}</p>
            <p style=" top: 380px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TSMPROM<=5) color:red; @endif ">{{$row->TSMPROM}}</p>
            <p style=" top: 410px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGPROM<=5) color:red; @endif ">{{$row->TCULDIGPROM}}</p>
            <p style=" top: 440px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCPROM<=5) color:red; @endif ">{{$row->ESPSOCPROM}}</p>
            <p style=" top: 470px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITPROM<=5) color:red; @endif ">{{$row->PLITPROM}}</p>
            <p style=" top: 515px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABPROM<=5) color:red; @endif ">{{$row->S3FLABPROM}}</p>
            <p style=" top: 545px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABPROM<=5) color:red; @endif ">{{$row->S4FLABPROM}}</p>
            <p style=" top: 575px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDPROM<=5) color:red; @endif ">{{$row->ORIEDPROM}}</p>
            <p style=" top: 605px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULPROM<=5) color:red; @endif ">{{$row->CCULPROM}}</p>
            <p style=" top: 637px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPPROM<=5) color:red; @endif ">{{$row->CDEPPROM}}</p>
            <p style=" top: 667px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALPROM<=5) color:red; @endif ">{{$row->FORVALPROM}}</p>
            <p style=" top: 698px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPPROM<=5) color:red; @endif ">{{$row->DISCPPROM}}</p>

            <!-- Calificaciones-- Calificacion Final -->
            <p style=" top: 257px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->LyCIICF<=5) color:red; @endif ">{{$row->LyCIICF}}</p>
            <p style=" top: 288px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESIICF<=5) color:red; @endif ">{{$row->INGLESIICF}}</p>
            <p style=" top: 319px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PENMATCF<=5) color:red; @endif ">{{$row->PENMATCF}}</p>
            <p style=" top: 349px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CULTDIGCF<=5) color:red; @endif ">{{$row->CULTDIGCF}}</p>
            <p style=" top: 380px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONSMATCF<=5) color:red; @endif ">{{$row->CONSMATCF}}</p>
            <p style=" top: 410px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HUMANCF<=5) color:red; @endif ">{{$row->HUMANCF}}</p>
            <p style=" top: 440px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CIENSOCCF<=5) color:red; @endif ">{{$row->CIENSOCCF}}</p>
            <p style=" top: 470px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCIENCIACF<=5) color:red; @endif ">{{$row->TCIENCIACF}}</p>
            <p style=" top: 515px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->OEDUCF<=5) color:red; @endif ">{{$row->OEDUCF}}</p>
            <p style=" top: 545px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->EYAACF<=5) color:red; @endif ">{{$row->EYAACF}}</p>
            <p style=" top: 575px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->AFYDCF<=5) color:red; @endif ">{{$row->AFYDCF}}</p>
            <p style=" top: 605px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FRANCESCF<=5) color:red; @endif ">{{$row->FRANCESCF}}</p>
            <p style=" top: 637px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PPSLSCF<=5) color:red; @endif ">{{$row->PPSLSCF}}</p>
            <p style=" top: 667px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMFECF<=5) color:red; @endif ">{{$row->FORMFECF}}</p>
            <p style=" top: 698px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCIPLINACF<=5) color:red; @endif ">{{$row->DISCIPLINACF}}</p>

            <!-- Calificaciones-- Calificacion extra1 -->
            <p style=" top: 257px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->LyCIIEXT1<=5) color:red; @endif ">{{$row->LyCIIEXT1}}</p>
            <p style=" top: 288px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESIIEXT1<=5) color:red; @endif ">{{$row->INGLESIIEXT1}}</p>
            <p style=" top: 319px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PENMATEXT1<=5) color:red; @endif ">{{$row->PENMATEXT1}}</p>
            <p style=" top: 349px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CULTDIGEXT1<=5) color:red; @endif ">{{$row->CULTDIGEXT1}}</p>
            <p style=" top: 380px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONSMATEXT1<=5) color:red; @endif ">{{$row->CONSMATEXT1}}</p>
            <p style=" top: 410px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HUMANEXT1<=5) color:red; @endif ">{{$row->HUMANEXT1}}</p>
            <p style=" top: 440px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CIENSOCEXT1<=5) color:red; @endif ">{{$row->CIENSOCEXT1}}</p>
            <p style=" top: 470px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCIENCIAEXT1<=5) color:red; @endif ">{{$row->TCIENCIAEXT1}}</p>
            <p style=" top: 515px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->OEDUEXT1<=5) color:red; @endif ">{{$row->OEDUEXT1}}</p>
            <p style=" top: 545px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->EYAAEXT1<=5) color:red; @endif ">{{$row->EYAAEXT1}}</p>
            <p style=" top: 575px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->AFYDEXT1<=5) color:red; @endif ">{{$row->AFYDEXT1}}</p>
            <p style=" top: 605px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FRANCESEXT1<=5) color:red; @endif ">{{$row->FRANCESEXT1}}</p>
            <p style=" top: 637px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PPSLSEXT1<=5) color:red; @endif ">{{$row->PPSLSEXT1}}</p>
            <p style=" top: 667px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMFEEXT1<=5) color:red; @endif ">{{$row->FORMFEEXT1}}</p>
            <p style=" top: 698px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCIPLINAEXT1<=5) color:red; @endif ">{{$row->DISCIPLINAEXT1}}</p>

            <!-- Calificaciones-- Calificacion extra2 -->
            <p style=" top: 257px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->LyCIIEXT2<=5) color:red; @endif ">{{$row->LyCIIEXT2}}</p>
            <p style=" top: 288px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESIIEXT2<=5) color:red; @endif ">{{$row->INGLESIIEXT2}}</p>
            <p style=" top: 319px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PENMATEXT2<=5) color:red; @endif ">{{$row->PENMATEXT2}}</p>
            <p style=" top: 349px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CULTDIGEXT2<=5) color:red; @endif ">{{$row->CULTDIGEXT2}}</p>
            <p style=" top: 380px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONSMATEXT2<=5) color:red; @endif ">{{$row->CONSMATEXT2}}</p>
            <p style=" top: 410px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HUMANEXT2<=5) color:red; @endif ">{{$row->HUMANEXT2}}</p>
            <p style=" top: 440px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CIENSOCEXT2<=5) color:red; @endif ">{{$row->CIENSOCEXT2}}</p>
            <p style=" top: 470px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCIENCIAEXT2<=5) color:red; @endif ">{{$row->TCIENCIAEXT2}}</p>
            <p style=" top: 515px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->OEDUEXT2<=5) color:red; @endif ">{{$row->OEDUEXT2}}</p>
            <p style=" top: 545px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->EYAAEXT2<=5) color:red; @endif ">{{$row->EYAAEXT2}}</p>
            <p style=" top: 575px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->AFYDEXT2<=5) color:red; @endif ">{{$row->AFYDEXT2}}</p>
            <p style=" top: 605px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FRANCESEXT2<=5) color:red; @endif ">{{$row->FRANCESEXT2}}</p>
            <p style=" top: 637px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PPSLSEXT2<=5) color:red; @endif ">{{$row->PPSLSEXT2}}</p>
            <p style=" top: 667px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMFEEXT2<=5) color:red; @endif ">{{$row->FORMFEEXT2}}</p>
            <p style=" top: 698px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCIPLINAEXT2<=5) color:red; @endif ">{{$row->DISCIPLINAEXT2}}</p>

            
          <!-- Calificaciones-- y promedios secretaria-->
            <p style=" top: 745px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP1}}</p>
            <p style=" top: 745px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP2}}</p>
            <p style=" top: 745px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP3}}</p>

            <!-- Calificaciones-- y promedios institucional-->
            <p style=" top: 775px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP1}}</p>
            <p style=" top: 775px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP2}}</p>
            <p style=" top: 775px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP3}}</p>
            
        
        </div>
        <div class="page_break"></div>
        @endforeach
            

        </main> 

        <!--<br><table style='page-break-after:always;'></br></table><br>   //Salto de pagina -->
</body>
</body>
</html>