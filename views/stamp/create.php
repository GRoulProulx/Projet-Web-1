{{ include('layouts/header.php', { title: 'Soumettre un Timbre' }) }}

<div class="container-login">
    <form class="login-form" method="post" enctype="multipart/form-data">
        <h2>Enchèrir votre Timbre</h2>

        <label>
            Nom
            <input type="text" class="news-input" name="nom" value="{{ stamp.nom }}">
            {% if errors.nom is defined %}
            <span class="error">{{ errors.nom }}</span>
            {% endif %}
        </label>

        <label>
            Date de création
            <input type="date" class="news-input" name="date" value="{{ stamp.date }}">
            {% if errors.date is defined %}
            <span class="error">{{ errors.date }}</span>
            {% endif %}
        </label>

        <label>
            Couleur
            <select name="couleur" class="news-input">
                <option value=""> Sélectionner une couleur </option>
                <option value="Rouge" {% if stamp.couleur == 'Rouge' %} selected {% endif %}>Rouge</option>
                <option value="Bleu" {% if stamp.couleur == 'Bleu' %} selected {% endif %}>Bleu</option>
                <option value="Vert" {% if stamp.couleur == 'Vert' %} selected {% endif %}>Vert</option>
                <option value="Jaune" {% if stamp.couleur == 'Jaune' %} selected {% endif %}>Jaune</option>
                <option value="Noir" {% if stamp.couleur == 'Noir' %} selected {% endif %}>Noir</option>
                <option value="Blanc" {% if stamp.couleur == 'Blanc' %} selected {% endif %}>Blanc</option>
                <option value="Orange" {% if stamp.couleur == 'Orange' %} selected {% endif %}>Orange</option>
                <option value="Violet" {% if stamp.couleur == 'Violet' %} selected {% endif %}>Violet</option>
            </select>
            {% if errors.couleur is defined %}
            <span class="error">{{ errors.couleur }}</span>
            {% endif %}
        </label>

        <label>
            Condition
            <select class="news-input" name="etat">
                <option value=""> Sélectionner une condition </option>
                <option value="Parfaite" {% if stamp.etat == 'Parfaite' %} selected {% endif %}>Parfaite</option>
                <option value="Excellente" {% if stamp.etat == 'Excellente' %} selected {% endif %}>Excellente</option>
                <option value="Bonne" {% if stamp.etat == 'Bonne' %} selected {% endif %}>Bonne</option>
                <option value="Moyenne" {% if stamp.etat == 'Moyenne' %} selected {% endif %}>Moyenne</option>
                <option value="Endommagé" {% if stamp.etat == 'Endommagé' %} selected {% endif %}>Endommagé</option>
            </select>
            {% if errors.etat is defined %}
            <span class="error">{{ errors.etat }}</span>
            {% endif %}
        </label>

        <label>
            Tirage
            <input type="text" class="news-input" name="tirage" value="{{ stamp.tirage }}">
            {% if errors.tirage is defined %}
            <span class="error">{{ errors.tirage }}</span>
            {% endif %}
        </label>

        <label>
            Dimensions
            <input type="text" class="news-input" name="dimension" value="{{ stamp.dimension }}">
            {% if errors.dimension is defined %}
            <span class="error">{{ errors.dimension }}</span>
            {% endif %}
        </label>

        <label>
            Certifié
            <select class="news-input" name="certification">
                <option value="">Certifié ?</option>
                <option value="Oui" {% if stamp.certification == 'Oui' %} selected {% endif %}>Oui</option>
                <option value="Non" {% if stamp.certification == 'Non' %} selected {% endif %}>Non</option>
            </select>
            {% if errors.certification is defined %}
            <span class="error">{{ errors.certification }}</span>
            {% endif %}
        </label>

        <label>
            Pays d'origine
            <select class="news-input" name="pays_id">
                <option value="1" {% if stamp.pays_id == '1' %} selected {% endif %}>États-Unis</option>
                <option value="2" {% if stamp.pays_id == '2' %} selected {% endif %}>Canada</option>
                <option value="3" {% if stamp.pays_id == '3' %} selected {% endif %}>Royaume-Uni</option>
                <option value="4" {% if stamp.pays_id == '4' %} selected {% endif %}>Australie</option>
                <option value="5" {% if stamp.pays_id == '5' %} selected {% endif %}>Allemagne</option>
                <option value="6" {% if stamp.pays_id == '6' %} selected {% endif %}>France</option>
                <option value="7" {% if stamp.pays_id == '7' %} selected {% endif %}>Italie</option>
                <option value="8" {% if stamp.pays_id == '8' %} selected {% endif %}>Espagne</option>
                <option value="9" {% if stamp.pays_id == '9' %} selected {% endif %}>Mexique</option>
                <option value="10" {% if stamp.pays_id == '10' %} selected {% endif %}>Brésil</option>
                <option value="11" {% if stamp.pays_id == '11' %} selected {% endif %}>Inde</option>
                <option value="12" {% if stamp.pays_id == '12' %} selected {% endif %}>Chine</option>
                <option value="13" {% if stamp.pays_id == '13' %} selected {% endif %}>Japon</option>
                <option value="14" {% if stamp.pays_id == '14' %} selected {% endif %}>Corée du Sud</option>
                <option value="15" {% if stamp.pays_id == '15' %} selected {% endif %}>Afrique du Sud</option>
            </select>
        </label>

        <label>
            Images
            <input type="file" class="news-input" name="image" multiple>
        </label>

        <input type="submit" class="btn-member" value="Enchèrir">
    </form>
</div>

{{ include('layouts/footer.php') }}