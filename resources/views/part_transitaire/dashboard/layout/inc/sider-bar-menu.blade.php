<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<div class="sidebar-menu" style="">
    <ul class="menu" >
        <li class="sidebar-title" style="margin-left: -20px">  <a href="https://compassionate-lamarr.185-137-122-9.plesk.page/ok/public/transitaire" class="search-input" style="color: #336A7D; background-color: #F2F7FF; border: none; border-radius: 15px; padding: 15px 90px 20px 15px; margin-bottom: 20px"><i class="fa-solid fa-magnifying-glass" style="font-size: 13px"></i> Recherche</a></li>

        <li
            class="sidebar-item  " style="margin-top: 40px; margin-left: -10px;">
            <a href="{{route('transitaire.dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li
            class="sidebar-item  has-sub" style="margin-top: -10px; margin-left: -10px;">
            <a href="#" class='sidebar-link'>
                <i class="fa-solid fa-user-plus"></i>
                <span>Utilisateurs</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
					
                    <a href="#"><i class="fa-solid fa-layer-group"></i> Tous les comptes</a>
                </li>
                <li class="submenu-item ">
                    <a href="#"><i class="fa-solid fa-user-plus"></i> Ajouter transitaire</a>
                </li>


            </ul>
			 <a href="{{route('transitaire.reservation.index')}}" class='sidebar-link'  style="margin-top: -10px">
                <i class="fa-solid fa-tag"></i>
                <span>Reservation</span>
            </a>
        </li>



    </ul>
</div>
