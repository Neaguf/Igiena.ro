<div class="map-location">
    <div>
    <?php for($i=1; $i<=20;$i++) { ?>
        <a href="saloane#salon<?php echo $i?>" class="link">salon<?php echo $i?></a>
<?php } ?>
    </div>

    <?php for($i=1; $i<=20;$i++) { ?>
    <div id="salon<?php echo $i?>" class="salon">
        <div class="text">
            <div class="title">
                <h2>Saloul din Pipera</h2>
            </div>
            <div class="extra-text">
                <div class="locatie">
                    Soseaua Pipera 13, bloc 2F, sector 1, Bucuresti
                </div>
            </div>
            <div class="description">
                <p>“Frumusetea este mai mult decat o stare de spirit, vitalitate, armonie, iubire. Desi ea nu are letsta, frumusetea fizica are intotdeauna nevoie de ingrijire. Pentru mine, ca hairstylist, frumusetea inseamna armonia perfecta intre culoare, forma si trasaturi.”.</p>
            </div>
            <buton class="detalii">
                Click pentru detalii...
                <div class="bara"></div>
            </buton>

            <div class="extra-text">
                <div class="program">
                    <p>
                        Luni-Vineri <br> 07:30-21:00
                    </p>
                    <p>
                        Sambata <br> 07:30-16:00
                    </p>
                    <p>
                        Duminica <br> 8:00-14:00
                    </p>
                </div>
                <div class="telefon">
                    Telefon <br> 021-232-5175
                </div>
            </div>
        </div>

        <div class="poze">
            <img src="/public/assets/images/slider.jpg" alt="Services" class="services-image">
            <img src="/public/assets/images/slider.jpg" alt="Services" class="services-image">
<!--             
            <img src="/public/assets/images/slider.jpg" alt="Services" class="services-image extra-poze">
            <img src="/public/assets/images/slider.jpg" alt="Services" class="services-image extra-poze"> -->
        </div>
    </div>
<?php } ?>

</div>
<script>
    // let saloaneA = document.querySelectorAll(".salon");

    // for(i=0; i<saloaneA.length; i++){
    //     let clicked = saloaneA[i]
    //     clicked.addEventListener("click", function(){
    //         saloaneA = document.querySelectorAll(".salon");
    //         for (j = 0; j < saloaneA.length; j++) {
    //             saloaneA[j].classList.remove("active");
    //         }

    //         this.classList.add("active");
    //     });
    // }

    let buton = document.querySelectorAll(".detalii");

    for (i = 0; i < buton.length; i++) {
        (function(index) {
            let clicked = buton[index];
            clicked.addEventListener("click", function() {
            let salon = document.querySelectorAll(".salon");
            for (j = 0; j < salon.length; j++) {
                salon[j].classList.remove("active");
            }

            salon[index].classList.add("active");
            });
        })(i);
    }
    
    let linkuri = document.querySelectorAll(".link");

    for (i = 0; i < linkuri.length; i++) {
        (function(index) {
            let clicked = linkuri[index];
            clicked.addEventListener("click", function() {
            let salon = document.querySelectorAll(".salon");
            for (j = 0; j < salon.length; j++) {
                salon[j].classList.remove("active");
            }
            salon[index].classList.add("active");
            });
        })(i);
    }



    


</script>