<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 50px;
    }

    #display {
      width: 200px;
      height: 30px;
      margin-bottom: 10px;
      text-align: right;
      font-size: 18px;
    }

    .buttons {
      display: grid;
      grid-template-columns: repeat(4, 50px);
      gap: 5px;
      justify-content: center;
    }

    button {
      font-size: 16px;
      padding: 10px;
    }
  </style>
</head>
<body>
  <h2>Basic Calculator</h2>
  <input type="text" id="display" disabled>
  <div class="buttons">
    <button onclick="addDigit('7')">7</button>
    <button onclick="addDigit('8')">8</button>
    <button onclick="addDigit('9')">9</button>
    <button onclick="setOp('/')">/</button>

    <button onclick="addDigit('4')">4</button>
    <button onclick="addDigit('5')">5</button>
    <button onclick="addDigit('6')">6</button>
    <button onclick="setOp('*')">*</button>

    <button onclick="addDigit('1')">1</button>
    <button onclick="addDigit('2')">2</button>
    <button onclick="addDigit('3')">3</button>
    <button onclick="setOp('-')">-</button>

    <button onclick="addDigit('0')">0</button>
    <button onclick="resetCalc()">C</button>
    <button onclick="doMath()">=</button>
    <button onclick="setOp('+')">+</button>
  </div>

  <script>
    let numA = "";
    let numB = "";
    let op = "";

    function addDigit(val) {
      document.getElementById("display").value += val;
      if (op === "") {
        numA += val;
      } else {
        numB += val;
      }
    }

    function setOp(o) {
      op = o;
      document.getElementById("display").value += o;
    }

    function resetCalc() {
      document.getElementById("display").value = "";
      numA = "";
      numB = "";
      op = "";
    }

    function doMath() {
      let result = 0;

      switch (op) {
        case "+":
          result = parseFloat(numA) + parseFloat(numB);
          break;
        case "-":
          result = parseFloat(numA) - parseFloat(numB);
          break;
        case "*":
          result = parseFloat(numA) * parseFloat(numB);
          break;
        case "/":
          result = parseFloat(numA) / parseFloat(numB);
          break;
        default:
          result = "Error";
      }

      document.getElementById("display").value = result;
      numA = result.toString();
      numB = "";
      op = "";
    }
  </script>
</body>
</html>