<section class="program">
    <div class="program__container-top">
        <h2 role="heading" aria-level="2" class="program__title">
            <span>Découvre </span>
            <strong>le programme des cours</strong>
        </h2>
        <div class="program__redirect">
            <a href="#b1" class="program__redirect-link">
                <figure class="program__redirect__figure">
                    <div class="program__redirect__img-wrapper">
                        <img class="program__redirect__img" src="./img/program-redirect--1.jpg" width="315" height="202" alt="Bureau vue de haut contenant des images en rapport avec l’infographie (smartphone, livre, brochures, crayons,…)">
                    </div>
                    <figcaption class="program__redirect__figcaption">
                        <span>Le programme </span>
                        <strong>du premier bloc</strong>
                    </figcaption>
                </figure>
            </a>
            <a href="#b2" class="program__redirect-link">
                <figure class="program__redirect__figure">
                    <div class="program__redirect__img-wrapper">
                        <img class="program__redirect__img" src="./img/program-redirect--2.jpg" width="315" height="202" alt="Un groupe de personne réunit autour d’une table qui contient des éléments en rapport avec l’infographie (smartphone, crayons, ordinateur,…)">
                    </div>
                    <figcaption class="program__redirect__figcaption">
                        <span>Le programme </span>
                        <strong>du deuxième bloc</strong>
                    </figcaption>
                </figure>
            </a>
            <a href="#b3" class="program__redirect-link">
                <figure class="program__redirect__figure">
                    <div class="program__redirect__img-wrapper">
                        <img class="program__redirect__img" src="./img/program-redirect--3.jpg" width="315" height="202" alt="Deux personnes travaillant ensemble sur un visuel sur un ordinateur">
                    </div>
                    <figcaption class="program__redirect__figcaption">
                        <span>Le programme </span>
                        <strong>du troisième bloc</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>


    <section class="program-bloc program-bloc--1">
        <div class="program-bloc__wrapper">
            <h3 role="heading" aria-level="3" class="program-bloc__title">Le premier bloc</h3>
            <span class="program-bloc__text">Le bloc 1 est identique à toutes les options.</span>
            <span class="program-bloc__text">Cliquez sur un cours pour avoir plus d’informations.</span>
            <div class="probram-bloc__container">

                <div class="program-bloc__filter">
                    <span class="program-bloc__filter-title">Filtrer&nbsp;:</span>
                    <button class="program-bloc__button" id="b1-all">Toutes les options</button>
                    <button class="program-bloc__button program-bloc__button--active" id="b1-option">Web uniquement</button>
                </div>

                <table class="program-table">
                    <thead class="program-table__thead">
                        <tr>
                            <td class="program-table__orientation">Orientation</td>
                            <td class="program-table__course">Nom du cours</td>
                            <td class="program-table__hour">Heures</td>
                            <td class="program-table__ects">Crédits</td>
                            <td class="program-table__quad">Quadrimestre</td>
                        </tr>
                    </thead>
                    <tbody class="program-table__tbody">
                        <tr class="link-row" data-href="#" >
                            <td class="program-table__orientation">Commun</td>
                            <td class="program-table__course">
                                <a href="#gocourse" class="program-table__course__link">
                                    <span class="program-table__course__name">Anglais 1</span>
                                </a>
                                <span class="program-table__course__desc">Découvre ou redécouvre les bases de l’Anglais</span>
                            </td>
                            <td class="program-table__hour">15</td>
                            <td class="program-table__ects">1</td>
                            <td class="program-table__quad">1</td>
                        </tr>
                        <tr class="link-row" data-href="#">
                            <td class="program-table__orientation">Commun</td>
                            <td class="program-table__course">
                                <a href="#gocourse" class="program-table__course__link">
                                    <span class="program-table__course__name">Anglais 2</span>
                                </a>
                                <span class="program-table__course__desc">Approfondis les connaissances apprises en Anglais 1</span>
                            </td>
                            <td class="program-table__hour">15</td>
                            <td class="program-table__ects">1</td>
                            <td class="program-table__quad">1</td>
                        </tr>
                        <tr class="link-row" data-href="#">
                            <td class="program-table__orientation">Web</td>
                            <td class="program-table__course">
                                <a href="#gocourse" class="program-table__course__link">
                                    <span class="program-table__course__name">Créations de pages Web - CSS</span>
                                </a>
                                <span class="program-table__course__desc">Apprends le langage qui met le web en couleur</span>
                            </td>
                            <td class="program-table__hour">15</td>
                            <td class="program-table__ects">1</td>
                            <td class="program-table__quad">1</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</section>
