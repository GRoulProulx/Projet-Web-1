{{ include('layouts/header.php', {title:'Login'})}}
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
            <h2>Se connecter</h2>
             <label>Courriel
                <input class="nav-input" type="email" name="username" value="{{ inputs.username }}">
            </label>
            <label>Mot de passe
                <input class="nav-input" type="password" name="password">
            </label>
            <input type="submit" class="btn" value="Connexion">
        </form>
        Vous n'ête pas membre? Inscrivez vous <a href="{{ base }}/user/create">ici</a>
    </div>
{{ include('layouts/footer.php')}}