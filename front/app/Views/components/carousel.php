<div class="carousel" id="carusel">
    <div class="carousel-test">
        <div class="title" id="title">
            <span class="style active">
                <div class="title-content">
                    <h6>
                        moda si unghii
                    </h6>
                    <h3>
                        MAKEUP ARTISTIC
                    </h3>
                    <p>
                        Creativitate si Inovatie in industria coafurilor.
                    </p>
                    <a href="<?= base_url('despre-noi') ?>">
                        <button class="fill-button">
                            Despre Noi
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </a>
                </div>
            </span>
            <span class="style">
                <div class="title-content">
                    <h6>
                        moda
                    </h6>
                    <h3>
                        MAKEUP ARTISTIC
                    </h3>
                    <p>
                        Creativitate si Inovatie in industria coafurilor.
                    </p>
                    <a href="<?= base_url('despre-noi') ?>">
                        <button class="fill-button">
                            Despre Noi
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </a>
                </div>
            </span>
            <span class="style">
                <div class="title-content">
                    <h6>
                        moda
                    </h6>
                    <h3>
                        MAKEUP ARTISTIC
                    </h3>
                    <p>
                        Creativitate si Inovatie in industria coafurilor.
                    </p>
                    <a href="<?= base_url('despre-noi') ?>">
                        <button class="fill-button">
                            Despre Noi
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </a>
                </div>
            </span>
            <span class="style">
                <div class="title-content">
                    <h6>
                        moda
                    </h6>
                    <h3>
                        MAKEUP ARTISTIC
                    </h3>
                    <p>
                        Creativitate si Inovatie in industria coafurilor.
                    </p>
                    <a href="<?= base_url('despre-noi') ?>">
                        <button class="fill-button">
                            Despre Noi
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </a>
                </div>
            </span>
        </div>
        <div class="controlls" id='controlls'>
            <span><i class="fa-solid fa-circle selected"></i></span>
            <span><i class="fa-solid fa-circle"></i></span>
            <span><i class="fa-solid fa-circle"></i></span>
            <span><i class="fa-solid fa-circle"></i></span>
        </div>
    </div>

</div>


<script>
    let images = [
        '/public/assets/images/slider.jpg',
        '/public/assets/images/slider2.jpeg',
        '/public/assets/images/slider.jpg',
        '/public/assets/images/slider2.jpeg',


    ];
    var currentImage = 0;

    function setImage() {
        let carusel = document.getElementById('carusel');
        console.log(currentImage)
        carusel.style.backgroundImage = `url('${images[currentImage]}')`;
    }

    setImage();

    setInterval(async () => {
        console.log('test');
        await changeImage()
    }, 5500)

    function handleSelectImage() {
        let controlls = document.getElementById('controlls').children;
        for (let i = 0; i < controlls.length; i++) {
            console.log(controlls[i].children[0].classList);
            controlls[i].addEventListener('click', () => {
                console.log('test');
            })
        }
    }

    async function selectSpecificImage(index, element_controlls, element_title) {
        // currentImage = index;
        let controlls = document.getElementById('controlls').children;
        let title = document.getElementById('title').children;
        for (let i = 0; i < controlls.length; i++) {
            if (controlls[i].children[0].classList.contains('selected')) {
                controlls[i].children[0].classList.remove('selected');
            }
            if (title[i].classList.contains('active')) {
                title[i].classList.remove('active');
            }
        }

        element_controlls.children[0].classList.add('selected');
        element_title.classList.add('active');
        currentImage = index;
        setImage();
    }

    function changeImage() {
        let lastIndex = images.length - 1;
        currentImage++;
        if (currentImage > lastIndex) {
            currentImage = 0;
        }

        let controlls = document.getElementById('controlls').children;
        let title = document.getElementById('title').children;

        for (let i = 0; i < controlls.length; i++) {
            if (controlls[i].children[0].classList.contains('selected')) {
                controlls[i].children[0].classList.remove('selected');
            }
            if (title[i].classList.contains('active')) {
                title[i].classList.remove('active');
            }
        }

        controlls[currentImage].children[0].classList.add('selected');
        title[currentImage].classList.add('active');

        setImage();
    }

    function setupEvents() {
        let controlls = document.getElementById('controlls').children;
        let title = document.getElementById('title').children;
        for (let i = 0; i < controlls.length; i++) {
            controlls[i].addEventListener('click', () => {
                selectSpecificImage(i, controlls[i], title[i]);
            });
        }
    }

    setupEvents();
</script>