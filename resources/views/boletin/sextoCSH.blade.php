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
             <img src="{{ public_path().'/img/fondo_boletincsh.jpg' }}" width="100%" height="100%">
        </div>

        <main> 

        @foreach($rows as $row)
        <div id="contenido" class="contenido">
            <!-- Encabezado-->
           
        	<p style=" top: 62px;left: 275px; height:15px; width:300px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; "> {{$row->NOMBRE}}</p>
            <p style=" top: 104px;left: 278px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">6°CSH</p>
            <p style=" top: 104px;left: 371px; height:15px; width:105px;  text-align: center;  position: absolute;font-weight: bold;font-size: 11px; color:black; background:none; ">  PREPARATORIA</p>
            <p style=" top: 101px;left: 476px; height:15px; width:90px;  text-align: center;  position: absolute;font-weight: bold;font-size: 10px; color:black; background:none; ">  2024-2025<br>SEMESTRE PAR</p>

            <!-- Calificaciones-- 1er parcial -->
            <p style=" top: 257px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTIIP1<=5) color:red; @endif">{{$row->ESTIIP1}}</p>
            <p style=" top: 288px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ECOMIIP1<=5) color:red; @endif">{{$row->ECOMIIP1}}</p>
            <p style=" top: 319px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DPMP1<=5) color:red; @endif">{{$row->DPMP1}}</p>
            <p style=" top: 349px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HISUIP1<=5) color:red; @endif">{{$row->HISUIP1}}</p>
            <p style=" top: 380px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->SOCP1<=5) color:red; @endif">{{$row->SOCP1}}</p>
            <p style=" top: 410px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DOCFILP1<=5) color:red; @endif">{{$row->DOCFILP1}}</p>
            <p style=" top: 440px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOP1<=5) color:red; @endif">{{$row->PSICOP1}}</p>
            <p style=" top: 470px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ETGRECP1<=5) color:red; @endif">{{$row->ETGRECP1}}</p>
            <p style=" top: 515px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGTOEFLP1<=5) color:red; @endif">{{$row->INGTOEFLP1}}</p>
            <p style=" top: 545px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBCULP1<=5) color:red; @endif">{{$row->CLUBCULP1}}</p>
            <p style=" top: 575px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBDEPP1<=5) color:red; @endif">{{$row->CLUBDEPP1}}</p>
            <p style=" top: 605px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUP1<=5) color:red; @endif">{{$row->ORIEDUP1}}</p>
            <p style=" top: 637px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMVALP1<=5) color:red; @endif">{{$row->FORMVALP1}}</p>
            <p style=" top: 667px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCP1<=5) color:red; @endif">{{$row->DISCP1}}</p>

            <!-- Inasistencias 1er parcial -->
            <p style=" top: 257px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTIIP1I}}</p>
            <p style=" top: 288px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ECOMIIP1I}}</p>
            <p style=" top: 319px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DPMP1I}}</p>
            <p style=" top: 349px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->HISUIP1I}}</p>
            <p style=" top: 380px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->SOCP1I}}</p>
            <p style=" top: 410px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DOCFILP1I}}</p>
            <p style=" top: 440px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PSICOP1I}}</p>
            <p style=" top: 470px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ETGRECP1I}}</p>
            <p style=" top: 515px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->INGTOEFLP1I}}</p>
            <p style=" top: 545px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CLUBCULP1I}}</p>
            <p style=" top: 575px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CLUBDEPP1I}}</p>
            <p style=" top: 605px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDUP1I}}</p>
            <p style=" top: 637px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORMVALP1I}}</p>
            <p style=" top: 667px;left: 384px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCP1I}}</p>



             <!-- Calificaciones-- 2do parcial -->
            <p style=" top: 257px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTIIP2<=5) color:red; @endif ">{{$row->ESTIIP2}}</p>
            <p style=" top: 288px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ECOMIIP2<=5) color:red; @endif ">{{$row->ECOMIIP2}}</p>
            <p style=" top: 319px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DPMP2<=5) color:red; @endif ">{{$row->DPMP2}}</p>
            <p style=" top: 349px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HISUIP2<=5) color:red; @endif ">{{$row->HISUIP2}}</p>
            <p style=" top: 380px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->SOCP2<=5) color:red; @endif ">{{$row->SOCP2}}</p>
            <p style=" top: 410px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DOCFILP2<=5) color:red; @endif ">{{$row->DOCFILP2}}</p>
            <p style=" top: 440px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOP2<=5) color:red; @endif ">{{$row->PSICOP2}}</p>
            <p style=" top: 470px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ETGRECP2<=5) color:red; @endif ">{{$row->ETGRECP2}}</p>
            <p style=" top: 515px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGTOEFLP2<=5) color:red; @endif ">{{$row->INGTOEFLP2}}</p>
            <p style=" top: 545px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBCULP2<=5) color:red; @endif ">{{$row->CLUBCULP2}}</p>
            <p style=" top: 575px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBDEPP2<=5) color:red; @endif ">{{$row->CLUBDEPP2}}</p>
            <p style=" top: 605px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUP2<=5) color:red; @endif ">{{$row->ORIEDUP2}}</p>
            <p style=" top: 637px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMVALP2<=5) color:red; @endif ">{{$row->FORMVALP2}}</p>
            <p style=" top: 667px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCP2<=5) color:red; @endif ">{{$row->DISCP2}}</p>


            <!-- Inasistencias 2do parcial -->
            <p style=" top: 257px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTIIP2I}}</p>
            <p style=" top: 288px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ECOMIIP2I}}</p>
            <p style=" top: 319px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DPMP2I}}</p>
            <p style=" top: 349px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->HISUIP2I}}</p>
            <p style=" top: 380px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->SOCP2I}}</p>
            <p style=" top: 410px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DOCFILP2I}}</p>
            <p style=" top: 440px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PSICOP2I}}</p>
            <p style=" top: 470px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ETGRECP2I}}</p>
            <p style=" top: 515px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->INGTOEFLP2I}}</p>
            <p style=" top: 545px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CLUBCULP2I}}</p>
            <p style=" top: 575px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CLUBDEPP2I}}</p>
            <p style=" top: 605px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDUP2I}}</p>
            <p style=" top: 637px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORMVALP2I}}</p>
            <p style=" top: 667px;left: 456px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCP2I}}</p>

            <!-- Calificaciones-- 3er parcial -->
            <p style=" top: 257px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTIIP3<=5) color:red; @endif ">{{$row->ESTIIP3}}</p>
            <p style=" top: 288px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ECOMIIP3<=5) color:red; @endif ">{{$row->ECOMIIP3}}</p>
            <p style=" top: 319px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DPMP3<=5) color:red; @endif ">{{$row->DPMP3}}</p>
            <p style=" top: 349px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HISUIP3<=5) color:red; @endif ">{{$row->HISUIP3}}</p>
            <p style=" top: 380px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->SOCP3<=5) color:red; @endif ">{{$row->SOCP3}}</p>
            <p style=" top: 410px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DOCFILP3<=5) color:red; @endif ">{{$row->DOCFILP3}}</p>
            <p style=" top: 440px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOP3<=5) color:red; @endif ">{{$row->PSICOP3}}</p>
            <p style=" top: 470px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ETGRECP3<=5) color:red; @endif ">{{$row->ETGRECP3}}</p>
            <p style=" top: 515px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGTOEFLP3<=5) color:red; @endif ">{{$row->INGTOEFLP3}}</p>
            <p style=" top: 545px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBCULP3<=5) color:red; @endif ">{{$row->CLUBCULP3}}</p>
            <p style=" top: 575px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBDEPP3<=5) color:red; @endif ">{{$row->CLUBDEPP3}}</p>
            <p style=" top: 605px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUP3<=5) color:red; @endif ">{{$row->ORIEDUP3}}</p>
            <p style=" top: 637px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMVALP3<=5) color:red; @endif ">{{$row->FORMVALP3}}</p>
            <p style=" top: 667px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCP3<=5) color:red; @endif ">{{$row->DISCP3}}</p>
        <!-- Inasistencias 3er parcial -->
            <p style=" top: 257px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ESTIIP3I}}</p>
            <p style=" top: 288px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ECOMIIP3I}}</p>
            <p style=" top: 319px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DPMP3I}}</p>
            <p style=" top: 349px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->HISUIP3I}}</p>
            <p style=" top: 380px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->SOCP3I}}</p>
            <p style=" top: 410px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DOCFILP3I}}</p>
            <p style=" top: 440px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->PSICOP3I}}</p>
            <p style=" top: 470px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ETGRECP3I}}</p>
            <p style=" top: 515px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->INGTOEFLP3I}}</p>
            <p style=" top: 545px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CLUBCULP3I}}</p>
            <p style=" top: 575px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CLUBDEPP3I}}</p>
            <p style=" top: 605px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->ORIEDUP3I}}</p>
            <p style=" top: 637px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->FORMVALP3I}}</p>
            <p style=" top: 667px;left: 530px; height:15px; width:34px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->DISCP3I}}</p>

            <!-- Calificaciones-- promedio -->
            <p style=" top: 257px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTIIPROM<=5) color:red; @endif ">{{$row->ESTIIPROM}}</p>
            <p style=" top: 288px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ECOMIIPROM<=5) color:red; @endif ">{{$row->ECOMIIPROM}}</p>
            <p style=" top: 319px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DPMPROM<=5) color:red; @endif ">{{$row->DPMPROM}}</p>
            <p style=" top: 349px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HISUIPROM<=5) color:red; @endif ">{{$row->HISUIPROM}}</p>
            <p style=" top: 380px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->SOCPROM<=5) color:red; @endif ">{{$row->SOCPROM}}</p>
            <p style=" top: 410px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DOCFILPROM<=5) color:red; @endif ">{{$row->DOCFILPROM}}</p>
            <p style=" top: 440px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOPROM<=5) color:red; @endif ">{{$row->PSICOPROM}}</p>
            <p style=" top: 470px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ETGRECPROM<=5) color:red; @endif ">{{$row->ETGRECPROM}}</p>
            <p style=" top: 515px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGTOEFLPROM<=5) color:red; @endif ">{{$row->INGTOEFLPROM}}</p>
            <p style=" top: 545px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBCULPROM<=5) color:red; @endif ">{{$row->CLUBCULPROM}}</p>
            <p style=" top: 575px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBDEPPROM<=5) color:red; @endif ">{{$row->CLUBDEPPROM}}</p>
            <p style=" top: 605px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUPROM<=5) color:red; @endif ">{{$row->ORIEDUPROM}}</p>
            <p style=" top: 637px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMVALPROM<=5) color:red; @endif ">{{$row->FORMVALPROM}}</p>
            <p style=" top: 667px;left: 567px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCPROM<=5) color:red; @endif ">{{$row->DISCPROM}}</p>

            <!-- Calificaciones-- Calificacion Final -->
            <p style=" top: 257px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTIICF<=5) color:red; @endif ">{{$row->ESTIICF}}</p>
            <p style=" top: 288px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ECOMIICF<=5) color:red; @endif ">{{$row->ECOMIICF}}</p>
            <p style=" top: 319px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DPMCF<=5) color:red; @endif ">{{$row->DPMCF}}</p>
            <p style=" top: 349px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HISUICF<=5) color:red; @endif ">{{$row->HISUICF}}</p>
            <p style=" top: 380px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->SOCCF<=5) color:red; @endif ">{{$row->SOCCF}}</p>
            <p style=" top: 410px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DOCFILCF<=5) color:red; @endif ">{{$row->DOCFILCF}}</p>
            <p style=" top: 440px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOCF<=5) color:red; @endif ">{{$row->PSICOCF}}</p>
            <p style=" top: 470px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ETGRECCF<=5) color:red; @endif ">{{$row->ETGRECCF}}</p>
            <p style=" top: 515px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGTOEFLCF<=5) color:red; @endif ">{{$row->INGTOEFLCF}}</p>
            <p style=" top: 545px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBCULCF<=5) color:red; @endif ">{{$row->CLUBCULCF}}</p>
            <p style=" top: 575px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBDEPCF<=5) color:red; @endif ">{{$row->CLUBDEPCF}}</p>
            <p style=" top: 605px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUCF<=5) color:red; @endif ">{{$row->ORIEDUCF}}</p>
            <p style=" top: 637px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMVALCF<=5) color:red; @endif ">{{$row->FORMVALCF}}</p>
            <p style=" top: 667px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCCF<=5) color:red; @endif ">{{$row->DISCCF}}</p>

            <!-- Calificaciones-- Calificacion extra1 -->
            <p style=" top: 257px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTIIEXT1<=5) color:red; @endif ">{{$row->ESTIIEXT1}}</p>
            <p style=" top: 288px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ECOMIIEXT1<=5) color:red; @endif ">{{$row->ECOMIIEXT1}}</p>
            <p style=" top: 319px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DPMEXT1<=5) color:red; @endif ">{{$row->DPMEXT1}}</p>
            <p style=" top: 349px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HISUIEXT1<=5) color:red; @endif ">{{$row->HISUIEXT1}}</p>
            <p style=" top: 380px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->SOCEXT1<=5) color:red; @endif ">{{$row->SOCEXT1}}</p>
            <p style=" top: 410px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DOCFILEXT1<=5) color:red; @endif ">{{$row->DOCFILEXT1}}</p>
            <p style=" top: 440px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOEXT1<=5) color:red; @endif ">{{$row->PSICOEXT1}}</p>
            <p style=" top: 470px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ETGRECEXT1<=5) color:red; @endif ">{{$row->ETGRECEXT1}}</p>
            <p style=" top: 515px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGTOEFLEXT1<=5) color:red; @endif ">{{$row->INGTOEFLEXT1}}</p>
            <p style=" top: 545px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBCULEXT1<=5) color:red; @endif ">{{$row->CLUBCULEXT1}}</p>
            <p style=" top: 575px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBDEPEXT1<=5) color:red; @endif ">{{$row->CLUBDEPEXT1}}</p>
            <p style=" top: 605px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUEXT1<=5) color:red; @endif ">{{$row->ORIEDUEXT1}}</p>
            <p style=" top: 637px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMVALEXT1<=5) color:red; @endif ">{{$row->FORMVALEXT1}}</p>
            <p style=" top: 667px;left: 643px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCEXT1<=5) color:red; @endif ">{{$row->DISCEXT1}}</p>

            <!-- Calificaciones-- Calificacion extra2 -->
            <p style=" top: 257px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ESTIIEXT2<=5) color:red; @endif ">{{$row->ESTIIEXT2}}</p>
            <p style=" top: 288px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ECOMIIEXT2<=5) color:red; @endif ">{{$row->ECOMIIEXT2}}</p>
            <p style=" top: 319px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DPMEXT2<=5) color:red; @endif ">{{$row->DPMEXT2}}</p>
            <p style=" top: 349px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->HISUIEXT2<=5) color:red; @endif ">{{$row->HISUIEXT2}}</p>
            <p style=" top: 380px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->SOCEXT2<=5) color:red; @endif ">{{$row->SOCEXT2}}</p>
            <p style=" top: 410px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DOCFILEXT2<=5) color:red; @endif ">{{$row->DOCFILEXT2}}</p>
            <p style=" top: 440px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->PSICOEXT2<=5) color:red; @endif ">{{$row->PSICOEXT2}}</p>
            <p style=" top: 470px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ETGRECEXT2<=5) color:red; @endif ">{{$row->ETGRECEXT2}}</p>
            <p style=" top: 515px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->INGTOEFLEXT2<=5) color:red; @endif ">{{$row->INGTOEFLEXT2}}</p>
            <p style=" top: 545px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBCULEXT2<=5) color:red; @endif ">{{$row->CLUBCULEXT2}}</p>
            <p style=" top: 575px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->CLUBDEPEXT2<=5) color:red; @endif ">{{$row->CLUBDEPEXT2}}</p>
            <p style=" top: 605px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->ORIEDUEXT2<=5) color:red; @endif ">{{$row->ORIEDUEXT2}}</p>
            <p style=" top: 637px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->FORMVALEXT2<=5) color:red; @endif ">{{$row->FORMVALEXT2}}</p>
            <p style=" top: 667px;left: 691px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; @if($row->DISCEXT2<=5) color:red; @endif ">{{$row->DISCEXT2}}</p>

          <!-- Calificaciones-- y promedios secretaria-->
            <p style=" top: 710px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP1}}</p>
            <p style=" top: 710px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP2}}</p>
            <p style=" top: 710px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSALLEP3}}</p>

            <!-- Calificaciones-- y promedios institucional-->
            <p style=" top: 745px;left: 345px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP1}}</p>
            <p style=" top: 745px;left: 418px; height:15px; width:38px;  text-align: center;  position: absolute;font-weigfight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP2}}</p>
            <p style=" top: 745px;left: 492px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none; ">{{$row->CALSEP3}}</p>
            
            <!-- Calificaciones-- Institucionales y de la SEP  -->
            <p style=" top: 780px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none;">{{$row->CFSEP}}</p>
            <p style=" top: 805px;left: 602px; height:15px; width:38px;  text-align: center;  position: absolute;font-weight: bold;font-size: 12px; color:black; background:none;">{{$row->CFSALLE}}</p>
 
            
`   

        </div>
        <div class="page_break"></div>
        @endforeach
            

        </main> 

        <!--<br><table style='page-break-after:always;'></br></table><br>   //Salto de pagina -->
</body>
</body>
</html>z