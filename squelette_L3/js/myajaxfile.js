$(document).ready(function() {
     $('#rechercheForm').submit(function (e) {
       e.preventDefault();
       var villeDepart = $("#depart").val();
       var villeArrivee = $("#arrivee").val();
       $.ajax({
            type: 'POST',
            url:  'ajaxDispatcher.php?action=ajaxRechercherVoyage',
            data: {depart: villeDepart, arrivee: villeArrivee},
            dateType: 'html',
            success: function (code_html, statut) {
              console.log(code_html);
              $("#resultatDiv").html(code_html);
            }
       })
       return false;
     }
      )
   });