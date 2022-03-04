<script>
    import {_} from 'svelte-i18n';
    import {push} from 'svelte-spa-router';

    export let languages;


</script>

<div class="columns">
    <div class="column is-12">
        <div class="card">
            <div class="card-content">
                <nav class="navbar is-transparent has-centered-logo-alt2" role="navigation"
                     aria-label="main navigation">
                    <div class="navbar-brand is-hidden-desktop">
                        <a class="navbar-item" on:click={ () => push("/")}>
                            <img src="/~web/images/pollackexpo_logo2.png" width="112" height="28">
                        </a>
                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                           data-target="navbarBasicExample"
                           onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                            <span aria-hidden="true" class="nbburger"></span>
                            <span aria-hidden="true" class="nbburger"></span>
                            <span aria-hidden="true" class="nbburger"></span>
                        </a>
                    </div>
                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start is-hidden-touch">
                            <a class="navbar-item" href="https://www.youtube.com/user/pollack1962/videos"
                               target="_blank"><i class="fab fa-youtube"></i></a>
                            <a class="navbar-item" href="https://hu-hu.facebook.com/ptemik/" target="_blank"> <i
                                    class="fab fa-facebook"></i></a>
                            <a class="navbar-item" href="https://www.instagram.com/pte_mik/" target="_blank"> <i
                                    class="fab fa-instagram"></i></a>
                            <a class="navbar-item website" href="https://mik.pte.hu" target="_blank"><i
                                    class="fas fa-globe"></i></a>

                        </div>

                        <div class="navbar-brand is-hidden-touch imagee">
                            <a class="navbar-item hover15" on:click={ () => push("/")}>
                                <figure><img src="/~web/images/pollackexpo_logo2.png" class="imageee" width="394" height="67"></figure>
                            </a>
                            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                               data-target="navbarBasicExample"
                               onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                                <span aria-hidden="true" class="nbburger"></span>
                                <span aria-hidden="true" class="nbburger"></span>
                                <span aria-hidden="true" class="nbburger"></span>
                            </a>
                        </div>

                        <div class="navbar-end">
                            <div class="navbar-item">
                                <select bind:value={$languages} class="custom-select">
                                    <option value="hu">🇭🇺 {$_('menu.lang.hu')}</option>
                                    <option value="en">🇬🇧 {$_('menu.lang.en')}</option>
                                </select>
                            </div>
                        </div>

                        <div class="navbar-start navbar-wide" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
<!--                            <a class="navbar-item highlighted" href='/~web/files/attendence_rules.pdf'>-->
<!--                                {$_('menu.attendencerules')}-->
<!--                            </a>-->
                            <a class="navbar-item nbi" on:click={() => push('/programguide')}>
                                {$_('menu.programguide')}
                            </a>
                            <a class="navbar-item nbi" href='/~web/files/PollackEXPO_2022_standok_A3.pdf'>
                                {$_('menu.stands')}
                            </a>
<!--                            <a class="navbar-item nbi" on:click={() => push('/programs')}>-->
<!--                                {$_('menu.programs')}-->
<!--                            </a>-->
                            <a class="navbar-item nbi" on:click={() => push('/sponsors')}>
                                {$_('menu.sponsors')}
                            </a>
                            <a class="navbar-item nbi" on:click={() => push('/accommodation')}>
                                {$_('menu.accommodation')}
                            </a>
<!--                            <a class="navbar-item nbi" on:click={() => push('/')}>-->
<!--                                {$_('menu.stand')}-->
<!--                            </a>-->

                            <a class="navbar-item nbi" on:click={() => push('/gallery')}>
                                {$_('menu.gallery')}
                            </a>
