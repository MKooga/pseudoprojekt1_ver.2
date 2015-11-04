<!doctype html>
<html lang="en">
<head>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<button onclick="myFunction()">Tere maailm.</button>

<a href="javascript:linkKHK();">tere maailm</a>

<a href="javascript:linkEi();">jääme siia</a>

<img onclick="Asenda()" src="https://www.petfinder.com/wp-content/uploads/2012/11/140272627-grooming-needs-senior-cat-632x475.jpg" id="cat"/>

<script>
    function myFunction() {
        alert("Tere maailm!");
    }
</script>

<script>
    function linkKHK() {
        alert("Tere maailm!");
        window.location="http://www.khk.ee";
    }
</script>

<script>
    function linkEi() {
        alert("jääme siia");
        event.preventDefault()
        window.location="http://www.khk.ee";
    }
</script>
<script>

    function Asenda() {
        if (document.getElementById("cat").src == "https://www.petfinder.com/wp-content/uploads/2012/11/140272627-grooming-needs-senior-cat-632x475.jpg")
        {
            document.getElementById("cat").src = 'http://bedandbiscuitspetretreat.co.uk/Dog.jpg';
        }
        else
        {
        }
    }

</script>

</body>
</html>