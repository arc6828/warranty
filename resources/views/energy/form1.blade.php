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
  
</form>
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
                    <div class="form-group " >******</div>
                        

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
                        
                    ********
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                    ********
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
