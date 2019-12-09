@extends('layout.main')

@section('title','Form 2')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">

            <div class="col-md-12">

                <div class="card mb-4">
                    <div class="card-header">Card 1 (energy_production_capacity.json)</div>
                    <div class="card-body">
                        <table  border = 1 , bordercolor = "black">
                                <tbody align="center">
                                <tr>
                                    <td> ลำดับที่* </td>
                                    <td> ชื่อผลิตภัณฑ์* </td>
                                    <td>กำลังผลิตติดตั้ง<br>(กำลังการผลิตสูงสุดของเครื่องจักร)*</td>
                                    <td>ปริมาณผลผลิตจริง</td><td>ร้อยละปริมาณผลผลิต*</td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                            </tbody>
                        </table>        

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Card 2 (energy_production_capacity_detail.json.json)</div>
                    <div class="card-body">
                        <table  border = 1 , bordercolor = "black">
                            <tbody>
                                <tr>
                                    <td> ลำดับที่ 1 *</td>
                                    <td colspan="12"> &nbsp; &nbsp; &nbsp; </td>
                                </tr>
                                <tr>
                                    <td> วัตถุดิบหลัก *</td>
                                    <td colspan="12"> &nbsp; &nbsp; &nbsp; </td>
                                </tr>
                                <tr>
                                    <td> เดือนที่ผลิต*</td><td align="center"> ม.ค. </td>
                                    <td align="center"> ก.พ. </td>
                                    <td align="center">มี.ค.</td>
                                    <td align="center">เม.ย.</td>
                                    <td align="center">พ.ค.</td>
                                    <td align="center">มิ.ย.</td>
                                    <td align="center">ก.ค.</td>
                                    <td align="center">ส.ค.</td>
                                    <td align="center">ก.ย.</td>
                                    <td align="center">ต.ค.</td>
                                    <td align="center">พ.ย.</td>
                                    <td align="center">ธ.ค.</td>
                                </tr>
                                <tr>
                                    <td>ชั่วโมงทำงาน*</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>หน่วยผลผลิต*</td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                </tr>
                                <tr>
                                    <td>ปริมาณผลผลิตจริง*</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร)*</td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                    <td align="right">   - </td>
                                </tr>
                                
                                </tbody>
                        </table>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Card 3 (energy_electricity.json)</div>
                    <div class="card-body">
                        <table  border = 1 , bordercolor = "black">
                            <tbody align="center">
                                <tr>
                                    <td> ลำดับที่* </td>
                                    <td> หมายเลขผู้ใช้ไฟฟ้า *</td>
                                    <td>หมายเลขเครื่องวัดไฟฟ้า*</td>
                                    <td>ประภทผู้ใช้ไฟฟ้า*</td>
                                    <td>อัตราการใช้ไฟฟ้า*</td>
                                    <td>หม้อแปลงไฟฟ้า*</td>
                                </tr>
                                <tr
                                    ><td>1</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td><input type="checkbox" name="cb1" value="nomal"> ปกติ
                                        <br>
                                        <input type="checkbox" name="cb2" value="TOD"> TOD
                                        <br>
                                        <input type="checkbox" name="cb3" value="TOU"> TOU</td>
                                    <td>ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว
                                        <br>
                                        ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว
                                        <br>
                                        ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td><input type="checkbox" name="cb1" value="nomal"> ปกติ
                                        <br>
                                        <input type="checkbox" name="cb2" value="TOD"> TOD
                                        <br>
                                        <input type="checkbox" name="cb2" value="TOU"> TOU</td>
                                    <td>ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว<br>ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว<br>ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td><input type="checkbox" name="cb1" value="nomal"> ปกติ
                                        <br>
                                        <input type="checkbox" name="cb2" value="TOD"> TOD
                                        <br>
                                        <input type="checkbox" name="cb2" value="TOU"> TOU</td>
                                    <td>ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว
                                        <br>
                                        ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว
                                        <br>
                                        ขนาด&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kVA จำนวน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัว</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><b>รวม</b></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;kVA</td>
                                </tr>
                                </tbody>
                        </table>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Card 4 (energy_consumption_electricity.json)</div>
                    <div class="card-body">
                        <p>4.1.2.2)ข้อมูลปริมาณการใช้ไฟฟ้าในรอบปี 25ww</p>
                        <p align="center">ตารางที่ 4.3 ข้อมูลการใช้ไฟฟ้าในรอบปี 25ww</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขผู้ใช้ไฟฟ้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขเครื่องวัดไฟฟ้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</p>
                        <table border = 1 , bordercolor = "black">
                            <tbody align="center">
                                <tr>
                                    <td rowspan="2"> เดือน *</td>
                                    <td colspan="4">พลังไฟฟ้าสูงสุด</td>
                                    <td colspan="2">พลังงานไฟฟ้า</td>
                                    <td rowspan="2">ค่าไฟฟ้ารวม (บาท)*</td>
                                    <td rowspan="2">ค่าตัวประกอบภาระ (เปอร์เซ็นต์)*</td>
                                    <td rowspan="2">ค่าไฟฟ้าเฉลี่ย<br>(บาท/กิโลวัตต์-ชั่วโมง)*</td>
                                </tr>
                                <tr>
                                    <td>P<br>(กิโลวัตต์)*</td>
                                    <td>PP/OP1<br>(กิโลวัตต์)*</td>
                                    <td>OP/OP2<br>(กิโลวัตต์)*</td>
                                    <td>ค่าใช้จ่าย<br>(บาท)*</td>
                                    <td>ปริมาณ<br>(กิโลวัตต์-ชั่วโมง)*</td>
                                    <td>ค่าใช้จ่าย<br>(บาท)*</td>
                                </tr>
                                <tr>
                                    <td>ม.ค.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>ก.พ.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>มี.ค.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>มี.ค.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>พ.ย.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>มิ.ย.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>ก.ค.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>ส.ค.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>ก.ย.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>ต.ค.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>พ.ย.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td>ธ.ค.</td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                    <td><input type="text" class="form-control" placeholder=" "></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><b>รวม</b></td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><b>เฉลี่ย</b></td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Card 5 (energy_consumption_heat.json)</div>
                    <div class="card-body">
                        <p>4.1.3)ข้อมูลปริมาณการใช้เชื้อเพลิงในรอบปี 25ww<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลการใช้เชื้อเพลิงและพลังงานหมุนเวียน</p>
                        <p align="center">ตารางที่ 4.4 ข้อมูลการใช้เชื้อเพลิงและพลังงานหมุนเวียนในรอบปี 25ww</p>
                        <table border = 1 , bordercolor = "black">
                            <tbody align="center">
                                <tr>
                                    <td rowspan="2">ชนิด<br>พลังงานที่ใช้</td>
                                    <td rowspan="2">หน่วย/มูลค่า</td>
                                    <td colspan="13">ปริมาณการใช้</td>
                                    <td rowspan="2">ค่าความร้อนเฉลี่ย<br>(เมกะจูล/หน่วย)</td>
                                    <td rowspan="2">ปริมาณพลังงานรวม<br>(เมกะจูล)</td>
                                </tr>
                                <tr>
                                    <td>ม.ค.</td>
                                    <td>ก.พ.</td>
                                    <td>มี.ค.</td>
                                    <td>เม.ย.</td>
                                    <td>พ.ค.</td>
                                    <td>มิ.ย.</td>
                                    <td>ก.ค.</td>
                                    <td>ส.ค.</td>
                                    <td>ก.ย.</td>
                                    <td>ต.ค.</td>
                                    <td>พ.ย.</td>
                                    <td>ธ.ค.</td>
                                    <td>รวม</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">น้ำมันเตา</td>
                                    <td>ลิตร*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">น้ำมันดีเซล</td>
                                    <td>ลิตร*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">ก๊าซปิโตรเลียมเหลว</td>
                                    <td>กิโลกรัม*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">ก๊าซธรรมชาติ</td>
                                    <td>ล้านบีทียู*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">ถ่านหิน<br>(ชนิด....)</td>
                                    <td>ตัน*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">ไอน้ำที่ซื้อ<br>(......บาร์/....°c)</td>
                                    <td>ตัน*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">อื่นๆ....</td>
                                    <td>หน่วย*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td colspan="16">รวมการใช้พลังงานความร้อนจากเชื้อเพลิง</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">พลังงานหมุนเวียน</td>
                                    <td>หน่วย(ระบุ)*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td>บาท*</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td colspan="16">รวมการใช้พลังงานหมุนเวียน</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                                <tr>
                                    <td colspan="16">รวมปริมาณพลังงานความร้อนทั้งหมด</td>
                                    <td>&nbsp;&nbsp;&nbsp;-</td>
                                </tr>
                            </tbody>
                        </table>
                        <p><b>หมายเหตุ</b>:1.ในกรณีไม่มีค่าความร้อนเฉลี่ยจากผู้จำหน่าย ให้อ้างอิงค่าความร้อนเฉลี่ยตามที่กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงานกำหนด</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.ระบุข้อมูลในตารางเฉพาะในส่วนที่เกี่ยวข้องกับการผลิตเท่านั้น(ไม่รวมระบบขนส่ง, การผลิตไฟฟ้า และการประกอบอาหาร)</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Card 6 (energy_heat_electricity.json)</div>
                    <div class="card-body">
                        <p align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;]ผลิตสำรองกรณีฉุกเฉิน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;]ผลิตใช้เองภายในโรงงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;]ผลิตเพื่อจำหน่าย</b></p>
                        <br>
                        <p align="center">ตารางที่ 4.5 ข้อมูลการใช้เชื้อเพลิงในการผลิตไฟฟ้าในรอบปี 25ww</p>
                        <table border="1" , bordercolor = "black">
                            <tbody align="center">
                                <tr>
                                    <td rowspan="2">เดือน*</td>
                                    <td rowspan="2">กำลังผลิตติดตั้ง<br>(กิโลวัตต์)*</td>
                                    <td colspan="3">ปริมาณการใช้เชื้อเพลิงหลัก</td>
                                    <td rowspan="2">ชั่วโมง<br>การเดินเครื่อง*</td>
                                    <td colspan="2">ปริมาณพลังงานไฟฟ้าที่ผลิตได้<br>(กิโลวัตต์-ชั่วโมง)</td>
                                    <td colspan="2">ปริมาณไอน้ำ<br>(ตัน)</p>
                                </tr>
                                <tr>
                                    <td>ชนิด*</td>
                                    <td>ปริมาณ*</td>
                                    <td>หน่วย*</td>
                                    <td>สำหรับใช้เอง*</td>
                                    <td>สำหรับจำหน่าย*</td>
                                    <td>ไอน้ำที่ผลิต<br>....บาร์/....°C*</td>
                                    <td>ไอน้ำที่จำหน่าย<br>....บาร์/....°C*</td>
                                </tr>
                                <tr>
                                    <td>ม.ค.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ก.พ.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>มี.ค.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>เม.ย.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>พ.ค.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>มิ.ย.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ก.ค.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ส.ค.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ก.ย.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ต.ค.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>พ.ย.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ธ.ค.</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td colspan="3">รวม</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> &nbsp; </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Card 7 (energy_electricity_portion.json)</div>
                    <div class="card-body">
                        <p><b>4.1.5)ข้อมูลสัดส่วนการใช้พลังงานไฟฟ้าในรอบปี 25ww</b></p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สัดส่วนการใช้พลังงานไฟฟ้าในรอบปี 25ww</p>
                        <p align="center"><b>ตารางที่ 4.6</b> สัดส่วนการใช้พลังงานไฟฟ้าแยกตามระบบปี 25ww</p>
                        <table border="1" , bordercolor="black">
                            <tbody align="center">
                                <tr>
                                    <td rowspan="2">ระบบ*</td>
                                    <td colspan="2">การใช้พลังงานไฟฟ้า</td>
                                    <td colspan="2">วิธีการ</td>
                                </tr>
                                <tr>
                                    <td>กิโลวัต์-ชั่วโมง/ปี*</td>
                                    <td>ร้อยล*ะ</td>
                                    <td>ประเมิน*</td>
                                    <td>ตรวจวัด*</td>
                                </tr>
                                <tr>
                                    <td>แสงสว่าง</td>
                                    <td align="right">-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ปรับอากาศสำนักงาน</td>
                                    <td align="right">-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>ทำความเย็น</td>
                                    <td align="right">-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>การผลิต</td>
                                    <td align="right">-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>อัดอากาศ</td>
                                    <td align="right">-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>อื่นๆ</td>
                                    <td align="right">-</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td><b>รวม<b></td>
                                    <td align="right">-</td>
                                    <td> 0.00% </td>
                                    <td colspan="2"> &nbsp; </td>
                                </tr>
                            </tbody>
                        </table>
                        <p><b>หมายเหตุ</b>*เฉพาะเครื่องปรับอากาศแบบแยกส่วน</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Card 7 (energy_heat_portion.json)</div>
                    <div class="card-body">
                        <p><b>4.1.6)ข้อมูลสัดส่วนการใช้พลังงานความร้อนในรอบปี 25ww</b></p>
                        <p align="center"><b>ตารางที่ 4.7</b> สัดส่วนการใช้พลังงานเชื้อเพลิงแยกตามระบบปี 25 ww</p>
                        <table border="1" , bordercolor="black">
                            <tbody align="center">
                                <tr>
                                    <td rowspan="2">ระบบ*</td>
                                    <td rowspan="2">อุปกรณ์*</td>
                                    <td colspan="3">การใช้พลังงานเชื้อเพลิง</td>
                                    <td colspan="2">วิธีการ</td>
                                </tr>
                                <tr>
                                    <td>ชนิดเชื้อเพลิง*</td>
                                    <td>เมกะจูล/ปี*</td>
                                    <td>ร้อยละ*</td>
                                    <td>ประเมิน*</td>
                                    <td>ครวจวัด*</td>
                                </tr>
                                <tr>
                                    <td>หม้อไอน้ำ</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td>เตาอุตสาหกรรม</td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                </tr>
                                <tr>
                                    <td><b>รวม</b></td>
                                    <td> &nbsp; </td>
                                    <td> &nbsp; </td>
                                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
                                    <td> <input type="text" class="form-control" placeholder=" "> </td>
                                    <td colspan="2"> &nbsp; </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
