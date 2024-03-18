<div class="socials">
    <div class="socials-container">
        <div class="sign-up-button">
            SIGN-UP NOW!
        </div>
        <div class="social-icons-container">
            <span>
                FOLLOW US
            </span>
            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">

        </div>
    </div>

</div>

<style>
    .socials {
        background-color: #303030;
        padding-block: 2em;
    }

    .socials-container {
        width: 75%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
    }

    .sign-up-button {
        border: 1px solid #0282f9;
        color: white;
        font-size: 1.2em;
        font-weight: semibold;
        padding: 10px;
    }

    div.social-icons-container {
        font-weight: bolder;
        color: #0282f9;
        ;
        display: flex;
        gap: 1em;
        align-items: center;
    }
</style>
