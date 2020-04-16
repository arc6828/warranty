@if(isset($energyreport))
    <style>
    h5{
        margin-top : 20px;
    }
    </style>
    @section('header','Energy Report # '.$energyreport->factory_name . ' '. $energyreport->year )
    <h5>ข้อมูลทั้งหมด </h5>
    <li role="presentation">
        <a href="{{ url('/boi-report') }}/{{ $energyreport->id }}">
            Boi Report # {{ $energyreport->id }}
        </a>                    
    </li>  
    <h5>แก้ไขข้อมูล BOI</h5>
      
    <li role="presentation">
        <a href="{{ url('/table_a') }}/{{ $energyreport->table_a->id }}/edit">
            กำลังการผลิตสูงสุดต่อปี
        </a>                    
    </li>
    <li role="presentation">
        <a href="{{ url('/table_b') }}/{{ $energyreport->table_b->id }}/edit">
            ตัวชี้วัด
        </a>                    
    </li>                
    <li role="presentation">
        <a href="{{ url('/table_c') }}/{{ $energyreport->table_c->id }}/edit">
            รายละเอียดการลงทุน
        </a>                    
    </li>                                               
    <li role="presentation">
        <a href="{{ url('/duration') }}/{{ $energyreport->duration->id }}/edit">
            ระยะเวลาดำเนินการ
        </a>                    
    </li>                                           
    <li role="presentation">
        <a href="{{ url('/schedule') }}/{{ $energyreport->schedule->id }}/edit">
            รายละเอียดเครื่องจักร
        </a>                    
    </li>                                         
    <li role="presentation">
        <a href="{{ url('/table_f') }}?energy_report_id={{ $energyreport->id }}">
            รายการเครื่องจักร
        </a>                    
    </li>                                    
                                  
@endif
