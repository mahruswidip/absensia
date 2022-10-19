function load_data(page) {
  $.ajax({
    url: "index/" + page,
    method: "GET",
    dataType: "json",
    success: function (data) {
      $("#content").html(data.list_nama);
      $("#pagination_link").html(data.list_link);
    },
  });
}

$(document).on("click", ".pagination li a", function (event) {
  event.preventDefault();
  var page = $(this).data("ci-pagination-page");
  load_data(page);
});
