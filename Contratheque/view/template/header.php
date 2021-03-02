<header>
    <nav>
        <img>
        <div class="image">
                    <img src="../contratheque/public/images/logo-entreprise_creha-ouest.jpg" alt="logo">
        </div>
        </img>
        <h2><a href="index.php?action=listeClients">Retour à la liste des clients</a></h2>

        <form action="index.php?action=rechercheClients" method="post">
            <div>
                <label for="recherchedenomination">Dénomination Clients : </label>
                <input id="recherchedenomination" type="text" name="recherchedenomination" ></br>
            <div>
                <input type="submit" value="Rechercher" />
            </div>
        </form>

        <form action="index.php?action=accederConventions" method="post">
            <div>
                <label for="accederConventions">Accéder aux Convention Clients : </label>
            <div>
                <input type="submit" value="accéder" />
            </div>
        </form>
    </nav>
</header>
