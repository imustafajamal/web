//first input
function increaseValue1() {
    var value = parseInt(document.getElementById('number1').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number1').value = value;
  }
  
  function decreaseValue1() {
    var value = parseInt(document.getElementById('number1').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number1').value = value;
  }
  //second input
  function increaseValue2() {
    var value = parseInt(document.getElementById('number2').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number2').value = value;
  }
  
  function decreaseValue2() {
    var value = parseInt(document.getElementById('number2').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number2').value = value;
  }
  //third input
  function increaseValue3() {
    var value = parseInt(document.getElementById('number3').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number3').value = value;
  }
  
  function decreaseValue3() {
    var value = parseInt(document.getElementById('number3').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number3').value = value;
  }
  //for second form
    //forth input
    function increaseValue4() {
      var value = parseInt(document.getElementById('number4').value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById('number4').value = value;
    }
    
    function decreaseValue4() {
      var value = parseInt(document.getElementById('number4').value, 10);
      value = isNaN(value) ? 0 : value;
      value < 1 ? value = 1 : '';
      value--;
      document.getElementById('number4').value = value;
    }
    
      //fifth input
  function increaseValue5() {
    var value = parseInt(document.getElementById('number5').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number5').value = value;
  }
  
  function decreaseValue5() {
    var value = parseInt(document.getElementById('number5').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number5').value = value;
  }
    //sixth input
    function increaseValue6() {
      var value = parseInt(document.getElementById('number6').value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById('number6').value = value;
    }
    
    function decreaseValue6() {
      var value = parseInt(document.getElementById('number6').value, 10);
      value = isNaN(value) ? 0 : value;
      value < 1 ? value = 1 : '';
      value--;
      document.getElementById('number6').value = value;
    }