<!--                            <div class="navbar-item has-dropdown is-hoverable">-->
<!--                                <a class="navbar-link nbi">-->
<!--                                    {$_('menu.gallery')}-->
<!--                                </a>-->
<!--                                <div class="navbar-dropdown">-->
<!--                                    <a class="navbar-item dditem" on:click={ () => push("/gallery/ea")}>-->
<!--                                        {$_('gallery.title.presentation')}-->
<!--                                    </a>-->
<!--                                    <hr class="navbar-divider">-->
<!--                                    <a class="navbar-item dditem" on:click={ () => push("/gallery/k")}>-->
<!--                                        {$_('gallery.title.exhibition')}-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->

                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link nbi">
                                    {$_('menu.registration.registration')}
                                </a>
                                <div class="navbar-dropdown">
<!--                                    <a class="navbar-item dditem" on:click={ () => push("/student")}>-->
<!--                                        {$_('menu.registration.student')}-->
<!--                                    </a>-->
<!--                                    <hr class="navbar-divider">-->
                                    <a class="navbar-item dditem" href="http://www.pollackexpo.hu/belepes/" target="_blank">
                                        {$_('menu.registration.partners')}
                                    </a>
                                    <a class="navbar-item dditem" on:click={() => push('/student')}>
                                        {$_('menu.registration.student')}
                                    </a>
                                </div>
                            </div>
<!--                            <a class="navbar-item nbi" on:click={() => push('/contact')}>-->
<!--                                {$_('menu.contact')}-->
<!--                            </a>-->

                        </div>
                        <a class="pte" href="https://pte.hu" target="_blank"><img src="/~web/images/pte.png" class="pte"/></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<style>
    .pte{
        margin: -25px 0 0 30px;
        width: 64px;
        height: 64px;
        color: white;
    }

    .navbar.has-centered-logo-alt2 .navbar-menu {
        flex-wrap: wrap;
    }

    .navbar.has-centered-logo-alt2 .navbar-start,
    .navbar.has-centered-logo-alt2 .navbar-end {
        flex: 1 1 0;
    }

    .navbar.has-centered-logo-alt2 .navbar-wide.navbar-start {
        flex: 1 1 100%;
        justify-content: center;
    }
    .dditem{
        color: black;
    }

    .fa-youtube{
       color: red;
    }

    .fa-facebook{
        color: #4267B2;
    }

    .fa-instagram{
        color: #C13584;
    }

    .fa-globe{
        color: #ffffff;
    }

    .navbar-item:hover{
        /*color: #D3AC2B;*/
        /*transition: color 1s;*/
    }

    .card {
        background-color: #333D51;
    }

    .navbar {
        background-color: #333D51;
    }

    .columns {
        background-color: #333D51;
    }

    .imageee{
        min-height: 68px;
    }

    .imageee:hover{

    }





    .card-content {
        color: #F4F3EA;
        text-space: 2px;
        font-weight: bold;
        font-size: 1.25em;
    }

   .custom-select{
       width: 120px;
       height: 30px;
       border-top: 1px solid #D3AC2B;
       border-left: 1px solid #D3AC2B;
       font-size: 18px;
       color: #F4F3EA;
       background-color: #333D51;
       border-radius: 5px;
       box-shadow: 4px 4px #222b3d;
   }

    @media screen and (min-width: 1023px){
        .nbi{
            color: #F4F3EA;
        }
        .highlighted{
            color: #d91d1d;
        }
        .highlighted:hover{
            color: #D3AC2B;
            transition: color 1s;
        }

        .nbi:hover{
            color: #D3AC2B;
            transition: color 1s;
        }
    }
    @media screen and (max-width: 768px){
        .nbi{
            color: black;
        }
        .highlighted a{
            color: #d91d1d;
        }
    }

    .nbburger{
        color: #F4F3EA;
    }

    .imageee{
        height: 120px;
    }

    .navbar-menu{
        max-width: 95vw;
    }

    .navbar-menu{
        animation: navAnimOpen .2s ease-in-out;
    }

    @keyframes navAnimOpen {
        0% {display: none;opacity: 0;max-height: 0;}
        1% {display: block;opacity: 0;}
        100% {opacity: 1;max-height: 396px;}
    }



</style>