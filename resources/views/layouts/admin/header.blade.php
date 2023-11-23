<!-- header start -->
<div class="header">
    <div class="row g-0 align-items-center">
        <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
            <div class="main-logo d-lg-block d-none">
                <div class="logo-big">
                    <a href="index.html">
                        <img src="/backend/assets/images/logo-black.png" alt="Logo">
                    </a>
                </div>
                <div class="logo-small">
                    <a href="index.html">
                        <img src="/backend/assets/images/logo-small.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="nav-close-btn">
                <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-primary site-view-btn"><i
                    class="fa-light fa-globe me-1"></i> <span>View Website</span></a>
        </div>
        <div class="col-4 d-lg-none">
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="/backend/assets/images/logo-black.png" alt="Logo">
                </a>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
            <div class="header-right-btns d-flex justify-content-end align-items-center">
                <div class="header-collapse-group">
                    <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                        <form class="header-form">
                            <input type="search" name="search" placeholder="Search..." required>
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                            <div class="lang-select">
                                <span>Language:</span>
                                <select>
                                    <option value="">EN</option>
                                    <option value="">BN</option>
                                    <option value="">FR</option>
                                </select>
                            </div>
                            <div class="header-btn-box">
                                <button class="header-btn" id="messageDropdown" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-light fa-comment-dots"></i>
                                    <span class="badge bg-danger">3</span>
                                </button>
                                <ul class="message-dropdown dropdown-menu" aria-labelledby="messageDropdown">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <div class="avatar">
                                                <img src="/backend/assets/images/avatar.png" alt="image">
                                            </div>
                                            <div class="msg-txt">
                                                <span class="name">Archer Cowie</span>
                                                <span class="msg-short">There are many variations of passages of Lorem
                                                    Ipsum.</span>
                                                <span class="time">2 Hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <div class="avatar">
                                                <img src="/backend/assets/images/avatar-2.png" alt="image">
                                            </div>
                                            <div class="msg-txt">
                                                <span class="name">Cody Rodway</span>
                                                <span class="msg-short">There are many variations of passages of Lorem
                                                    Ipsum.</span>
                                                <span class="time">2 Hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <div class="avatar">
                                                <img src="/backend/assets/images/avatar-3.png" alt="image">
                                            </div>
                                            <div class="msg-txt">
                                                <span class="name">Zane Bain</span>
                                                <span class="msg-short">There are many variations of passages of Lorem
                                                    Ipsum.</span>
                                                <span class="time">2 Hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="show-all-btn">Show all message</a>
                                    </li>
                                </ul>
                            </div>
{{--                            @php--}}
{{--                                $pndng = App\Http\Controllers\PaymentRequestController::pending();--}}
{{--                            @endphp--}}
{{--                            <div class="header-btn-box">--}}
{{--                                <button class="header-btn" id="notificationDropdown" data-bs-toggle="dropdown"--}}
{{--                                    aria-expanded="false" onclick="location.assign('')">--}}
{{--                                    <i class="fa-light fa-shopping-cart"></i>--}}
{{--                                    <span class="badge bg-danger">{{ $pndng }}</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
                            <div class="header-btn-box">
                                <div class="dropdown">
                                    <button class="header-btn" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        aria-expanded="false">
                                        <i class="fa-light fa-calculator"></i>
                                    </button>
                                    <ul class="dropdown-menu calculator-dropdown">
                                        <div class="dgb-calc-box">
                                            <div>
                                                <input type="text" id="dgbCalcResult" placeholder="0"
                                                    autocomplete="off" readonly>
                                            </div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="bg-danger">C</td>
                                                        <td class="bg-secondary">CE</td>
                                                        <td class="dgb-calc-oprator bg-primary">/</td>
                                                        <td class="dgb-calc-oprator bg-primary">*</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>8</td>
                                                        <td>9</td>
                                                        <td class="dgb-calc-oprator bg-primary">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>5</td>
                                                        <td>6</td>
                                                        <td class="dgb-calc-oprator bg-primary">+</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td rowspan="2" class="dgb-calc-sum bg-primary">=</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">0</td>
                                                        <td>.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <button class="header-btn fullscreen-btn" id="btnFullscreen"><i
                                    class="fa-light fa-expand"></i></button>
                        </div>
                    </div>
                </div>
                <button class="header-btn header-collapse-group-btn d-lg-none"><i
                        class="fa-light fa-ellipsis-vertical"></i></button>
                <button class="header-btn theme-settings-btn d-lg-none"><i class="fa-light fa-gear"></i></button>
                <div class="header-btn-box profile-btn-box">
                    <button class="profile-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/backend/assets/images/admin.png" alt="image">
                    </button>
                    <ul class="dropdown-menu profile-dropdown-menu">
                        <li>
                            <div class="dropdown-txt text-center">
                                <p class="mb-0">{{ Auth::user()->name }}</p>
                                <span class="d-block">{{ Auth::user()->email }}</span>
                                <div class="d-flex justify-content-center">
                                    <div class="form-check pt-3">
                                        <input class="form-check-input" type="checkbox" id="seeProfileAsSidebar">
                                        <label class="form-check-label" for="seeProfileAsSidebar">See as
                                            sidebar</label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="dropdown-item" href="view-profile.html"><span class="dropdown-icon"><i
                                        class="fa-regular fa-circle-user"></i></span> Profile</a></li>
                        <li><a class="dropdown-item" href="chat.html"><span class="dropdown-icon"><i
                                        class="fa-regular fa-message-lines"></i></span> Message</a></li>
                        <li><a class="dropdown-item" href="task.html"><span class="dropdown-icon"><i
                                        class="fa-regular fa-calendar-check"></i></span> Taskboard</a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i
                                        class="fa-regular fa-circle-question"></i></span> Help</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="edit-profile.html"><span class="dropdown-icon"><i
                                        class="fa-regular fa-gear"></i></span> Settings</a></li>
                        <li><a class="dropdown-item" href="login.html"><span class="dropdown-icon"><i
                                        class="fa-regular fa-arrow-right-from-bracket"></i></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end -->
<!-- profile right sidebar start -->
<div class="profile-right-sidebar">
    <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>
    <div class="top-panel">
        <div class="profile-content scrollable">
            <ul>
                <li>
                    <div class="dropdown-txt text-center">
                        <p class="mb-0">Shaikh Abu Dardah</p>
                        <span class="d-block">Web Developer</span>
                        <div class="d-flex justify-content-center">
                            <div class="form-check pt-3">
                                <input class="form-check-input" type="checkbox" id="seeProfileAsDropdown">
                                <label class="form-check-label" for="seeProfileAsDropdown">See as dropdown</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="dropdown-item" href="view-profile.html"><span class="dropdown-icon"><i
                                class="fa-regular fa-circle-user"></i></span> Profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="chat.html"><span class="dropdown-icon"><i
                                class="fa-regular fa-message-lines"></i></span> Message</a>
                </li>
                <li>
                    <a class="dropdown-item" href="task.html"><span class="dropdown-icon"><i
                                class="fa-regular fa-calendar-check"></i></span> Taskboard</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><span class="dropdown-icon"><i
                                class="fa-regular fa-circle-question"></i></span> Help</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bottom-panel">
        <div class="button-group">
            <a href="edit-profile.html"><i class="fa-light fa-gear"></i><span>Settings</span></a>
            <a href="login.html"><i class="fa-light fa-power-off"></i><span>Logout</span></a>
        </div>
    </div>
</div>
<!-- profile right sidebar end -->
