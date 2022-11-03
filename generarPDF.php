<div id="current_date"></p>
    <script>
        date = new Date();
        year = date.getFullYear();
        month = date.getMonth() + 1;
        day = date.getDate();
        hora = date.getHours();
        minutos = date.getMinutes();
        segundos = date.getSeconds();
        document.getElementById("current_date").innerHTML = day + "/" + month + "/" + year + " " + "Hora: " + hora + ":" + minutos + ":" + segundos;
    </script>
</div>