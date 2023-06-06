<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">


            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item d-flex align-items-center ">
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                            <label class="form-check-label" for="lightmode">Light</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                            <label class="form-check-label" for="darkmode">Dark</label>
                        </div>
                    </li>

                </ul>
            </div>

            @php
                $id = Auth::user()->id;
                $adminData = App\Models\User::find($id);
            @endphp

            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ !empty($adminData->admin_photo) ? url('upload/admin_images/' . $adminData->admin_photo) : url('upload/no_image.jpg') }} "
                        class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>

                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                                class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('change.password') }}"><i
                                class="bx bx-cog"></i><span>Change Password</span></a>

                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
