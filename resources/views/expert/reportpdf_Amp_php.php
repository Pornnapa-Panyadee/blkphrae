<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <style>
		@font-face{
		font-family:'THSarabunNew';
		font-style: normal;
		font-weight: normal;
		src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
		}
	    @font-face{
		font-family:'THSarabunNew';
		font-style: normal;
		font-weight: bold;
		src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
		}
		
		html, body {
			background-color: #fff;
			color: #000000;
			font-family: "THSarabunNew";
		}
		.position-ref {
		    position: relative;
		}
		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}
		.content {
			text-align: left;
			
		}
		.title {
            font-size:16px;
            line-height: 1.2;
		}
		.m-b-md {
			/* margin-bottom: 2px; */
        }  
        .table{
            width:100%;
			/* margin-bottom:0.1rem; */
            background-color:transparent
        }
        .table td,
        .table th{
            /* padding:-.5rem; */
			/* vertical-align:top; */
			padding-top: -.3rem;
            border-top:1px solid #000000;
            line-height: 90%;
        }
        .table thead th{
            /* vertical-align:bottom; */
            border-bottom:1px solid #000000
        }
        .table td{
            height:10;
        } 
        .table .table{background-color:#f8fafc}
        .table-bordered,
        .table-bordered td,
        .table-bordered th{border:1px solid #000000}
        .table-bordered thead td,
        /* .table-bordered thead th{border-bottom-width:2px} */
        .table{border-collapse:collapse!important}
        .table-borderless tbody+tbody,
        .table-borderless td,
        .table-borderless th,
		.table-borderless thead th{border:0}
		.text-center{text-align:center!important}
        .text-right{text-align:right!important}
        html { margin-bottom: 0px}
        p.test1 {
            margin-top:5px;
            margin-left: 3px;
            margin-bottom: 5px;
        }
        p.test2 {
            margin-top:1px;
            margin-left: 3px;
            margin-bottom: 5px;
            width: 340px; 
            word-wrap:break-word;
            line-height: 0.8;
        }
        footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color:#000;
                text-align: right;
                line-height: 1.5cm;
                content: counter(page);
        }
        .page-break {
            page-break-after: always;
        }
        .customers {
            border-collapse: collapse;
            border: 4px solid #fff;
            border-color: #fff;
        }
        .text_report{
            font-size: 70px;
        }
        .text_report1{
            font-size: 42px;
            margin-bottom: -20px;
        }
        .text_report2{
            font-size: 80px;
            margin: 100px 0 -20px 0;
        }
        .text_report3{
            font-size: 30px;
            margin: 250px 0 -260px 0;
        }
        .text_report4{
            font-size: 24px;
            margin: 260px 0 -260px 0;
        }
        .text_report5{
            font-size: 60px;
            margin: 170px 0 0 0;
        }
        .text_report6{
            font-size: 18px;
        }
        .texthead{
            font-weight: bold;
        }
    </style>
        
</head>
<body>
    <div class="row" align="center" style=" margin-top:10px;"> 
    <!-- รายงานสรุป -->
    <div class="text_report">รายงานสรุป</div>
    <div class="text_report1">ข้อมูลสภาพปัญหาและแนวทางการแก้ไขปัญหาเบื้องต้น</div>
    <div class="text_report1">ของตำแหน่งการกีดขวางทางน้ำ</div>
    <?php if ($tumbol!="sum"){?>
        <div class="text_report2">ตำบล<?php echo $tumbol; ?></div>
        <div class="text_report1">อำเภอ<?php echo $amp; ?> จังหวัดแพร่</div>
    <?php }else{ ?> 
        <div class="text_report5">อำเภอ<?php echo $amp; ?> จังหวัดแพร่</div>
    <?php }?>
    <div class="text_report3"> โครงการพัฒนาระบบการสำรวจและฐานข้อมูลเพื่อบริหารจัดการพื้นที่เสี่ยงภัยน้ำท่วมและภัยแล้ง
     </div>
    <div class="text_report3"> ระดับจังหวัดในพื้นที่ภาคเหนือตอนบน (ระยะที่ 1)</div>
    

        </div>
    <footer>
        หมายเหตุ ข้อมูลใช้เพื่อการศึกษาวางแผน ไม่สามารถใช้อ้างอิงทางกฎหมายและคดีความ
    </footer>
    <div class="row" >
        <div class="col-xl-1 col-lg-1">
        </div>
        <!-- ============================================================== -->
        <!-- basic table -->
        <!-- ============================================================== -->
        <?php 
            function checkZero($text) {
                if($text=="0" ||$text==NULL ){
                    $num="-";
                }else{
                    $num=$text;
                 }
                    return $num;
                }
            function checkProbleLevel($text){
                if($text==NULL){
                    return "-";
                }
                else if($text=="1-30%"){
                    return "น้อย";
                }else if($text=="30-70%"){
                    return "ปานกลาง";
                }else{
                    return "มาก";
                }
            }
            function checkPlan($text,$year,$char,$budget){
                if($text==NULL){
                    return "-";
                }else if ($text=="plan"){
                    $c="อยู่ในแผน ".$year." ".$char." งบประมาณ ".$budget." บาท";
                    return $c;
                }else if($text=="received"){
                    return "ได้รับงบประมาณแล้ว".$budget."บาท ลักษณะโครงการ ".$char;
                }else if($text=="making"){
                    return "กำลังปรับปรุงหรือก่อสร้าง";
                }else{
                    return "ยังไม่มีในแผน";
                }
            }
            function checkDamage($flood,$waste,$other){
                
                if($flood=="0" && $waste=="0" && $other=="0"){
                    return "  -";
                } else if($flood!=NULL||$flood!=0){
                    return "น้ำท่วม";
                }else if($waste!=NULL||$waste!=0){
                    return "น้ำเสีย";
                }else if($other!=NULL||$other!=0){
                    return "อื่นๆ";
                }
            }
            function checklevel($flood,$waste,$other) {
                if($flood!=NULL||$flood!=0){
                    if($flood=="low"){
                        $level="น้อย";
                    }else if( $flood=="medium"){
                        $level="ปานกลาง";
                    }else if( $flood=="high") {
                        $level="มาก";
                    }else{
                        $level=NULL;
                    }
                }else if($waste!=NULL||$waste!=0){
                    if($waste=="low"){
                        $level="น้อย";
                    }else if( $waste=="medium"){
                        $level="ปานกลาง";
                    }else if( $waste=="high") {
                        $level="มาก";
                    }else{
                        $level=NULL;
                    }

                }else if($other!=NULL||$other!=0){
                    if($other=="low"){
                        $level="น้อย";
                    }else if( $other=="medium"){
                        $level="ปานกลาง";
                    }else if( $other=="high") {
                        $level="มาก";
                    }else{
                        $level=NULL;
                    }
                }
                    return $level;
            }
            function checkRisk($level,$fq){
                if($level=="มาก"){
                    $l=3;
                }else if($level=="ปานกลาง"){
                    $l=2;
                }else{
                    $l=1;
                }

                if($fq=="ทุกปี"){
                    $f=3;
                }else if($fq=="2-4 ปีครั้ง"){
                    $f=2;
                }else{
                    $f=1;
                }
                
                $cal=$l*$f;

                if($cal<3){
                    return "น้อย";
                }
                else if($cal<6){
                    return "ปานกลาง";
                }else{
                    return "มาก";
                }
            }

            function checkW($text){
                 if($text=="0" ||$text==NULL ||$text=="-"){
                        return " ";
                 }else{
                        return " ความลาดชันท้องน้ำ ".$text;
                 }
            }
            function DateTimeThai($strDate)
                            {
                                $strYear = (date("Y",strtotime($strDate))+543);
                                $strMonth= date("n",strtotime($strDate));
                                $strDay= date("j",strtotime($strDate));
                                // $strHour= date("H",strtotime($strDate));
                                // $strMinute= date("i",strtotime($strDate));
                                // $strSeconds= date("s",strtotime($strDate));
                                $strMonthCut =  Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม");
                                $strMonthThai=$strMonthCut[$strMonth];
                                return "$strDay $strMonthThai $strYear ";
                            }
        ?>
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12" > 
            <div class="card">
                    
                <div class="card-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <?php  
                            if($data==NULL){ ?>
                                    <div class="page-break"></div>
                                    - - - ไม่มีข้อมูลสำรวจ - - -
                            <?php }else{
                                for($i=0;$i<count($data);$i++){?>
                                    <div class="page-break"></div>
                                    <div class="title m-b-md" style="margin-top:-30px;">
                                        <table>
                                            <tr>
                                                <td width="20%" align="right" >
                                                    <img src='images/footer/hii.png' width="50px">
                                                </td>
                                                <td width="60%">
                                                    <div class="texthead" > ข้อมูลสภาพปัญหาและแนวทางการแก้ไขปัญหาเบื้องต้นของตำแหน่งการกีดขวางทางน้ำ พื้นที่จังหวัดแพร่</div>
                                                </td>
                                                <td width="20%" align="left">
                                                    <img src='images/footer/cmu.png' width="30px"></td>
                                                </td>  
                                            </tr>
                                        </table>
                                    </div>
                                    <div align="right" style="margin-top:-20px;">
                                        <font class="texthead" > รหัสตำแหน่งกีดขวางที่ : </font> <?php echo  $data[$i][0]->blk_code; ?> 
                                    </div>
                                    <div class="title m-b-md">
                                        <table  class="table table-borderless" width="80%" align="center">
                                                <tr>
                                                    <td><font class="texthead" > ชื่อลำน้ำ </font><?php echo  $data[$i][0]->river->river_name; ?></td>
                                                    <td colspan="2"> <font class="texthead" > เป็นสาขาของแม่น้ำ </font> <?php echo  $data[$i][0]->river->river_main; ?> </td>
                                                    <td><font class="texthead" > ประเภทลำน้ำ </font><?php echo  $data[$i][0]->river->river_type; ?></td>
                                                    <td><font class="texthead" > วันที่สำรวจ </font><?php echo DateTimeThai($data[$i][0]->created_at); ?> </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><font class="texthead" > หมู่บ้าน </font><?php echo $data[$i][0]->blockageLocation->blk_village; ?></td>
                                                    <td><font class="texthead" > ตำบล </font><?php echo $data[$i][0]->blockageLocation->blk_tumbol; ?>  </td>
                                                    <td><font class="texthead" > อำเภอ </font><?php echo   $data[$i][0]->blockageLocation->blk_district; ?></td>
                                                    <td><font class="texthead" > จังหวัด </font><?php echo   $data[$i][0]->blockageLocation->blk_province; ?></td>
                                                </tr>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-weight: bold;">
                                                    <td colspan="4" class="text-center" style="background-color:#C0C0C0">พิกัดเริ่มปัญหา</td>
                                                    <td colspan="4" class="text-center" style="background-color:#C0C0C0">พิกัดสิ้นสุดปัญหา</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr align="center">
                                                    <td width="10%">X(UTM)</td>
                                                    <td><?php echo $data[$i][0]->blockageLocation->blk_start_utm->getLat(); ?></td>
                                                    <td width="10%">Y(UTM)</td>
                                                    <td><?php echo $data[$i][0]->blockageLocation->blk_start_utm->getLng(); ?></td>
                                                    <td width="10%">X(UTM)</td>
                                                    <td><?php echo $data[$i][0]->blockageLocation->blk_end_utm->getLat(); ?></td>
                                                    <td width="10%">Y(UTM)</td>
                                                    <td><?php echo $data[$i][0]->blockageLocation->blk_end_utm->getLng(); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top:1px;">
                                            <thead>
                                                <tr style="font-weight: bold;">
                                                    <td colspan="2" class="text-center" style="background-color:#C0C0C0">หน้าตัดลำน้ำที่เกิดปัญหา</td>
                                                    <td colspan="4"  class="text-center" style="background-color:#C0C0C0">กว้าง (เมตร)</td>
                                                    <td colspan="4"  class="text-center" style="background-color:#C0C0C0">ลึก (เมตร)</td>
                                                    <td colspan="4"  class="text-center" style="background-color:#C0C0C0">ความชันตลิ่ง</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2">หน้าตัดลำน้ำเดิมในอดีตก่อนเกิดปัญหา</td>
                                                    <td colspan="4"  class="text-center" ><?php echo(checkZero($pastData[$i]->width)); ?></td>
                                                    <td colspan="4"  class="text-center" ><?php echo(checkZero($pastData[$i]->depth)); ?></td>
                                                    <td colspan="4"  class="text-center" ><?php echo(checkZero($pastData[$i]->slop)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">หน้าตัดลำน้ำก่อนถึงที่เกิดปัญหา</td>
                                                    <td colspan="4"  class="text-center" ><?php echo(checkZero($current_start[$i]->width)); ?></td>
                                                    <td colspan="4"  class="text-center" ><?php echo(checkZero($current_start[$i]->depth)); ?></td>
                                                    <td colspan="4"  class="text-center" ><?php echo(checkZero($current_start[$i]->slop)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="14">หน้าตัดที่แคบที่สุดของช่วงที่เกิดปัญหา</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> - ทางน้ำเปิด</td>
                                                    <td colspan="4"  class="text-center"><?php echo(checkZero($current_narrow_new[$i]->waterway->width )); ?> </td>
                                                    <td colspan="4"  class="text-center"><?php echo(checkZero($current_narrow_new[$i]->waterway->depth)); ?></td>
                                                    <td colspan="4"  class="text-center"><?php echo(checkZero($current_narrow_new[$i]->waterway->slop)); ?></td>
                                                </tr>
        
                                                <tr>
                                                    <td rowspan="2" colspan="2"> - สะพาน</td>
                                                    <td rowspan="2" colspan="4"  class="text-center"><?php echo(checkZero($current_brigde[$i]->width)); ?></td>
                                                    <td rowspan="2" colspan="4"  class="text-center"><?php echo(checkZero($current_brigde[$i]->depth)); ?></td>
                                                    <td colspan="2" >ความยาวช่องตอม่อ</td>
                                                    <td  class="text-center"><?php echo(checkZero($current_brigde[$i]->len)); ?></td>
                                                    <td  class="text-center">เมตร</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"  >จำนวนตอม่อ</td>
                                                    <td  class="text-center"><?php echo(checkZero($current_brigde[$i]->num)); ?></td>
                                                    <td  class="text-center">ช่อง</td>
                                                </tr>
        
                                                <tr>
                                                    <td rowspan="2"> - กรณีท่อลอด</td>
                                                    <td>ท่อกลม</td>
                                                    <td colspan="2"> เส้นผ่านศูนย์กลาง</td>
                                                    <td class="text-center"> <?php echo(checkZero($current_narrow_new[$i]->round->diameter)); ?> </td> 
                                                    <td>เมตร</td>
                                                    <td colspan="2"> ยาว </td>
                                                    <td class="text-center"> <?php echo(checkZero($current_narrow_new[$i]->round->len)); ?> </td>
                                                    <td> เมตร</td>
                                                    <td colspan="2"> จำนวนท่อ </td>
                                                    <td class="text-center"> <?php echo(checkZero($current_narrow_new[$i]->round->num)); ?> </td>
                                                    <td> ช่อง</td>
                                                </tr>
                                                <tr>
                                                    <td>ท่อเหลี่ยม</td>
                                                    <td>กว้าง </td>
                                                    <td class="text-center"><?php echo(checkZero($current_narrow_new[$i]->square->width)); ?>  </td>
                                                    <td class="text-center">เมตร</td>
                                                    <td>สูง </td>
                                                    <td class="text-center"> <?php echo(checkZero($current_narrow_new[$i]->square->high)); ?> </td>
                                                    <td class="text-center"> เมตร</td>
                                                    <td>ยาว </td>
                                                    <td class="text-center"> <?php echo(checkZero($current_narrow_new[$i]->square->len)); ?> </td>
                                                    <td class="text-center"> เมตร</td>
                                                    <td>จำนวนท่อ </td>
                                                    <td class="text-center"><?php echo(checkZero($current_narrow_new[$i]->square->num)); ?></td>
                                                    <td class="text-center">ช่อง</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> - อื่นๆ</td>
                                                    <td colspan="12"> <?php echo(checkZero($current_narrow_new[$i]->other->detail)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">หน้าตัดลำน้ำด้านท้ายน้ำหลังช่วงที่เกิดปัญหา</td>
                                                    <td class="text-center" colspan="4"><?php echo(checkZero($current_end[$i]->width)); ?> </td>
                                                    <td class="text-center" colspan="4"><?php echo(checkZero($current_end[$i]->depth)); ?> </td>
                                                    <td class="text-center" colspan="4"><?php echo(checkZero($current_end[$i]->slope)); ?> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        <table  class="table table-borderless" >
                                            <tr>
                                                <td colspan="2"> <font style="font-weight: bold;" > ความยาวของช่วงลำน้ำที่เกิดปัญหา </font> เป็นจุดระยะ  <?php echo(checkZero($data[$i][0]->blk_length_type)); ?> </td>
                                                <td ><font style="font-weight: bold;" >การดาดผิวของลำน้ำ </font><?php echo(checkZero($data[$i][0]->blk_surface)); ?></td>
                                                <td ><font style="font-weight: bold;" >วัสดุที่ใช้ดาดผิวของลำน้ำ </font><?php echo(checkZero($data[$i][0]->blk_surface_detail)); ?></td>
                                            </tr>
                                            <tr>
                                                <td width=20%><font style="font-weight: bold;" >ลักษณะความเสียหาย </font> <?php echo(checkDamage($damageData[$i]->flood,$damageData[$i]->waste,$damageData[$i]->other->level)); ?></td>
                                                <td width=30%><font style="font-weight: bold;" >ระดับ</font> <?php echo(checklevel($damageData[$i]->flood,$damageData[$i]->waste,$damageData[$i]->other->level)); ?></td>
                                                <td><font style="font-weight: bold;" >ความถี่ที่เกิดความเสียหาย </font> <?php echo(checkZero($data[$i][0]->damage_frequency)); ?> </td>

                                                <?php 
                                                    $level=checklevel($damageData[$i]->flood,$damageData[$i]->waste,$damageData[$i]->other->level);
                                                ?>
                                                <td><font style="font-weight: bold;" >ระดับความเสี่ยง </font><?php echo(checkRisk($level,$data[$i][0]->damage_frequency)); ?></td>
                                            </tr>
                                        </table>
                                    
                                        <table  class="table table-borderless" width=90% >
                                            <tr>
                                                <td colspan="3"><font style="font-weight: bold;" > สาเหตุของการกีดขวางลำน้ำ </font></td>
                                            </tr>
                                            <tr>
                                                <td colspan="1" width=15%> &nbsp;&nbsp;&nbsp;> โดยธรรมชาติ</td>
                                                <td colspan="2"><?php echo(checkZero($nut[$i])); ?></td>
                                            </tr>
                                            <tr>
                                                <td  width=15% valign="top"> &nbsp;&nbsp;&nbsp;> โดยมนุษย์</td>
                                                <td width=3% valign="top"> จาก</td>
                                                <td >
                                                    <?php 
                                                        $n=0;
                                                            for($j=0;$j<5;$j++){
                                                                if($hum[$i][$j]!=NULL){
                                                                    if($i<2){
                                                                        echo $hum[$i][$j]."<br>";
                                                                    }else{
                                                                        echo $hum[$i][$j]." ";
                                                                    }
                                                                    
                                                                }else{
                                                                    $n=$n+1;
                                                                }
                                                            }
                                                        if($n==5){
                                                            echo "-";
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>

                                        <table class="table table-borderless" width=90% >
                                            <tr>
                                                <td width=20%><font style="font-weight: bold;" > ระดับการกีดขวาง</font> <?php echo(checkProbleLevel($problem[$i][0]->prob_level)); ?></td>
                                                <td>คิดเป็น <?php echo(checkZero($problem[$i][0]->prob_level)); ?></td>
                                                <td><font style="font-weight: bold;" >หน่วยงานการดำเนินการแก้ไข </font><?php echo(checkZero($solution_id[$i][0]->responsed_dept)); ?></td>
                                            </tr>
                                                <tr>
                                                    <td><font style="font-weight: bold;" >โดยวิธี</font> <?php echo $solution_id[$i][0]->sol_how; ?></td>
                                                    <td colspan="2"><font style="font-weight: bold;" >ผลการดำเนินการ</font> <?php echo(checkZero($solution_id[$i][0]->result)); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" valign="top"><font style="font-weight: bold;" >สภาพในปัจจุบันของโครงการที่แก้ไขปัญหา <?php echo(checkPlan($project_id[$i][0]->proj_status,$project_id[$i][0]->proj_year,$project_id[$i][0]->proj_char,$project_id[$i][0]->proj_budget)); ?></td>
                                                </tr>
                                        </table>

                                        <table class="table table-bordered" width="400px;">
                                    
                                            <tbody>
                                                <tr style="font-weight: bold;" >
                                                    <td class="text-center" style="background-color:#C0C0C0" width=50%;>สภาพปัญหาการกีดขวางทางน้ำ</td>
                                                    <td class="text-center" style="background-color:#C0C0C0" width=50%;>แนวทางและวิธีการแก้ไขปัญหาเบื้องต้น</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2" valign="top">
                                                        <p class="test2"><?php echo(checkZero($expert[$i][0]->exp_problem)) ?> </p>
                                                    </td>
                                                    <td>
                                                        <p class="test1">
                                                            <?php 
                                                                if($expert[$i][0]->maning==1){
                                                                    echo "เนื่องจากตำแหน่งกีดขวางทางน้ำของลำน้ำหรือลำเหมืองนี้ไม่สามารถหาขนาด พื้นที่รับน้ำได้ชัดเจนและไม่มีข้อมูลการวัดน้ำ จึงหาอัตราการไหลโดยใช้วิธีของ แมนนิ่ง และกำหนดให้มีน้ำไหลเต็มลำน้ำ ในช่วงต้นน้ำก่อนถึงจุดกีดขวาง";
                                                                    echo "<br>โดยมีอัตราการไหลสูงสุด = ".checkZero($expert[$i][0]->exp_maxflow)." ลบ.ม./วินาที &nbsp;<br>";
                                                                }else{
                                                                    echo "ข้อมูลพื้นที่รับน้ำของตำแหน่งที่เกิดปัญหา <br>";  
                                                                    if($expert[$i][0]->exp_a25==0){ 
                                                                        echo "A = ".checkZero($expert[$i][0]->exp_area)." ตารางกิโลเมตร&nbsp;";
                                                                        echo "L0 = ".checkZero($expert[$i][0]->exp_L0)." กิโลเมตร&nbsp;";
                                                                        echo "H = ".checkZero($expert[$i][0]->exp_H)." เมตร&nbsp;";
                                                                        echo "C = ".checkZero($expert[$i][0]->exp_C)."<br>";
                                                                        echo "tc = ".checkZero($expert[$i][0]->exp_tc)." ชั่วโมง&nbsp;&nbsp;";
                                                                        echo "I = ".checkZero($expert[$i][0]->exp_I)." มิลลิเมตร/ชั่วโมง&nbsp;";
                                                                        echo "อัตราการไหลสูงสุด = ".checkZero($expert[$i][0]->exp_maxflow)." ลบ.ม./วินาที &nbsp;<br>";
                                                                        echo "Return period = ".checkZero($expert[$i][0]->exp_returnPeriod)." ปี";
                                                                    }else{
                                                                        echo "A = ".checkZero($expert[$i][0]->exp_area)." ตารางกิโลเมตร&nbsp;";
                                                                        echo "อัตราการไหลสูงสุด = ".checkZero($expert[$i][0]->exp_maxflow)." ลบ.ม./วินาที &nbsp;<br>";
                                                                        echo "Return period = ".checkZero($expert[$i][0]->exp_returnPeriod)." ปี";
                                                                    }
                                                                }
                                                                
                                                            ?> 
                                                            
                                                        
                                                        </p>
                                                    
                                                    </td>
                                                
                                                
                                                </tr>
                                            
                                                <tr>
                                                    <td>  <p class="test2"> <?php echo((checkZero($expert[$i][0]->exp_solution))."  ".checkW($expert[$i][0]->exp_slope)); ?> </p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" width="400px;"  style="margin-top:1px;margin-bottom:-1px;">
                                            <thead>
                                                <tr>
                                                    <td colspan="3" style="background-color:#C0C0C0; font-weight: bold;">รูปภาพประกอบ</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td align="center" width=35%;>
                                                        <div style="margin-top:5px;"><img src="<?php echo ($expert[$i][0]->exp_pixmap); ?>" width=100px;></div>                                                        
                                                    </td>
                                                    <td align="center">
                                                        <img src="images/expert/map/<?php echo($data[$i][0]->blk_code)?>.jpg"  width=140px;></div>
                                                    </td>
                                                    <td align="center" width=35%;> 
                                                        <div style="margin-top:5px;"><img src="<?php echo ($expert[$i][0]->exp_pix1); ?>"  width=120px;></div>
                                                        <div style="margin-top:15px;margin-bottom:10px;"><img src="<?php echo ($expert[$i][0]->exp_pix2); ?>"  width=120px;></div>
                                                       
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                
                                <?php } 
                            }?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main-js.js') }}"></script>
<script src="{{ asset('js/shortable-nestable/Sortable.min.js') }}"></script>
<script src="{{ asset('js/shortable-nestable/sort-nest.js') }}"></script>
<script src="{{ asset('js/shortable-nestable/jquery.nestable.js') }}"></script>

<script src="{{ asset('js/location.js') }}"></script>
<script src="{{ asset('js/showhide.js') }}"></script>
<script src="{{ asset('js/chooseLocation.js') }}"></script>
<script src="{{ asset('js/validateNewForm.js') }}"></script>


</body>
</html>
