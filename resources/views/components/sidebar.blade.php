<!-- resources/views/components/sidebar.blade.php -->
<div class="text-white bg-black sidebar" id="sidebar">
    <div class="py-4 sidebar-header">
        <h4>Menu</h4>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="{{ asset('storage/'.$img) }}" alt="Profile" class="rounded-circle" width="30" height="30">
                        <span style="margin-left: 5px">
                            {{ $nama }}
                        </span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li>
                                <a class="list-group-item {{ request()->routeIs('profile') ? 'active' : '' }}"
                                    href="{{ route("profile.show", $nama) }}">
                                    <i class="fa-solid fa-user"></i> {{ $nama }}
                                </a>
                            </li>
                            <li class="logout">
                                <a class="list-group-item logout">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fa-solid fa-door-open"></i>
                                            Log Out
                                        </button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="px-3 nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">
                <i class="fas fa-home me-2"></i> welcome
            </a>
        </li>
    </ul>
</div>