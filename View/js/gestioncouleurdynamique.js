

                    function changecouleur() 
                        {
                        document.getElementById('RecettePrevous').style.background = document.getElementById('selectCouleur').options[ document.getElementById('selectCouleur').selectedIndex ].value;
                        }
                        function changecontenutitre() 
                        {
                        document.getElementById('PreviousTitRecette').innerHTML = document.getElementById('TitreRecette').value; 
                    }
                    function changecontenuingredients() 
                        {
                        document.getElementById('PreviousLesIngrédients').innerHTML = document.getElementById('Ingredients').value; 
                    }
                    function changecontenurecette() 
                        {
                        document.getElementById('PreviousLaRecette').innerHTML = document.getElementById('Recette').value; 
                    }
                    
