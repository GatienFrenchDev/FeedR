class Categorie{

    /**
     * 
     * @param {String} nom 
     * @param {Number} id_categorie 
     * @param {Number} nb_non_lu 
     */
    constructor(nom, id_categorie, nb_non_lu){
        this.nom = nom;
        this.id_categorie = id_categorie;
        this.nb_non_lu = nb_non_lu;
    }

    getHTMLElement(){
        const DIVcategorie = document.createElement('div');
        DIVcategorie.id = `categorie-${this.id_categorie}`;
        DIVcategorie.draggable = true;
        DIVcategorie.ondrop = "ondrop(event)";
        DIVcategorie.ondragover = "allowDrop(event)";
        DIVcategorie.classList.add('dossier');
        DIVcategorie.innerHTML = `
        <div>
        <span>
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1 6.16167C0.999984 5.63454 0.999969 5.17975 1.03057 4.80519C1.06287 4.40984 1.13419 4.01662 1.32698 3.63824C1.6146 3.07376 2.07354 2.61482 2.63803 2.3272C3.01641 2.1344 3.40963 2.06309 3.80497 2.03078C4.17955 2.00018 4.63431 2.0002 5.16145 2.00021L9.14666 2.00011C9.74022 1.99932 10.2622 1.99863 10.7421 2.16418C11.1625 2.30918 11.5454 2.54581 11.8631 2.85696C12.2258 3.21221 12.4586 3.67939 12.7234 4.21064L13.6179 6H17.2413C18.0463 5.99999 18.7106 5.99998 19.2518 6.04419C19.8139 6.09012 20.3306 6.18868 20.816 6.43598C21.5686 6.81947 22.1805 7.43139 22.564 8.18404C22.8113 8.66937 22.9099 9.18608 22.9558 9.74817C23 10.2894 23 10.9537 23 11.7587V16.2413C23 17.0463 23 17.7106 22.9558 18.2518C22.9099 18.8139 22.8113 19.3306 22.564 19.816C22.1805 20.5686 21.5686 21.1805 20.816 21.564C20.3306 21.8113 19.8139 21.9099 19.2518 21.9558C18.7106 22 18.0463 22 17.2413 22H6.75873C5.95376 22 5.28937 22 4.74818 21.9558C4.18608 21.9099 3.66938 21.8113 3.18404 21.564C2.43139 21.1805 1.81947 20.5686 1.43598 19.816C1.18868 19.3306 1.09012 18.8139 1.0442 18.2518C0.999978 17.7106 0.999988 17.0463 1 16.2413V6.16167ZM9.02229 4.00022C9.81271 4.00022 9.96938 4.01326 10.09 4.05487C10.2301 4.1032 10.3578 4.18208 10.4637 4.2858C10.5548 4.37508 10.6366 4.50938 10.99 5.21635L11.3819 6L3.00007 6C3.00052 5.53501 3.00358 5.21716 3.02393 4.96805C3.04613 4.69639 3.0838 4.59567 3.109 4.54622C3.20487 4.35806 3.35785 4.20508 3.54601 4.10921C3.59546 4.08402 3.69618 4.04634 3.96784 4.02414C4.25118 4.00099 4.62345 4.00022 5.2 4.00022H9.02229Z" fill="#4893CD"></path>
            </svg>
        </span>
        <p>${this.nom}</p>
        <p class="side-info">${this.nb_non_lu==0?"":this.nb_non_lu}</p>
    </div>
        `
        document.querySelector('div#arborescence').appendChild(DIVcategorie);
        DIVcategorie.addEventListener('click', async () => {
            document.querySelectorAll("div.categorie-active").forEach(categorie => categorie.classList.remove("categorie-active"));
            Header.updateTitle(this.nom);
            arborescence.push({
                "id": this.id_categorie,
                "nom": this.nom
            });

            Arborescence.vider();
            Arborescence.addBackButton();
            
            const categories = await API.getCategoriesFromCategorie(this.id_categorie);
            Arborescence.addCategories(categories);
    
            const fluxs = await API.getFluxRSSFromCategorie(this.id_categorie);
            Arborescence.addFluxs(fluxs);
    
            ContainerArticle.numero_page = 0;
            const articles = await API.getArticlesFromCategorie(this.id_categorie, ContainerArticle.numero_page);
            ContainerArticle.vider();
            ContainerArticle.addArticles(articles);
    
        })
      
        DIVcategorie.addEventListener('contextmenu', (e) => {
            e.stopPropagation();
            e.preventDefault();
            const context_menu = document.getElementById('context-menu');
            context_menu.style.display = "grid";
            context_menu.style.left = e.x + "px" ;
            context_menu.style.top = e.y + "px" ;
            ContextMenu.vider();
            const item_supprimer = ContextMenu.addItem("Supprimer la catégorie");
            const item_renommer = ContextMenu.addItem("Renommer la catégorie");
            item_supprimer.addEventListener("click", () => {
                if(confirm(`Voulez vous vraiment supprimer la catégorie ${this.nom} et toutes ses sous-catégories ?`)){
                    API.supprimerCategorie(this.id_categorie);
                    DIVcategorie.remove();
                };
            })
            item_renommer.addEventListener("click", async () => {
                let nom = "";
                while(nom == "") {
                    nom = window.prompt("Entrez le nouveau nom de la nouvelle catégorie");
                    if(nom === null) {
                        return;
                    }
                    if(nom.length > 32){
                        window.alert("Nom de l'espace trop long (max 32 caractères)");
                        nom = "";
                    }
                }
                await API.renameCategorie(this.id_categorie, nom);
                document.querySelector(`#${DIVcategorie.id}>div>p`).innerText = nom;
            })
        })

        return DIVcategorie;
    }
}