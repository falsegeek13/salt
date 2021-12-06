<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container py-2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="btnToggle" onclick="toggleFunction()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex ml-5">
            <img src="/image/telkomorbit.svg" alt="telkomselorbit" style="height: 48px">
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mr-5">
                <li class="nav-item"><a href="#" class="nav-link header-color fw-bold">Fitur</a></li>
                <li class="nav-item"><a href="#" class="nav-link header-color fw-bold">Produk</a></li>
                <li class="nav-item"><a href="#" class="nav-link header-color fw-bold">Jangkauan</a></li>
                <li class="nav-item"><a href="#" class="nav-link header-color fw-bold">Promo</a></li>
                <li class="nav-item"><a href="#" class="nav-link header-color fw-bold">Bantuan</a></li>
                <li class="nav-item">
                    <a href="/login" class="nav-link header-color fw-bold {{ Request::is('login')? 'active':'' }}">Login</a>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-danger rounded-pill buy mr-5 fw-bold" id="btn-buy">Beli Sekarang</button>
        <div id="toggle-btn">
            <button type="button" class="btn btn-outline-dark rounded-pill beli text-dark fw-bold" id="btn-beli">Beli</button>
        </div>
    </div>
</nav>
<script>
    window.onscroll = function() {
        scrollFunction();
    };
    const beli = document.getElementById('btn-beli');

    function scrollFunction(){
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            beli.classList.remove('btn-outline-dark');
            beli.classList.remove('text-dark');
            beli.classList.add('btn-danger');
            beli.classList.add('text-light');
        } else {
            beli.classList.add('btn-outline-dark');
            beli.classList.add('text-dark');
            beli.classList.remove('btn-danger');
            beli.classList.remove('text-light');
        }
    }
    function toggleFunction() {
        var element = document.getElementById("toggle-btn");
        element.classList.toggle("d-none");
    }
</script>