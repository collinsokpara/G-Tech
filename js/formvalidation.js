<script>
function validateform() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("password1").value;

    // If x is Not a Number or less than one or greater than 10
    if (x < 6 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("pwdMeter").innerHTML = text;
}
</script>