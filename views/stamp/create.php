{{ include('layouts/header.php', { title: 'Soumettre un Timbre' }) }}

    <div class="container-login">
        <form class="login-form" method="post" enctype="multipart/form-data">
            <h2>Enchèrir votre Timbre</h2>

            <label>
                Nom
                <input type="text" class="news-input" name="nom" value="{{ stamp.name }}">
            </label>

            <label>
               Date de création
                <input type="date" class="news-input" name="date" value="{{ stamp.date }}">
            </label>

            <label>
                Couleur
                <select name="couleur" class="news-input">
                    <option value=""> Sélectionner une couleur </option>
                </select>
            </label>

            <label>
                Condition
                <select class="news-input" name="condition">
                    <option value=""> Sélectionner une condition </option>
                    <option value="1">Parfaite </option>
                    <option value="2">Excellente </option>
                    <option value="3">Bonne </option>
                    <option value="4">Moyenne </option>
                    <option value="5">Endommagé </option>
                </select>
            </label>
            
             <label>
                Tirage
                <input type="text" class="news-input" name="tirage" value="{{ stamp.tirage }}">
            </label>
            <label>
                Dimensions
                <input type="text" class="news-input" name="dimension" value="{{ stamp.dimension}}">
            </label>

             <label>
                Certifié
                <select class="news-input" name="certification">
                    <option value="1">
                        Non</option>
                    <option value="2" >
                        Oui</option>
                </select>
            </label>
            <label>
                Pays d'origine
                <select class="news-input" name="pays_id">
                    <option value=""> Sélectionner un pays </option>
                </select>
            </label>
            <label>
                Images
                <input type="file" class="news-input" name="image">
            </label>
             <input type="submit" class="btn-member" value="Enchèrir">
        </form>
    </div>

{{ include('layouts/footer.php') }}