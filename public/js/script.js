$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#JudulModal").html("Tambah Data Mahasiswa");
    $(".tombolSubmit").html("Tambah data");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#JudulModal").html("Ubah Data Mahasiswa");
    $(".tombolSubmit").html("Ubah data");
    $("#ubahDataForm").attr(
      "action",
      "http://localhost/phpmvc/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/mahasiswa/getubah",
      // {nama data, isi data}
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nim").val(data.nim);
        $("#email").val(data.email);
        $("#prodi").val(data.prodi);
        $("#id").val(data.id);
      },
    });
  });
});
