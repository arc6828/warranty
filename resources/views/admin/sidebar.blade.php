<div class="col-md-3 d-print-none">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <style>
                ul.side-bar{
                    list-style-type: none;
                    padding-left: 15px;
                }        
            </style>

            <ul class="side-bar" role="tablist">
                <!--li role="presentation">
                    <a href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>                    
                </li-->
            
                
                @yield('adaptivesidebar')
                
                  
            </ul>
        </div>
    </div>
</div>
