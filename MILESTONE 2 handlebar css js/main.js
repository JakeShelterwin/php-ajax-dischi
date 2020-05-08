// Attraverso una chiamata ajax all’Api di boolean avremo a disposizione una decina di dischi musicali.
// Servendoci di handlebars stampiamo tutto a schermo.

$(document).ready(function () {

  var source = $('.album-template').html();
  var template = Handlebars.compile(source);


  $.ajax({
    url: "api.php",
    method: "GET",
    success: function(data,stato) {
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        var context = {
          cover: data[i].poster,
          title: data[i].title,
          artist: data[i].author,
          year: data[i].year
        };
        var html = template(context);
        $('.cds-container').append(html);
      }
    },
    error: function(richiesta,stato,errore){
      alert("Chiamata fallita!!!");
    }
  });


});
