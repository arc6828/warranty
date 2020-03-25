@if(isset($energyreport))
    <style>
    h5{
        margin-top : 20px;
    }
    </style>
    @section('header','Energy Report # '.$energyreport->factory_name . ' '. $energyreport->year )
    
    <h5>Part 1 : ข้อมูลทั่วไป</h5>
    <li role="presentation">
        <a href="{{ url('/energy-report') }}/{{ $energyreport->id }}">
            Energy Report # {{ $energyreport->id }}
        </a>                    
    </li>    
    <li role="presentation">
        <a href="{{ url('/energy-committee') }}/{{ $energyreport->energy_committee->id }}/edit">
            Energy Committee
        </a>                    
    </li>
    <li role="presentation">
        <a href="{{ url('/energy-factory-information') }}/{{ $energyreport->energy_factory_information->id }}/edit">
            Enery Factory Information
        </a>                    
    </li>                
    <li role="presentation">
        <a href="{{ url('/energy-organization-chart') }}/{{ $energyreport->energy_organization_chart->id }}/edit">
            Energy Organization Chart
        </a>                    
    </li>                                             
    <li role="presentation">
        <a href="{{ url('/energy-evaluation') }}/{{ $energyreport->energy_evaluation->id }}/edit">
            Energy Evaluation
        </a>                    
    </li>                                     
    <li role="presentation">
        <a href="{{ url('/energy-conservation-policy') }}/{{ $energyreport->energy_conservation_policy->id }}/edit">
            Energy Conservation Policy
        </a>                    
    </li>
    <h5>Part 2 : การผลิต</h5>
    <li role="presentation">
        <a href="{{ url('/energy-production') }}?energy_report_id={{ $energyreport->id }}">
            Energy Production
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-electricity-transformer') }}?energy_report_id={{ $energyreport->id }}">
            Energy electricity-transformer
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-consumption-electricity') }}?energy_report_id={{ $energyreport->id }}">
            Energy consumption-electricity
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-consumption-heat') }}?energy_report_id={{ $energyreport->id }}">
            Energy consumption-heat
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-heat-generator') }}?energy_report_id={{ $energyreport->id }}">
            Energy heat-generator
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-portion-heat') }}?energy_report_id={{ $energyreport->id }}">
            Energy portion-heat
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-portion-electricity') }}?energy_report_id={{ $energyreport->id }}">
            Energy portion-electricity
        </a>                    
    </li>  
    <h5>Part 3 : เครื่องจักร</h5>
    <li role="presentation">
        <a href="{{ url('/energy-machine') }}?energy_report_id={{ $energyreport->id }}">
            Energy Machine
        </a>                    
    </li>                                
@endif
