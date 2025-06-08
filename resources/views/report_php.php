<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
   
     <style>
        @font-face{
        font-family:'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("fonts/THSarabunNew.ttf") format('truetype');
        }
        @font-face{
        font-family:'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("fonts/THSarabunNew Bold.ttf") format('truetype');
        }
        @page {
            size: A4;
            padding: 5px;
            }
        @media print {
            html, body {
                width: 210mm;
                height: 300mm;
                /*font-size : 16px;*/
            }
        }
        
        html, body {
            background-color: #fff;
            color: #000000;
            font-family:"THSarabunNew";
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
            font-size:20px;
        }
        .m-b-md {
            /* margin-bottom: 2px; */
        }  
        .table{
            width:100%;
            
            background-color:transparent
        }
        .table td{
            margin-top:-20px;
            text-align: center; 
        },
        .table th{
            /* padding:.2rem; */
            /* vertical-align:top; */
            border-top:1px solid #000000
        }
        .table thead th{
            /* vertical-align:bottom; */
            border-bottom:1px solid #000000;
        }
        .table tbody+tbody{
            border-top:1px solid #000000
        }
        .table .table{background-color:#f8fafc}
        /*  */
       .outline {
            border-bottom:3px #ffffff solid;
            background: transparent;
        }
        .line {
            border-bottom:1px #83748d dotted;
            background: transparent;
        }
        .box{
            text-align: left; 
            border: 1px solid #83748d;
            padding: 0 6px 0px 4px ;
            margin-left: 1px;
        }
        .box142{
            border: 1px solid #83748d;
            padding: 0 2px 0 2px ;
            margin-left: 1px;
            margin-bottom: -3px;
        }
        span {
        content: "\2611";
        }
        .sizePic{
            width: 5%;
        }
    </style>
        
</head>
<body>
    <div class="dashboard-short-list">
        <div class="row" >
            <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12 col-12" > 
                <div class="card">
                    <div class="title m-b-md">
                        <table style="margin-top:-20px;" >
                            <tr align="center">
                                <td rowspan="3" width=14%><img src="images/logo/footer/hii.png" width="90%"></td>
                                <td align="center"> <div style="font-size: 28px;margin-top:-10px;"> แบบสำรวจรายละเอียดการกีดขวางทางน้ำ </div></td>
                                <td rowspan="3" width=15%><img src="images/logo/footer/cmu.png" width="90%"></td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <div style="font-size: 18px;margin-top:-10px;">โครงการพัฒนาระบบการสำรวจและฐานข้อมูลเพื่อบริหารจัดการพื้นที่เสี่ยงภัยน้ำท่วมและภัยแล้ง  <br> 
                                        ระดับจังหวัดในพื้นที่ภาคเหนือตอนบน (ระยะที่ 1)
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td><div style="font-size: 16px;margin-top:-10px;"> ดย สถาบันสารสนเทศทรัพยากรน้ำ (องค์การมหาชน) ร่วมกับ มหาวิทยาลัยเชียงใหม่ </div> </td>
                            </tr>
                        </table>
                        <hr>

                        <div align="right" style="font-size: 16px;margin-top:-10px;">รหัสตำแหน่งกีดขวางที่: <?php  $data[0]->blk_code; ?></div>
                      
                       
                    </div>
                </div>
                <div class="card-body">
                    <?php                        
                        $text= explode(" ",$data[0]->blockageLocation->blk_village);
                        $moo = $text[1];
                        $tambol=$text[2];
                        $code=str_split($data[0]->blk_code );
                       
                        $s_lat=str_split($data[0]->blockageLocation->blk_start_utm->getLat());
                        $s_lng=str_split($data[0]->blockageLocation->blk_start_utm->getLng());
                        $e_lat=str_split($data[0]->blockageLocation->blk_end_utm->getLat());
                        $e_lng=str_split($data[0]->blockageLocation->blk_end_utm->getLng());
                    ?>
                    <table class="table-report" width="105%" >
                        <tr>
                            <td> รหัสหมู่บ้าน  
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box"><?php echo $code[7]; ?></font>
                                <font class="box"><?php echo $code[8]; ?></font>
                            
                            </td>
                            <td> รหัสตำบล 
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box"><?php echo $code[5]; ?></font>
                                <font class="box"><?php echo $code[6]; ?></font>
                            </td>
                            <td> รหัสอำเภอ 
                                <font class="box">0</font>
                                <font class="box">0</font>
                                <font class="box"><?php echo $code[3]; ?></font>
                                <font class="box"><?php echo $code[4]; ?></font>
                            </td>
                            <td> รหัสจังหวัด <font class="box">L</font> <font class="box">P</font></td>
                        </tr>
                    </table>
                    <?php function DateTimeThai($strDate)
                            {
                                $strYear = (date("Y",strtotime($strDate)));
                                $strMonth= date("n",strtotime($strDate));
                                $strDay= date("j",strtotime($strDate));
                                $strMonthCut =  Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม");
                                $strMonthThai=$strMonthCut[$strMonth];
                                return "$strDay $strMonthThai $strYear ";
                            }
                    ?>

                    <table class="table-report1" width="90%" align="center">
                        <tr>
                            <td>ผู้กรอกแบบสำรวจ</td>
                            <td colspan="3" class="line"><?php echo $data[0]->survey_engineer; ?></td>
                            <td align="center">วัน/เดือน/ปี</td>
                            <td colspan="2" class="line"><?php echo DateTimeThai($data[0]->survey_date); ?></td>
                        </tr>
                        <tr>
                            <td align="center">ตำแหน่ง</td>
                            <td colspan="2" class="line"><?php echo $data[0]->survey_engineer_position; ?></td>
                            <td align="center">หน่วยงาน</td>
                            <td class="line"><?php echo $data[0]->survey_engineer_unit; ?></td>
                            <td align="center">โทรศัพท์</td>
                            <td class="line">-</td>
                        </tr>

                        <?php if ($data[0]->blk_id == "B00399" || $data[0]->blk_id == "B00398" || $data[0]->blk_id == "B00400"): ?>
                            <tr>
                                <td align="center">ตำแหน่งที่</td>
                                <td class="line"><?php echo $data[0]->blk_id; ?></td>
                                <td align="center">ชื่อลำน้ำ</td>
                                <td colspan="2" class="line"><?php echo $data[0]->river->river_name; ?></td>
                            </tr>
                            <tr>
                                <td align="center">เป็นสาขาของแม่น้ำ</td>
                                <td class="line" colspan="3"><?php echo $data[0]->river->river_main; ?></td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <td align="center">ตำแหน่งที่</td>
                                <td class="line"><?php echo $data[0]->blk_id; ?></td>
                                <td align="center">ชื่อลำน้ำ</td>
                                <td colspan="2" class="line"><?php echo $data[0]->river->river_name; ?></td>
                                <td align="center">เป็นสาขาของแม่น้ำ</td>
                                <td class="line"><?php echo $data[0]->river->river_main; ?></td>
                            </tr>
                        <?php endif; ?>
                    </table>

                     <!-- -- ข้อ1    -- -->
                    1. ลักษณะทั่วไป
                    <table class="table-report1" width="90%" align="center">
                        <tr>
                            <td> 1.1 ประเภทลำน้ำที่เกิดปัญหากีดขวางทางน้ำ &nbsp;&nbsp;
                            <font class="line" width=70%> <?php echo $data[0]->river->river_type; ?>&nbsp;&nbsp;&nbsp;&nbsp;</font> </td>
                        </tr>
                  
                        <tr>
                             <td > 1.2 ที่ตั้งของช่วงลำน้ำที่เกิดปัญหา</td>
                        </tr>
                        
                    </table>

                      <table class="table-report1" width="72%" align="center" style="margin-bottom: 10px;" >
                        <tr>  
                              <td width=5% > หมู่ที่ </td>
                              <td width=5% class="line" align="center"> <?php echo $moo; ?> </td>
                              <td width=8%> ชื่อหมู่บ้าน </td>
                              <td width=22% class="line"> <?php echo $tambol; ?> </td>
                              <td width=5%>ตำบล  </td>
                              <td width=10% class="line"> <?php echo $data[0]->blockageLocation->blk_tumbol; ?> </td> 
                              <td width=5% >อำเภอ  </td>
                              <td width=15% class="line"> <?php echo $data[0]->blockageLocation->blk_district; ?> </td>
                              <td width=5% > จังหวัด  </td>
                              <td width=10% class="line"> เชียงใหม่ </td> 
                          <tr>
                      </table>
                      <table class="table-report1" width="72%" align="center" style="margin-bottom: 10px;" >
                        <tr>
                            <td width=5% >หมายเหตุ </td>
                            <td class="line"> <?php echo $data[0]->blockageLocation->comment; ?> </td>
                        </tr>
                      </table>

                      <table class="table-report4" width="100%" align="center">
                          <tr >
                              <td align="center">พิกัดเริ่มต้นของปัญหา </td>
                              <td >X (UTM)
                                  <font class="box"><?php echo $s_lat[0]; ?></font>
                                  <font class="box"><?php echo $s_lat[1]; ?></font>
                                  <font class="box"><?php echo $s_lat[2]; ?></font>
                                  <font class="box"><?php echo $s_lat[3]; ?></font>
                                  <font class="box"><?php echo $s_lat[4]; ?></font>
                                  <font class="box"><?php echo $s_lat[5]; ?></font>
                              </td>
                              <td>Y (UTM)
                                  <font class="box"><?php echo $s_lng[0]; ?></font>
                                  <font class="box"><?php echo $s_lng[1]; ?></font>
                                  <font class="box"><?php echo $s_lng[2]; ?></font>
                                  <font class="box"><?php echo $s_lng[3]; ?></font>
                                  <font class="box"><?php echo $s_lng[4]; ?></font>
                                  <font class="box"><?php echo $s_lng[5]; ?></font>
                                  <font class="box"><?php echo $s_lng[6]; ?></font>
                              </td>
                          </tr>
                          <tr>
                              <td align="center">พิกัดสิ้นสุดของปัญหา  </td>
                               <td > X (UTM) 
                                  <font class="box"><?php echo $e_lat[0]; ?></font>
                                  <font class="box"><?php echo $e_lat[1]; ?></font>
                                  <font class="box"><?php echo $e_lat[2]; ?></font>
                                  <font class="box"><?php echo $e_lat[3]; ?></font>
                                  <font class="box"><?php echo $e_lat[4]; ?></font>
                                  <font class="box"><?php echo $e_lat[5]; ?></font>
                              </td>
                              <td> Y (UTM)
                                  <font class="box"><?php echo $e_lng[0]; ?></font>
                                  <font class="box"><?php echo $e_lng[1]; ?></font>
                                  <font class="box"><?php echo $e_lng[2]; ?></font>
                                  <font class="box"><?php echo $e_lng[3]; ?></font>
                                  <font class="box"><?php echo $e_lng[4]; ?></font>
                                  <font class="box"><?php echo $e_lng[5]; ?></font>
                                  <font class="box"><?php echo $e_lng[6]; ?></font>
                              </td>
                          </tr>
                    </table>
                    

                    <?php
                        function checkZero($text) {
                            return $text == "0" ? "-" : $text;
                        } 
                    ?>
                    <table class="table-report" width="90%" align="center">
                            <tr>
                                <td colspan="4">1.3 หน้าตัดของลำน้ำเดิมก่อนเกิดปัญหา (โดยประมาณ) </td>
                            </tr>
                    </table>
                    <table class="table-report2" width="90%" align="center">
                            <tr >
                                <td align="right">กว้าง  </td>
                                <td align="center" class="line" width=10%><?php echo checkZero($pastData->width); ?> </td>
                                <td> เมตร </td>
                                <td align="right">ลึก  </td>
                                <td align="center" class="line"  width=10% ><?php echo checkZero($pastData->depth); ?> </td>
                                <td> เมตร </td>
                                <td align="right">ความลาดชันของตลิ่ง  </td>
                                <td align="center" class="line" width=30% ><?php echo checkZero($pastData->slop); ?> </td>
                                <td> เมตร </td>
                            </tr>
                    </table>
                    <table class="table-report" width="90%" align="center">
                            <tr><td colspan="4">1.4 หน้าตัดของลำน้ำในปัจจุบันที่เริ่มเกิดปัญหา</td></tr>
                    </table>
                    <table class="table-report2" width="80%" align="center" >
                            <tr>
                                    <td colspan="9">1.4.1 หน้าตัดของลำน้ำก่อนถึงช่วงที่เกิดปัญหา</td>
                            </tr>
                            <tr >
                                    <td align="right"  >กว้าง  </td>
                                    <td align="center" class="line" width=10%><?php echo checkZero($current_start->width); ?> </td>
                                    <td width=5%>เมตร</td>
                                    <td align="right">ลึก  </td>
                                    <td align="center" class="line"  width=10% ><?php echo checkZero($current_start->depth); ?> </td>
                                    <td > เมตร </td>
                                    <td align="right">ความลาดชันของตลิ่ง  </td>
                                    <td align="center" class="line" width=40%><?php echo checkZero($current_start->slop); ?> </td>
                                    <td > เมตร </td>
                            </tr>
                            <tr>
                                    <td colspan="9">1.4.2 หน้าตัดของลำน้ำที่แคบสุดในช่วงของลำน้ำที่เกิดปัญหา</td>
                            </tr>
                    </table>

                    <!-- checkCuase -->
                    <?php 
                        function checkCuase($text) {
                            return $text != NULL
                                ? "<img src='images/logo/check.png' width='15px;' alt='Checked' style='margin-top:10px;'>"
                                : "<img src='images/logo/square.png' width='15px;' alt='Unchecked' style='margin-top:10px;'>";
                        }
                        function checkCuaseProb($text) {
                            $img = ($text != NULL) ? 'images/logo/check.png' : 'images/logo/square.png';
                            return "<img src='{$img}' width='10px' style='margin-top:10px;'>";
                        }
                        
                    ?>
                    
                     <!-- -- checkCuase -- -->
                    <table width="80%" align="center">
                                                            
                            <tr >
                                <td ><?php echo checkCuase($current_narrow_new->waterway_type); ?> </td>
                                <td> ทางน้ำเปิด </td>
                                <td align="right"> กว้าง </td>
                                <td width=5% class="line" align="center"><?php echo checkZero($current_narrow_new->waterway->width); ?> </td>
                                <td>เมตร  </td> 
                                <td align="right"> ลึก</td>
                                <td width=5% class="line" align="center"><?php echo checkZero($current_narrow_new->waterway->depth); ?> </td>
                                <td>เมตร  </td>
                                <td align="right"> ความลาดชันของตลิ่ง</td>
                                <td width=5% class="line" align="center"><?php echo checkZero($current_narrow_new->waterway->slop); ?> </td>
                                <td colspan="2">เมตร  </td>

                            </tr>
                            <tr >
                                <td ><?php echo checkCuase($current_brigde->width); ?> </td>
                                <td> สะพาน </td>
                                <td align="right"> กว้าง </td>
                                <td class="line" align="center"><?php echo checkZero($current_brigde->width); ?> </td>
                                <td>เมตร  </td> 
                                <td align="right"> ลึก</td>
                                <td class="line" align="center"><?php echo checkZero($current_brigde->depth); ?> </td>
                                <td>เมตร  </td>
                                <td align="right"> ความยาวช่องตอม่อ</td>
                                <td class="line" align="center"><?php echo checkZero($current_brigde->len); ?> </td>
                                <td>เมตร  </td>
                                <td align="right">จำนวนตอม่อ </td>
                                <td class="line" align="center"><?php echo checkZero($current_brigde->num); ?> </td>
                                

                            </tr>
                            <tr>
                                <td ><?php echo  checkCuase($current_narrow_new->round_type); ?> </td>
                                <td> ท่อกลม </td>
                                <td align="right"> เส้นผ่านศูนย์กลาง </td>
                                <td class="line" align="center"><?php echo checkZero($current_narrow_new->round->diameter); ?> </td>
                                <td>เมตร  </td> 
                                <td align="right"> จำนวนท่อ</td>
                                <td class="line" align="center"><?php echo checkZero($current_narrow_new->round->num); ?> </td>
                                <td>ช่อง  </td>  
                                <td align="right"> ความยาว</td>
                                <td class="line" align="center"><?php echo checkZero($current_narrow_new->round->len); ?> </td>
                                <td colspan="2">เมตร  </td> 

                            </tr>

                            <tr>
                                <td ><?php echo checkCuase($current_narrow_new->square_type); ?> </td>
                                <td> ท่อเหลี่ยม </td>
                                <td align="right"> กว้าง </td>
                                <td class="line" align="center"><?php echo checkZero($current_narrow_new->square->width); ?> </td>
                                <td>เมตร  </td> 
                                <td align="right"> สูง</td>
                                <td class="line" align="center"><?php echo checkZero($current_narrow_new->square->high); ?> </td>
                                <td>เมตร </td> 
                                <td align="right"> จำนวนท่อ</td>
                                <td class="line" align="center"><?php echo checkZero($current_narrow_new->square->num); ?> </td>
                                <td colspan="2">ช่อง </td>  

                            </tr>
                    </table>
                    <table width="80%" align="center">
                            <tr>
                                <td> <?php echo checkCuase($current_narrow_new->other->detail ); ?> </td>
                                <td width=5% align="left"> อื่นๆ </td>
                                <td class="line" align="left" width=90%> <?php echo $current_narrow_new->other->detail; ?> </td>
                            </tr>
                            
                    </table>
                    <table  width="80%" align="center">
                        <tr>
                            <td colspan="9">1.4.3 หน้าตัดของลำน้ำท้ายน้ำหลังที่เกิดปัญหา</td>
                        </tr>
                        <tr >
                            <td align="right">กว้าง  </td>
                            <td align="center" class="line" width=10%><?php echo checkZero($current_end->width); ?> </td>
                            <td >เมตร</td>
                            <td align="right">ลึก  </td>
                            <td align="center" class="line"  width=10% ><?php echo checkZero($current_end->depth); ?> </td>
                            <td > เมตร </td>
                            <td align="right">ความลาดชันของตลิ่ง  </td>
                            <td align="center" class="line" width=40%><?php echo checkZero($current_end->slope); ?> </td>
                            <td > เมตร </td>
                         </tr>
                    </table>
                    <table  width="90%" align="center" >
                        <?php if($data[0]->blk_length_type=="น้อยกว่า 10 เมตร"){
                                    $lenght=$data[0]->blk_length_type;
                                }else{
                                    $lenght=$data[0]->blk_length;
                                }
                        ?>
                            <tr>
                                <td colspan="4">1.5&nbsp;ความยาวของช่วงลำน้ำที่เกิดปัญหา &nbsp;&nbsp; <font class="line" > <?php echo checkZero($lenght); ?> </font></td>
                            </tr>
                            <tr>
                                <td colspan="4">1.6 การดาดผิวของลำน้ำ 
                                    <font class="line"  > <?php echo $data[0]->blk_surface; ?>  </font>
                                    &nbsp;&nbsp;&nbsp;วัสดุที่ใช้ดาดผิวของลำน้ำ&nbsp; 
                                    <font class="line"> <?php echo $data[0]->blk_surface_detail; ?> </font> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">1.7 ความลาดชันท้องน้ำช่วงที่เกิดปัญหา&nbsp;&nbsp;
                                <font class="line"> <?php echo checkZero($data[0]->blk_slope_bed); ?> </font> 

                                </td>
                            </tr>
                    </table>
                    <!-- -- ข้อ2   --  -->
                    2. ความเสียหายที่เกิดขึ้น
                    <table width="90%" align="center">
                        <tr>
                            <td>2.1 ลักษณะความเสียหาย</td>
                        </tr>
                    </table>
                    <table  width="80%" align="center">
                        <?php 
                           function checklevel($text) {
                               if($text=="low"){
                                   $level="น้อย";
                               }else if( $text=="medium"){
                                       $level="ปานกลาง";
                               }else if( $text=="high") {
                                       $level="มาก";
                               }else{
                                   $level=NULL;
                               }
                               return $level;
                           }
                           if($damageData->other->detail=="NULL"){
                               $damage="";
                           }else{
                               $damage=$damageData->other->detail;
                           }
                           function checkDamage($text) {
                                if($text!="0"){
                                    
                                    $img='https://survey.crflood.com/images/logo/check.png';
                                    //$img='http://localhost/chiang-rai/public/images/logo/check.png';
                                    echo "<img src='{$img}'  width=3%>";
                                    //echo  "<font size=\"4\"> &#9745; </font>";
                                }else{
                                    $img='https://survey.crflood.com/images/logo/square.png';
                                    //$img='http://localhost/chiang-rai/public/images/logo/square.png';
                                    echo "<img src='{$img}'  width=3%>";
                                    // echo "<font size=\"4\"> &#9744; </font>";
                                }
                            }
                        ?>
                           <tr>
                               <td ><?php checkDamage($damage_type->flood); ?> </td>
                               <td width=15% colspan="2"> น้ำท่วม </td>
                               <td width=10%> ระดับความรุนแรง </td>
                               <td class="line"><?php echo checklevel($damageData->flood); ?></td>
                               <td width=60%></td>
                          </tr>
                          <tr >
                               <td > <?php checkDamage($damageData->waste); ?> </td>
                               <td colspan="2"> น้ำเสีย </td>
                               <td> ระดับความรุนแรง </td>
                               <td class="line"><?php echo checklevel($damageData->waste); ?></td>
                               <td width=60%></td>
                          </tr>
                          <tr >
                                <td > <?php checkDamage($damageData->other->level); ?> </td>
                               <td> อื่นๆ </td>
                               <td class="line"> <?php echo $damage; ?></td>
                               <td> ระดับความรุนแรง </td>
                               <td class="line"><?php echo checklevel($damageData->other->level); ?></td>
                               <td width=60%></td>
                          </tr>
                    </table>
                    <table  width="90%" align="center">
                        <tr>
                            <td >2.2 ความถี่ที่เกิดความเสียหาย &nbsp;&nbsp;
                            <font class="line"> &nbsp;&nbsp; <?php echo $data[0]->damage_frequency; ?>&nbsp;&nbsp;&nbsp; </font></td>
                            
                        </tr>
                    </table>

                    <!-- -- ข้อ3   -- ?> -->
                    3. สภาพปัญหา
                    <table class="table-report1" width="90%" align="center">
                        <tr><td>3.1 สาเหตุการกีดขวางลำน้ำ โดย</td></tr>
                    </table>
                    <?php
                        function checkImg($condition) {
                            return $condition ? "<img src='images/logo/check.png' width='3%'>" : "<img src='images/logo/square.png' width='3%'>";
                        }

                        function checkboxFont($condition) {
                            return $condition ? "<font size='4'>&#9745;</font>" : "<img src='images/logo/square.png' width='3%'>";
                        }

                        $nat_conditions = [
                            $problem[0]->nat_erosion,
                            $problem[0]->nat_shoal,
                            $problem[0]->nat_missing,
                            $problem[0]->nat_winding,
                            $problem[0]->nat_weed,
                            $problem[0]->nat_other
                        ];
                        $text = checkImg(array_filter($nat_conditions));

                        $hum_conditions = [
                            $problem[0]->hum_structure,
                            $problem[0]->hum_other,
                            $problem[0]->hum_trash,
                            $problem[0]->hum_soil_cover
                        ];
                        $hum = checkboxFont(array_filter($hum_conditions));

                        $hum_stc = checkboxFont(
                            $problem[0]->hum_stc_bld_num || $problem[0]->hum_stc_fence_num || $problem[0]->hum_str_other
                        );

                        $hum_stc_bu = checkboxFont(
                            $problem[0]->hum_stc_bld_bu_num || $problem[0]->hum_stc_fence_bu_num || $problem[0]->hum_str_other_bu
                        );

                        $infa = checkboxFont(
                            $problem[0]->hum_road || $problem[0]->hum_smallconvert || $problem[0]->hum_road_paralel ||
                            $problem[0]->hum_replaced_convert || $problem[0]->hum_bridge_pile
                        );

                        // ระดับปัญหา
                        switch ($problem[0]->prob_level) {
                            case "1-30%": $t = "น้อย"; break;
                            case "30-70%": $t = "ปานกลาง"; break;
                            default: $t = "มาก"; break;
                        }

                        // วิธีการแก้ไข
                        $sol_options = ["ปรับปรุงแก้ไข", "เจรจาให้รื้อถอนให้รื้อถอน", "ฟ้องร้อง", "รื้นถอน", "ยังไม่ได้ดำเนินการ"];
                        $solution_selected = $solution_id[0]->sol_how ?? "";
                        foreach ($sol_options as $i => $opt) {
                            ${"sol".($i+1)} = checkImg($solution_selected == $opt);
                        }
                        // หากไม่ตรงกับตัวเลือกไหนเลย
                        if (!in_array($solution_selected, $sol_options)) {
                            for ($i = 1; $i <= 5; $i++) {
                                ${"sol".$i} = checkImg(false);
                            }
                        }

                        // สถานะโครงการ
                        $proj_status = $project_id[0]->proj_status ?? "";
                        $budget_plan = $budget_received = $name_plan = $name_received = NULL;

                        $proj1 = $proj2 = $proj3 = $proj4 = checkImg(false);

                        switch ($proj_status) {
                            case "plan":
                                $proj1 = checkImg(true);
                                $budget_plan = $project_id[0]->proj_budget;
                                $name_plan = $project_id[0]->proj_char;
                                break;
                            case "received":
                                $proj2 = checkImg(true);
                                $budget_received = $project_id[0]->proj_budget;
                                $name_received = $project_id[0]->proj_char;
                                break;
                            case "making":
                                $proj3 = checkImg(true);
                                break;
                            case "noplan":
                                $proj4 = checkImg(true);
                                break;
                            default:
                                // ไม่ทำอะไร ใช้ค่า default
                                break;
                        }
                    ?>

                    <table class="table-report1" width="90%" align="center" style="margin-top:-10px;">
                        <tr> 
                            <td>- ธรรมชาติ </td>
                         </tr>
                    </table>
                    <table width="70%" align="center" >
                        <tr>
                                            <td ><?php echo checkCuase($problem[0]->nat_erosion) ?> </td>
                                            <td width=25%>ตลิ่งพังการกัดเซาะ </td>
                                            <td ><?php echo checkCuase($problem[0]->nat_shoal) ?> </td>
                                            <td  width=50%>การทับถมของตะกอน (ลำน้ำตื้นเขิน)</td>
                                            <td ><?php echo checkCuase($problem[0]->nat_missing) ?> </td>
                                            <td colspan="2">ลำน้ำขาดหาย</td>
                                        </tr>
                                        <tr VALIGN=TOP >
                                            <td><?php echo checkCuase($problem[0]->nat_winding) ?> </td>
                                            <td>ลำน้ำคดเคี้ยวมาก </td>
                                            <td><?php echo checkCuase($problem[0]->nat_weed) ?> </td>
                                            <td > วัชพืช  <font class="line"><?php $problem[0]->nat_weed_detail ?> </font></td>
                                            <td><?php echo checkCuase($problem[0]->nat_other) ?> </td>
                                            <td width=5%> อื่นๆ </td>
                                            <td class="line"><?php $problem[0]->nat_other_detail ?></td>
                                        </tr>
                                    </table>
                                    <table class="table-report1" width="90%" align="center" style="margin-top:-10px;">
                                        <tr> 
                                            <td> - มนุษย์ </td>
                                        </tr>
                                    </table>
                                    <table class="table-report3" width="70%" align="center" style="margin-top:-10px;">
                                        <tr>
                                            <td> - สิ่งปลูกสร้าง </td>
                                        </tr>
                                    </table>
                                    <table class="table-report4" width="70%" align="center">
                                        <tr>
                                            <td width=10%></td>
                                            <td > <?php  $hum_stc ?></td>
                                            <td> เป็นของส่วนราชการ</td>
                                            <td width=10%>เป็นส่วนอาคาร </td>
                                            <td class="line"><?php $problem[0]->hum_stc_bld_num ?> </td>
                                            <td>หลัง</td>
                                            <td width=5% align="right"> รั้ว </td>
                                            <td class="line"><?php $problem[0]->hum_stc_fence_num ?> </td>
                                            <td> หลัง </td> 
                                            <td width=5%> อื่นๆ </td>
                                            <td class="line"><?php $problem[0]->hum_str_other ?> </td>
                                        </tr>
                                         <tr>
                                            <td width=10%></td>
                                            <td ><?php  $hum_stc_bu ?> </td>
                                            <td> เป็นของส่วนราชการ</td>
                                            <td >เป็นส่วนอาคาร </td>
                                            <td class="line"><?php $problem[0]->hum_stc_bld_bu_num ?> </td>
                                            <td>หลัง</td>
                                            <td  align="right"> รั้ว </td>
                                            <td class="line"><?php $problem[0]->hum_stc_fence_bu_num ?> </td>
                                            <td> หลัง </td> 
                                            <td> อื่นๆ </td>
                                            <td class="line"><?php $problem[0]->hum_str_other_bu ?> </td>
                                        </tr>
                                    </table>
                                    <table  width="70%" align="center" style="margin-top:-10px;">
                                        <tr>
                                            <td >- ระบบสาธารณูปโภค (ถนน ท่อลอด สะพานและอื่นๆ) </td>
                                        </tr>
                                    </table>
                                    <table  width="70%" align="center">
                                        <tr> 
                                            <td width=10%></td>
                                            <td ><?php echo checkCuase($problem[0]->hum_road) ?></td>
                                            <td width=86%>ถนนขวางทางน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td width=10%></td>
                                            <td ><?php echo checkCuase($problem[0]->hum_smallconvert) ?> </td>
                                            <td width=86%>ท่อลอดถนนที่ตัดลำน้ำมีขนาดเล็กเกินไประบายน้ำหลากไม่ทัน</td>
                                        </tr>
                                        <tr>
                                            <td width=10%></td>
                                            <td ><?php echo checkCuase($problem[0]->hum_road_paralel) ?> </td>
                                            <td width=86%>ถนนขนานลำน้ำสร้างกินพื้นที่ลำน้ำ</td>
                                        </tr>
                                        <tr>
                                            <td width=10%></td>
                                            <td ><?php echo checkCuase($problem[0]->hum_replaced_convert) ?></td>
                                            <td width=86%>วางท่อตามแนวลำน้ำทดแทนลำน้ำเดิม</td>
                                        </tr>
                                        <tr>
                                            <td width=10%></td>
                                            <td ><?php echo checkCuase($problem[0]->hum_bridge_pile) ?></td>
                                            <td width=86%>สะพานมีหน้าตัดแคบเกินไป หรือมีต่อม่อมากเกินไปในช่วงฤดูน้ำหลากระบายไม่ทัน</td>
                                        </tr>
                                        <tr>
                                            <table class="table-report1" width="70%" align="center">
                                                <tr>
                                                    <td ><?php echo checkCuase($problem[0]->hum_soil_cover) ?></td>
                                                    <td width=76% >การถมดิน </td>
                                                    <td width=20%></td>
                                                </tr>
                                                <tr>
                                                    <td ><?php echo checkCuase($problem[0]->hum_trash) ?></td>
                                                    <td width=76% >สิ่งปฏิกูล </td>
                                                    <td width=20%></td>
                                                </tr>
                                                <tr>
                                                    <td ><?php echo checkCuase($problem[0]->hum_other) ?></td>
                                                    <td >อื่นๆ  <font class="line"><?php $problem[0]->hum_other_detail ?> </font></td>
                                                    <td ></td>
                                        
                                                </tr>
                                            </table>
                                        </tr>
                                    </table>
                                   
                                    <!-- -- ข้อ 4  -- ?> -->
                                    4. การดำเนินการแก้ไขของหน่วยงานท้องถิ่น และหน่วยงานที่รับผิดชอบ  <font class="line"> <?php $solution_id[0]->responsed_dept ?></font>
                                    <table  width="80%" align="center">
                                        <tr>
                                        <td><?php  $sol1 ?? "" ?> </td>
                                        <td width=15%>ปรับปรุงแก้ไขโดย </td>
                                        <td class="line" colspan="4">  <?php $solution_id[0]->sol_edit ?></td>
                                        <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td > <?php  $sol2 ?></td>
                                            <td width=20%> เจรจาให้รื้อถอน</td>
                                            <td ><?php  $sol3 ?> </td>
                                            <td  width=20%>ฟ้องร้อง</td>
                                            <td > <?php  $sol4 ?></td>
                                            <td  width=20%>รื้อถอน</td>
                                            <td > <?php  $sol5 ?></td>
                                            <td  width=20%>ยังไม่ได้ดำเนินการ</td>
                                        </tr>
                                    </table> 
                                    <table class="table-report1" width="90%" align="center">
                                        <tr>
                                            <td >4.1 ผลการดำเนินการ 
                                             <font class="line"> <?php $solution_id[0]->result ?> </font> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">4.2 สภาพในปัจจุบันของโครงการที่แก้ไขปัญหา </td>
                                        </tr>
                                    </table>    
                                    <table class="table-report4" width="90%" align="center" >
                                        <tr>
                                            <td width=10%></td>
                                            <td ><?php  $proj1 ?> </td>
                                            <td>อยู่ในแผน </td>
                                            <td font class="line"><?php $project_id[0]->proj_year ?></td>
                                            <td> ปี</td>
                                            <td>ลักษณะโครงการ </td>
                                            <td class="line"><?php $name_plan ?></td>
                                            <td>งบประมาณ</td>
                                            <td class="line"><?php if ($budget_plan != null) { echo number_format($budget_plan);} ?> <</td>
                                            <td>บาท</td>
                                        </tr>
                                        <tr>
                                            <td width=10%></td>
                                            <td ><?php  $proj2 ?> </td>
                                            <td>ได้รับงบประมาณแล้ว </td>
                                            <td class="line"><?php if($budget_received!=null){ number_format($budget_received);} ?></td>
                                            <td>บาท </td>
                                            <td> ลักษณะโครงการ </td>
                                            <td class="line"><?php $name_received ?> </td>
                                        </tr>
                                        <tr>
                                            <td width=10%></td> 
                                            <td ><?php  $proj3 ?></td>
                                            <td colspan="2">กำลังปรับปรุงหรือก่อสร้าง</td>
                                            <td align="center" ><?php  $proj4 ?></td>
                                            <td>ยังไม่มีในแผน </td>
                                        </tr>
                                    </table> 
                                    
                                       <!-- -- ข้อ 5  -- ?> -->
                                       5. รูปประกอบ 
                                            <br><br>
                                            <?php 
                                            if(isset($photo_Blockage[0]->thumbnail_name)){
                                                $num=count($photo_Blockage);
                                                $n=$num/3;
                                                $i=0;
                                                for($k=0;$k<$n+1;$k++){
                                            ?>
                                                <table  width="90%" align="center" border="1px" style="border-collapse: collapse;margin-top:-15px;" >
                                                <tr >   
                                                    <?php 
                                                    for($i=$i;$i<2+(2*$k);$i++)
                                                    {  
                                                        if($i==$num){ ?>
                                                            <td></td>
                                                        <?php    break;
                                                        }else{?>
                                                        <td align="center" width=50%><br> 
                                                            <img src="<?php echo $photo_Blockage[0]->thumbnail_name ?>"><br> <br>
                                                        </td>
                                                    <?php  } } ?>
                                                <br></tr></table>  
                                            <?php } 
                                            }?>
                                          
                                        

                </div>
            </div>
        </div>
    </div>
    
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->


<script src="js/app.js"></script>
<script src="js/main-js.js"></script>
<script src="js/shortable-nestable/Sortable.min.js"></script>
<script src="js/shortable-nestable/sort-nest.js"></script>
<script src="js/shortable-nestable/jquery.nestable.js"></script>

<script src="js/location.js"></script>
<script src="js/showhide.js"></script>
<script src="js/chooseLocation.js"></script>
<script src="js/validateNewForm.js"></script>

</body>
</html>
