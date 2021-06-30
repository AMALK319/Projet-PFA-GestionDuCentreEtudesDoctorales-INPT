<div class="sidebar" style="background-color: #04649C;">

    <div class="title">
        <h3 style="padding-top: 10px ; padding-bottom: 11px ; padding-left: 0px ;text-align: center; "> {{ $role }}</h3>

    </div>


    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('admin.professeur.welcome') }}" class="nav-link  ">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Dashboard
                </a>

            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link   nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    Formations
                </a>
                <ul class="nav-dropdown-items">

                    <li class="nav-item">
                        <a href="{{ route('admin.professeur.formations_proposées.index') }}" class="nav-link  ">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Formations proposées
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.professeur.participants.index') }} " class="nav-link  ">
                            <i class="fa-fw fas fa-briefcase nav-icon">

                            </i>
                            Participants
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link    nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    Sujets
                </a>
                <ul class="nav-dropdown-items">

                    <li class="nav-item">
                        <a href=" {{ route('admin.professeur.sujets_proposés.index') }}" class="nav-link  ">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Sujets proposés
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.professeur.candidatures.index') }} " class="nav-link  ">
                            <i class="fa-fw fas fa-briefcase nav-icon">

                            </i>
                            Candidatures
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.professeur.compte') }}" class="nav-link  ">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Mon compte
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" id="openModalLink">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    Deconnexion
                </a>
            </li>


        </ul>

    </nav>


    <!-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> -->
</div>
<!-- Modal deconnexion -->
<!-- <div id="myModale" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" id="#modal_content_modify">
            <div class="modal-header">
                <h5 class="modal-title">Deconnexion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="deconnexion">Voulez-Vous Se Deconnecter ?</p>
            </div>
            <div class="modal-footer">
                <button id="closeModalBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Se deconnecter</button>
            </div>

        </div>
    </div>
</div> -->
<script>
    let modal = null;

   /*  const openModal = function(e) {
        e.preventDefault()
        const target = document.querySelector(e.target.getAttribute('href'))‏
        target.style.display = null;
        /* target.removeAttribute('aria-hidden') ‏
        target.setAttribute('aria-modal', 'true')
        modal = target;
        modal.addEventListener('click', closeModal)
        modal.querySelector('').addEventListener('click', closeModal)‏‏
        document.querySelectorAll('modal-dialog').forEach(a =>‏ { a.add.EventListener('click' ,openModal)})‏
    }; */
</script>


‏

<style>
    h5 {
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: bold;
        color: grey;
        margin-left: 35%;
    }

    .deconnexion {
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
        color: rgb(189, 141, 141);
        margin: auto;
    }
</style>