
                    function changetaille() 
                        {
                        document.getElementById('titre').style.fontSize = document.getElementById('listeTaille').options[ document.getElementById('listeTaille').selectedIndex ].text+'px';
                        }
                    function changecouleur() 
                        {
                        document.getElementById('RecettePrevous').style.background = document.getElementById('selectCouleur').options[ document.getElementById('selectCouleur').selectedIndex ].value;
                        }
                    function ok() 
                        {
                        localStorage.setItem('option2', document.getElementById('selectCouleur').selectedIndex);
                        localStorage.setItem('option1', document.getElementById('listeTaille').selectedIndex);
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
