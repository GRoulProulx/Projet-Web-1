{{ include('layouts/header.php', { title: 'Création de Timbre' }) }}

<div>
    <div class="container-form">
        <form class="form" method="post" enctype="multipart/form-data">
            <h2 class="form-title">Création d'un Timbre</h2>

            <label>
                Nom
                <input type="text" class="nav-input" name="nom" value="{{ stamp.name }}">
            </label>

            <label>
               La date
                <input type="date" class="nav-input" name="date" value="{{ stamp.date }}">
            </label>

            <label">
                Couleur
                <select name="couleur" class="select-form">
                    <option value=""> Sélectionner une couleur </option>
                </select>
            </label>

            <label>
                Condition
                <input type="text" class="nav-input" name="condition" value="{{ stamp.condition }}">
                <select class="select-form" name="condition">
                    <option value=""> Sélectionner une condition </option>
                </select>
            </label>
            
             <label>
                Tirage
                <input type="text" class="nav-input" name="tirage" value="{{ stamp.tirage }}">
            </label>

             <label>
                Certifié
                <select name="certfication">
                    <option value="0" {% if stamp.certfication is defined and stamp.certfication == 0 %}selected{% endif %}>
                        Non</option>
                    <option value="1" {% if stamp.certfication is defined and stamp.certfication == 1 %}selected{% endif %}>
                        Oui</option>
                </select>
            </label>
            <label>
                Pays d'origine
                <select class="select-form" name="pays_id">
                    <option value=""> Sélectionner un pays </option>
                    
                </select>
            </label>
            <label>
                Image principale
                <input type="file" class="nav-input" name="image_principale">
            </label>

            <label>
                Images supplémentaires
                <input type="file" class="nav-input" name="images_supplementaires[]" multiple>
            </label>

            <button type="submit">Enchèrir</button>
        </form>
    </div>
</div>
{{ include('layouts/footer.php') }}