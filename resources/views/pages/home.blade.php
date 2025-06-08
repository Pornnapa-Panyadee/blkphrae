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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css')}}">
    
    <!-- leaflet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" crossorigin=""/>
    <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet-src.js" crossorigin=""></script>

    <style type="text/css">
        html, body, #map {
            height: 100%;
            width: 100vw;
        }
    	#map{

			  font-family: Mitr, sans-serif;
			  height: 700px;
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
        select{
            width: 100%;
            height: 40px;
        }
        button.btn {
            width: 100%;
        }
        @media only screen and (max-width:480px) {
            #map{
                height: 450px;
                font-size: 14px;
            }
            table{
                font-size: 2vw;
            }
            select{
            width: 100%;
            height: 40px;
            }
            button.btn{
            width: 100%;
            }
            .btn-sm{
                font-size: 2vw;
            }
          
            
        }

    </style>
        
</head>
<body>
    <div class="dashboard-main-wrapper">
       
        @include('includes.headmenu') 
        <div id="app">

            @yield('content')
        
        </div>
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
                                    <h3 class="card-title"> โครงการพัฒนาระบบการสำรวจและฐานข้อมูลเพื่อบริหารจัดการพื้นที่เสี่ยงภัยน้ำท่วมและภัยแล้ง ระดับจังหวัดในพื้นที่ภาคเหนือตอนบน (ระยะที่ 1) </h3>
                                    <h5>โดย สถาบันสารสนเทศทรัพยากรน้ำ (องค์การมหาชน) ร่วมกับ มหาวิทยาลัยเชียงใหม่ </h5>                                    
                                </div>
                                <div class="card-body" >
                                    {{-- <a href="#tableData">หน้าแรก </a> --}}
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
                                        <div id="map" style="width: 100%;" align="center"></div>
                                        <br>
                                        <center><img  src="{{ asset('images/logo/manual.png') }}" width=80%></center>
                                    </div>
                                    <br><br>
                                    <!-- ============================================================== -->
                                            <!-- basic table  -->
                                            <!-- ============================================================== -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">ตารางแสดงข้อมูลสิ่งกีดขวางทางน้ำในลำน้ำคูคลองและถนน  </h3>                                                       
                                                        
                                                            
                                                    </div>
                                                    <div class="card-header">
                                                        <form id="amp" name="amp" action="#tableData" method="get"> 
                                                            <div class="row justify-content-end">
                                                                <div class="col-md-3">
                                                                    <h4 class="card-title">
                                                                        <select id="district">
                                                                            <option value="">-- เลือกอำเภอ --</option>
                                                                        </select>
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h4 class="card-title">
                                                                    <select id="subdistrict" name="tumbol" >
                                                                        <option value=''>-- เลือกตำบล --</option>
                                                                    </select>
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button type="submit" class="btn btn-outline-dark "  style="float: right;"> ค้นหา </button>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </form>
                                                        

                                                    </div>
                                                    <div id="tableData">
                                                        <div class="card-body">
                                                            
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered first" width=90% align="center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>รหัส</th>
                                                                            <th>ลำน้ำ</th>
                                                                            <th>หมู่บ้าน</th>
                                                                            <th>ตำบล</th>
                                                                            <th>อำเภอ</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php for($i = 0;$i < count($data);$i++){?>
                                                                            <tr align="center">
                                                                                <td >{{$i+1}}</td>
                                                                                <td data-label="รหัส"> <a href='{{ asset('/report/pdf/') }}/{{$data[$i]->blk_id}}' > {{$data[$i]->blk_code}} </a></td>
                                                                                <td align="left" data-label="ลำน้ำ">{{$data[$i]->river_name}}, {{$data[$i]->river_main}} </td>
                                                                                <td align="left" data-label="หมู่บ้าน">{{$data[$i]->blk_village}} </td>
                                                                                <td align="left" data-label="ตำบล">ต.{{$data[$i]->blk_tumbol}}</td>
                                                                                <td data-label="อำเภอ">อ.{{$data[$i]->blk_district}}</td>
                                                                    
                                                                                
                                                                                <td class="btn1">
                                                                                    <div class="btn-group ml-auto">
                                                                                        <a href='{{ asset('/report/pdf/') }}/{{$data[$i]->blk_id}}' target=\"_blank\">  <button class="btn btn-sm btn-outline-light" ><i class="fas fa-eye"></i> รายงาน</button> </a>
                                                                                        <a href='{{ asset('/report/photo/') }}/{{$data[$i]->blk_id}}' target=\"_blank\">  <button class="btn btn-sm btn-outline-light"><i class="fas fa-images"></i> ภาพประกอบ</button> </a>
                                                                                        <a href='{{ asset('/map/') }}/{{$data[$i]->blk_id}}' target=\"_blank\">  <button class="btn btn-sm btn-outline-light"><i class="fas fa-map-pin"></i> ตำแหน่ง</button> </a>
                                                                                    </div>
                                                                                </td>                             
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
                                            <!-- end basic table  -->
                                            <!-- ============================================================== -->
                                  
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
    
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> 
    <script src="{{ asset('/js/data-table.js') }}"></script> 
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script> 
    <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script> 
   
   
    <script src="{{ asset('js/location/location_tombon.js') }}"></script>
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

        const pin = L.icon({
            iconUrl: '{{ asset('images/logo/pin.png') }}',
            iconRetinaUrl: '{{ asset('images/logo/pin.png') }}',
            iconSize: [20, 36],
            iconAnchor: [5, 30],
            popupAnchor: [0, 0]
        });

        const pinMO = L.icon({
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
                            รหัส : <a href='{{ asset('/report/pdf') }}/${item.blk_id}' target="_blank">${item.blk_code}</a>
                        </font><br>
                        <font style="font-family: 'Mitr';" size="2" color="#466DF3">ลำน้ำ : ${item.river}</font><br>
                        <font style="font-family: 'Mitr';" size="2" color="#466DF3">ที่ตั้ง : ${item.location} ต.${item.tambol} อ.${item.district}</font><br><br>
                        <table align="center">
                            <tr>
                                <td width=47%>
                                    <a href='{{ asset('/report/pdf') }}/${item.blk_id}' target="_blank">
                                        <button class="btn btn-sm btn-outline-light"><i class="fas fa-eye"></i> รายงาน</button>
                                    </a>
                                </td>
                                <td width=6%></td>
                                <td width=47%>
                                    <a href='{{ asset('/report/photo') }}/${item.blk_id}' target="_blank">
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
