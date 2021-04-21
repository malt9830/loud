<style>
    .bottom-player {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        position: fixed;
        bottom: 0;
        background: white;
        width: 100%;
        padding: 1rem;
        text-align: left;
    }

    .bottom-player-box {
        display: inline-block;
        margin: 1rem;
    }

    .bottom-player-left {
        display: grid;
        grid-gap: 0.5rem;
    }

    .bottom-player-right {
        display: grid;
        grid-gap: 0.5rem;
    }

    .bottom-player-image {
        display: inline-block;
    }

    .bottom-player-text {
        display: none;
    }

    .bottom-player-image {
        min-width: 4rem;
        max-width: 6rem;
        width: 100%;
    }

    .bottom-player-image img {
        border-radius: 1rem;
    }

    .bottom-player-left h5 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.7rem;
    }

    .bottom-player-left p {
        font-size: 1rem;
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
        font-size: 3rem;
        align-self: center;
        color: #1A202C;
    }

    .bottom-player .fa-list {
        display: none;
    }

    .bottom-player .bar-container {
        position: relative;
        height: 2rem;
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

    @media (min-width: 1000px) {
        .bottom-player-text {
            display: inline-block;
        }

        .bottom-player .player-timer {
            display: block;
        }

        .bottom-player .fa-list {
            display: inline-block;
        }

        .bottom-player-left {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0.5rem;
        }

        .bottom-player-middle {
            grid-template-columns: 1fr 1fr 7fr 1fr;
        }

        .bottom-player-right {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0.5rem;
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
        <div class="bar-container">
            <div class="full-bar"></div>
            <div class="half-bar"></div>
        </div>
        <p class="player-timer">14:25</p>
    </div>
    <div class="bottom-player-box bottom-player-right">
        <i class="fas fa-list"></i>
        <i class="fas fa-volume-up"></i>
    </div>
</div>
