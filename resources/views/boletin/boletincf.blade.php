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
             <img src="{{ public_path().'/img/fondo_boletincfm.jpg' }}" width="100%" height="100%">
        </div>

        <main> 

        @foreach($rows as $row)
        <div id="contenido" class="contenido">
            <!-- Encabezado-->
           
        	<p style=" top: 62px;left: 275px; height:15px; width:300px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; "> {{$row->NOMBRE}}</p>
            <p style=" top: 104px;left: 278px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">6</p>
            <p style=" top: 104px;left: 371px; height:15px; width:105px;  text-align: center;  position: absolute;font-weight: bold;font-size: 11px; color:black; background:none; ">  PREPARATORIA</p>
            <p style=" top: 101px;left: 476px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 10px; color:black; background:none; ">  2024-2025<br>SEMESTRE PAR</p>

            <!-- Calificaciones-- 1er parcial -->
            <p style=" top: 257px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIP1<=5) color:red; @endif">{{$row->MATVIP1}}</p>
            <p style=" top: 288px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIP1<=5) color:red; @endif">{{$row->ESTADISCIIP1}}</p>
            <p style=" top: 319px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DIBTECP1<=5) color:red; @endif">{{$row->DIBTECP1}}</p>
            <p style=" top: 349px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->LABIINFORP1<=5) color:red; @endif">{{$row->LABIINFORP1}}</p>
            <p style=" top: 380px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVP1<=5) color:red; @endif">{{$row->FISICAIVP1}}</p>
            <p style=" top: 410px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMVIP1<=5) color:red; @endif">{{$row->QUIMVIP1}}</p>
            <p style=" top: 440px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CIENYTECP1<=5) color:red; @endif">{{$row->CIENYTECP1}}</p>
            <p style=" top: 470px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOLOGIAP1<=5) color:red; @endif">{{$row->PSICOLOGIAP1}}</p>
            <p style=" top: 500px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CAPTRABP1<=5) color:red; @endif">{{$row->CAPTRABP1}}</p>
            <p style=" top: 530px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CULTURALP1<=5) color:red; @endif">{{$row->CULTURALP1}}</p>
            <p style=" top: 575px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DEPORTIVOP1<=5) color:red; @endif">{{$row->DEPORTIVOP1}}</p>
            <p style=" top: 605px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMFEP1<=5) color:red; @endif">{{$row->FORMFEP1}}</p>
            <p style=" top: 637px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUCP1<=5) color:red; @endif">{{$row->ORIEDUCP1}}</p>
            <p style=" top: 667px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCIPLINAP1<=5) color:red; @endif">{{$row->DISCIPLINAP1}}</p>

            <!-- Inasistencias 1er parcial -->
            <p style=" top: 257px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->MATVIP1I}}</p>
            <p style=" top: 288px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTADISCIIP1I}}</p>
            <p style=" top: 319px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DIBTECP1I}}</p>
            <p style=" top: 349px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->LABIINFORP1I}}</p>
            <p style=" top: 380px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FISICAIVP1I}}</p>
            <p style=" top: 410px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->QUIMVIP1I}}</p>
            <p style=" top: 440px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CIENYTECP1I}}</p>
            <p style=" top: 470px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PSICOLOGIAP1I}}</p>
            <p style=" top: 500px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CAPTRABP1I}}</p>
            <p style=" top: 530px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CULTURALP1I}}</p>
            <p style=" top: 575px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DEPORTIVOP1I}}</p>
            <p style=" top: 605px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORMFEP1I}}</p>
            <p style=" top: 637px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDUCP1I}}</p>
            <p style=" top: 667px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCIPLINAP1I}}</p>



             <!-- Calificaciones-- 2do parcial -->
            <p style=" top: 257px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIP2<=5) color:red; @endif ">{{$row->MATVIP2}}</p>
            <p style=" top: 288px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIP2<=5) color:red; @endif ">{{$row->ESTADISCIIP2}}</p>
            <p style=" top: 319px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DIBTECP2<=5) color:red; @endif ">{{$row->DIBTECP2}}</p>
            <p style=" top: 349px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->LABIINFORP2<=5) color:red; @endif ">{{$row->LABIINFORP2}}</p>
            <p style=" top: 380px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVP2<=5) color:red; @endif ">{{$row->FISICAIVP2}}</p>
            <p style=" top: 410px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMVIP2<=5) color:red; @endif ">{{$row->QUIMVIP2}}</p>
            <p style=" top: 440px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CIENYTECP2<=5) color:red; @endif ">{{$row->CIENYTECP2}}</p>
            <p style=" top: 470px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOLOGIAP2<=5) color:red; @endif ">{{$row->PSICOLOGIAP2}}</p>
            <p style=" top: 500px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CAPTRABP2<=5) color:red; @endif ">{{$row->CAPTRABP2}}</p>
            <p style=" top: 530px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CULTURALP2<=5) color:red; @endif ">{{$row->CULTURALP2}}</p>
            <p style=" top: 575px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DEPORTIVOP2<=5) color:red; @endif ">{{$row->DEPORTIVOP2}}</p>
            <p style=" top: 605px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMFEP2<=5) color:red; @endif ">{{$row->FORMFEP2}}</p>
            <p style=" top: 637px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUCP2<=5) color:red; @endif ">{{$row->ORIEDUCP2}}</p>
            <p style=" top: 667px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCIPLINAP1<=5) color:red; @endif ">{{$row->DISCIPLINAP1}}</p>


            <!-- Inasistencias 2do parcial -->
            <p style=" top: 257px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->MATVIP2I}}</p>
            <p style=" top: 288px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTADISCIIP2I}}</p>
            <p style=" top: 319px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DIBTECP2I}}</p>
            <p style=" top: 349px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->LABIINFORP2I}}</p>
            <p style=" top: 380px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FISICAIVP2I}}</p>
            <p style=" top: 410px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->QUIMVIP2I}}</p>
            <p style=" top: 440px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CIENYTECP2I}}</p>
            <p style=" top: 470px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PSICOLOGIAP2I}}</p>
            <p style=" top: 500px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CAPTRABP2I}}</p>
            <p style=" top: 530px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CULTURALP2I}}</p>
            <p style=" top: 575px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DEPORTIVOP2I}}</p>
            <p style=" top: 605px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORMFEP2I}}</p>
            <p style=" top: 637px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDUCP2I}}</p>
            <p style=" top: 667px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCIPLINAP1I}}</p>

            <!-- Calificaciones-- 3er parcial -->
            <p style=" top: 257px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIP3<=5) color:red; @endif ">{{$row->MATVIP3}}</p>
            <p style=" top: 288px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DIBTECP3<=5) color:red; @endif ">{{$row->DIBTECP3}}</p>
            <p style=" top: 319px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->LABIINFORP3<=5) color:red; @endif ">{{$row->LABIINFORP3}}</p>
            <p style=" top: 349px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVP3<=5) color:red; @endif ">{{$row->FISICAIVP3}}</p>
            <p style=" top: 380px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMVIP3<=5) color:red; @endif ">{{$row->QUIMVIP3}}</p>
            <p style=" top: 410px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CIENYTECP3<=5) color:red; @endif ">{{$row->CIENYTECP3}}</p>
            <p style=" top: 440px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOLOGIAP3<=5) color:red; @endif ">{{$row->PSICOLOGIAP3}}</p>
            <p style=" top: 470px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CAPTRABP3<=5) color:red; @endif ">{{$row->CAPTRABP3}}</p>
            <p style=" top: 500px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CULTURALP3<=5) color:red; @endif ">{{$row->CULTURALP3}}</p>
            <p style=" top: 530px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DEPORTIVOP3<=5) color:red; @endif ">{{$row->DEPORTIVOP3}}</p>
            <p style=" top: 575px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMFEP3<=5) color:red; @endif ">{{$row->FORMFEP3}}</p>
            <p style=" top: 605px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMFEP3<=5) color:red; @endif ">{{$row->CCULP3}}</p>
            <p style=" top: 637px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPP3<=5) color:red; @endif ">{{$row->CDEPP3}}</p>
            <p style=" top: 667px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALP3<=5) color:red; @endif ">{{$row->FORVALP3}}</p>
            <p style=" top: 698px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPP3<=5) color:red; @endif ">{{$row->DISCPP3}}</p>
        <!-- Inasistencias 3er parcial -->
            <p style=" top: 257px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->INGLESP3I}}</p>
            <p style=" top: 288px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CONHISP3I}}</p>
            <p style=" top: 319px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->RQP3I}}</p>
            <p style=" top: 349px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CSOC3P3I}}</p>
            <p style=" top: 380px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TSMP3I}}</p>
            <p style=" top: 410px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TCULDIGP3I}}</p>
            <p style=" top: 440px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP3I}}</p>
            <p style=" top: 470px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PLITP3I}}</p>
            <p style=" top: 500px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S3FLABP3I}}</p>
            <p style=" top: 530px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S4FLABP3I}}</p>
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
            <p style=" top: 500px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABPROM<=5) color:red; @endif ">{{$row->S3FLABPROM}}</p>
            <p style=" top: 530px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABPROM<=5) color:red; @endif ">{{$row->S4FLABPROM}}</p>
            <p style=" top: 575px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDPROM<=5) color:red; @endif ">{{$row->ORIEDPROM}}</p>
            <p style=" top: 605px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULPROM<=5) color:red; @endif ">{{$row->CCULPROM}}</p>
            <p style=" top: 637px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPPROM<=5) color:red; @endif ">{{$row->CDEPPROM}}</p>
            <p style=" top: 667px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALPROM<=5) color:red; @endif ">{{$row->FORVALPROM}}</p>
            <p style=" top: 698px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPPROM<=5) color:red; @endif ">{{$row->DISCPPROM}}</p>

            <!-- Calificaciones-- Calificacion Final -->
            <p style=" top: 257px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESCF<=5) color:red; @endif ">{{$row->INGLESCF}}</p>
            <p style=" top: 288px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONHISCF<=5) color:red; @endif ">{{$row->CONHISCF}}</p>
            <p style=" top: 319px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->RQCF<=5) color:red; @endif ">{{$row->RQCF}}</p>
            <p style=" top: 349px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CSOCCF<=5) color:red; @endif ">{{$row->CSOCCF}}</p>
            <p style=" top: 380px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TSMCF<=5) color:red; @endif ">{{$row->TSMCF}}</p>
            <p style=" top: 410px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGCF<=5) color:red; @endif ">{{$row->TCULDIGCF}}</p>
            <p style=" top: 440px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCCF<=5) color:red; @endif ">{{$row->ESPSOCCF}}</p>
            <p style=" top: 470px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITCF<=5) color:red; @endif ">{{$row->PLITCF}}</p>
            <p style=" top: 500px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABCF<=5) color:red; @endif ">{{$row->S3FLABCF}}</p>
            <p style=" top: 530px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABCF<=5) color:red; @endif ">{{$row->S4FLABCF}}</p>
            <p style=" top: 575px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDCF<=5) color:red; @endif ">{{$row->ORIEDCF}}</p>
            <p style=" top: 605px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULCF<=5) color:red; @endif ">{{$row->CCULCF}}</p>
            <p style=" top: 637px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPCF<=5) color:red; @endif ">{{$row->CDEPCF}}</p>
            <p style=" top: 667px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALCF<=5) color:red; @endif ">{{$row->FORVALCF}}</p>
            <p style=" top: 698px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPCF<=5) color:red; @endif ">{{$row->DISCPCF}}</p>

            <!-- Calificaciones-- Calificacion extra1 -->
            <p style=" top: 257px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESEXT1<=5) color:red; @endif ">{{$row->INGLESEXT1}}</p>
            <p style=" top: 288px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONHISEXT1<=5) color:red; @endif ">{{$row->CONHISEXT1}}</p>
            <p style=" top: 319px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->RQEXT1<=5) color:red; @endif ">{{$row->RQEXT1}}</p>
            <p style=" top: 349px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CSOC3EXT1<=5) color:red; @endif ">{{$row->CSOC3EXT1}}</p>
            <p style=" top: 380px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TSMEXT1<=5) color:red; @endif ">{{$row->TSMEXT1}}</p>
            <p style=" top: 410px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGEXT1<=5) color:red; @endif ">{{$row->TCULDIGEXT1}}</p>
            <p style=" top: 440px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCEXT1<=5) color:red; @endif ">{{$row->ESPSOCEXT1}}</p>
            <p style=" top: 470px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITEXT1<=5) color:red; @endif ">{{$row->PLITEXT1}}</p>
            <p style=" top: 500px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABEXT1<=5) color:red; @endif ">{{$row->S3FLABEXT1}}</p>
            <p style=" top: 530px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABEXT1<=5) color:red; @endif ">{{$row->S4FLABEXT1}}</p>
            <p style=" top: 575px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDEXT1<=5) color:red; @endif ">{{$row->ORIEDEXT1}}</p>
            <p style=" top: 605px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULEXT1<=5) color:red; @endif ">{{$row->CCULEXT1}}</p>
            <p style=" top: 637px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPEXT1<=5) color:red; @endif ">{{$row->CDEPEXT1}}</p>
            <p style=" top: 667px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALEXT1<=5) color:red; @endif ">{{$row->FORVALEXT1}}</p>
            <p style=" top: 698px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPEXT1<=5) color:red; @endif ">{{$row->DISCPEXT1}}</p>

            <!-- Calificaciones-- Calificacion extra2 -->
            <p style=" top: 257px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGLESEXT2<=5) color:red; @endif ">{{$row->INGLESEXT2}}</p>
            <p style=" top: 288px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CONHISEXT2<=5) color:red; @endif ">{{$row->CONHISEXT2}}</p>
            <p style=" top: 319px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->RQEXT2<=5) color:red; @endif ">{{$row->RQEXT2}}</p>
            <p style=" top: 349px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CSOC3EXT2<=5) color:red; @endif ">{{$row->CSOC3EXT2}}</p>
            <p style=" top: 380px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TSMEXT2<=5) color:red; @endif ">{{$row->TSMEXT2}}</p>
            <p style=" top: 410px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGEXT2<=5) color:red; @endif ">{{$row->TCULDIGEXT2}}</p>
            <p style=" top: 440px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCEXT2<=5) color:red; @endif ">{{$row->ESPSOCEXT2}}</p>
            <p style=" top: 470px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITEXT2<=5) color:red; @endif ">{{$row->PLITEXT2}}</p>
            <p style=" top: 500px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABEXT2<=5) color:red; @endif ">{{$row->S3FLABEXT2}}</p>
            <p style=" top: 530px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABEXT2<=5) color:red; @endif ">{{$row->S4FLABEXT2}}</p>
            <p style=" top: 575px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDEXT2<=5) color:red; @endif ">{{$row->ORIEDEXT2}}</p>
            <p style=" top: 605px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULEXT2<=5) color:red; @endif ">{{$row->CCULEXT2}}</p>
            <p style=" top: 637px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPEXT2<=5) color:red; @endif ">{{$row->CDEPEXT2}}</p>
            <p style=" top: 667px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALEXT2<=5) color:red; @endif ">{{$row->FORVALEXT2}}</p>
            <p style=" top: 698px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPEXT2<=5) color:red; @endif ">{{$row->DISCPEXT2}}</p>


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