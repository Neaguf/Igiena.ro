<style>
    .titlu-mare {
        text-align: center;
        margin-bottom: 30px;
    }

    h2 {
        font-size: 24px;
        font-family: "Snell Roundhand", cursive;
    }

    .oferte-parinte {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(4, auto);
        grid-column-gap: 50px;
        grid-row-gap: 40px;
        padding: 150px;
    }

    .oferta {
        display: grid;
        grid-template-columns: auto 1fr;
        grid-column-gap: 20px;
        align-items: center;
    }

    img {
        margin-inline-end: 0;
        margin-inline-start: 0;
        border-radius: 50%;
        background-clip: border-box;
        transition: transform 400ms cubic-bezier(0.175, 0.885, 0.32, 2.75);
        width: 80px;
        height: 80px;

    }

    img:hover {
        transform: scale(1.1);
    }

    .h6-titlu {
        font-size: 20px;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: uppercase;
    }

    .h6-pret {
        font-size: 20px;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: uppercase;
        color: #ff6a00;
        justify-self: end;
    }

    .paragraf {
        font-size: 14px;
        font-weight: 400;
        line-height: 1.5;
        margin-bottom: 0;
        margin-top: 10px;
        color: #777777;
    }

    @media(max-width : 768px) {
        .oferte-parinte {
            grid-template-columns: repeat(1, 1fr);
            grid-template-rows: repeat(8, auto);
            justify-content: center;
            align-items: center;

        }

        .oferta {
            grid-template-columns: 1fr;
            grid-template-rows: auto 1fr;
            grid-column-gap: 0;
            align-items: center;
            justify-items: center;
        }
    }
</style>
</head>

<body>
    <div class="titlu-mare">
        <h2>Oferte Populare</h2>
    </div>
    <section class="oferte-parinte">
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii manechiura" />
            <div>
                <h6 class="h6-titlu">Manichiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii Manichiura" />
            <div>
                <h6 class="h6-titlu">Manichiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii Manichiura" />
            <div>
                <h6 class="h6-titlu">Manichiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii Manichiura" />
            <div>
                <h6 class="h6-titlu">Manichiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii Manichiura" />
            <div>
                <h6 class="h6-titlu">Manichiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii Manichiura" />
            <div>
                <h6 class="h6-titlu">Manechiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii manechiura" />
            <div>
                <h6 class="h6-titlu">Manechiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
        <div class="oferta">
            <img src="/public/assets/images/Manichiura.jpg" class="img" alt=" poza cu unghii manechiura" />
            <div>
                <h6 class="h6-titlu">Manechiura</h6>
                <h6 class="h6-pret">$12</h6>
                <div class="paragraf">In nec faucibus sem, eu accumsan massa</div>
            </div>
        </div>
    </section>