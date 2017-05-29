$( "#submit").click(function() {
 alert('Succesfully submited comment. Waiting for approval.');
});

$(document).ready(function() {
    $("#commentfoorm").submit(function(e) {
        e.preventDefault();
        alert("Comment waiting to be approved!!!");
    });
    $('#confirm').click(function() {
        return window.confirm("Are you sure you want to delete that records?");
    });
    $(".video").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
    $('#horizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true   // 100% fit in a container
    });

});
