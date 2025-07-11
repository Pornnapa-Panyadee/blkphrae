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
                                    <h2 class="card-title">มาตรการบริหารจัดการภัยน้ำท่วม</h2>
                                    
                                </div>
                                <div class="card-body" >
                                    {{-- <center><embed src="https://www.pyflood.com/pdf/flood-manage.pdf#page=1&zoom=200" width="95%" height="880px" /></center> --}}
                                    {{-- <center>
                                        <iframe src="https://docs.google.com/gview?url=http://www.pyflood.com/pdf/flood-manage.pdf&embedded=true#:page.7" style="" width="90%" height="880px" allowfullscreen webkitallowfullscreen ></iframe> 
                                    </center> --}}
                                    <div class="container-wrap">

                                        <br> <h2 align="center"><br> มาตรการบริหารจัดการภัยน้ำท่วม</h2> <br>
                                        <center><iframe src="https://docs.google.com/gview?url=http://www.pyflood.com/pdf/flood-manage.pdf&embedded=true#:page.7" style="" width="100%" height="880px" allowfullscreen="" webkitallowfullscreen=""></iframe> </center>
                                   
                                       <br><br> 
                                   </div><!-- END container-wrap -->
                                  
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
