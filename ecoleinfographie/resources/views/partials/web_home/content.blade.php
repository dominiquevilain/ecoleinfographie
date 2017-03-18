<section class="web-what">
    <div class="web-what__wrapper">
        <img class="web-what__img" src="./img/macbook-web-what.png" width="764" height="879" alt="" data-type="parallax"
             data-depth="-0.07">
        <div class="web-what__wrapper-text">
            <h2 role="heading" aria-level="2" class="web-what__title">
                Le web, c’est quoi <span>?</span>
                {!! file_get_contents(asset('svg/question1.svg')) !!}
            </h2>
            <p class="web-what__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet. Sed sit amet arcu aliquet, molestie justo at, auctor nunc. Phasellus ligula ipsum, volutpat eget semper id, viverra eget nibh.
            </p>
        </div>
    </div>
</section>

<section class="webdesigner">
    <div class="webdesigner__wrapper">
        <div class="webdesigner__wrapper-text">
            <h2 role="heading" aria-level="2" class="webdesigner__title">
                Le designer web
            </h2>
            <p class="webdesigner__text">
                Il conçoit les interfaces et les manières de s’en servir. Ses outils sont plutôt des outils de graphistes que des outils de codeurs, mais il doit connaître le code et les contraintes techniques des navigateurs Web.
            </p>
            <a href="#webdesigner" class="webdesigner__link">Voir un ancien diplômé qui est designer web</a>
        </div>
        <img class="webdesigner__img" src="./img/web-designerweb.png" srcset="./img/web-designerweb@2x.png 2x" width="749" height="646" alt="">
    </div>
</section>

<section class="webintegrator">
    <div class="webintegrator__wrapper">
        <img class="webintegrator__img" src="./img/webintegrator-desktop.png" srcset="./img/webintegrator-desktop@2x.png 2x" width="1145" height="559" alt="">
        <img class="webintegrator__img--2" src="./img/webintegrator-ipad.png" srcset="./img/webintegrator-ipad@2x.png 2x" width="442" height="218" alt="">
        <div class="webintegrator__wrapper-text">
            <h2 role="heading" aria-level="2" class="webintegrator__title">
                L’intégrateur web
            </h2>
            <p class="webintegrator__text">
                Spécialiste du HTML, du CSS et du Javascript, il transforme des images fournies par le designer en vraies pages Web utilisables. La qualité pour lui, c’est de faire des sites accessibles dans un grand nombre de conditions d’utilisation, sur un téléphone, un vieil ordinateur, ou du matériel ultra-moderne.
            </p>
            <a href="#webintegrator" class="webintegrator__link">Voir un ancien diplômé qui est intégrateur web</a>
        </div>
    </div>
</section>

<section class="frontend">
    <div class="frontend__wrapper">
        <div class="frontend__anim-wrapper">

            <div class="frontend__overflowh">
                {!! file_get_contents(asset('svg/frontend.svg')) !!}
            </div>
            <img class="frontend__img" src="./img/web-frontend.png" srcset="./img/web-frontend@2x.png 2x" width="818" height="479" alt="">
        </div>
        <div class="frontend__wrapper-text">
            <h2 role="heading" aria-level="2" class="frontend__title">
                Le développeur front-end
            </h2>
            <p class="frontend__text">
                Spécialiste du code Javascript, il anime les pages, réalise en codant des effets spectaculaires, sécurise l’expérience utilisateur. La qualité pour lui, c’est de savoir travailler pour l’avenir en écrivant du code facile à maintenir et à étendre, et pour le passé, en écrivant un code compatible. 
            </p>
            <a href="#webintegrator" class="frontend__link">Voir un ancien diplômé qui est développeur front-end</a>
        </div>
    </div>
</section>
