<!php

?>
<div id="container">
    <form action="sojavaevorm2.php" method="get">
        <div id="input-group">
            <label for="nation ">Kodakondsus</label>
            <select id="nation" name="nation">
                <option value="et">eestlane</option>
                <option value="ru">venelane</option>
                <option value="fi">soomlane</option>
                <option value="se">rootslane</option>
            </select>
        </div>
        <br>
        <div id="input-group">
            <label for="age">Vanus</label>
            <input type="text" id="age" name="age">
        </div>
        <br>
        <div id="input-group">
            <label for="edu-begin">Algharidus</label>
            <input type="radio" id="edu" name="edu-basic" value="begin">
            <label for="edu-basic">Põhiharidus</label>
            <input type="radio" id="edu" name="edu-basic" value="basic">
            <label for="edu-medium">Keskharidus</label>
            <input type="radio" id="edu" name="edu-basic" value="medium">
            <label for="edu-grand">Kõrgharidus</label>
            <input type="radio" id="edu" name="edu-basic" value="grand">
        </div>
        <br>
        <div id="input-group">
            <input type="submit" class="button" value="Kontrolli">
        </div>
    </form>
</div>