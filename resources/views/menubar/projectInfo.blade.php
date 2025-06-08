<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blockage::Phrae</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css')}}">
    <!-- leaflet -->
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    {{-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css"> --}}
    <style>
     p{
        text-align: justify;
        text-indent: 2.5em;
     }
     .text3{
        text-align: justify;
        margin-left: 3em;
        padding:5px;
      }
     </style>

</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('includes.headmenu')
        {{-- @include('includes.header') --}}
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
      
                <div class="container-fluid dashboard-content" style="margin-bottom:-40px;">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- icon fontawesome solid  -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-header">
                                    
                                    <h2 class="card-title" style=" text-align:center" > โครงการพัฒนาระบบการสำรวจและฐานข้อมูลเพื่อบริหารจัดการพื้นที่เสี่ยงภัยน้ำท่วมและภัยแล้ง 
                                        <br>ระดับจังหวัดในพื้นที่ภาคเหนือตอนบน (ระยะที่ 1) </h3>
                                        <h3 style=" text-align:center" >โดย สถาบันสารสนเทศทรัพยากรน้ำ (องค์การมหาชน) ร่วมกับ มหาวิทยาลัยเชียงใหม่ </h3>    
                                        
                                    </h2>
                                    
                                </div>
                                <div class="card-body" >
                                    <div class="row">
                                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1" ></div>
                                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" >
                                              
                                            
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end icon fontawesome solid  -->
                            <!-- ============================================================== -->
                         
                        </div>
                    </div>
                    
                </div>
                @include('includes.foot')
      
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->

       
    </div>


</body>
</html>
