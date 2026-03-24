<!DOCTYPE html>
<html>
<head>
    <title>Text Analyzer</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: "Times New Roman", Times, serif;
            margin: 30px;
        }

        h2 {
            color: darkgreen;
            text-align: center;
        }

        textarea {
            width: 95%;
            height: 120px;
            border: 1px solid #444;
            padding: 8px;
            margin-bottom: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        input[type="button"] {
            background-color: darkgreen;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        input[type="button"]:hover {
            background-color: seagreen;
        }

        #box {
            margin-top: 20px;
            border: 1px solid black;
            background-color: #fff8dc;
            padding: 12px;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>

    <h2>Lab Task 05: Text Analyzer</h2>

    <textarea id="textArea" placeholder="Write or paste your paragraph here..."></textarea>
    <input type="button" value="Analyze Text" onclick="showResult()">

    <div id="box"></div>

    <script>
        function showResult() {
            var data = document.getElementById("textArea").value.trim();

            if (data === "") {
                document.getElementById("box").innerHTML = "<p>No text entered.</p>";
                return;
            }

            var totalChars = data.length;
            var wordList = data.split(" ");
            var totalWords = wordList.length;
            var reversed = data.split("").reverse().join("");

            document.getElementById("box").innerHTML =
                "<p><b>Characters:</b> " + totalChars + "</p>" +
                "<p><b>Words:</b> " + totalWords + "</p>" +
                "<p><b>Reversed:</b> " + reversed + "</p>";
        }
    </script>

</body>
</html>