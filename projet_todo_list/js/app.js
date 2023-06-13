
// Récupérer le clic sur le bouton "Voir"
$('.text-primary').click(function(event) {
event.preventDefault(); // Empêche le comportement par défaut du lien

// Récupérer le nom stocké dans l'attribut data-nom
var nom = $(this).attr('data-nom');

// Injecter le nom dans le contenu du modal
$('#taskName').text(nom);

// Afficher le modal
$('#taskModal1').modal('show');
});




// Récupérer le clic sur le bouton "edition"
$('.edition').click(function(event) {
event.preventDefault(); // Empêche le comportement par défaut du lien

// Récupérer le nom stocké dans l'attribut data-nom
var id = $(this).attr('data-nom');

// Injecter le nom dans le contenu du modal
$('#idtask').val(id);

// Afficher le modal
$('#exampleModal').modal('show');
});


  var simplemde = new SimpleMDE({ element: document.getElementById("markdownEditor") });



