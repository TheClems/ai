document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne tous les éléments de menu qui ont un sous-menu
    const menuItems = document.querySelectorAll('nav > ul.nav > li:has(ul)');
    
    // Ajoute un gestionnaire d'événement à chaque élément de menu
    menuItems.forEach(menuItem => {
        // Événement de clic
        menuItem.addEventListener('click', function(e) {
            // Empêche la propagation pour éviter de déclencher les gestionnaires de clic des parents
            e.stopPropagation();
            
            // Ferme les autres menus ouverts
            menuItems.forEach(item => {
                if (item !== menuItem) {
                    item.classList.remove('active');
                }
            });
            
            // Bascule la classe 'active' sur l'élément cliqué
            this.classList.toggle('active');
        });
    });
    
    // Ferme le menu quand on clique ailleurs sur la page
    document.addEventListener('click', function() {
        menuItems.forEach(menuItem => {
            menuItem.classList.remove('active');
        });
    });
    
    // Empêche la fermeture du menu quand on clique à l'intérieur
    document.querySelector('nav').addEventListener('click', function(e) {
        e.stopPropagation();
    });
});
