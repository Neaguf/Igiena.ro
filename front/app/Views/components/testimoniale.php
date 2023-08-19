<section class="slid">
    <div>
        <h6>
            testimoniale
        </h6>
        <h3>
            Ce spun clientii nostrii despre noi?

        </h3>
    </div>

    <div class="slider">
        <div class="slides">
            <div class="slide">
                <h5>
                    &#8216&#8216
                </h5>
                <p>Super, chiar mi-a placut. Recomand
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
                <div class="line-testimoniale"></div>
                <div class="poze-slider">
                    <div class="poza-slider">
                        <img src='https://images.unsplash.com/photo-1532074205216-d0e1f4b87368?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGZhY2UlMjBwaWN0dXJlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60' alt="poze de profil">
                        <h4>Andreea</h4>
                        <p>CEO</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <h5>
                    &#8216&#8216
                </h5>
                <p>Super, salonul meu preferat!!</p>
                <div class="line-testimoniale"></div>

                <div class="poze-slider">
                    <div class="poza-slider">
                        <img src='https://images.unsplash.com/photo-1567303314286-6735a4ad9d42?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGZhY2UlMjBwaWN0dXJlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60' alt="poze de profil">
                        <h4>Mihaela</h4>
                        <p>Medic</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <h5>
                    &#8216&#8216
                </h5>
                <p>De obicei nu dau review dar salonul acesta chiar merita</p>
                <div class="line-testimoniale"></div>

                <div class="poze-slider">
                    <div class="poza-slider">
                        <img src='https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZmFjZSUyMHBpY3R1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60' alt="poze de profil">
                        <h4>Anca</h4>
                        <p>Dentist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="butoane">
        <button class="prev"><i class="fas fa-arrow-left"></i></button>
        <button class="next"><i class="fas fa-arrow-right"></i></button>
    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slidesContainer = document.querySelector(".slides");
        const slides = document.querySelectorAll(".slide");
        const prevButton = document.querySelector(".prev");
        const nextButton = document.querySelector(".next");
        let currentIndex = 0;

        function showSlide(index) {
            slidesContainer.style.transform = `translateX(-${index * 100}%)`;
        }

        function handleNextClick() {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
                showSlide(currentIndex);
                // if(currentIndex == 0){
                //     prevButton.disabled = true;
                // }
            }
        }

        function handlePrevClick() {
            if (currentIndex > 0) {
                currentIndex--;
                showSlide(currentIndex);
            }
        }

        prevButton.addEventListener("click", handlePrevClick);
        nextButton.addEventListener("click", handleNextClick);

        //setInterval(handleNextClick, 4000);
    });
</script>