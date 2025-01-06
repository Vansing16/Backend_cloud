<div class="overlap-group9">
    <div class="sidebar" id="sidebar">
        <div class="admin-2 admin-3">
            <a href="/admin">
                <div class="logo"><h1 class="square inter-medium-ebony-clay-33px">Admin</h1></div>
            </a>
        </div>
        <div class="selections">
            <div class="home-selections home">
                <div class="home-title home">

                        <div class="help-1"><div class="help inter-semi-bold-black-16px">Home</div></div>

                </div>
                <div class="management-child management">
                    <a href="/admin/users" class="nav-link">
                        <div class="x-child x">
                            <div class="messages-2">
                                <div class="messages-3">
                                    <img class="iconly-bulk3-user" src="{{ asset('img/iconly-bulk-3-user.svg') }}" alt="Iconly/Bulk/3 User" />
                                    <div class="menu h6-16px-regular-inter">Users</div>
                                </div>
                                <img class="dropdown" src="{{ asset('img/dropdown.svg') }}" alt="Dropdown" />
                            </div>
                        </div>
                    </a>
                    <a href="/admin/reviews" class="nav-link">
                        <div class="x-child x">
                            <div class="messages-4">
                                <div class="messages-5">
                                    <img class="iconly-bulk" src="{{ asset('img/iconly-bulk-filter.svg') }}" alt="Iconly/Bulk/Filter" />
                                    <div class="menu h6-16px-regular-inter">Contact Us</div>
                                </div>
                                <img class="dropdown" src="{{ asset('img/dropdown-1.svg') }}" alt="Dropdown" />
                            </div>
                        </div>
                    </a>
                    <a href="/admin/approvals" class="nav-link">
                        <div class="x-child x">
                            <div class="messages-9">
                                <div class="messages-10">
                                    <img class="iconly-bulk-shield-done" src="{{ asset('img/iconly-bulk-shield-done.svg') }}" alt="Iconly/Bulk/Shield Done" />
                                    <div class="menu h6-16px-regular-inter">Services</div>
                                </div>
                                <img class="dropdown" src="{{ asset('img/dropdown-4.svg') }}" alt="Dropdown" />
                            </div>
                        </div>
                    </a>
                    <img class="divider" src="{{ asset('img/divider.svg') }}" alt="divider" />
                </div>
            </div>
            <div class="management-selections management">
                <div class="management-title management">
                    <div class="help-2"><div class="help inter-semi-bold-black-16px">Management</div></div>
                </div>
                <div class="management-child management">
                    <a href="/admin/create" class="nav-link">
                        <div class="x-child x">
                            <div class="messages-7">
                                <div class="messages-8">
                                    <div class="iconly-bulk">
                                        <div class="document">
                                            <img class="combined-shape" src="{{ asset('img/combined-shape.svg') }}" alt="Combined Shape" />
                                        </div>
                                    </div>
                                    <div class="menu h6-16px-regular-inter">Create</div>
                                </div>
                                <img class="dropdown" src="{{ asset('img/dropdown-3.svg') }}" alt="Dropdown" />
                            </div>
                        </div>
                    </a>

                    <form action="/admin/signout" method="POST" class="nav-link">
                        @csrf <!-- Include this directive to add a CSRF token for security -->
                        <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                            <div class="x-child x">
                                <div class="messages">
                                    <div class="messages-13">
                                        <div class="iconly-bulk-info-circle">
                                            <div class="overlap-group-4">
                                                <img class="combined-shape-1" src="{{ asset('img/combined-shape-1.svg') }}" alt="Combined Shape" />
                                            </div>
                                        </div>
                                        <div class="menu h6-16px-regular-inter">LogOut</div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </form>

                </div>
                <img class="line-55 line-4" src="{{ asset('img/divider.svg') }}" alt="Line 55" />
            </div>
        </div>
        <img class="icon-minimize" id="icon-minimize" src="{{ asset('img/icon-minimize.svg') }}" alt="icon-minimize" />
    </div>
</div>
