  $(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('#fiche_descriptive_option_optionFicheDescriptive');   
    
    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find(':input').length;
        
    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) 
    {
        addType($container);
    }
    else 
    {
        // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
        $container.children('div').each(function() 
        {
            $(this).attr('class', 'divOption');
            addDeleteLink($(this));
        });
        
        $('.required').each(function() 
        {
            $(this).html(' ');
        });        
    }
    
    // On ajoute un lien pour ajouter une nouvelle catégorie
    var $addLink = $('<div id="add_category" class="divOption"><div class="addOption">Ajouter une Option</div></div><br>');
    $container.append($addLink);
    
    clickAddType();
    
    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    function clickAddType()
    {
        $addLink.click(function(e) 
        {
            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = $container.find(':input').length;

            if(index < 5)
            {
                addType($container);
                            
                if(index == 4)
                {
                    $addLink.remove(); 
                }
                else
                {
                    $container.append($addLink);    
                }
            }
            else
            { 
                $prototype.remove();
            }
        });
    }
    
    // La fonction qui ajoute un formulaire Categorie
    function addType($container) 
    {
        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = $container.find(':input').length;
        // Dans le contenu de l'attribut « data-prototype », on remplace :
        // - le texte "__name__label__" qu'il contient par le label du champ
        // - le texte "__name__" qu'il contient par le numéro du champ
        var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '').replace(/__name__/g, index)).attr('class', 'divOption');
        
        if(index != 0)
        {
            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
            addDeleteLink($prototype);            
        }

        // On ajoute le prototype modifié à la fin de la balise <div>
        $container.append($prototype);

        // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink($prototype) {
      // Création du lien
      $deleteLink = $('<br><span class="deleteOption">Supprimer</span><br><br>');

      // Ajout du lien
      $prototype.append($deleteLink);

      // Ajout du listener sur le clic du lien
      $deleteLink.click(function(e) 
      {
          
        var index = $container.find(':input').length;
        
        $prototype.remove();
        $container.append($addLink);
        
        if(index == 5)
        {
            clickAddType();            
        }
        return false;
      });
    }
  });