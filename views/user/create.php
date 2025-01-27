{{ include('layouts/header.php', {title:'Nouveau membre'})}}
<div class="container-login">
        <form class="login-form" method="post">
            <h2>Nouveau utilisateur</h2>
            <label>Votre nom
                <input class="nav-input" type="text" name="nom" value="{{ inputs.nom }}">
            </label>
             {% if errors.name is defined %}                   
             <span class="error">{{ errors.name }}</span>
            {% endif %}
             <label>Votre courriel
                <input class="nav-input" type="email" name="username" value="{{ inputs.username }}">
            </label>
            {% if errors.username is defined %}                   
             <span class="error">{{ errors.username }}</span>
            {% endif %}
            <label>Mots de passe
                <input class="nav-input" type="password" name="password">
            </label>
            {% if errors.password is defined %}                   
             <span class="error">{{ errors.password }}</span>
             {% endif %}
             <label>
                <select hidden name="privilege_id">
                    <option value="4">Select</option>
                    {% for privilege in privileges %}
                        <option hidden value="{{privilege.id}}" {% if(privilege.id == inputs.privilege_id) %} selected {%endif%}>{{ privilege.privilege}}</option>
                    {% endfor %}privilege_id
                </select>
            </label>
            {% if errors.privilege_id is defined %}                   
             <span class="error">{{ errors.privilege_id }}</span>
            {% endif %}
            <input type="submit" class="btn" value="S'inscrire">
        </form>
    </div>
{{ include('layouts/footer.php')}}