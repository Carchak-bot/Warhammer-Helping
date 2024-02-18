$(document).ready(function(){
    $("#conn").click(function(){
        var user = $("#user").val();
        var MDP = $("#MDP").val();

        
    });
  });

  //Fonction Ajax pour la connexion au site
  $(document).ready(function() {
    $("#conn").click(function() {

    $.ajax({
        url:  "./../Controlleur/Ajax/control_connexion.php",
        type: "POST",
        data: {
            'user' : $("#user").val(),
            'MDP' : $("#MDP").val()
            },
        success: function(data){
            if(data == "Success"){
            // Le membre est connecté.
            window.location = "./../index.php";
            }else{
            // Le membre n'a pas été connecté. (data vaut ici "failed")
            alert(data);
            }
        }
    });
    });
});