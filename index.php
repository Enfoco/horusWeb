<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="jQuery CheckBox, Check Input, CheckBox" /> 
    <meta name="description" content="The jqxCheckBox widget displays a check box that allows the end-user to select a true, false or indeterminate condition." />
    <title id='Description'>The jqxCheckBox widget displays a check box that allows the end-user to select a true, false or indeterminate condition.</title>
    <link rel="stylesheet" href="public/css/estilos.css" type="text/css" />
     <script type="text/javascript" src="public/js/jquery.js"></script>
   
    <script type="text/javascript">
        $(document).ready(function () {   
        alert("hola");         
            // Create jqxCheckBox
            $("#jqxCheckBox").jqxCheckBox({ width: 120, height: 25});
            $("#jqxCheckBox2").jqxCheckBox({ width: 120, height: 25, checked: true});
            $("#jqxCheckBox3").jqxCheckBox({ width: 120, height: 25});
            $("#jqxCheckBox4").jqxCheckBox({ width: 120, height: 25});
            $("#jqxCheckBox5").jqxCheckBox({ width: 120, height: 25});
            $("#jqxCheckBox6").jqxCheckBox({ width: 120, height: 25});
            $("#jqxCheckBox7").jqxCheckBox({ width: 120, height: 25});
            $("#jqxCheckBox8").jqxCheckBox({ width: 120, height: 25});
            $("#jqxCheckBox9").jqxCheckBox({ width: 120, height: 25});
            // states
            $("#jqxCheckBox10").jqxCheckBox({ width: 120, height: 25, checked: true});
            $("#jqxCheckBox10").on('change', function (event) {
                var checked = event.args.checked;
                if (checked) {
                    $("#jqxCheckBox10").find('span')[1].innerHTML = 'Checked';
                }
                else {
                    $("#jqxCheckBox10").find('span')[1].innerHTML = 'Unchecked';
                }
            });
            $("#jqxCheckBox11").jqxCheckBox({ width: 120, height: 25, checked: false});
            $("#jqxCheckBox11").on('change', function (event) {
                var checked = event.args.checked;
                if (checked) {
                    $("#jqxCheckBox11").find('span')[1].innerHTML = 'Checked';
                }
                else {
                    $("#jqxCheckBox11").find('span')[1].innerHTML = 'Unchecked';
                }
            });
            $("#jqxCheckBox12").jqxCheckBox({ width: 120, height: 25, hasThreeStates: true, checked: null});
            $("#jqxCheckBox12").on('change', function (event) {
                var checked = event.args.checked;
                if (checked) {
                    $("#jqxCheckBox12").find('span')[1].innerHTML = 'Checked';
                }
                else if (false == checked) {
                    $("#jqxCheckBox12").find('span')[1].innerHTML = 'Unchecked';
                }
                else {
                    $("#jqxCheckBox12").find('span')[1].innerHTML = 'Indeterminate';
                }
            });
            $("#jqxCheckBox13").jqxCheckBox({ width: 120, height: 25, checked: true, disabled: true});
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style='font-family: Verdana Arial; font-size: 12px; width: 400px;'>
        <div style='float: left; width: 400px;'>
            <h3 style='margin-left: 15px;'>Categories</h3>
            <div id='jqxCheckBox' style='margin-left: 10px; float: left;'>
                Entertainment</div>
            <div id='jqxCheckBox2' style='margin-left: 10px; float: left;'>
                <span>Computers</span></div>
            <div id='jqxCheckBox3' style='margin-left: 10px; float: left;'>
                <span>Sports</span></div>
        </div>
        <div style='float: left; width: 400px; margin-top: 10px;'>
            <div id='jqxCheckBox4' style='margin-left: 10px; float: left;'>
                Health</div>
            <div id='jqxCheckBox5' style='margin-left: 10px; float: left;'>
                <span>Finance</span></div>
            <div id='jqxCheckBox6' style='margin-left: 10px; float: left;'>
                <span>Travel</span></div>
        </div>
        <div style='float: left; width: 400px; margin-top: 10px;'>
            <div id='jqxCheckBox7' style='margin-left: 10px; float: left;'>
                Music</div>
            <div id='jqxCheckBox8' style='margin-left: 10px; float: left;'>
                <span>Technology</span></div>
            <div id='jqxCheckBox9' style='margin-left: 10px; float: left;'>
                <span>Publishing</span></div>
        </div>
        <br />
        <div style='float: left; width: 400px; margin-top: 10px;'>
            <h3 style='margin-left: 15px;'>States</h3>
            <div id='jqxCheckBox10' style='margin-left: 10px; float: left;'>
                <span>Checked</span></div>
            <div id='jqxCheckBox11' style='margin-left: 10px; float: left;'>
                <span>Unchecked</span></div>
        </div>
           <div style='float: left; width: 400px; margin-top: 10px;'>
            <div id='jqxCheckBox12' style='margin-left: 10px; float: left;'>
                <span>Indeterminate</span></div>
            <div id='jqxCheckBox13' style='margin-left: 10px; float: left;'>
                <span>Disabled</span></div>
        </div>
    </div>
</body>
</html>