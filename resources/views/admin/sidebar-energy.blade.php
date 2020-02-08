@if($energyreport)
    <h5>Part 1</h5>
    <li role="presentation">
        <a href="{{ url('/energy-committee') }}/{{ $energyreport->energy_committee->id }}/edit">
            Energy Committee
        </a>                    
    </li>
    <li role="presentation">
        <a href="{{ url('/energy-factory-information') }}">
            Enery Factory Information
        </a>                    
    </li>                
    <li role="presentation">
        <a href="{{ url('/energy-organization-chart') }}">
            Energy Organization Chart
        </a>                    
    </li>                                             
    <li role="presentation">
        <a href="{{ url('/energy-evaluation') }}">
            Energy Evaluation
        </a>                    
    </li>                                     
    <li role="presentation">
        <a href="{{ url('/energy-conservation-policy') }}">
            Energy Conservation Policy
        </a>                    
    </li>
    <h5>Part 2</h5>
    <li role="presentation">
        <a href="{{ url('/energy-production') }}">
            Energy Production
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-production-operation') }}">
            Energy Production Operation
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-electricity-transformer') }}">
            Energy electricity-transformer
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-consumption-electricity') }}">
            Energy consumption-electricity
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-consumption-heat') }}">
            Energy consumption-heat
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-heat-generator') }}">
            Energy heat-generator
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-portion-heat') }}">
            Energy portion-heat
        </a>                    
    </li>  
    <li role="presentation">
        <a href="{{ url('/energy-portion-electricity') }}">
            Energy portion-electricity
        </a>                    
    </li>  
    <h5>Part 3</h5>                                               
    <li role="presentation">
        <a href="{{ url('/energy-production-diagram') }}">
            Energy Production Diagram
        </a>                    
    </li>                                       
    <li role="presentation">
        <a href="{{ url('/energy-production-consumption') }}">
            Energy Production consumption
        </a>                    
    </li>                                       
    <li role="presentation">
        <a href="{{ url('/energy-machine-evaluation') }}">
            Energy machine-evaluation
        </a>                    
    </li>                                       
    <li role="presentation">
        <a href="{{ url('/energy-machine') }}">
            Energy Production Diagram
        </a>                    
    </li>       
@endif
