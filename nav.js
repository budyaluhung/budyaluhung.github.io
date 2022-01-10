const createNav = () =>{
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
            <div class="nav">
                <img src="img/gb3.png" class="brand-logo" alt="">
                <div class="nav-items">
                    <div class="search">
                        <input type="text" class="search-box" placeholder="Search flower...">
                        <button class="search-btn">search</button>
                    </div>
                    <a href="#"><img src="img/user.png" alt=""></a>
                    <a href="#"><img src="img/cart.png" alt=""></a>
                </div>
            </div>
            <ul class="links-container">
                <li class="link-item"><a href="index.html" class="link">Home</a></li>
                <li class="link-item"><a href="about.html" class="link">About</a></li>
                <li class="link-item"><a href="#" class="link">Belanja</a></li>
                <li class="link-item"><a href="bukutamu.php" class="link">Buku Tamu</a></li>
                <li class="link-item"><a href="#" class="link">Chart</a></li>
            </ul>
    `;
}

createNav();