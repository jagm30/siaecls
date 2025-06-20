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
             <img src="{{ public_path().'/img/fondo_boletincqb.jpg' }}" width="100%" height="100%">
        </div>

        <main>

        @foreach($rows as $row)
        <div id="contenido" class="contenido">
            <!-- Encabezado-->

        	<p style=" top: 62px;left: 275px; height:15px; width:300px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; "> {{$row->NOMBRE}}</p>
            <p style=" top: 104px;left: 278px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">6°QB</p>
            <p style=" top: 104px;left: 371px; height:15px; width:105px;  text-align: center;  position: absolute;font-weight: bold;font-size: 11px; color:black; background:none; ">  PREPARATORIA</p>
            <p style=" top: 101px;left: 476px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 10px; color:black; background:none; ">  2024-2025<br>SEMESTRE PAR</p>

            <!-- Calificaciones-- 1er parcial -->
            <p style=" top: 257px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIP1<=5) color:red; @endif">{{$row->MATVIP1}}</p>
            <p style=" top: 288px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIP1<=5) color:red; @endif">{{$row->ESTADISCIIP1}}</p>
            <p style=" top: 319px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVP1<=5) color:red; @endif">{{$row->FISICAIVP1}}</p>
            <p style=" top: 349px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMICAIVP1<=5) color:red; @endif">{{$row->QUIMICAIVP1}}</p>
            <p style=" top: 380px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->BIOLOGIAIIIP1<=5) color:red; @endif">{{$row->BIOLOGIAIIIP1}}</p>
            <p style=" top: 410px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGP1<=5) color:red; @endif">{{$row->TCULDIGP1}}</p>
            <p style=" top: 440px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCP1<=5) color:red; @endif">{{$row->ESPSOCP1}}</p>
            <p style=" top: 470px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITP1<=5) color:red; @endif">{{$row->PLITP1}}</p>
            <p style=" top: 515px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABP1<=5) color:red; @endif">{{$row->S3FLABP1}}</p>
            <p style=" top: 545px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABP1<=5) color:red; @endif">{{$row->S4FLABP1}}</p>
            <p style=" top: 575px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDP1<=5) color:red; @endif">{{$row->ORIEDP1}}</p>
            <p style=" top: 605px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULP1<=5) color:red; @endif">{{$row->CCULP1}}</p>
            <p style=" top: 637px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPP1<=5) color:red; @endif">{{$row->CDEPP1}}</p>
            <p style=" top: 667px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALP1<=5) color:red; @endif">{{$row->FORVALP1}}</p>
            
        <!-- Inasistencias 1er parcial -->
            <p style=" top: 257px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->MATVIP1I}}</p>
            <p style=" top: 288px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTADISCIIP1I}}</p>
            <p style=" top: 319px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FISICAIVP1I}}</p>
            <p style=" top: 349px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->QUIMICAIVP1I}}</p>
            <p style=" top: 380px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->BIOLOGIAIIIP1I}}</p>
            <p style=" top: 410px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TCULDIGP1I}}</p>
            <p style=" top: 440px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP1I}}</p>
            <p style=" top: 470px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PLITP1I}}</p>
            <p style=" top: 515px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S3FLABP1I}}</p>
            <p style=" top: 545px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S4FLABP1I}}</p>
            <p style=" top: 575px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDP1I}}</p>
            <p style=" top: 605px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CCULP1I}}</p>
            <p style=" top: 637px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CDEPP1I}}</p>
            <p style=" top: 667px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORVALP1I}}</p>
            


             <!-- Calificaciones-- 2do parcial -->
            <p style=" top: 257px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIP2<=5) color:red; @endif ">{{$row->MATVIP2}}</p>
            <p style=" top: 288px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIP2<=5) color:red; @endif ">{{$row->ESTADISCIIP2}}</p>
            <p style=" top: 319px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVP2<=5) color:red; @endif ">{{$row->FISICAIVP2}}</p>
            <p style=" top: 349px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMICAIVP2<=5) color:red; @endif ">{{$row->QUIMICAIVP2}}</p>
            <p style=" top: 380px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->BIOLOGIAIIIP2<=5) color:red; @endif ">{{$row->BIOLOGIAIIIP2}}</p>
            <p style=" top: 410px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGP2<=5) color:red; @endif ">{{$row->TCULDIGP2}}</p>
            <p style=" top: 440px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCP2<=5) color:red; @endif ">{{$row->ESPSOCP2}}</p>
            <p style=" top: 470px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITP2<=5) color:red; @endif ">{{$row->PLITP2}}</p>
            <p style=" top: 515px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABP2<=5) color:red; @endif ">{{$row->S3FLABP2}}</p>
            <p style=" top: 545px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABP2<=5) color:red; @endif ">{{$row->S4FLABP2}}</p>
            <p style=" top: 575px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDP2<=5) color:red; @endif ">{{$row->ORIEDP2}}</p>
            <p style=" top: 605px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULP2<=5) color:red; @endif ">{{$row->CCULP2}}</p>
            <p style=" top: 637px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPP2<=5) color:red; @endif ">{{$row->CDEPP2}}</p>
            <p style=" top: 667px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALP2<=5) color:red; @endif ">{{$row->FORVALP2}}</p>
            
        <!-- Inasistencias 2do parcial -->
            <p style=" top: 257px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->MATVIP2I}}</p>
            <p style=" top: 288px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTADISCIIP2I}}</p>
            <p style=" top: 319px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FISICAIVP2I}}</p>
            <p style=" top: 349px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->QUIMICAIVP2I}}</p>
            <p style=" top: 380px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->BIOLOGIAIIIP2I}}</p>
            <p style=" top: 410px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TCULDIGP2I}}</p>
            <p style=" top: 440px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP2I}}</p>
            <p style=" top: 470px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PLITP2I}}</p>
            <p style=" top: 515px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S3FLABP2I}}</p>
            <p style=" top: 545px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S4FLABP2I}}</p>
            <p style=" top: 575px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDP2I}}</p>
            <p style=" top: 605px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CCULP2I}}</p>
            <p style=" top: 637px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CDEPP2I}}</p>
            <p style=" top: 667px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORVALP2I}}</p>
           

            <!-- Calificaciones-- 3er parcial -->
            <p style=" top: 257px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIP3<=5) color:red; @endif ">{{$row->MATVIP3}}</p>
            <p style=" top: 288px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIP3<=5) color:red; @endif ">{{$row->ESTADISCIIP3}}</p>
            <p style=" top: 319px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVP3<=5) color:red; @endif ">{{$row->FISICAIVP3}}</p>
            <p style=" top: 349px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMICAIVP3<=5) color:red; @endif ">{{$row->QUIMICAIVP3}}</p>
            <p style=" top: 380px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->BIOLOGIAIIIP3<=5) color:red; @endif ">{{$row->BIOLOGIAIIIP3}}</p>
            <p style=" top: 410px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGP3<=5) color:red; @endif ">{{$row->TCULDIGP3}}</p>
            <p style=" top: 440px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCP3<=5) color:red; @endif ">{{$row->ESPSOCP3}}</p>
            <p style=" top: 470px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITP3<=5) color:red; @endif ">{{$row->PLITP3}}</p>
            <p style=" top: 515px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABP3<=5) color:red; @endif ">{{$row->S3FLABP3}}</p>
            <p style=" top: 545px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABP3<=5) color:red; @endif ">{{$row->S4FLABP3}}</p>
            <p style=" top: 575px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDP3<=5) color:red; @endif ">{{$row->ORIEDP3}}</p>
            <p style=" top: 605px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULP3<=5) color:red; @endif ">{{$row->CCULP3}}</p>
            <p style=" top: 637px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPP3<=5) color:red; @endif ">{{$row->CDEPP3}}</p>
            <p style=" top: 667px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALP3<=5) color:red; @endif ">{{$row->FORVALP3}}</p>
            
        <!-- Inasistencias 3er parcial -->
            <p style=" top: 257px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->MATVIP3I}}</p>
            <p style=" top: 288px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTADISCIIP3I}}</p>
            <p style=" top: 319px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FISICAIVP3I}}</p>
            <p style=" top: 349px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->QUIMICAIVP3I}}</p>
            <p style=" top: 380px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->BIOLOGIAIIIP3I}}</p>
            <p style=" top: 410px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->TCULDIGP3I}}</p>
            <p style=" top: 440px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESPSOCP3I}}</p>
            <p style=" top: 470px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PLITP3I}}</p>
            <p style=" top: 515px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S3FLABP3I}}</p>
            <p style=" top: 545px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->S4FLABP3I}}</p>
            <p style=" top: 575px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDP3I}}</p>
            <p style=" top: 605px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CCULP3I}}</p>
            <p style=" top: 637px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CDEPP3I}}</p>
            <p style=" top: 667px;left: 515px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORVALP3I}}</p>
            

            <!-- Calificaciones-- promedio -->
            <p style=" top: 257px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIPROM<=5) color:red; @endif ">{{$row->MATVIPROM}}</p>
            <p style=" top: 288px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIPROM<=5) color:red; @endif ">{{$row->ESTADISCIIPROM}}</p>
            <p style=" top: 319px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVPROM<=5) color:red; @endif ">{{$row->FISICAIVPROM}}</p>
            <p style=" top: 349px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMICAIVPROM<=5) color:red; @endif ">{{$row->QUIMICAIVPROM}}</p>
            <p style=" top: 380px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->BIOLOGIAIIIPROM<=5) color:red; @endif ">{{$row->BIOLOGIAIIIPROM}}</p>
            <p style=" top: 410px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGPROM<=5) color:red; @endif ">{{$row->TCULDIGPROM}}</p>
            <p style=" top: 440px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCPROM<=5) color:red; @endif ">{{$row->ESPSOCPROM}}</p>
            <p style=" top: 470px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITPROM<=5) color:red; @endif ">{{$row->PLITPROM}}</p>
            <p style=" top: 515px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABPROM<=5) color:red; @endif ">{{$row->S3FLABPROM}}</p>
            <p style=" top: 545px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABPROM<=5) color:red; @endif ">{{$row->S4FLABPROM}}</p>
            <p style=" top: 575px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDPROM<=5) color:red; @endif ">{{$row->ORIEDPROM}}</p>
            <p style=" top: 605px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULPROM<=5) color:red; @endif ">{{$row->CCULPROM}}</p>
            <p style=" top: 637px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPPROM<=5) color:red; @endif ">{{$row->CDEPPROM}}</p>
            <p style=" top: 667px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALPROM<=5) color:red; @endif ">{{$row->FORVALPROM}}</p>
            

            <!-- Calificaciones-- Calificacion Final -->
            <p style=" top: 257px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVICF<=5) color:red; @endif ">{{$row->MATVICF}}</p>
            <p style=" top: 288px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIICF<=5) color:red; @endif ">{{$row->ESTADISCIICF}}</p>
            <p style=" top: 319px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVCF<=5) color:red; @endif ">{{$row->FISICAIVCF}}</p>
            <p style=" top: 349px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMICAIVCF<=5) color:red; @endif ">{{$row->QUIMICAIVCF}}</p>
            <p style=" top: 380px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->BIOLOGIAIIICF<=5) color:red; @endif ">{{$row->BIOLOGIAIIICF}}</p>
            <p style=" top: 410px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGCF<=5) color:red; @endif ">{{$row->TCULDIGCF}}</p>
            <p style=" top: 440px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCCF<=5) color:red; @endif ">{{$row->ESPSOCCF}}</p>
            <p style=" top: 470px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITCF<=5) color:red; @endif ">{{$row->PLITCF}}</p>
            <p style=" top: 515px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABCF<=5) color:red; @endif ">{{$row->S3FLABCF}}</p>
            <p style=" top: 545px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABCF<=5) color:red; @endif ">{{$row->S4FLABCF}}</p>
            <p style=" top: 575px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDCF<=5) color:red; @endif ">{{$row->ORIEDCF}}</p>
            <p style=" top: 605px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULCF<=5) color:red; @endif ">{{$row->CCULCF}}</p>
            <p style=" top: 637px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPCF<=5) color:red; @endif ">{{$row->CDEPCF}}</p>
            <p style=" top: 667px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALCF<=5) color:red; @endif ">{{$row->FORVALCF}}</p>
           

            <!-- Calificaciones-- Calificacion extra1 -->
            <p style=" top: 257px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIEXT1<=5) color:red; @endif ">{{$row->MATVIEXT1}}</p>
            <p style=" top: 288px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIEXT1<=5) color:red; @endif ">{{$row->ESTADISCIIEXT1}}</p>
            <p style=" top: 319px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVEXT1<=5) color:red; @endif ">{{$row->FISICAIVEXT1}}</p>
            <p style=" top: 349px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMICAIVEXT1<=5) color:red; @endif ">{{$row->QUIMICAIVEXT1}}</p>
            <p style=" top: 380px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->BIOLOGIAIIIEXT1<=5) color:red; @endif ">{{$row->BIOLOGIAIIIEXT1}}</p>
            <p style=" top: 410px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGEXT1<=5) color:red; @endif ">{{$row->TCULDIGEXT1}}</p>
            <p style=" top: 440px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCEXT1<=5) color:red; @endif ">{{$row->ESPSOCEXT1}}</p>
            <p style=" top: 470px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITEXT1<=5) color:red; @endif ">{{$row->PLITEXT1}}</p>
            <p style=" top: 515px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABEXT1<=5) color:red; @endif ">{{$row->S3FLABEXT1}}</p>
            <p style=" top: 545px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABEXT1<=5) color:red; @endif ">{{$row->S4FLABEXT1}}</p>
            <p style=" top: 575px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDEXT1<=5) color:red; @endif ">{{$row->ORIEDEXT1}}</p>
            <p style=" top: 605px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULEXT1<=5) color:red; @endif ">{{$row->CCULEXT1}}</p>
            <p style=" top: 637px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPEXT1<=5) color:red; @endif ">{{$row->CDEPEXT1}}</p>
            <p style=" top: 667px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALEXT1<=5) color:red; @endif ">{{$row->FORVALEXT1}}</p>
            

            <!-- Calificaciones-- Calificacion extra2 -->
            <p style=" top: 257px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->MATVIEXT2<=5) color:red; @endif ">{{$row->MATVIEXT2}}</p>
            <p style=" top: 288px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTADISCIIEXT2<=5) color:red; @endif ">{{$row->ESTADISCIIEXT2}}</p>
            <p style=" top: 319px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FISICAIVEXT2<=5) color:red; @endif ">{{$row->FISICAIVEXT2}}</p>
            <p style=" top: 349px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->QUIMICAIVEXT2<=5) color:red; @endif ">{{$row->QUIMICAIVEXT2}}</p>
            <p style=" top: 380px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->BIOLOGIAIIIEXT2<=5) color:red; @endif ">{{$row->BIOLOGIAIIIEXT2}}</p>
            <p style=" top: 410px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->TCULDIGEXT2<=5) color:red; @endif ">{{$row->TCULDIGEXT2}}</p>
            <p style=" top: 440px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESPSOCEXT2<=5) color:red; @endif ">{{$row->ESPSOCEXT2}}</p>
            <p style=" top: 470px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PLITEXT2<=5) color:red; @endif ">{{$row->PLITEXT2}}</p>
            <p style=" top: 515px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S3FLABEXT2<=5) color:red; @endif ">{{$row->S3FLABEXT2}}</p>
            <p style=" top: 545px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->S4FLABEXT2<=5) color:red; @endif ">{{$row->S4FLABEXT2}}</p>
            <p style=" top: 575px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDEXT2<=5) color:red; @endif ">{{$row->ORIEDEXT2}}</p>
            <p style=" top: 605px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CCULEXT2<=5) color:red; @endif ">{{$row->CCULEXT2}}</p>
            <p style=" top: 637px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CDEPEXT2<=5) color:red; @endif ">{{$row->CDEPEXT2}}</p>
            <p style=" top: 667px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORVALEXT2<=5) color:red; @endif ">{{$row->FORVALEXT2}}</p>
            <p style=" top: 698px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPEXT2<=5) color:red; @endif ">{{$row->DISCPEXT2}}</p>


          <!-- Calificaciones-- y promedios secretaria-->
            <p style=" top: 710px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP1}}</p>
            <p style=" top: 710px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP2}}</p>
            <p style=" top: 710px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP3}}</p>

            <!-- Calificaciones-- y promedios institucional-->
            <p style=" top: 745px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP1}}</p>
            <p style=" top: 745px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP2}}</p>
            <p style=" top: 745px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP3}}</p>


        </div>
        <div class="page_break"></div>
        @endforeach


        </main>

        <!--<br><table style='page-break-after:always;'></br></table><br>   //Salto de pagina -->
</body>
</body>
</html>
