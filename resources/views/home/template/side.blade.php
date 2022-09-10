<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Main</li>
        <li class="nav-item">
            <a class="nav-link {{ $active == 'dashboard' ? '' : 'collapsed' }}" href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Master</li>
        @if (Auth()->user()->role == true)
            <li class="nav-item">
                <a href="{{ url('/blog/categories') }}"
                    class="nav-link {{ $active == 'categories' ? '' : 'collapsed' }}">
                    <i class="bi bi-card-list"></i><span>Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/blog/tags') }}" class="nav-link {{ $active == 'tags' ? '' : 'collapsed' }}">
                    <i class="bi bi-tags"></i><span>Tags</span>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a href="{{ url('/blog/posts') }}" class="nav-link {{ $active == 'posts' ? '' : 'collapsed' }}">
                <i class="bi bi-file-earmark-text"></i><span>Posts</span>
            </a>
        </li><!-- End Blog Posts Nav -->

        @if (Auth()->user()->role == true)
            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link {{ $active == 'teams' ? '' : 'collapsed' }}" href="{{ url('/teams') }}">
                    <i class="bi bi-people"></i>
                    <span>Struktur/Team</span>
                </a>
            </li><!-- End team Page Nav -->

            <li class="nav-item">
                <a class="nav-link {{ $active == 'galleries' ? '' : 'collapsed' }}" href="{{ url('/galleries') }}">
                    <i class="bi bi-card-image"></i>
                    <span>Galleries</span>
                </a>
            </li>
        @endif
        <!-- End Gallery Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
