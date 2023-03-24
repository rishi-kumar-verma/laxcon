// Move all common js code here

// function showimage(value) {
//     if (!document.images)
//         return
//     document.forms['calculator'].pictures.src= "resources/assets/images/calculator/"+value;
//     // document.images.pictures.src = document.form1.form.options[document.form1.form.selectedIndex].value
// }

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

function UnitConvertM(value, type) {

    if (type == "mm")
        value = value;
    if (type == "in")
        value = value * 25.4;
    return value;
}

function CalculateWeight() {

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
    

    // Good = CheckParam(Param[0], Param[1], Param[2]);
    // if (!Param[0] && !Param[1] && !Param[2])
    //     return;

    Units[0] = document.forms['calculator'].unitsw.value;
    Units[1] = document.forms['calculator'].unitsd.value;
    Units[2] = document.forms['calculator'].unitsl.value;

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
        Param[0] = UnitConvertM(Parame[0], Units[0]);
        Param[1] = UnitConvertM(Parame[1], Units[1]);
        Param[2] = UnitConvertM(Parame[2], Units[2]);

        var Result1 = (((Number(Param[1]) + Number(Param[2])) - Number(Param[0]))* Number(Param[0]))*(0.00785);
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
    }
}

ChangeLabel();
var initialValue = 'Flat/Rectangle';
ClearFields(initialValue);