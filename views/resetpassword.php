{{ include('layouts/header.php', {title:'Réinitialiser le mot de passe'})}}
<div class="container-login">
        {% if errors is defined %}
        <div class="error">
            <ul>
                {% for error in errors %}
                    <li>{{ error }}</li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
        <form class="login-form" method="post">
            <h2>Réinitialiser le mot de passe</h2>
             <label>Courriel
                <input class="nav-input" type="email" name="username" value="{{ inputs.username }}">
            <input type="submit" class="btn" value="Réinitialiser">
        </form>
    </div>
{{ include('layouts/footer.php')}}