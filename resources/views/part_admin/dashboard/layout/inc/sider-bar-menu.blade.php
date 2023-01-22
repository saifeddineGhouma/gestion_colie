<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li
            class="sidebar-item  ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Company Transitaire</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('admin.transiataire.company.index')}}">Company Transitaire</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('admin.transiataire.agent.index')}}">Transitaire</a>
                </li>


            </ul>
        </li>

        <li
        class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-stack"></i>
            <span>Offer</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{route('admin.offer.index')}}">liste Offer</a>
            </li>
        </ul>
    </li>

    </ul>
</div>
