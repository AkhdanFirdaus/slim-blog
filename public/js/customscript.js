$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        // $('#wrapper2').toggleClass('active');
    });

    $('#searchCollapse').on('click', function() {
      $('#search').toggleClass('active');
    });

});
