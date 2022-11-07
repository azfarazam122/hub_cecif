<p class="text-start mb-0 mt-0 pt-0 pb-0 bg-white">
    <i class=" p-3 fa-solid fa-bars text-danger me-1" id="menuOfSidebar" onclick="hideOrShowSidebar();"
        style="border-radius: 8px;box-shadow:rgb(20 21 57 ) 0px 0px 4px;"></i>
</p>
<aside id="asideOfSidebar">
    <div id="mainDivOfSidebar">
        <img width="250px" src="{{ asset('images/png version white.png') }}" alt="">
        <div class="me-3"
            style="border-top-right-radius: 24px;
        border-bottom-right-radius: 24px;
        background: #262746;">
            <p class="lead ps-2 ml-0 pb-0 mb-2">
                <img width="30px;" src="{{ asset('images/profile_icon.png') }}" alt=""> Laurens Bernstein
            </p>
            <div class="ps-5">
                <a style="cursor: default" class="" href="javascript:void(0)">
                    <i class="fa-solid fa-signature"></i>
                    <span>
                        Hub Cecif Ltd
                    </span>
                </a>
                <a style="cursor: default" href="javascript:void(0)">
                    <i class="fa-regular fa-envelope"></i>
                    <span>
                        hubcecif@gmail.com
                    </span>
                </a>
                <a style="cursor: default" href="javascript:void(0)">
                    <i class="fa-solid fa-user"></i>
                    <span>
                        +41-234524587
                    </span>
                </a>
            </div>
        </div>
        <br>
        <p class="ms-2 mb-0 lead">User Panel</p>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-list-check"></i>
            <span class="lead">
                Pași pentru aplicare
            </span>
        </a>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-building"></i>
            <span class="lead">
                Compania mea
            </span>
        </a>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-house-laptop"></i>
            <span class="lead">
                Proiectul meu
            </span>
        </a>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-wallet"></i>
            <span class="lead">
                Catalog cheltuieli
            </span>
        </a>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-cart-shopping"></i>
            <span class="lead">
                Achizițiile mele
            </span>
        </a>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-percent"></i>
            <span class="lead">
                Bugetul proiectului
            </span>
        </a>
        <p class="ms-2 mb-0 lead">Home Page</p>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-house"></i>
            <span class="lead">
                Home
            </span>
        </a>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-question"></i>
            <span class="lead">
                FAQ
            </span>
        </a>
        <p class="ms-2 mb-0 lead">SUPPORT</p>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fs-5 fa-solid fa-envelope"></i>
            <span class="lead">
                Support
            </span>
        </a>
        <a href="javascript:void(0)">
            <i style="width: 30px;text-align:center" class="fa-brands fa-facebook"></i>
            <span class="lead">
                Facebook
            </span>
        </a>
    </div>
</aside>
<script>
    function hideOrShowSidebar() {
        if (document.getElementById("mainDivOfSidebar").style.display == "none") {
            $('#mainDivOfSidebar').show()
            document.getElementById("asideOfSidebar").style.width = '280px'
        } else {
            $('#mainDivOfSidebar').hide()
            document.getElementById("asideOfSidebar").style.width = '50px'
        }
        console.log('asdasd');
    }
</script>
