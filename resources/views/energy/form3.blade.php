@extends('layout.main')

@section('title','Form 3')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">

            <div class="col-md-12">

                <div class="card mb-4">
                    <div class="card-header"><b>ใส่แผนผังกระบวนการผลิต</b></div>
                    <div class="card-body">

                            <div class="form-group">
                                <input type="file" class="form-control-file" id="File1">
                            </div>
                            
                            <div class="form-group">
                                <label for="Textarea1"><H5>คำอธิบายกระบวนการผลิต</H5></label>
                                <textarea class="form-control" id="Textarea1" rows="3"></textarea>
                            </div>
        
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header"><b>ปริมาณการใช้พลังงานต่อหน่วยผลผลิต</b></div>
                    <div class="card-body">

                        <table class="table table-bordered table-hover">
                                <tr class="table table-bordered table-dark">
                                    <th scope="col" style="text-align: center;">เดือน</th>
                                    <th scope="col" style="text-align: center;">ปริมาณผลผลิต(หน่วย)</th>
                                    <th scope="col" colspan="2" style="text-align: center;">ปริมาณพลังงานที่ใช้</th>
                                    <th scope="col" style="text-align: center;">ค่าการใช้พลังงานจำเพาะ</th>
                                </tr>
                                <tr class="table table-bordered table-dark">
                                    <th></th>
                                    <th></th>
                                    <th scope="col" style="text-align: center;">ไฟฟ้า(กิโลวัต์/ชั่งโมง)</th>
                                    <th scope="col" style="text-align: center;">ความร้อน(เมกะจูน)</th>
                                    <th></th>
                                </tr>
                                <tbody>
                                <tr>
                                  <th scope="row">ม.ค. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">ก.พ. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">มี.ค. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">เม.ย. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">พ.ค. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">มิ.ย. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">ก.ค. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">ส.ค. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">ก.ย. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">ต.ค. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">พ.ย. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">ธ.ค. ww</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                                <tr>
                                  <th scope="row">รวม</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="" readonly></td>
                                </tr>

                                <tr>
                                  <th scope="row">เฉลี่ย</th>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="-"></td>
                                  <td><input class="form-control" type="text" placeholder="#DIV/0!"></td>
                                </tr>

                              </tbody>
                            </table>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header"><b>แบบประเมินการใช้พลังงานในเครื่องจักร/อุปกรณ์หลัก</b></div>
                    <div class="card-body">
                       
                       <table class="table table-bordered table-hover">
                          
                            <tr  class="table table-bordered table-dark">
                              <th scope="col" style="text-align: center;">เครื่องจักร/อุปกรณ์หลัก</th>
                              <th scope="col" style="text-align: center;">ประเภทพลังงาน</th>
                              <th scope="col" colspan="5" style="text-align: center;">(1)ขนาดการใช้พลังงาน</th>
                              <th scope="col" colspan="5" style="text-align: center;">(2)ชั่วโมงการใช้งาน</th>
                              <th scope="col" colspan="5" style="text-align: center;">(3)ศักยภาพการปรับปรุง</th>
                              <th scope="col" style="text-align: center;">คะแนนรวม (1)*(2)*(3)</th>
                              <th scope="col" style="text-align: center;">ลำดับความสำคัญ</th>
                            </tr>

                            <tr  class="table-bordered table-dark">
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col" style="text-align: center;">น้อยที่สุด</th>
                                <th scope="col" style="text-align: center;">น้อย</th>
                                <th scope="col" style="text-align: center;">ปานกลาง</th>
                                <th scope="col" style="text-align: center;">มาก</th>
                                <th scope="col" style="text-align: center;">มากที่สุด</th>
                                <th scope="col" style="text-align: center;">น้อยที่สุด</th>
                                <th scope="col" style="text-align: center;">น้อย</th>
                                <th scope="col" style="text-align: center;">ปานกลาง</th>
                                <th scope="col" style="text-align: center;">มาก</th>
                                <th scope="col" style="text-align: center;">มากที่สุด</th>
                                <th scope="col" style="text-align: center;">น้อยที่สุด</th>
                                <th scope="col" style="text-align: center;">น้อย</th>
                                <th scope="col" style="text-align: center;">ปานกลาง</th>
                                <th scope="col" style="text-align: center;">มาก</th>
                                <th scope="col" style="text-align: center;">มากที่สุด</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                          
                          
                            <tr>
                                <th scope="row"><input class="form-control" type="text" placeholder=""></th>
                                <th scope="row"><input class="form-control" type="text" placeholder=""></th>
                                <th><input type="radio" name="a1" value="1" ></th> 
                                <th><input type="radio" name="a1" value="2" ></th>
                                <th><input type="radio" name="a1" value="3" ></th>
                                <th><input type="radio" name="a1" value="4" ></th>
                                <th><input type="radio" name="a1" value="5" ></th>

                                <th><input type="radio" name="b1" value="1" ></th>
                                <th><input type="radio" name="b1" value="2" ></th>
                                <th><input type="radio" name="b1" value="3" ></th>
                                <th><input type="radio" name="b1" value="4" ></th>
                                <th><input type="radio" name="b1" value="5" ></th>

                                <th><input type="radio" name="c1" value="1" ></th>
                                <th><input type="radio" name="c1" value="2" ></th>
                                <th><input type="radio" name="c1" value="3" ></th>
                                <th><input type="radio" name="c1" value="4" ></th>
                                <th><input type="radio" name="c1" value="5" ></th> 
                                <th><input class="form-control" type="text" placeholder="" readonly=""></th>
                                <th><input class="form-control" type="text" placeholder="" readonly=""></th>   
                            </tr>       
                                    
                            <tr>
                                <th scope="row"><input class="form-control" type="text" placeholder=""></th>
                                <th scope="row"><input class="form-control" type="text" placeholder=""></th>
                                <th><input type="radio" name="a1" value="1" ></th> 
                                <th><input type="radio" name="a1" value="2" ></th>
                                <th><input type="radio" name="a1" value="3" ></th>
                                <th><input type="radio" name="a1" value="4" ></th>
                                <th><input type="radio" name="a1" value="5" ></th>

                                <th><input type="radio" name="b1" value="1" ></th>
                                <th><input type="radio" name="b1" value="2" ></th>
                                <th><input type="radio" name="b1" value="3" ></th>
                                <th><input type="radio" name="b1" value="4" ></th>
                                <th><input type="radio" name="b1" value="5" ></th>

                                <th><input type="radio" name="c1" value="1" ></th>
                                <th><input type="radio" name="c1" value="2" ></th>
                                <th><input type="radio" name="c1" value="3" ></th>
                                <th><input type="radio" name="c1" value="4" ></th>
                                <th><input type="radio" name="c1" value="5" ></th> 
                                <th><input class="form-control" type="text" placeholder="" readonly=""></th>
                                <th><input class="form-control" type="text" placeholder="" readonly=""></th>   
                            </tr>  

                            <tr>
                                <th scope="row"><input class="form-control" type="text" placeholder=""></th>
                                <th scope="row"><input class="form-control" type="text" placeholder=""></th>
                                <th><input type="radio" name="a1" value="1" ></th> 
                                <th><input type="radio" name="a1" value="2" ></th>
                                <th><input type="radio" name="a1" value="3" ></th>
                                <th><input type="radio" name="a1" value="4" ></th>
                                <th><input type="radio" name="a1" value="5" ></th>

                                <th><input type="radio" name="b1" value="1" ></th>
                                <th><input type="radio" name="b1" value="2" ></th>
                                <th><input type="radio" name="b1" value="3" ></th>
                                <th><input type="radio" name="b1" value="4" ></th>
                                <th><input type="radio" name="b1" value="5" ></th>

                                <th><input type="radio" name="c1" value="1" ></th>
                                <th><input type="radio" name="c1" value="2" ></th>
                                <th><input type="radio" name="c1" value="3" ></th>
                                <th><input type="radio" name="c1" value="4" ></th>
                                <th><input type="radio" name="c1" value="5" ></th> 
                                <th><input class="form-control" type="text" placeholder="" readonly=""></th>
                                <th><input class="form-control" type="text" placeholder="" readonly=""></th>   
                            </tr>      
                             
                                
                            

                        </table>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header"><b>แบบบันทึกการใช้พลังงานไฟฟ้าที่มีนัยสำคัญของเครื่องจักร/อุปกรณ์หลัก ปี 25ww</b></div>
                    <div class="card-body">
                          <table  class="table table-bordered table-hover">
                              
                                <tr class="table table-bordered table-dark">
                                  <th scope="col" style="text-align: center;">ระบบที่ใช้พพลังงาน</th>
                                  <th scope="col" style="text-align: center;">ชื่อเครื่องจักร/อุปกรณ์</th>
                                  <th scope="col" colspan="2" style="text-align: center;">พิกัด</th>
                                  <th scope="col" style="text-align: center;">จำนวน</th>
                                  <th scope="col" style="text-align: center;">อายุการใช้งาน(ปี)</th>
                                  <th scope="col" style="text-align: center;">ชั่วโมงใช้งานเฉลีย/ปี</th>
                                  <th scope="col" style="text-align: center;">ปริมาณการใช้พลังงานไฟฟ้า(กิโลวัตต์-ชั่วโมง/ปี)</th>
                                  <th scope="col" style="text-align: center;">สัดส่วนการใช้พลังงานในระบบ</th>
                                  <th scope="col" colspan="4" style="text-align: center;">ค่าประสิทธ์ภาพหรือสมรรถนะ</th>
                                  <th scope="col" style="text-align: center;">หมายเหตุ</th>
                                </tr>
                                <tr class="table table-bordered table-dark">
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col" style="text-align: center;">ขนาด</th>
                                  <th scope="col" style="text-align: center;">หน่วย</th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col" style="text-align: center;">ค่าพิกัด</th>
                                  <th scope="col" style="text-align: center;">หน่วย</th>
                                  <th scope="col" style="text-align: center;">ใช้งานจริง</th>
                                  <th scope="col" style="text-align: center;">หน่วย</th>
                                  <th scope="col" style="text-align: center;"></th>
                                </tr>
                              
                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>
                                
                              
                            </table>
                            
        
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header"><b>แบบบันทึกข้อมูลการใช้พลังงานความร้อนที่มีนัยสำคัญของเครื่องจักร/อุปกรณ์หลัก ปี 25ww</b></div>
                    <div class="card-body">
                          <table  class="table table-bordered table-hover">
                              
                                <tr class="table table-bordered table-dark">
                                  <th scope="col" style="text-align: center;">ระบบที่ใช้พพลังงาน</th>
                                  <th scope="col" style="text-align: center;">ชื่อเครื่องจักร/อุปกรณ์</th>
                                  <th scope="col" colspan="2" style="text-align: center;">พิกัด</th>
                                  <th scope="col" style="text-align: center;">จำนวน</th>
                                  <th scope="col" style="text-align: center;">อายุการใช้งาน(ปี)</th>
                                  <th scope="col" style="text-align: center;">ชั่วโมงใช้งานเฉลีย/ปี</th>
                                  <th scope="col" colspan="2" style="text-align: center;">การใช้เชื้อเพลิง</th>
                                  <th scope="col">ปริมาณการใช้พลังงานความร้อน (เมกะจูล/ปี)</th>
                                  <th scope="col" style="text-align: center;">สัดส่วนการใช้พลังงานในระบบ</th>
                                  <th scope="col" colspan="4" style="text-align: center;">ค่าประสิทธ์ภาพหรือสมรรถนะ</th>
                                  <th scope="col" style="text-align: center;">หมายเหตุ</th>
                                </tr>
                                <tr class="table table-bordered table-dark">
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col" style="text-align: center;">ขนาด</th>
                                  <th scope="col" style="text-align: center;">หน่วย</th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col" style="text-align: center;">ชนิด</th>
                                  <th scope="col" style="text-align: center;">หน่วย</th>
                                  <th scope="col"></th>
                                  <th scope="col"></th>
                                  <th scope="col" style="text-align: center;">ค่าพิกัด</th>
                                  <th scope="col" style="text-align: center;">หน่วย</th>
                                  <th scope="col" style="text-align: center;">ใช้งานจริง</th>
                                  <th scope="col" style="text-align: center;">หน่วย</th>
                                  <th scope="col" style="text-align: center;"></th>
                                </tr>
                              
                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>

                                <tr>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                  <td><input class="form-control" type="text" placeholder=""></td>
                                </tr>
                                
                              
                            </table>
                            
        
                    </div>
                </div>

                

            </div>
        </div>
    </div>
@endsection
