{{ include('layouts/productheader.php', {title:'Notre catalogue'})}}

<main>
    <aside>
        <form class="filters">
            <div class="filter-section">
                <h2>Filtres</h2>
                <h3>Par prix</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="Ascendant" />
                    <label class="form-check-label" for="Ascendant">Ascendant</label>
                    <p>(73)</p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="Descendant" />
                    <label class="form-check-label" for="Descendant">Descendant</label>
                    <p>(73)</p>
                </div>
            </div>
    
            <div class="filter-section">
                <h3>Par date</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="DateAsc" />
                    <label class="form-check-label" for="DateAsc">Date Ascendante</label>
                    <p>(73)</p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="DateDesc" />
                    <label class="form-check-label" for="DateDesc">Date Descendante</label>
                    <p>(73)</p>
                </div>
            </div>
    
            <div class="filter-section">
                <h3>Par enchères</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="EnCours" />
                    <label class="form-check-label" for="EnCours">Enchère en cours</label>
                    <p></p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="Expirees" />
                    <label class="form-check-label" for="Expirees">Enchère expirées</label>
                    <p></p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="Favoris" />
                    <label class="form-check-label" for="Favoris">Les Favoris</label>
                    <p></p>
                </div>
    
                <div class="filter-section">
                    <h3>Par Pays</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Canada" />
                        <label class="form-check-label" for="Canada">Canada</label>
                        <p>(34)</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Allemagne" />
                        <label class="form-check-label" for="Allemagne">Allemagne</label>
                        <p>(23)</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Bahamas" />
                        <label class="form-check-label" for="Bahamas">Bahamas</label>
                        <p>(30)</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Chine" />
                        <label class="form-check-label" for="Chine">Chine</label>
                        <p>(20)</p>
                    </div>
                </div>
    
                <div class="filter-section">
                    <h3>Par condition</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Parfaite" />
                        <label class="form-check-label" for="Parfaite">Parfaite</label>
                        <p>(43)</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Excellente" />
                        <label class="form-check-label" for="Excellente">Excellente</label>
                        <p>(23)</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Bonne" />
                        <label class="form-check-label" for="Bonne">Bonne</label>
                        <p>(51)</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Moyenne" />
                        <label class="form-check-label" for="Moyenne">Moyenne</label>
                        <p>(5)</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Endommagee" />
                        <label class="form-check-label" for="Endommagee">Endommagée</label>
                        <p>(11)</p>
                    </div>
                    <button class="btn btn-link">Recheche</button>
                </div>

            </div>
        </form>
    </aside>
    <section class="card-container">
        <div class="card-filters">
            <input type="text" name="search" id="search" />
            <div>
                <img src="{{asset}}/img/list.webp" alt="viewlist" />
                <img src="{{asset}}/img/grid.webp" alt="viewgrid" />
            </div>
        </div>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/images3.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #325</h4>
                <h5>Offre courante: 143$</h5>
                <p>BAHAMAS - 1938-52</p>
                <p>Début: 15 novembre 2024</p>
                <p>Fin: 15 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/stamp1.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #21</h4>
                <h5>Offre courante: 24$</h5>
                <p>CANADA - 1897</p>
                <p>Début: 15 novembre 2024</p>
                <p>Fin: 15 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/images2.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #3453</h4>
                <h5>Offre courante: 43$</h5>
                <p>ÉTATS-UNIS - 1893</p>
                <p>Début:</p>
                <p class="card-expired">Fin: 15 octobre 2024</p>
                <a href="#">
                    <div class="card-btn-red">Enchère Expiré</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/StampLot.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #213</h4>
                <h5>Offre courante: 20$</h5>
                <p>DIVERS</p>
                <p>Début: 25 novembre 2024</p>
                <p>Fin: 25 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/stamp8.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #65</h4>
                <h5>Offre courante: 500$</h5>
                <p>CANADA - 1935</p>
                <p>Début: 11 novembre 2024</p>
                <p>Fin: 23 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/stamp5.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #92</h4>
                <h5>Offre courante: 67$</h5>
                <p>INDIA - 1956</p>
                <p>Début: 13 novembre 2024</p>
                <p>Fin: 19 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/stamp6.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #3123</h4>
                <h5>Offre courante: 45$</h5>
                <p>GRANDE-BRETAGNE - 1840</p>
                <p>Début: 2 novembre 2024</p>
                <p>Fin: 19 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/stamp9.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #43</h4>
                <h5>Offre courante: 58$</h5>
                <p>SICILE - 1956</p>
                <p>Début: 25 novembre 2024</p>
                <p class="card-expired">Fin: 11 Décembre 2024</p>
                <a href="#">
                    <div class="card-btn-red">Enchère Expiré</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/images1.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #43</h4>
                <h5>Offre courante: 58$</h5>
                <p>ROUMANIE - 1956</p>
                <p>Début: 17 novembre 2024</p>
                <p>Fin: 23 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
        <article class="card">
            <picture><img class="card-img" src="{{asset}}/img/stamp0.webp" alt="timbres" /></picture>
            <div class="card-info">
                <h4>Lot #43</h4>
                <h5>Offre courante: 76$</h5>
                <p>FRANCE - 1956</p>
                <p>Début: 12 novembre 2024</p>
                <p>Fin: 31 Décembre 2024</p>
                <a href="{{base}}/productdetails">
                    <div class="card-btn">Enchèrir Maintenant</div>
                </a>
            </div>
        </article>
    </section>
</main>


{{ include('layouts/footer.php')}}