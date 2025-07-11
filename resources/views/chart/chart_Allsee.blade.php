<!doctype html>
<html>
<head>
    <meta charset="UFT-8">
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

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css">
    <script src="https://code.highcharts.com/modules/pattern-fill.js"></script>

        
        
</head>
<body>
    <script type="text/javascript">
        function test(this)
        {
            this.selected = selected;
        }
    </script>
    <div class="dashboard-main-wrapper">
        @include('includes.headmenu')
        {{-- @include('includes.header') --}}
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
      
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <?php 
                          // echo url()->previous();
                            
                        ?>
                        <h2 class="pageheader-title">กราฟแสดงสัดส่วนสิ่งกีดขวางทางน้ำ จังหวัดแพร่</h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="dashboard-short-list">
                
                <div class="row" >
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="background-color:#fff;">
                            <div style="margin-top:20px;">
                                
                                <form id="amp" name="amp" action="" method="get">
                                        <div  class="col-md-12  text-right">
                                            <label> <h4>อำเภอ :  
                                                 <select name="amp" class="selectpicker " id="district" onchange="this.form.submit();"> 
                                                        <option value="">-- เลือกอำเภอ --</option>
                                                 </select> 
                                                </h4>
                                            </label>
                                        </div>
                               </form>
                                <div class="row" style="background-color:#fff;margin:10px 10px 0 10px;">
                                    <h5> ข้อมูลจำนวนสิ่งกีดขวาง </h5>
                                </div>
                                    <table class="table" align="center" width="80%">
                                        <tr>
                                            <td colspan="3"><b>สาเหตุ</b></td>
                                        </tr>
                                        <tr>
                                            <td width="50%">ธรรมชาติ</td>
                                            <td width="5%">:</td>
                                            <?php if(($countNum[0][1]+$countNum[1][1])!=0){?>
                                            <td width="45%" align="center">{{$countNum[1][1]}} ({{number_format($countNum[1][1]/($countNum[0][1]+$countNum[1][1])*100,1)}}%)</td>
                                            <?php }else {?>
                                            <td> - </td>
                                            <?php }?>
                                        </tr>
                                        <tr>
                                            <td>มนุษย์</td>
                                            <td>:</td>
                                            <?php if(($countNum[0][1]+$countNum[1][1])!=0){?>
                                            <td align="center">{{$countNum[0][1] }} ({{number_format($countNum[0][1]/($countNum[0][1]+$countNum[1][1])*100,1)}}%)</td>
                                            <?php }else {?>
                                                <td> - </td>
                                            <?php }?>
                                        </tr>
                                    </table>

                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>สาเหตุธรรมชาติ</th>
                                                <th>จำนวน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0;$i<6;$i++){?>
                                                <tr>
                                                    <td>{{$countBar[$i][0] }}</td>
                                                    <td align="center">{{$countBar[$i][1] }}</td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>สาเหตุมนุษย์</th>
                                                <th>จำนวน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=6;$i<20;$i++){?>
                                            <tr>
                                                <td>{{$countBar[$i][0] }}</td>
                                                <td align="center">{{$countBar[$i][1] }}</td>
                                            </tr>
                                            <?php }?>
                                                     
                                        </tbody>
                                                  
                                     </table>


                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8" style="margin-left:20px;" >
                            <div class="row" style="background-color:#fff;">
                                <div class="col-md-2"></div>
                                <div class="col-md-7 col-md-offset-2 text-center">
                                    <br>
                                    <h2> กราฟแสดงสัดส่วนสิ่งกีดขวางทางน้ำ <br> {{ $amp}} </h2>
                                    <div id="container" ></div>
                                </div>
                               
                            </div>
                            
                            <div class="row" style="background-color:#fff; " >
                                
                                <div class="col-md-12"  style="background-color:#fff; margin-bottom:130px;margin-top:50px;" >
                                    <div id="conBar" ></div>
                                </div>
                                
                            </div>
                        </div>
                                
                     </div>
             </div>
             
        </div>
        
        @include('includes.foot')
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->

       
    </div>
    

    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('js/location/location_tombon.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
    <script type="text/javascript">
        var users =  <?php echo json_encode($countNum) ?>;
        // alert (users);
        Highcharts.chart('container', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                },
                style: {
                    fontFamily: 'Mitr|Prompt'
                }
            },
            title: {
                text: ''
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                
                pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        // colors: pieColors,
                        colorByPoint: true,
                        depth: 35,
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                            distance: -80,
                            filter: {
                                property: 'percentage',
                                operator: '>',
                                value: 4
                            }
                        }
                    }
        
            },
            colors: [
                '#f4891e',
                '#0aa34f' 
                
                ],
            series: [{
                type: 'pie',
                name: '',
                data: users
            }]
        
        });
    
        var users =  <?php echo json_encode($countBar) ?>;
        // alert (users);
        Highcharts.chart('conBar', {
            chart: {
                type: 'column',
                style: {
                    fontFamily: 'Mitr|Prompt'
                },
                options3d: {
                    enabled: true,
                    alpha: 10,
                    beta: 0,
                    depth: 100,
                    viewDistance: 25
                }
            },
            title: {
                text: 'สาเหตุการกีดขวางทางน้ำ'
            },
            subtitle: {
                text: 'จังหวัดแพร่่'
            },
            xAxis: {
                type: 'category',
                labels: {
                rotation: -35,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Mitr|Prompt'
                }
            }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0"></td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            legend: {
                align: 'right',
                x: -30,
                verticalAlign: 'top',
                y: 25,
                floating: true,
                
            },
            plotOptions: {
                
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0,
                    depth: 25,
                    colorByPoint: true
                }
                
        
            },
            
            colors: [
                '#0aa34f',
                '#0aa34f', 
                '#0aa34f', 
                '#0aa34f', 
                '#0aa34f', 
                '#0aa34f',  
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e',
                '#f4891e'
        
                ],
            series: [{
                name: '',
                data: users,
                dataLabels: {
                    enabled: true,
                    rotation: 0,
                    color: '#FFFFFF',
                    align: 'center',
                    format: '{point.y:.0f}', // one decimal
                    y: 25, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Mitr|Prompt'
                    }
                }
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    
    </script>
</body>
</html>
