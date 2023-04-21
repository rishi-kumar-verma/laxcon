// Move all common js code here


function ClearFields(value) {
    if (value == 'Round' || value == 'Square' || value == 'Hexagonal' || value == 'Octagonal') {
        $('#row_depth').hide();
    } else {
        $('#row_depth').show();
    }
    document.forms['calculator'].width.value = 0;
    document.forms['calculator'].length.value = 0;
    document.forms['calculator'].depth.value = 0;
    document.forms['calculator'].result2.value = 0;

}

var RoundOff = 5;

function UnitConvertI(value, type) {


    if (type == "cm")
        value = value / 2.54;
    if (type == "m")
        value = (value * 100) / 2.54;
    if (type == "mm")
        value = (value / 10) / 2.54;
    if (type == "ft")
        value = value * 12;
    if (type == "yd")
        value = value * 36;

    return value;
}
function UnitConvertF(value, type) {

    if (type == "cm")
        value = (value / 2.54) / 12;
    if (type == "m")
        value = ((value * 100) / 2.54) / 12;
    if (type == "mm")
        value = ((value / 10) / 2.54) / 12;
    if (type == "in")
        value = value / 12;
    if (type == "yd")
        value = value * 3;


    return value;
}

function UnitConvertMM(value, type) {

    if (type == "mm"){
        return value;
    }
    if (type == "in"){
        value = Number(value) * Number(25.4);
        return value.toFixed(4);
    }   
}

function UnitConvertM(value, type) {

    if (type == "mm"){
        return Number(value/1000).toFixed(4);
    }
    if (type == "in"){
        value = Number(value) * Number(0.0254);
        return value.toFixed(4);
    }   
}

function CheckNum(value, label) {
    var String1 = new String(value);
    var String2 = new String("");
    var String3 = new String("");
    var String4 = new String("");
    var temp;
    var i = 0;
    var count = 0;
    for (i = 0; i < String1.length; i++) {
        String2 = new String(parseFloat(String1.charAt(i)));
        if (String1.charAt(i) == ".")
            count++;

        if ((String2.length != 1 && String1.charAt(i) != '.') || count > 1) {
            alert("You entered an illegal value for the " + label);
            return false;
        }
    }
    return true;
}

function CheckParam(Param1, Param2, Param3, Param4) {
    var Form = document.forms['calculator'].shape.value;
    var valid1 = 0,
        valid2 = 0,
        valid3 = 0,
        valid4 = 0;
    var counter = 0;

    if (Form == "Round" || Form == "Hexagonal" || Form == "Octagonal") {
        if (Param1 == "" || Param3 == "" || Param4 == "") {
            alert("You must fill in values for the Diameter And the Length!");
            return false;
        }
        valid1 = CheckNum(Param1, "Diameter");
        valid3 = CheckNum(Param3, "Length");
        valid4 = CheckNum(Param4, "Number of Pieces");
        if (valid1 != true || valid3 != true || valid4 != true)
            return false;
    }

    if (Form == "Square") {
        if (Param1 == "" || Param3 == "" || Param4 == "") {
            alert("You must fill in values for the Width And the Length!");
            return false;
        }
        valid1 = CheckNum(Param1, "Width");
        valid3 = CheckNum(Param3, "Length");
        valid4 = CheckNum(Param4, "Number of Pieces");
        if (valid1 != true || valid3 != true || valid4 != true)
            return false;
    }

    if ( Form == "Flat/Rectangle") {
        if (Param1 == "" || Param3 == "" || Param4 == "" || Param2 == "") {
            alert("You must fill in values for the Thickness And the Width And the Length!");
            return false;
        }
        valid1 = CheckNum(Param1, "Thickness");
        valid2 = CheckNum(Param2, "Width");
        valid3 = CheckNum(Param3, "Length");
        valid4 = CheckNum(Param4, "Number of Pieces");
        if (valid1 != true || valid3 != true || valid4 != true || valid2 != true)
            return false;

    }

    if ( Form == "Equal Angle") {
        if (Param1 == "" || Param3 == "" || Param4 == "" || Param2 == "") {
            alert("You must fill in values for the Thickness And the Width And the Length!");
            return false;
        }
        valid1 = CheckNum(Param1, "Thickness");
        valid2 = CheckNum(Param2, "Width");
        valid3 = CheckNum(Param3, "Length");
        valid4 = CheckNum(Param4, "Number of Pieces");
        if (valid1 != true || valid3 != true || valid4 != true || valid2 != true)
            return false;

    }



    return true;
}

