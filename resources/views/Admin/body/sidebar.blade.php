<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">

        <div>
            <h4 class="logo-text">Subash Danuwar</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('home.slide') }}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Home Slide Setup</div>
            </a>


        </li>
        <li>
            <a href="{{ route('all.about.page') }}" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">About Page Setup</div>
            </a>

        </li>
        <li>
            <a class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Skills Page Setup</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.skills.title') }}"><i class="bx bx-right-arrow-alt"></i>Add Skills Title</a>
                </li>
            </ul>

        </li>



    </ul>
</div>
