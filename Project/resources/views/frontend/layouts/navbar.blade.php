<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ route('lpage.index') }}">NovI</a>
</div>

<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">view_day</i> Novel
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-with-icons">
                <li>
                    <a href="{{ route('ltitle.index') }}">
                        <i class="material-icons">dns</i> Novel List
                    </a>
                </li>
                <li>
                    <a href="{{ route('lauth.index') }}">
                        <i class="material-icons">people</i> Author List
                    </a>
                </li>
                <li>
                    <a href="{{ route('lgenre.index') }}">
                        <i class="material-icons">assignment</i> Genre List
                    </a>
                </li>
                <li>
                    <a href="{{ route('ltag.index') }}">
                        <i class="material-icons">chat</i> Tag List
                    </a>
                </li>
                <li>
                    <a href="{{ route('sfinder.index') }}">
                        <i class="material-icons">art_track</i> Series Finder
                    </a>
                </li>


            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">people</i> Profile
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-with-icons">

                <li>
                    <a href="{{ route('profu.index') }}">
                        <i class="material-icons">account_circle</i> My Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('bmark.index') }}">
                        <i class="material-icons">view_quilt</i> Bookmark
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">build</i> Options
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-with-icons">
                <li>
                    <a href="{{ route('ulogin.index') }}">
                        <i class="material-icons">fingerprint</i> Login Page
                    </a>
                </li>
                <li>
                    <a href="../examples/signup-page.html">
                        <i class="material-icons">person_add</i> Register Page
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="http://www.creative-tim.com/buy/material-kit-pro?ref=presentation" target="_blank" class="btn btn-white btn-simple">
                <i class="material-icons">unarchive</i> Download
            </a>
        </li>
    </ul>
</div>