function CalculateWeight(value) {

    var Param = new Array(4);
    var Parame = new Array(4);
    var Units = new Array(3);
    var Convert;
    var FormType;
    var Result;

    var Good;
    Param[0] = document.forms['calculator'].width.value;
    Param[1] = document.forms['calculator'].depth.value;
    Param[2] = document.forms['calculator'].length.value;
    Param[3] = 1;

    Parame[0] = document.forms['calculator'].width.value;
    Parame[1] = document.forms['calculator'].depth.value;
    Parame[2] = document.forms['calculator'].length.value;
    Parame[3] = 1;
    Good = CheckParam(Param[0], Param[1], Param[2],Param[3]);
    if (!Good)
        return;
    // if(value == 'mm' || value == 'in'){
    //     $('#unitsw').val(value);
    //     $('#unitsd').val(value);
    //     $('#unitsl').val(value);
    // }
        

    Units[0] = $('#unitsw :selected').text();;
    Units[1] = $('#unitsd :selected').text();;
    Units[2] = $('#unitsl :selected').text();;

    Param[0] = UnitConvertI(Param[0], Units[0]);
    Param[1] = UnitConvertI(Param[1], Units[1]);
    Param[2] = UnitConvertI(Param[2], Units[2]);

    FormType = document.forms['calculator'].shape.value;
    Convert = 1;
    if (FormType == "Round") {
        Result = new String(2.6729 * Param[0] * Param[0] * Convert * Param[2] * Param[3]);
        // document.forms['calculator'].result.value = Result.substring(0, Result.indexOf(".") + RoundOff);
        document.forms['calculator'].result2.value = Result.substring(0, Result.indexOf(".") + RoundOff) * 0.4535;
    }
    if (FormType == "Square") {
        Result = new String(3.4032 * Param[0] * Param[0] * Convert * Param[2] * Param[3]);
        // document.forms['calculator'].result.value = Result.substring(0, Result.indexOf(".") + RoundOff);
        document.forms['calculator'].result2.value = Result.substring(0, Result.indexOf(".") + RoundOff) * 0.4535;
    }
    if (FormType == "Hexagonal") {
        Result = new String(2.9473 * Param[0] * Param[0] * Convert * Param[2] * Param[3]);
        // document.forms['calculator'].result.value = Result.substring(0, Result.indexOf(".") + RoundOff);
        document.forms['calculator'].result2.value = Result.substring(0, Result.indexOf(".") + RoundOff) * 0.4535;
    }
    if (FormType == "Octagonal") {
        Result = new String(2.8193 * Param[0] * Param[0] * Convert * Param[2] * Param[3]);
        // document.forms['calculator'].result.value = Result.substring(0, Result.indexOf(".") + RoundOff);
        document.forms['calculator'].result2.value = Result.substring(0, Result.indexOf(".") + RoundOff) * 0.4535;
    }
    if (FormType == "Flat/Rectangle") {
        Result = new String(3.4032 * Param[0] * Convert * Param[1] * Param[2] * Param[3]);
        // document.forms['calculator'].result.value = Result.substring(0, Result.indexOf(".") + RoundOff);
        document.forms['calculator'].result2.value = Result.substring(0, Result.indexOf(".") + RoundOff) * 0.4535;
    }
    if (FormType == "Equal Angle") {
        Param[0] = UnitConvertMM(Parame[0], Units[0]);
        Param[1] = UnitConvertMM(Parame[1], Units[1]);
        // Param[2] = UnitConvertMM(Parame[2], Units[2]);

        var Result1 = (((Number(Param[1]) + Number(Param[1])) - Number(Param[0]))* Number(Param[0]))*(0.00785)*(Number(Param[2]));
        document.forms['calculator'].result2.value = Result1.toFixed(4);
    }

}
function ChangeLabel() {
    var formType;
    formType = document.forms['calculator'].shape.value;
    if (formType == "Round") {
        document.getElementById('lbl1').innerHTML = "Diameter";
        document.getElementById('lbl2').innerHTML = "";
        document.getElementById('lbl3').innerHTML = "Length";
    }
    if (formType == "Square") {
        document.getElementById('lbl1').innerHTML = "Width";
        document.getElementById('lbl2').innerHTML = "";
        document.getElementById('lbl3').innerHTML = "Length";
    }
    if (formType == "Hexagonal") {
        document.getElementById('lbl1').innerHTML = "Diameter";
        document.getElementById('lbl2').innerHTML = "";
        document.getElementById('lbl3').innerHTML = "Length";
    }
    if (formType == "Octagonal") {
        document.getElementById('lbl1').innerHTML = "Diameter";
        document.getElementById('lbl2').innerHTML = "";
        document.getElementById('lbl3').innerHTML = "Length";
    }
    if (formType == "Flat/Rectangle") {
        document.getElementById('lbl1').innerHTML = "Thickness";
        document.getElementById('lbl2').innerHTML = "Width";
        document.getElementById('lbl3').innerHTML = "Length";
    }
    if (formType == "Equal Angle") {
        document.getElementById('lbl1').innerHTML = "Thickness";
        document.getElementById('lbl2').innerHTML = "Width";
        document.getElementById('lbl3').innerHTML = "Length";
        var list = ["M"];
        populateCombo(emptyCombo(document.querySelector('.select.optional')), list);
    }
}

function emptyCombo(selectEl) {
    selectEl.options.length = 0;
    return selectEl;
  }
  
  function populateCombo(selectEl, items) {
    return appendChildren(selectEl, items.map(item => new Option(item, item)));
  }
  
  function appendChildren(el, children) {
    children.forEach(child => el.appendChild(child));
    return el;
  }

ChangeLabel();
var initialValue = 'Flat/Rectangle';
ClearFields(initialValue);