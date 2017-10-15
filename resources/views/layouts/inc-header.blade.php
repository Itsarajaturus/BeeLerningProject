<div class="page-header">
    <nav class="navbar bg-color-yellow">
        <div class="row bg-color-yellow">
            <div class="logo-container">
                <a href="index"><img class="logo-img" src="{{asset('/assets/Image/main-logo.png')}}" alt="Bee Learning" height="80" width="80"></a>
            </div>
        </div>
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="dropdown" onclick="menuSelect($(this))">
                    <a class="dropdown" data-toggle="dropdown" href="#"> ORDER BY <span class="caret"> </span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">ASCENDING</a></li>
                        <li><a href="#">DESCENDING</a></li>
                        <li><a href="#">NONE</a></li>
                    </ul>
                </li>
                <li onclick="menuSelect($(this))"><a href="knowledge">KNOWLEDGE</a></li>
                <li onclick="menuSelect($(this))"><a href="webboard" target="_parent">WEBBOARD</a></li>
                <li onclick="menuSelect($(this))"><a href="#">ABOUT US</a></li>
            </ul>
            <form class="navbar-form navbar-right search-box">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon label-search" id="search"><i class="fa fa-search" aria-hidden="true"></i></span>
                        <input class="form-control input-search" placeholder="Search" aria-describedby="search">
                    </div>
                </div>
            </form>
        </div>
        <div class="social-box">
            <button class="btn social-btn"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></button>
            <button class="btn social-btn"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></button>
            <button class="btn social-btn"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></button>
            <button class="btn social-btn" onclick="showBalance()"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></button>
        </div>
        <div class="header-btn">
            <button class="btn signin-btn" data-toggle="modal" data-target="#loginModal">Sign In</button>
            <button class="btn signup-btn"><a href="#">Sign Up</a></button>
        </div>
        <div class="header-inventory">
            <div class="inline">
                <div class="balance"> ฿ 0.00 </div>
                <div class="items"> 0 ITEMS </div>
            </div>
        </div>
    </nav>
</div>