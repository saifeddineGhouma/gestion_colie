<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<style>
	.fa-solid  {	
		font-size: 20px;
	}
	
	.fa-layer-group, .fa-user-plus {
		color: #7c8db5;	
		font-size: 12px;
	}
	
	span {
		font-size: 15px;
	}
	
	.dashboard {
		margin: 20px 0px;
		margin-left: 20px;
	}
	
	.dashboard span {
		font-size: 22px;
		padding-top: 5px;
	}
	
	.submenu {
		margin-left: -20px;	
	}
</style>


<div class="sidebar-menu">
    <ul class="menu">
       

        <li
            class="sidebar-item  dashboard">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="fa-solid fa-user"></i>
                <span>Transitaire</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('admin.transiataire.company.index')}}"><i class="fa-solid fa-layer-group"></i> Tous les comptes</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('admin.transiataire.agent.index')}}"><i class="fa-solid fa-user-plus"></i> Ajouter transitaire</a>
                </li>


            </ul>
        </li>

        <li
        class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="fa-solid fa-plane"></i>
            <span>Compagnie aérienne </span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{route('admin.offer.index')}}">Tous les compagnie</a>
            </li>
			
			 <li class="submenu-item ">
                <a href="{{route('admin.transiataire.company.index')}}">Ajouter compagnie</a>
            </li>
			
			 <li class="submenu-item ">
                <a href="{{route('admin.offer.index')}}">Ajouter offre</a>
            </li>
			
			 <li class="submenu-item ">
                <a href="{{route('admin.offer.index')}}">Gérer l'offre</a>
            </li>
        </ul>
			
			<li
            class="sidebar-item  ">
            <a href="index.html" class='sidebar-link'>
                <i class="fa-solid fa-tag"></i>
                <span> Reservation</span>
            </a>
        </li>
		
		<li
            class="sidebar-item  ">
            <a href="index.html" class='sidebar-link'>
                <i class="fa-solid fa-file-invoice"></i>
                <span> Facturation</span>
            </a>
        </li>

    
</div>
