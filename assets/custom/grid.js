$(function() {
  var base_url=window.location.origin;
  $.ajax({
    type: "GET",
    url: "dataTransaksi/"
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
      deleteConfirm: "Hapus Data Transaksi?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "dataTransaksi/",
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
          name: "id_transaksi",
          title: "Id Transaksi",
          type: "text",
          width: 150
        },
        {
          name: "jumlah",
          title: "Jumlah Transaksi",
          type: "text",
          width: 150
        },
        {
          name: "tanggal",
          title: "Tanggal Transaksi",
          type: "number",
          width: 150
        },
        {
          name: "fk_pasien",
          title: "Id Pasien",
          type: "number",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
