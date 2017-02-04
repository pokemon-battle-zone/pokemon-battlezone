<?php include 'header.php' ?>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="form-group">
        <label for="number1">Number 1</label>
        <input type="number" class="form-control" id="number1" placeholder="First Number">
    </div>
    <div class="form-group">
        <label for="number2">Number 2</label>
        <input type="number" class="form-control" id="number2" placeholder="Second Number">
    </div>

    <button id="add-button" class="btn btn-default">Add them up</button>

</div>




<script>
    window.onload = function() {
        function addThemUp() {
            var num1 =Number(document.getElementById('number1').value);
            var num2 =Number(document.getElementById('number2').value);
            var result = num1 + num2;
            window.alert(result);
        }
        document.getElementById("add-button").addEventListener("click",addThemUp)
    }
</script>


<?php include 'footer.php' ?>