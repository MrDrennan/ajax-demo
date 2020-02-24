$("#poem").on("click", function() {
    $("#output").load('poem.txt');
});

$("#phrase").on("click", function() {
   $("#output").load(
       "showphrase.php",
       // POST request
       {num: 3, name: "Chad"},
       // called after successful
       function() {
           alert("I'm done");
   });
});