<style>
    .bottom-player {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        position: fixed;
        bottom: 0;
        background: white;
        width: 100%;
        padding: 0;
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
    }

</style>
<div class="bottom-player">
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
