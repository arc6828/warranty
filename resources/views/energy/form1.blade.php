@extends('layout.main')

@section('title','Form 1')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">

            <div class="col-md-12">
            
            <div class="card mb-4">
                    <div class="card-header">ประจำปี 25xx</div>
                    <div class="card-body">
                    <form class="form-inline">
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" value="ชื่อนิติบุคคล">
    <input type="text" readonly class="form-control-plaintext" value="บริษัท">
    <input type="text" class="form-control"  placeholder="">
    <input type="text" readonly class="form-control-plaintext" value="จำกัด">
  </div>
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" value="ชื่อโรงงาน">
    <input type="text" readonly class="form-control-plaintext" value="โรงงาน">
    <input type="text" class="form-control"  placeholder="">
  </div>
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" value="TSIC-ID">
    <input type="text" readonly class="form-control-plaintext" value="">
    <input type="text" class="form-control"  placeholder="">
  </div>
  

                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">

                    <div class="form-group " >ประธานคณะทำงานด้านการจัดการพลังงาน</div>
                    <form class="form-inline">
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="ลงชื่อ">
                    <input type="text" class="form-control"  placeholder="">
                        </div>
                        </form>
                        <form class="form-inline">
                        <div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="วันที่">
                    <input type="date" class="form-control"  placeholder="">
                        </div> 
                        </form>
                    </div>


                    <div class="card-body">


                    <div class="form-group " > ผู้รับผิดชอบด้านพลังงาน</div>
                    <form class="form-inline">
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="ลงชื่อ">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form>
                    <div class="form-group">
                    <div class="form-group " >ตำแหน่ง ผู้รับผิดชอบดานพลังงานสามัญ ทะเบียนเลขที่</div>
                        <input type="text" class="form-control"  placeholder="">
                    </div>
                    </form>
                    <form class="form-inline">
                        <div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="วันที่">
                    <input type="date" class="form-control"  placeholder="">
                        </div> 
                        </form>

                        <form class="form-inline">
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="ลงชื่อ">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form>
                    <div class="form-group">
                    <div class="form-group " >ตำแหน่ง ผู้รับผิดชอบดานพลังงานอาวุโส ทะเบียนเลขที่</div>
                        <input type="text" class="form-control"  placeholder="">
                    </div>
                    </form>
                    <form class="form-inline">
                        <div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="วันที่">
                    <input type="date" class="form-control"  placeholder="">
                        </div> 
                        </form>
                        
                        
                    </div>
                    <div class="card-body">

                    <div class="form-group " > เจ้าของโรงงาน</div>
                    <form class="form-inline">
                   <div class="form-group mb-2">
                   <input type="text" readonly class="form-control-plaintext" value="ลงชื่อ">
                   <input type="text" class="form-control"  placeholder="">
                   </div>
                   </form>
                   <form class="form-inline">
                   <div class="form-group mb-2">
                   <input type="text" readonly class="form-control-plaintext" value="วันที่">
                   <input type="date" class="form-control"  placeholder="">
                   </div> 
                   </form>
                   </div>

                </div>
            

             <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                    <div class="form-group " >ระบุกลุ่มโรงงานควบคุม ดังนี้</div>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp;&nbsp;&nbsp;กลุ่มที่ 1 ( ขนาดเล็ก ) : โรงงานควบคุมที่ใช้เครื่องวัดไฟฟ้าหรือติดตั้งหม้อแปลงไฟฟ้ารวมกันอย่างน้อยกว่าสามพันกิโลวัตต์หรือสามพันห้าร้อยสามสิบ
                    <br>  &nbsp;&nbsp;&nbsp;&nbsp;  กิโลโวลต์แอมแปร์หรือโรงงานควบคุมที่ใช้พลังงานไฟฟ้า พลังงานจากไอน้ำ หรือพลังงานสิ้นเปลืองอื่นๆ โดยมีปริมาณพลังงานเทียบเท่า
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;   พลังงานไฟฟ้าต่ำกว่าหกสิบล้านเมกะจูล/ปี </div> 
                     </form>
                    
                     <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp;&nbsp;&nbsp;กลุ่มที่ 2 ( ขนาดใหญ่ ) : โรงงานควบคุมที่ใช้เครื่องวัดไฟฟ้าหรือติดตั้งหม้อแปลงไฟฟ้ารวมกันรวมกันตั้งแต่สามพันกิโลวัตต์หรือสามพันห้าร้อยสามสิบ
                    <br>  &nbsp;&nbsp;&nbsp;&nbsp;  กิโลโวลต์แอมแปร์ขึ้นไปหรือโรงงานควบคุมที่ใช้พลังงานไฟฟ้า พลังงานจากไอน้ำ หรือพลังงานสิ้นเปลืองอื่นๆ โดยมีปริมาณพลังงานเทียบเท่า
                    <br>  &nbsp;&nbsp;&nbsp;&nbsp;  พลังงานไฟฟ้าตั้งแต่หกสิบล้านเมกะจูล/ปี </div> 
                     </form>
                     </div>
                     
                     <div class="card-body">
                     <div class="form-group  mb-2" >ที่อยู่โรงงาน</div>
                     <form class="form-inline">
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="เลขที่">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text"  readonly class="form-control-plaintext" value="หมู่">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="ถนน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ตำบล">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="อำเถอ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="จังหวัด">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="รหัสไปรษณี">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="โทรศัพท์">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="โทรสาร">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="อีเมล">
                    <input type="text" class="form-control"  placeholder="">
                        </div>
                        </form></div>
                        <div class="card-body">
                     <div class="form-group  mb-2" >ที่อยู่สำนักงาน</div>
                     <form class="form-inline">
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="เลขที่">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text"  readonly class="form-control-plaintext" value="หมู่">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="ถนน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ตำบล">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="อำเถอ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="จังหวัด">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="รหัสไปรษณี">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="โทรศัพท์">
                    <input type="text" class="form-control"  placeholder="">
                    </div><div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext" value="โทรสาร">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="อีเมล">
                    <input type="text" class="form-control"  placeholder="">
                        </div>
                        </form>
                        <div class="card-body">
                     <div class="form-group  mb-2" >ประเภทอุตสาหกรรม</div>
                     <form class="form-inline">
                        <div class="form-group mb-2">
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; หิน กรวด ดิน ทราย  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; อาหาร เครื่องดื่มและยาสูบ  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; สิ่งทอ  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; ไม้   &nbsp;&nbsp;&nbsp;&nbsp;
                        </div><div class="form-group mb-2">
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; กระดาษ  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; เคมี  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; อโลหะ  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; โลหะ   &nbsp;&nbsp;&nbsp;&nbsp;
                        </div><div class="form-group mb-2">
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; ผลิตภัณฑ์จากโลหะ  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; การผลิตอื่นๆ  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; การไฟฟ้าและก๊าซ  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="1" value="" > &nbsp;&nbsp; การประปา   &nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        </form></div>
                        <div class="card-body">
                        <form class="form-inline">
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="โรงงานเริ่มมทำการผลิตเมื่อ">
                    <input type="text" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนพนักงาน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="คน">
                        </div>
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="แผนก/ฝ่าย">
                        </div>
                        </form></div>


                        <div class="card-body">
                        <form class="form-inline">
                        <div class="form-group  mb-2" >เวลาทำงาน</div>
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="ส่วนสำนักงาน">
                     <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนชั่วโมงทำงาน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ชั่วโมง/วัน">
                        </div>
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนวันทำงาน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="วัน/ปี">
                        </div>
                        <div class="form-group mb-2">
                        <input type="text" readonly class="form-control-plaintext" value="">
                        <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="รวมชั่วโมงทำงาน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ชั่วโมง/ปี">
                        </div>

                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="ส่วนโรงงาน">
                     <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนชั่วโมงทำงาน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ชั่วโมง/วัน">
                        </div>
                        <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนวันทำงาน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="วัน/ปี">
                        </div>
                        <div class="form-group mb-2">
                        <input type="text" readonly class="form-control-plaintext" value="">
                        <input type="text" readonly class="form-control-plaintext" value="">
                     <input type="text" readonly class="form-control-plaintext" value="รวมชั่วโมงทำงาน">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ชั่วโมง/ปี">
                        </div>
                        <div class="form-group  mb-2" >สำหรับโรงงานที่ไม่ได้ดำเนินการผลิตต่อเนื่องตลอดทั้งปี ระบุระยะเวลาที่ดำเนินการจริง</div>
                        <div class="form-group mb-2">
                        <input type="text" readonly class="form-control-plaintext" value="ตั้งแต่เดือน">
                        <input type="text" class="form-control"  placeholder="">
                        <input type="text" readonly class="form-control-plaintext" value="ถึง เดือน">
                        <input type="text" class="form-control"  placeholder="">
                        </div><div class="form-group mb-2">
                        <input type="text" readonly class="form-control-plaintext" value="รวมเป็น">
                        <input type="text" class="form-control"  placeholder="">
                        <input type="text" readonly class="form-control-plaintext" value="เดือน">

                        </div>
                        

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                    <div class="form-group mb-2 " >โครงสร้างคณะทำงานดานการจัดการพลังงาน</div>
                    <form>
                    <div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>
                    <div><label for="exampleFormControlFile1" >( ใส่ผังโครงสร้างคณะทำงานดานการจัดการพลังงาน )</label></div></div>

                
                    <div class="card-body">
                    <div class="form-group mb-2 " >การแต่งตั้งคณะทำงานด้านการจัดพลังงาน และอำนาจหน้าที่ความรับผิดชอบ</div>
                    <form>
                    <div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    </form>
                    <div><label for="exampleFormControlFile1" >( ใส่คำสั่งแต่งตั้งคณะทำงานด้านการจัดพลังงาน )</label></div>
                    <div class="form-group mb-2"></div>
                    <form class="form-inline ">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; ติดประกาศ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนติดประกาศ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="แห่ง">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; โปสเตอร์ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนติดประกาศ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="แห่ง">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; เอกสารเผยแพร่ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="แผ่นพับ/วารสาร">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ฉบับ">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; เสียงตามสาย &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="สัปดาห์ละ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ครั้ง ช่วงเวลา">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; จดหมายอิเล็กทรอนิกส์ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนผู้คนได้รับ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="คน      ระดับของผู้รับ">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>


                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; การประชุมพนักงาน &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="สัปดาห์ละ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ครั้ง">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; อื่นๆ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                    <table class="table table-bordered table-hover">
                        
                          <tr class="table table-bordered table-dark">
                              <th scope="row">ระดับ<br>คะแนน </th>
                              <th>นโยบายการอนุรักษ์พลังงาน </th>
                              <th>การจัดองค์กร </th>
                              <th>กระตุ้นและสร้างแรงจูงใจ </th>
                              <th>ระบบข้อมูลข่าวสาร</th>
                              <th>ประชาสัมพันธ์ </th>
                              <th>การลงทุน </th>
                             </tr>       

                            <tr >
                              <th scope="row">4 </th>
                              <th>มีนโยบายการอนุรักษ์พลังงานจากฝ่ายบริหารและถือเป็นส่วนหนึ่งของนโยบายของบริษัท </th>
                              <th>มีการจัดองค์กรและเป็นโครงสร้างส่วนหนึ่งของฝ่ายบริหารกำหนดหน้าที่ความรับผิดชอบไว้ชัดเจน </th>
                              <th>มีการประสานงานระหว่างผู้รับผิดชอบด้านพลังงาน และทีมงานทุกระดับอย่งสม่ำเสมอ </th>
                              <th>กำหนดเป้าหมายที่ครอบคลุม ติดตามผล หาข้อผิดพลาดประเมิณผล และควบคุมการใช้งบประมาณ</th>
                              <th>ประชาสัมพันธ์คุณค่าของการประหยัดพลังงาน และผลการดำเนินงานของการจัดการพลังงาน </th>
                              <th>จัดสรรงบประมาณโดยละเอียด โดยพิจารณาถึงความสำคัญของโครงการ </th>
                             </tr>         
                          
                             <tr >
                              <th scope="row">3 </th>
                              <th>มีนโยบายและมีการสนับสนุนเป็นครั้งคราวจากฝ่ายบริหาร </th>
                              <th>ผู้รับผิดชอบด้านพลังงานรายงานโดยตรงต่อคณะกรรมการการจัดการพลังงาน ซึ่งประกอบไปด้วย หัวหน้าฝ่ายต่าง ๆ </th>
                              <th>คณะกรรมการอนุรักษ์พลังงานเป็นเป็นช่องทางหลักในการดำเนินงาน </th>
                              <th>แจ้งผลการใช้พลังงานจากมิเตอร์ย่อยให้แต่ละฝ่ายทราบ แต่ไม่มีการแจ้งถึงผลการประหยัด</th>
                              <th>ให้พนักงานที่บโครงการอนุรักษ์พลังงาน และให้มีการประชาสัมพันธ์อย่างสม่ำเสมอ </th>
                              <th>ใช้ระยะเวลา คุ้มทุนเป็นหลักในการพิจารณาการลงทุน </th>
                             </tr> 
                              
                             <tr >
                              <th scope="row">2 </th>
                              <th>ไม่มีการกำหนดนโยบายที่ัดเจนโดยผู้บริหารหรือผู้รับผิดชอบด้านพลังงาน </th>
                              <th>ผู้รับผิดชอบด้านพลังงานรายงานต่อคณะกรรมการเฉพาะกิจ แต่สายงานบังคับบัญชาไม่ชัดเจน </th>
                              <th>คณะกรรมการเฉพาะกิจเป็น้ดำเนินการ </th>
                              <th>ทำรายงานติดตามประเมิณผล โดยดูจากมิเตอร์ให้คณะกรรมการเฉพาะกิจเข้ามาเกี่ยวข้องกับการตั้งงบประมาณ</th>
                              <th>จัดฝึกอบรมให้พนังานรับราบเป็นครั้งคราว </th>
                              <th>ลงทุนโดยดูมาตราการที่มีระยะคุ้มทุนเร็ว</th>
                             </tr> 

                             <tr >
                              <th scope="row">1 </th>
                              <th>ไม่มีแนวทางปฏิบัติที่ทำไว้เป็นลายลักษณ์อักษร </th>
                              <th>ผู้รับผิดชอบด้านพลังงานมีขอบเขตหน้าที่รับผิดชอบชัดเจน </th>
                              <th>มีการติดต่ออย่างไม่เป็นทางการระหว่างวิศวกรกับผู้ใช้ะลังงาน(พนักงาน) </th>
                              <th>มีการสรุปรายงานด้านค่าใช้จ่ายการใช้พลังงานเพื่อใช้กันภายในวิศวกรรม</th>
                              <th>แจ้งให้พนักงานทราบอย่างไม่เป็นทางการเพื่อส่งเสริมการใช้พลังงานอย่างมีประสิทธิภาพ </th>
                              <th>พืจารณาเฉพาะมาตราการที่ลงทุนต่ำ </th>
                             </tr> 

                             <tr >
                              <th scope="row">0 </th>
                              <th>ไม่มีนโยบายที่ชัดเจน </th>
                              <th>ไม่มีผู้รับผิดชอบด้านพลัง </th>
                              <th>ไม่มีการติดต่อกับผู้ใช้งาน </th>
                              <th>ไม่มีระบบรวบรวมข้อมูลและบัญชีการใช้พลังงาน</th>
                              <th>ไม่มีการสนับสนุนการประหยัดพลังงาน </th>
                              <th>ไม่มีการลงทุนใดๆ ในการปรับปรุงประสิทธิภาพการใช้พลังงาน</th>
                             </tr> 
                 </table>
                 <form class="form-inline">
                 <div class="form-group  mb-2" >หมายเหตุ : ข้อมูลการประเมินสถาณภาพการจัดการพลังงานเบื้องต้นประเมินจาก</div>
                 <input type="text" class="form-control"  placeholder="">
                 <input type="text" readonly class="form-control-plaintext" value="แผนก">
                        <div class="form-group mb-2">
                        <input type="text" readonly class="form-control-plaintext" value="ของจำนวนทั้งหมด">
                        <input type="text" class="form-control"  placeholder="">
                        <input type="text" readonly class="form-control-plaintext" value="แผนก  หรือบุคลากรจำนวน">
                        <input type="text" class="form-control"  placeholder="">
                        <input type="text" readonly class="form-control-plaintext" value="คน">
                        </div><div class="form-group mb-2">
                        <input type="text" readonly class="form-control-plaintext" value="จากทั้งหมด">
                        <input type="text" class="form-control"  placeholder="">
                        <input type="text" readonly class="form-control-plaintext" value="คน  คิดเป็นร้อยละ">
                        <input type="text" class="form-control"  placeholder="">
                        </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                    <div class="form-group mb-2 " >นโยบายอนุรักษ์พลังงานขององค์กร</div>
                    <form>
                    <div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    </form>
                    <div><label for="exampleFormControlFile1" >( ใส่เอกสารแสดงประกาศนโยบายอนุรัษ์พลังงาน )</label></div>
                    <div class="form-group mb-2"></div>
                    <form class="form-inline ">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; ติดประกาศ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนติดประกาศ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="แห่ง">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; โปสเตอร์ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนติดประกาศ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="แห่ง">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; เอกสารเผยแพร่ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="แผ่นพับ/วารสาร">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ฉบับ">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; เสียงตามสาย &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="สัปดาห์ละ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ครั้ง ช่วงเวลา">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; จดหมายอิเล็กทรอนิกส์ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="จำนวนผู้คนได้รับ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="คน      ระดับของผู้รับ">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>


                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; การประชุมพนักงาน &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                     <input type="text" readonly class="form-control-plaintext" value="สัปดาห์ละ">
                    <input type="text" class="form-control"  placeholder="">
                    <input type="text" readonly class="form-control-plaintext" value="ครั้ง">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    <form class="form-inline">
                    <div class="checkbox">
                    <input type="checkbox" value="">
                    </div>
                    <div class="form-group mb-2" >&nbsp;&nbsp; อื่นๆ &nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="form-group mb-2">
                    <input type="text" class="form-control"  placeholder="">
                    </div></form>
                    <form><div class="form-group mb-2">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
