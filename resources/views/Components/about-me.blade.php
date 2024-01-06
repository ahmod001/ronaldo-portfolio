<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div id="about-me-img" class="img d-flex align-self-stretch align-items-center">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div id="about-me-info" class="col-md-12 heading-section ftco-animate">

                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="120">0</span>
                            <span>Project complete</span>
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="module">
    import {
        getElementById
    } from "/js/utils.mjs";

    (async () => {
        try {
            const res = await axios.get('/about');
            const {
                name,
                email,
                phone,
                profession,
                img_url,
                date_of_birth,
                address,
                short_description,
                zip_code
            } = res.data?.data;

            getElementById('about-me-img').style.backgroundImage = `url(${img_url})`;

            getElementById('about-me-info').innerHTML = (`
                      <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>
                        <p>${short_description}</p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Name:</span> <span>${name}</span></li>
                            <li class="d-flex"><span>Date of birth:</span> <span>${date_of_birth}</span></li>
                            <li class="d-flex"><span>Address:</span> <span>${address}</span></li>
                            <li class="d-flex"><span>Zip code:</span> <span>${address}</span></li>
                            <li class="d-flex"><span>Email:</span> <span>${email}</span></li>
                            <li class="d-flex"><span>Phone: </span> <span>${phone}</span></li>
                        </ul>`)

        } catch (error) {
            console.error("Something went wrong");
        }
    })()
</script>
