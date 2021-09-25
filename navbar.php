<nav class="c-navbar navbar navbar-expand-lg fixed-top">
    <ul class="nav">
        <li><a href="#">Home</a></li>
        <li>
            <a href="#">About</a>
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Our history</a></li>
                <li><a href="#">Executive Management Group</a></li>
                <li><a href="#">Hospital board</a></li>
                <li><a href="#">Latest news</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Services</a>
            <ul>
                <li><a href="#">Find a service</a></li>
                <li><a href="#">Find a ward</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Cancer Institute</a></li>
                <li><a href="#">MISA</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Patients</a>
            <ul>
                <li><a href="#">Appointment information</a></li>
                <li><a href="#">Visiting</a></li>
                <li><a href="#">Getting to the hospital</a></li>
                <li><a href="#">Pay your bill</a></li>
                <li><a href="#">Blood testing</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Healthcare Professionals</a>
            <ul>
                <li><a href="#">Newsletters</a></li>
                <li><a href="#">LabMed Services</a></li>
                <li><a href="#">LabMed UserGuide</a></li>
                <li><a href="#">Find a consultant</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Work With Us</a>
            <ul>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Research</a></li>
            </ul>
        </li>
    </ul>
    <a class="navbar-brand" href="/">
        <div class="navbar-brand__main">
            <img src="static/images/logos/site-logo.svg" alt="SJH logo" class="navbar-brand-logo">
        </div>
    </a>
    <div class="navbar-search">
        <button class="dropdown-toggle" type="button" id="navbar-search__toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h4 class="navbar-search__title">How can we help you?</h4>
            <p>Get directions, Find a consultant, Pay a bill...</p>
            <div class="search-icon-box flex-centre">
                <i class="fas fa-search"></i>
            </div>
        </button>
        <div class="dropdown-menu" aria-labelledby="navbar-search__toggle">
            <ul>
                <li><a class="dropdown-item " href="/aboutus/gettingtothehospital/" target=""><i class="fas fa-chevron-right"></i> Get directions</a></li>
                <li><a class="dropdown-item " href="/patients/" target=""><i class="fas fa-chevron-right"></i> Appointment information</a></li>
                <li><a class="dropdown-item " href="/consultants/" target=""><i class="fas fa-chevron-right"></i> Find a consultant</a></li>
                <li><a class="dropdown-item " href="https://www.supportstjames.ie/" target=""><i class="fas fa-chevron-right"></i> Make a donation</a></li>
                <li><a class="dropdown-item " href="/services/" target=""><i class="fas fa-chevron-right"></i> Find a department</a></li>
                <li><a class="dropdown-item " href="/careers/" target=""><i class="fas fa-chevron-right"></i> View job vacancies</a></li>
                <li><a class="dropdown-item " href="/patients/bloodtesting/" target=""><i class="fas fa-chevron-right"></i> Book a blood test</a></li>
                <li><a class="dropdown-item " href="/patients/payyourbill/" target=""><i class="fas fa-chevron-right"></i> Pay a bill</a></li>
            </ul>
            <form class="form form--search" method="get" action="https://www.google.com/cse">
                <div class="form-group">
                    <label for="input-search" class="sr-only">Search</label>
                    <input type="text" name="q" class="form-control" id="input-search" autocomplete="off" placeholder="Enter your search">
                    <i class="fas fa-search"></i>
                </div>
            </form>
        </div>
    </div>
</nav>