$(function() {
  $.ajax({
    type: "GET",
    url: "getDetailsObat/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getDetailsObat/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "simpanDataObat/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "PUT",
            url: "/clients/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "editDataObat/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "id_obat",
          title: "Id Obat",
          type: "text",
          width: 150
        },
        {
          name: "nama_obat",
          title: "Nama Obat",
          type: "text",
          width: 150
        },
        {
          name: "harga",
          title: "Harga Obat",
          type: "number",
          width: 150
        },
        {
          name: "jumlah_stok",
          title: "Jumlah Stok",
          type: "number",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
