setInterval(() => {
  $.ajax({
url: 'php/bag.php',
type: 'GET',
data: "check",

success: function(response) {
  $('.bag-page-table').html(response);
}
});
}, 1000);

