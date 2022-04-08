$(document).ready(function () {
  $("#kategori").change(function () {
    var category_id = $("#kategori").val();
    var action = "get_jenis";
    if (category_id != "") {
      $.ajax({
        url: "/admin/tutorials/get-category",
        method: "POST",
        data: {
          category_id: category_id,
          action: action,
        },
        dataType: "JSON",
        success: function (data) {
          var html = '<option value="">Pilih Jenis</option>';
          for (var count = 0; count < data.length; count++) {
            html +=
              '<option value"' +
              data[count].category_id +
              '">' +
              data[count].category_name +
              "</option>";
          }
          $("#jenis").html(html);
        },
      });
    } else {
      var html = '<option value="">Pilih Jenis</option>';
      $("#jenis").html(html);
    }
  });
});

$(document).ready(function () {
  $("#judul").keydown(function () {
    var judul = $("#judul").val();
    if (judul != "") {
      $.ajax({
        url: "/admin/tutorials/check-title",
        method: "POST",
        data: {
          title: judul,
        },
        dataType: "JSON",
        success: function (data) {
          if (data.status == true) {
            $("#judul").removeClass("is-invalid");
            $("#judul").addClass("is-valid");
            $("#feedback").removeClass("invalid-feedback");
            $("#feedback").addClass("valid-feedback");
            $("#feedback").html(data.message);
          } else if (data.status == false) {
            $("#judul").removeClass("is-valid");
            $("#judul").addClass("is-invalid");
            $("#feedback").removeClass("valid-feedback");
            $("#feedback").addClass("invalid-feedback");
            $("#feedback").html(data.message);
          }
        },
      });
    } else if (judul == "") {
      $("#judul").removeClass("is-valid");
      $("#judul").addClass("is-invalid");
      $("#feedback").removeClass("valid-feedback");
      $("#feedback").addClass("invalid-feedback");
      $("#feedback").html("Judul harus diisi!");
    }
  });
});

$("#table_category").DataTable();
$("#table_status_tutorial").DataTable();
