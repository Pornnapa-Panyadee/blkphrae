<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blockage::Phrae</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css')}}">

    <!-- leaflet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" crossorigin=""/>
    <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet-src.js" crossorigin=""></script>
 

    <style>
        .btn1 {
            font-size: 10px;
            padding: 9px 10px;
        }
        .btn-lg  {
            font-size: 10px;
            padding: 0px 10px;
        }

    </style>
    <style type="text/css">
        
    	#map{
			  font-family: Mitr, sans-serif;
			  height: 600px;
			  display: block;
              margin: auto;
              text-align: left;
              font-size: 14px;
			}
		#map.table {
		    font-family: 'Mitr', sans-serif;
		    width: 100%;
		}#map.tr {
		    padding: 15px;
		    text-align: right;
		}#map.td {
		    padding: 15px;
		    text-align: right;
        }
        
        
        @media only screen and (max-width:480px) {
            #map{
                height: 450px;
                font-size: 14px;
            }     
            
        }

    </style>
        
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('includes.head')
        @include('includes.header')
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- icon fontawesome solid  -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">ระบบข้อมูลของสิ่งกีดขวางทางน้ำในลำน้ำคูคลองและถนน  และวิธีการแก้ไขปัญหาการกีดขวางทางน้ำแต่ละแห่งในพื้นที่ของจังหวัดเชียงใหม่</h3>
                                </div>
                                <div class="card-body">
                                        {{-- @include('form.map') --}}
                                    <div class="row">
                                        <div class="col-xs-5 col-sm-12 col-md-5">
                                                <div id="map" style="width: 100%;" align="center"></div>
                                                <div align="right"> <img src="{{ asset('images/logo/status.png') }}"  width="50%"> </div>
                                                <br>
                                        </div> 
                                        <div class="col-xs-7 col-sm-12 col-md-7">
                                            <div class="card-header">
                                                <table>
                                                    <tr>
                                                        <td rowspan="3"  width="20%"><img src="{{ asset('images/icon/survey.png') }}"  width="90%"></td>
                                                        <td > ผู้สำรวจ  : {{$username}} {{$lastname}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td> ตำเเหน่ง  : {{$position}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td> หน่วยงาน : {{$department}}  </td>
                                                    </tr>
                                                
                                                
                                                </table>
                                            </div>
                                            <br>
                                            <div class="table-responsive">
                                                <table class="table_approve table-striped table-bordered first" >
                                                    <thead>
                                                        <tr>
                                                            <th width=2%>#</th>
                                                            <th>รหัส</th>
                                                            <th>ลำน้ำ</th>
                                                            <th>หมู่บ้าน</th>
                                                            <th>ตำบล</th>
                                                            <th>อำเภอ</th>
                                                            <th>สถานะ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for($i = 0;$i < count($data);$i++){?>
                                                            <tr align="center">
                                                                <td >{{$i+1}}</td>
                                                                <td data-label="รหัส"> {{$data[$i]->blk_code}}</td>
                                                                <!-- <td data-label="รหัส"> <a href='{{ asset('/report/pdf/') }}/{{$data[$i]->blk_id}}' > {{$data[$i]->blk_code}} </a></td> -->
                                                                <td align="left" data-label="ลำน้ำ">{{$data[$i]->river_name}}, {{$data[$i]->river_main}} </td>
                                                                <td align="left" data-label="หมู่บ้าน">{{$data[$i]->blk_village}} </td>
                                                                <td align="left" data-label="ตำบล">{{$data[$i]->blk_tumbol}}</td>
                                                                <td data-label="อำเภอ">{{$data[$i]->blk_district}}</td>
                                                                <?php if($data[$i]->status_approve==0){ ?> 
                                                                    <td ><button type="button" class="btn1 btn-offline" >กำลังรอพิจารณา</button>  </td>   
                                                                <?php }else { ?> 
                                                                    <td ><button type="button" class="btn1 btn-success" >พิจารณาเรียบร้อย</button>  </td>   
                                                                <?php } ?>
                                                                                    
                                                            </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
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
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main-js.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> 
    <script src="{{ asset('/js/data-table.js') }}"></script> 
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script> 
    <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script> 
   
   
    <script src="{{ asset('js/chooseLocation_table.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/L.Control.Layers.Tree.css')}}" crossorigin=""/>
    <script src="{{ asset('/js/L.Control.Layers.Tree.js')}}"></script>


    <script type="text/javascript">
        const amp = ["เมืองแพร่", "ร้องกวาง", "ลอง", "สูงเม่น", "เด่นชัย", "สอง", "วังชิ้น", "หนองม่วงไข่"];
        const stationLayers = amp.map(() => new L.LayerGroup());
        const borders = new L.LayerGroup();

        const x = 18.290015, y = 99.9656525;
        const mbAttr = 'Phrae';
        
        const osm = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20, subdomains: ['mt0', 'mt1', 'mt2', 'mt3'], attribution: mbAttr
        });

        const osmBw = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20, subdomains: ['mt0', 'mt1', 'mt2', 'mt3'], attribution: mbAttr
        });

        const map = L.map('map', {
            layers: [borders, osm, ...stationLayers],
            center: [x, y],
            zoom: 9,
        });

        // KML Layer 
        omnivore.kml('{{ asset('kml/PHRAE.kml') }}').on('ready', function () {
            this.setStyle({ fillOpacity: 0, color: "#1f3d3f", weight: 4 });
        }).addTo(borders);

        var pin = L.icon({
            iconUrl: '{{ asset('images/logo/pin.png') }}',
            iconRetinaUrl: '{{ asset('images/logo/pin.png') }}',
            iconSize: [20, 36],
            iconAnchor: [5, 30],
            popupAnchor: [0, 0]
        });

        var pinMO = L.icon({
            iconUrl: '{{ asset('images/logo/pin.png') }}',
            iconRetinaUrl: '{{ asset('images/logo/pin.png') }}',
            iconSize: [10, 16],
            iconAnchor: [5, 30],
            popupAnchor: [0, 0]
        });

        const mo = window.matchMedia("(max-width: 700px)").matches ? 0 : 1;

        function addPin(layer, index, mo) {
            $.getJSON("{{ asset('form/getDamage') }}/" + amp[index], function (data) {
                data.forEach(item => {
                    const [y, x] = item.geometry.coordinates;
                    const text = `
                        <font style="font-family: 'Mitr';" size="3" color="#1AA90A">
                            รหัส : <a href='report/pdf/${item.blk_id}' target="_blank">${item.blk_code}</a>
                        </font><br>
                        <font style="font-family: 'Mitr';" size="2" color="#466DF3">ลำน้ำ : ${item.river}</font><br>
                        <font style="font-family: 'Mitr';" size="2" color="#466DF3">ที่ตั้ง : ${item.location} ต.${item.tambol} อ.${item.district}</font><br><br>
                        <table align="center">
                            <tr>
                                <td width=47%>
                                    <a href='report/pdf/${item.blk_id}' target="_blank">
                                        <button class="btn btn-sm btn-outline-light"><i class="fas fa-eye"></i> รายงาน</button>
                                    </a>
                                </td>
                                <td width=6%></td>
                                <td width=47%>
                                    <a href='report/photo/${item.blk_id}' target="_blank">
                                        <button class="btn btn-sm btn-outline-light"><i class="fas fa-images"></i> ภาพประกอบ</button>
                                    </a>
                                </td>
                            </tr>
                        </table>`;
                    L.marker([x, y], { icon: mo ? pin : pinMO }).addTo(layer).bindPopup(text);
                });
            });

        }

        // Add pins for all amphurs
        stationLayers.forEach((layer, i) => addPin(layer, i, mo));

        // === BaseLayers as radio buttons ===
        const baseTree = {
            label: 'BaseLayers',
            noShow: true,
            children: [
                { label: 'แผนที่ภูมิประเทศ (Streets)', layer: osm },
                { label: 'แผนที่ภาพถ่ายผ่านดาวเทียม (Satellite)', layer: osmBw},
            ]
        };

        // === Overlay Amphoe Layers with checkbox and selectAll ===
        const overlayTree = {
            label: ' ข้อมูลสิ่งกีดขวางรายอำเภอ',
            selectAllCheckbox: true,
            children: amp.map((name, i) => ({
                label: " "+name,
                layer: stationLayers[i]
            }))
        };

        const ctl = L.control.layers.tree(baseTree, overlayTree, {
            namedToggle: false,
            selectorBack: false,
            // closedSymbol: '&#8862; &#x1f5c0;',
            // openedSymbol: '&#8863; &#x1f5c1;'
        });

        ctl.addTo(map).collapseTree().expandSelected();
    </script>

</body>
</html>
