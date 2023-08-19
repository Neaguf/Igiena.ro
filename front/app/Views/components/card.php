<div class="about">
    <div class="text">
        <div class="title">
            <h2>Ofertele noastre</h2>
        </div>
        <div class="description">
            <p>“Frumusetea este mai mult decat o stare de spirit, vitalitate, armonie, iubire. Desi ea nu are varsta, frumusetea fizica are intotdeauna nevoie de ingrijire. Pentru mine, ca hairstylist, frumusetea inseamna armonia perfecta intre culoare, forma si trasaturi.”.</p>
        </div>
        <div class="counter-style">
            <div class="counter-container">
                <span class="counter" data-target="56"> 0 </span>
                <h4>
                    Saloane de <br> coafura
                </h4>
            </div>
            <div class="counter-container">
                <span class="counter" data-target="900"> 0 </span>
                <h4>
                    Specialisti in <br> Frumusete
                </h4>
            </div>
        </div>
    </div>
    <div class="poze">
        <img src="/public/assets/images/slider.jpg" alt="Services" class="services-image">
        <img src="/public/assets/images/silder3.jpeg" alt="Services" alt="Services" class="services-image">
    </div>
</div>
<script>
    function startCounters() {
        const counters = document.querySelectorAll('.counter');
        const options = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const targetNumber = parseInt(target.dataset.target);
                    const duration = 1000;
                    let currentNumber = 0;
                    const step = Math.ceil(targetNumber / (duration / 10));

                    const counterInterval = setInterval(() => {
                        currentNumber += step;
                        if (currentNumber >= targetNumber) {
                            clearInterval(counterInterval);
                            currentNumber = targetNumber;
                            observer.unobserve(target);
                        }
                        target.textContent = currentNumber;
                    }, 10);
                }
            });
        }, options);

        counters.forEach((counter) => {
            observer.observe(counter);
        });
    }

    startCounters();
</script>