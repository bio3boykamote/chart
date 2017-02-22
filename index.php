<!doctype html>
<html>
<head>

    <title>How to Parse a JSON file using jQuery</title>

    <style>
        body{
            text-align: center;
            font-family: arial;
        }

        .button{
            margin:20px;
            font-size:16px;
            font-weight: bold;
            padding:5px 10px;
        }
    </style>


</head>
<body>
    <a href="data.json" target="_blank">Open JSON file</a><br />
    <input type="button" value="Get and parse JSON" class="button" />
    <br />
    <span id="results"></span>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>

        //When DOM loaded we attach click event to button
        $(document).ready(function() {
               $('.button').click(function(){

                //start ajax request
                $.ajax({
                    url: "data.json",
                    //force to handle it as text
                    dataType: "text",
                    success: function(data) {

                        //data downloaded so we call parseJSON function
                        //and pass downloaded data
                        var json = $.parseJSON(data);
                        //now json variable contains data in json format
                        //let's display a few items
                        $('#results').html('Plugin name: ' + json.MemberAndCandidate[0].Title + '<br />Author: ' + json.MemberAndCandidate[0].author.name);
                    }
                });
            });
        });

        var ourRequest = new XMLHttpRequest(); //for ajax
        ourRequest.open('GET', 'https://github.com/bio3boykamote/chart/blob/master/data.json'); //request the data from dg3 data.json
        ourRequest.onload = function()
        {
            var ourdata = JSON.parse(ourRequest.responseText); //parse the data.json

                   	// adding display 1


        };
        ourRequest.send();

        var positions = JSON.parse(localStorage.positions || "{}");
    </script>
</body>
</html>
