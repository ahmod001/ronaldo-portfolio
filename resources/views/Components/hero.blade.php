<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading">Hey! I am</span>
                    <h1 id="name"></h1>
                    <h2>I'm a
                        <span id="profession" class="txt-rotate" data-period="2000" data-rotate=""></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</section>

<script>
    (async () => {
        try {
            const res = await axios.get('/hero');
            const {
                name,
                profession,
            } = res.data?.data;

            $('#name').text(name);
            $('#profession').text(profession);

        } catch (error) {
            console.error("Something went wrong");
        }
    })();
</script>
