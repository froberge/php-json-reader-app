
<!DOCTYPE html>
<html><head><title>PHP JSON Reader</title></head>

    <body>

    <h1>This application read a config.json file and output the content.</h1>
        
    <p>An example of the config file can be found in the doc folder.</p>

    <b>The config.json file is found at:</b> /opt/

    <div>
    <h3> Config file output </h3>

    <?php
        // Read the JSON file
        $json = file_get_contents('/opt/config.json');

        // Decode the JSON file
        $json_data = json_decode($json,true);
        $json_string = json_encode($json_data, JSON_PRETTY_PRINT);
        echo "<pre>".$json_string."<pre>";
    ?>
    </div>
    
    <div>
    <h3> Dummy file output </h3>

    <?php
        // Read the JSON file
        $json = file_get_contents('/opt/dummy.json');

        // Decode the JSON file
        $json_data = json_decode($json,true);
        $json_string = json_encode($json_data, JSON_PRETTY_PRINT);
        echo "<pre>".$json_string."<pre>";
    ?>
    </div>


    </body>
</html>