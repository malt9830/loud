<style>
    .bottom-player {
        position: fixed;
        bottom: 0;
        background: white;
        width: 100%;
        padding: 0;
        margin: 0;
        cursor: pointer;
    }

    .bottom-player-content {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
    }

    .bottom-player-box {
        display: inline-block;
        margin: 0.5rem;
    }

    .bottom-player-left {
        display: grid;
        grid-gap: 0.5rem;
    }

    .bottom-player-right {
        display: grid;
        grid-gap: 0.5rem;
    }

    .bottom-player-text {
        display: none;
    }

    .bottom-player-image {
        display: inline-block;
        width: 3rem;
    }

    .bottom-player-image img {
        border-radius: 1rem;
    }

    .bottom-player-left h5 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.3rem;
    }

    .bottom-player-left p {
        font-size: 0.9rem;
    }

    .bottom-player-middle {
        display: grid;
        grid-template-columns: 1fr 7fr;
        grid-gap: 1.3rem;
        align-items: center;
    }

    .bottom-player-middle>* {}

    .bottom-player .fas,
    .bottom-player .far {
        font-size: 2rem;
        align-self: center;
        color: #1A202C;
        vertical-align: middle;
    }

    .bottom-player .fa-list {
        display: none;
    }

    .bottom-player .bar-container {
        position: relative;
        height: 1rem;
        border-radius: 1rem;
    }

    .bottom-player .bar-container .full-bar,
    .bottom-player .bar-container .half-bar {
        position: absolute;
        border-radius: 1rem;
        height: 100%;
    }

    .bottom-player .bar-container .full-bar {
        width: 100%;
        background: #DADADA;
    }

    .bottom-player .bar-container .half-bar {
        width: 70%;
        background: #1A202C;
    }

    .bottom-player .player-timer {
        display: none;
    }

    .bottom-player .bar-display {
        display: grid;
        grid-template-rows: 1fr 1fr;
        grid-gap: 0.3rem;
    }

    .bottom-player .bar-text {
        font-size: 0.7rem;
    }

    .bottom-player-drag {
        text-align: center;
    }

    .fa-chevron-up {
        font-size: 1.3rem;
    }

    @media (min-width: 1000px) {
        .bottom-player {
            padding: 0 1.5rem;
        }

        .bottom-player-box {
            margin: 1rem;
        }

        .bottom-player-text {
            display: inline-block;
        }

        .bottom-player-image {
            width: 5rem;
        }

        .bottom-player .player-timer {
            display: block;
        }

        .bottom-player .fa-list {
            display: inline-block;
        }

        .bottom-player .fas,
        .bottom-player .far {
            font-size: 3rem;
        }

        .bottom-player-left {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0.5rem;
        }

        .bottom-player-middle {
            grid-template-columns: 1fr 1fr 11fr 1fr;
        }

        .bottom-player-right {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 1.3rem;
        }

        .bottom-player .bar-container {
            height: 2rem;
        }

        .bottom-player .bar-display {
            grid-template-rows: 1fr;
        }

        .bottom-player .bar-text {
            display: none;
        }

        .bottom-player-drag {
            display: none;
        }
    }

    /*-------------potentiel_skjult_ting----------*/

    .bottom-player {
        transform: translateY(60%);
        transition-duration: 0.15s;
        transition-timing-function: ease-in;
    }

    .bottom-player-hidden {
        margin: 1rem;
    }

    .slide {
        transform: translateY(0%);
        transition-duration: 0.15s;
        transition-timing-function: ease-in;
    }

</style>
<div class="bottom-player" draggable="true">
    <div class="bottom-player-drag">
        <i class="fas fa-chevron-up"></i>
    </div>
    <div class="bottom-player-content">
        <div class="bottom-player-box bottom-player-left">
            <div class="bottom-player-image">
                <img src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/spejlet.jpg" alt="logo for podcastet spejlet">
            </div>
            <div class="bottom-player-text">
                <p>LIGE NU:</p>
                <h5>Spejlet</h5>
                <p>Liva Manghezi</p>
            </div>
        </div>
        <div class="bottom-player-box bottom-player-middle">
            <div class="bottom-player-play">
                <i class="far fa-play-circle"></i>
            </div>
            <p class="player-timer">20:31</p>
            <div class="bar-display">
                <p class="bar-text">LIGE NU: Spejlet med Liva Manghezi</p>
                <div class="bar-container">
                    <div class="full-bar"></div>
                    <div class="half-bar"></div>
                </div>
            </div>
            <p class="player-timer">14:25</p>
        </div>
        <div class="bottom-player-box bottom-player-right">
            <i class="fas fa-list"></i>
            <i class="fas fa-volume-up"></i>
        </div>
    </div>
    <div class="bottom-player-hidden">
        <b>NÆSTE PROGRAM</b>
        <p>13:00 Spejlet</p>
        <p>14:30 aloha!</p>
        <p>15:30 aloha!</p>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        console.log("DOMContentLoaded");
        console.log(window.innerWidth);

        document.querySelector(".bottom-player").addEventListener("click", slideUp);
        /*
                //Add event listener kun hvis skærmbredden er mindre end 1000px
                if (window.innerWidth < 1000) {
                    console.log("hiddenAvailable");
                    document.querySelector(".bottom-player").addEventListener("click", slideUp);
                }

                //Tjek hver gang skærmen ændres om den er under 1000px for at kunne enten tilføje eller fjerne event listeners
                window.addEventListener("resize", () => {
                    if (window.innerWidth < 1000) {
                        console.log("hiddenAvailable");
                        document.querySelector(".bottom-player").addEventListener("click", slideUp);
                    } else {
                        console.log("hiddenUnavailable");
                        document.querySelector(".bottom-player").removeEventListener("click", slideUp);

                        //Slide ned hvis man gør vinduet breddere mens slideren var oppe
                        if (document.querySelector(".bottom-player-drag i").classList.contains("fa-chevron-down")) {
                            console.log("startSlideDown");
                            slideDown();
                        }
                    }
                })*/
    })

    function slideUp() {
        console.log("slidingUp");
        //Tilføj klassen der slider opad
        document.querySelector(".bottom-player").classList.add("slide");

        //Byt om event listeners
        document.querySelector(".bottom-player").removeEventListener("click", slideUp);
        document.querySelector(".bottom-player").addEventListener("click", slideDown);

        //Byt om på pilene
        document.querySelector(".fa-chevron-up").classList.add("fa-chevron-down");
        document.querySelector(".fa-chevron-up").classList.remove("fa-chevron-up");
    }

    function slideDown() {
        console.log("slidingDown");
        //Fjern klassen der medførste første slide for at medføre default nedad slide
        document.querySelector(".bottom-player").classList.remove("slide");

        //Byt om event listeners
        document.querySelector(".bottom-player").removeEventListener("click", slideDown);
        document.querySelector(".bottom-player").addEventListener("click", slideUp);

        //Byt om på pilene
        document.querySelector(".fa-chevron-down").classList.add("fa-chevron-up");
        document.querySelector(".fa-chevron-down").classList.remove("fa-chevron-down");
    }

</script>
