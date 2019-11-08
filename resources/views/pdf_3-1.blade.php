
<div class="page-break" id="page-3">
<p class="a">5.รายละเอียดเครื่องจักร/เครื่องมือ/อุปกรณ์/ซอฟต์แวร์(เฉพาะเครื่องจักรที่จะลงทุนใหม่) โดยระบุจำนวน มูลค่า
และแหล่งผลิต<br>
&nbsp;&nbsp;&nbsp;&nbsp; ทั้งนี้ กรณีที่ขอรับการส่งเสริมโดยจะมีการลงทุนเครื่องจักรที่มีการเชื่อมโยงหรือสนับสนุนอุตสาหกรรมการ<br>
ผลิตเครื่องจักรระบบอัตโนมัติในประเทศมากกว่าร้อยละ 30 ของมูลค่าเครื่องจักรที่มีการปรับเปลี่ยน ให้กรอก<br>
ข้อมูลตามเอกสารแนบแบบประกอบคำขอรับการส่งเสริมฉบับนี้ ในหน้าที่ 4/4 ด้วย<br>

6) ระยะเวลาดำเนินงาน ตั้งแต่ .................{{ $sumpdf->duration->duration }}............................. ถึง .................................................<br>
<font size="3" class="b">    - เริ่มสั่งซื้อเครื่องจักร &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เดือน.........{{ $sumpdf->duration->order_m }}..........ปี................</font><br>
<font size="3" class="b">    - เริ่มติดตั้งเครื่องจักร &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เดือน........{{ $sumpdf->duration->install_m }}...........ปี................</font><br>
<font size="3" class="b">    - เริ่มผลิต &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เดือน........{{ $sumpdf->duration->generate }}...........ปี................</font><br>
    
&nbsp;&nbsp;&nbsp;โดยโปรดแนบรายละเอียดขั้นตอนการดำเนินงาน<br>

<b>2.3 รายละเอียดกํารลงทุนเฉพาะส่วนที่ทําการปรับปรุงสายการผลิตตามแผนการดําเนินงานที่เสนอในข้อ 2.1</b><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่สอดคล้องกับคำชี้แจงสำนักงานคณะกรรมการส่งเสริมการลงทุน <b>ฉบับลงวันที่ 8 มกราคม 2561 (หน่วย: ล้านบาท)</b><br>
</p>

<table align="center" border=1 style="width:100%;  ">
	
  <tr>
    <th style="text-align: center;">รายการ</th>
    <th style="text-align: center;">ปี ..................</th>
    <th style="text-align: center;">ปี ..................</th>
    <th style="text-align: center;">ปี .......{{ $sumpdf->schedule->menu }}...........</th>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;1.ค่าก่อสร้างหรือปรับปรุงอาคาร*</td>
    <td></td>
    <td></td>
    <td>{{ $sumpdf->schedule->cost_cons }}</td>
   
  </tr>
  <tr>
    <td>&nbsp;&nbsp;2.ค่าเครื่องจักร/เครื่องมือ/อุปกรณ์**</td>
    <td></td>
    <td></td>
    <td>{{ $sumpdf->schedule->cost_tool }}</td>
  
  </tr>
  <tr>
    <td>&nbsp;&nbsp;3.ค่าติดตั้งเครื่องจักร</td>
    <td></td>
    <td></td>
    <td>{{ $sumpdf->schedule->cost_install }}</td>
   
  
  </tr>
  <tr>
    <td>&nbsp;&nbsp;4.ค่าทดลองเครื่อง</td>
    <td></td>
    <td></td>
    <td>{{ $sumpdf->schedule->cost_test }}</td>
   
  </tr>
  <tr>
    <td style="text-align: center;">รวมเงินลงทุน</td>
    <td></td>
    <td></td>
    <td>{{ $sumpdf->schedule->investment }}</td>
    
  </tr>


</table>

<font size="3" class="a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; หมายเหตุ* ค่าก่อสร้างไม่รวมถึงค่าเช่าอาคาร (ไม่นับเป็นวงเงินลงทุนที่จะได้รับการยกเว้นภาษีเงินได้)</font><br>
<font size="3" class="a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;** ค่าเครื่องจักรรวมถึงมูลค่าเช่าตามสัญญาเช่าที่มีอายุสัญญามากกว่า 1 ปี</font><br>

<p class="a">ข้าพเจ้าขอรับรองว่าข้อความข้างต้นตรงกับความเป็นจริงหรือเป็นประมาณการที่ดีที่สุดในความเห็นของข้าพเจ้า</p>

<br>
<p class="c">ลงชื่อ ..........................................................</p>
<p class="c">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(........................{{ $sumpdf->table_a->fullname }}...............................)</p>
<p class="c">วันที่ ...........................................................</p>


<p class="a"><b>หมายเหตุ</b>&nbsp;&nbsp;ต้องลงชื่อผูกพันและประทับตราสำคัญของบริษัทให้ถูกต้องตามที่ได้จดทะเบียนไว้ด้วย</p>
</div>
