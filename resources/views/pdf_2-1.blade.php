<div class="page-break"  id="page-2">

  <p class="a"><b>1.2ตัวชี้วัดสำหรับการปรับปรุงประสิทธิภาพการผลิต(คำนวณที่ปริมาณผลิตของปีที่ประเมินผล : ............ต่อปี)</b>
  <table border=1 style="width:100%;">
    <tr>
        <th style="text-align: center;">ตัวชี้วัด</th>
        <th style="text-align: center;">ปีฐาน(ปี......)</th>
        <th style="text-align: center;">ปีที่ประเมิน(ปี..{{ $sumpdf->table_c->peetharn }}....)</th>
        <th style="text-align: center;">ร้อยละ(จากปีฐาน)</th>
    </tr>
    <tr>
        <td><b>1.ต้นทุนทางตรงต่อหน่วยการผลิต/การบริการ</b></td>
        <td></td>
        <td>{{ $sumpdf->table_c->cost }}</td>
        <td></td>
    </tr>
    <tr>
        <td><b>2.อัตราการได้มา(Yield)</b></td>
        <td></td>
        <td>{{ $sumpdf->table_c->yield }}</td>
        <td></td>
    </tr>
    <tr>
        <td><b>3.ตัวชี้วัดอื่นๆเลือกจากข้อ 3.1)-3.6)ข้อใดข้อหนึ่งหรือหลายข้อก็ได้</b></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1)ตัวชี้วัดผลผลิตภาพแรงงานเชิงมูลค่าเพิ่ม(Amount of Processing per Employee)</td>
        <td></td>
        <td>{{ $sumpdf->table_c->amount }}</td>
        <td></td>
    </tr>
    <tr>
        <td>3.2)ตัวชี้วัดประสิทธิภาพการลงทุนในเครื่องจักรและอุปกรณ์(Efficiency of Machinery Investment Ratio)</td>
        <td></td>
        <td>{{ $sumpdf->table_c->efficiency }}</td>
        <td></td>
    </tr>
    <tr>
        <td>3.3)ตัวชี้วัดประสิทธิผลโดยรวมของเครื่องจัก(Overall Equipment Effectiveness (OEE))</td>
        <td></td>
        <td>{{ $sumpdf->table_c->overall }}</td>
        <td></td>
    </tr>
    <tr>
        <td>3.4)ตัวชี้วัดอัตราการใช้เครื่องจักร(Equipment Operating Ratio(EOR))</td>
        <td></td>
        <td>{{ $sumpdf->table_c->equipment }}</td>
        <td></td>
    </tr>
    <tr>
        <td>3.5)ตัวชี้วัดการประเมินอายุการใช้งานของชิ้นส่วน,อุปกรณ์และเครื่องจักร(Mean Time between Failures(MTBF))</td>
        <td></td>
        <td>{{ $sumpdf->table_c->mean }}</td>
        <td></td>
    </tr>
    <tr>
        <td>3.6) ตัวชี้วัดประสิทธิภาพของการผลิตได้จริง เปรียบเทียบกับ ความสามารถในการผลิตที่ควรทำได้ (Actual Production Rate as a Percentage of the Maximum Capable Production Rate)</td>
        <td></td>
        <td>{{ $sumpdf->table_c->actual }}</td>
        <td></td>
    </tr>
  </table>
 

  <p class="a"><b><u>หมายเหตุ</u></b>&nbsp;&nbsp;กำหนดให้ปีก่อนปีที่ยื่นขอรับการส่งเสริมเป็นปีฐาน โดยคำนวณสัดส่วนเมื่อสิ้นสุดระยะเวลาดำเนินการแล้ว 1 ปี และคำนวณที่ปริมาณการผลิตในปีซึ่งเป็นปีฐาน<br>
  <br>

  <b>2.<u>แผนการดำเนินงาน</u>(โปรดระบุรายละเอียด โดยใช้เอกสารแนบ)</b><br>
  <b>&nbsp;&nbsp;&nbsp;2.1รายละเอียดแผนการดำเนินงาน</b> ตามเอกสารที่แนบมาพร้อมนี้ โดยมีรายละเอียดดังต่อไปนี้<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)วัตถุประสงค์ของการดำเนินงาน<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)รายละเอียดการปรับปรุงสายการผลิตที่มีอยู่เดิม พร้อม<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ขั้นตอนกระบวนการผลิต/บริการของโครงการที่ขอส่งเสริมการลงทุนที่ระบุขั้นตอนที่มีการนำเครื่องจักอัตโนมัติมาใช้<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- แผนภูมิแสดงการปรับปรุงเครื่องจักร เช่น (Plant Layout) และ/หรือแบบ (Drawing) ที่ระบุส่วนที่จะใช้ระบบเครื่องจักรอัตโนมัติ<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หรือการปรับปรุงโดยนำเทคโนโลยีมาใช้
  <br>
  <b>3) หลักฐานประกอบการพิสูจน์ข้อมูลตตัวชี้วัดในปีฐานส่วนที่เกี่ยวข้อง พร้อมรายละเอียดการคำนวณตัวชี้วัด</b><br>
  <b>4) แหล่งที่มาของเทคโนโลยี (เช่น รายละเอียดเทคโนโลยี การออกแบบ ผู้ออกแบบ เป็นต้น)</b>

</div>