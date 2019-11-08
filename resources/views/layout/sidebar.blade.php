<div class="wrapper">
        <div class="sidebar" data-image="{{ url('img/sidebar-5.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                      Your Logo
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/sumpdf') }}">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Summary</p>
                        </a>
                    </li>                    
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('table_a') }}">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Table A</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('table_b') }}">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Table B</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('table_c') }}">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Table C</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('duration') }}">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Table Duration</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('schedule') }}">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>schedule</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('table_f') }}">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Table F</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Second example</p>
                        </a>
                    </li>

                    
                </ul>
            </div>
        </div>