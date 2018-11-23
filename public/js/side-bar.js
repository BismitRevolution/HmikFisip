$('#collapseRecentPosts').on('hidden.bs.collapse', function () {
  $('#drop-logo-1').css('color', 'white');
  $('#btn-1').toggleClass('fa-chevron-down fa-chevron-circle-down');
});

$('#collapseRecentPosts').on('shown.bs.collapse', function () {
    $('#drop-logo-1').css('color', '#d04e57');
    $('#btn-1').toggleClass('fa-chevron-down fa-chevron-circle-down');
});

$('#collapsePages').on('hidden.bs.collapse', function () {
  $('#drop-logo-2').css('color', 'white');
  $('#btn-2').toggleClass('fa-chevron-down fa-chevron-circle-down');
});

$('#collapsePages').on('shown.bs.collapse', function () {
    $('#drop-logo-2').css('color', '#d04e57');
    $('#btn-2').toggleClass('fa-chevron-down fa-chevron-circle-down');
});

$('#collapseCategories').on('hidden.bs.collapse', function () {
  $('#drop-logo-3').css('color', 'white');
 $('#btn-3').toggleClass('fa-chevron-down fa-chevron-circle-down');
});

$('#collapseCategories').on('shown.bs.collapse', function () {
    $('#drop-logo-3').css('color', '#d04e57');
    $('#btn-3').toggleClass('fa-chevron-down fa-chevron-circle-down');
});

$('#collapseArchive').on('hidden.bs.collapse', function () {
  $('#drop-logo-4').css('color', 'white');
  $('#btn-4').toggleClass('fa-chevron-down fa-chevron-circle-down');
});

$('#collapseArchive').on('shown.bs.collapse', function () {
    $('#drop-logo-4').css('color', '#d04e57');
    $('#btn-4').toggleClass('fa-chevron-down fa-chevron-circle-down');
});
