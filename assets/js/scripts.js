// scripts.js

$(document).ready(function() {
  $('#signupLink').click(function() {
    alert('Fitur pendaftaran belum diimplementasikan.');
  });

  $('#loginForm').submit(function(event) {
    event.preventDefault();
    var username = $('#username').val();
    var password = $('#password').val();

    // Contoh sederhana: Cetak informasi login di console
    console.log('Username:', username);
    console.log('Password:', password);
  });
});
