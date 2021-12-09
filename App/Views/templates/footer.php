<aside>
    <div class="flag">
        <div class="flag-boxes">
            <div class="flag-single">
                <div class="single-area">
                    <i data-feather="credit-card"></i>
                    <?php if(isset($_SESSION['name']) ? $name = $_SESSION['name'] : $name = "**** **** **** ****"); ?>
                    <h6><?= $name; ?></h6>
                    <p>Valido até 11/27</p>
                </div>
                <div class="single-area columns-two">
                    <div><p>Nome Completo</p></div>
                    <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Mastercard_2019_logo.svg/1200px-Mastercard_2019_logo.svg.png" /></div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator"></div>

    <div class="list">
        <h2>Recent Activies</h2>
        <p>12 March</p>
        <ul>
            <li class="three">
                <div>
                    <span class="background"><i data-feather="home"></i></span>
                </div>
                <div>
                    <h6>Success</h6>
                    <p>Lorem</p>
                </div>
                <div>
                    <h5>120</h5>
                </div>
            </li>

            <li class="three">
                <div>
                    <span class="background"><i data-feather="home"></i></span>
                </div>
                <div>
                    <h6>Success</h6>
                    <p>Lorem</p>
                </div>
                <div>
                    <h5>120</h5>
                </div>
            </li>

            <li class="three">
                <div>
                    <span class="background"><i data-feather="home"></i></span>
                </div>
                <div>
                    <h6>Success</h6>
                    <p>Lorem</p>
                </div>
                <div>
                    <h5>120</h5>
                </div>
            </li>
        </ul>
    </div>
</aside>
</section>

<footer>

</footer>
<script>
    feather.replace()
</script>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<script src="<?php echo BASE_URL ?>js/metrics.js"></script>
</body>
</html>