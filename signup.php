<?php 

include 'head.php';

?>

<html>
<body class= "body2">

<div class= "container2">
 <div class= "col-md-12">
  <h3 style= "margin-bottom: 30px; margin-top: 20px;"> Create an account </h3>
   <form action= "db1.php" method= "post">

 <div class= "form-group">
  
  <input type= "text" name= "fname" class= "form-control" placeholder= "First name" required />

 </div>

 <div class= "form-group">
  
  <input type= "text" name= "lname" class= "form-control" placeholder= "Last name" required />
 
</div>

 <div class= "form-group">
  
 <select class="form-control" name="country">
    <option value="" disabled selected> Country </option>
    <option value= "Afghanistan"> Afghanistan </option>
    <option value= "Albania"> Albania </option>
    <option vlaue= "Algeria"> Algeria </option>
    <option value= "Andorra"> Andorra </option>
    <option value= "Angola"> Angola </option>
    <option value= "Antigua and Barbuda"> Antigua and Barbuda </option>
    <option value= "Argentina"> Argentina </option>
    <option value= "Armenia"> Armenia </option>
    <option value= "Australia"> Australia </option>
    <option value= "Austria"> Austria </option>
    <option value= "Azerbaijan"> Azerbaijan </option>
    <option value= "The Bahamas"> The Bahamas </option>
    <option value= "Bahrain"> Bahrain </option>
    <option value= "Bangladesh"> Bangladesh </option>
    <option value= "Barbados"> Barbados </option>
    <option value= "Belarus"> Belarus </option>
    <option value= "Belgium"> Belgium </option>
    <option value= "Belize"> Belize </option>
    <option value= "Benin"> Benin </option>
    <option value= "Bhutan"> Bhutan </option>
    <option value= "Bolivia"> Bolivia </option>
    <option value= "Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
    <option value= "Botswana"> Botswana </option>
    <option value= "Brazil"> Brazil </option>
    <option value= "Brunei"> Brunei </option>
    <option value= "Bulgaria"> Bulgaria </option>
    <option value= "Burkina Faso"> Burkina Faso </option>
    <option value= "Burundi"> Burundi </option>
    <option value= "Cavo Verde"> Cabo Verde </option>
    <option value= "Cambodia"> Cambodia </option>
    <option value= "Cameroon"> Cameroon </option>
    <option value= "Canada"> Canada </option>
    <option value= "Central African Republic"> Central African Republic </option>
    <option value= "Chad"> Chad </option>
    <option value= "Chile"> Chile </option>
    <option value= "China"> China </option>
    <option value= "Colombia"> Colombia </option>
    <option value= "Comoros"> Comoros </option>
    <option value= "Congo"> Congo </option>
    <option value= "Costa Rica"> Costa Rica </option>
    <option value= "Cote dIvoire"> Cote dIvoire </option>
    <option value= "Croatia"> Croatia </option>
    <option value= "Cuba"> Cuba </option>
    <option value= "Cyprus"> Cyprus </option>
    <option value= "Czech Republic"> Czech Republic </option>
    <option value= "Denmark"> Denmark </option>
    <option value= "Djibouti"> Djibouti </option>
    <option value= "Dominica"> Dominica </option>
    <option value= "Dominican Republic"> Dominican Republic </option>
    <option value= "East Timor (Timor-Leste)"> East Timor (Timor-Leste) </option>
    <option value= "Ecuador"> Ecuador </option>
    <option value= "Egypt"> Egypt </option>
    <option value= "El Salvador"> El Salvador </option>
    <option value= "Equatorial Guniea"> Equatorial Guniea </option>
    <option value= "Eritrea"> Eritrea </option>
    <option value= "Estonia"> Estonia </option>
    <option value= "Eswatini"> Eswatini </option>
    <option value= "Ethiopia"> Ethiopia </option>
    <option value= "Fiji"> Fiji </option>
    <option value= "Finland"> Finland </option>
    <option value= "France"> France </option>
    <option value= "Gabon"> Gabon </option>
    <option value= "The Gambia"> The Gambia </option>
    <option value= "Georgia"> Georgia </option>
    <option value= "Germany"> Germany </option>
    <option value= "Ghana"> Ghana </option>
    <option value= "Greece"> Greece </option>
    <option value= "Grenada"> Grenada </option>
    <option value= "Guatemala"> Guatemala </option>
    <option value= "Guniea"> Guniea </option>Guinea
    <option value= "Guniea-Bissau"> Guinea-Bissau </option>
    <option value= "Guyana"> Guyana </option>
    <option value= "Haiti"> Haiti </option>
    <option value= "Honduras"> Honduras </option>
    <option value= "Hungary"> Hungary </option>
    <option value= "Iceland"> Iceland </option>
    <option value= "India"> India </option>
    <option value= "Indonesia"> Indonesia </option>
    <option value= "Iran"> Iran </option>
    <option value= "Iraq"> Iraq </option>
    <option value= "Ireland"> Ireland </option>
    <option value= "Israel"> Israel </option>
    <option value= "Italy"> Italy </option>
    <option value= "Jamaica"> Jamaica </option>
    <option value= "Japan"> Japan </option>
    <option value= "Jordan"> Jordan </option>
    <option value= "Kazakhstan"> Kazakhstan </option>
    <option value= "Kenya"> Kenya </option>
    <option value= "Kiribati"> Kiribati </option>
    <option value= "Korea, North"> Korea, North </option>
    <option value= "Korea, South"> Korea, South </option>
    <option value= "Kosovo"> Kosovo </option>
    <option value= "Kuwait"> Kuwait </option>
    <option value= "Kyrgyzstan"> Kyrgystan </option>
    <option value= "Laos"> Laos </option>
    <option value= "Latvia"> Latvia </option>
    <option value= "Lebanon"> Lebanon </option>
    <option value= "Lesotho"> Lesotho </option>
    <option value= "Liberia"> Liberia </option>
    <option value= "Libya"> Libya </option>
    <option value= "Liechtenstein"> Liechtenstein </option>
    <option value= "Lithuania"> Lithuania </option>
    <option value= "Luxembourg"> Luxembourg </option>
    <option value= "Madagascar"> Madagascar </option>
    <option value= "Malawi"> Malawi </option>
    <option value= "Malaysia"> Malaysia </option>
    <option value= "Maldives"> Maldives </option>
    <option value= "Mali"> Mali </option>Mali
    <option value= "Malta"> Malta </option>Malta
    <option value= "Marshall Islands"> Marshall Islands </option>
    <option value= "Mauritania"> Mauritania </option>
    <option value= "Mauritius"> Mauritius </option>
    <option value= "Mexico"> Mexico </option>Mexico
    <option value= "Micronesia"> Micronesia </option>
    <option value= "Moldova"> Moldova </option>
    <option value= "Monaco"> Monaco </option>
    <option value= "Mongolia"> Mongolia </option>
    <option value= "Montenegro"> Montenegro </option>
    <option value= "Morocco"> Morocco </option>
    <option value= "Mozambique"> Mozambique </option>
    <option value= "Myanmar (Burma)"> Myanmar (Burma) </option>
    <option value= "Namibia"> Namibia </option>
    <option value= "Nauru"> Nauru </option>Nauru
    <option value= "Nepal"> Nepal </option>Nepal
    <option value= "Netherlands"> Netherlands </option>
    <option value= "New Zealand"> New Zealand </option>
    <option value= "Nicaragua"> Nicaragua </option>
    <option value= "Niger"> Niger </option>
    <option value= "Nigeria"> Nigeria </option>
    <option value= "North Macedonia"> North Macedonia </option>
    <option value= "Noray"> Norway </option>
    <option value= "Oman"> Oman </option>Oman
    <option value= "Pakistan"> Pakistan </option>
    <option value= "Palau"> Palau </option>
    <option value= "Panama"> Panama </option>
    <option value= "Papua New Guniea"> Papua New Guniea </option>
    <option value= "Paraguay"> Paraguay </option>
    <option value= "Peru"> Peru </option>Peru
    <option value= "Philippines"> Philippines </option>
    <option value= "Ploand"> Poland </option>Poland
    <option value= "Portugal"> Portugal </option>Portugal
    <option value= "Quatar"> Quatar </option>Qatar
    <option value= "Romania"> Romania </option>Romania
    <option value= "Russia"> Russia </option>Russia
    <option value= "Rwanda"> Rwnada </option>Rwanda
    <option value= "Saints Kitts and Nevis"> Saints Kitts and Nevis </option>
    <option value= "Saint Lucia"> Saint Lucia </option>Saint Lucia
    <option value= "Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
    <option value= "Samoa"> Samoa </option>
    <option value= "San Marino"> San Marino </option>
    <option value= "Sao Tome and Principe"> Sao Tome and Principe </option>
    <option value= "Saudi Arabia"> Saudi Arabia </option>
    <option value= "Senegal"> Senegal </option>
    <option value= "Serbia"> Serbia </option>
    <option value= "Seychelles"> Seychelles </option>
    <option value= "Sierra Leone"> Sierra Leone </option>
    <option value= "Singapore"> Singapore </option>
    <option value= "Slovakia"> Slovakia </option>
    <option value= "Slovenia"> Slovenia </option>
    <option value= "Solomon Islands"> Solomon Islands </option>
    <option value= "Somalia"> Somalia </option>
    <option value= "South Africa"> South Africa </option>
    <option value= "Spain"> Spain </option>
    <option value= "Sri Lanka"> Sri Lanka </option>
    <option value= "Sudan"> Sudan </option>
    <option value= "Sudan, South"> Sudan, South </option>
    <option value= "Suriname"> Suriname </option>
    <option value= "Sweden"> Sweden </option>
    <option value= "Switzerland"> Switzerland </option>
    <option value= "Syria"> Syria </option>
    <option value= "Taiwan"> Taiwan </option>
    <option value= "Tajikistan"> Tajikistan </option>
    <option value= "Tanzania"> Tanzania </option>
    <option value= "Thailand"> Thailand </option>
    <option value= "Togo"> Togo </option>
    <option value= "Tonga"> Tonga </option>
    <option value= "Trinidad and Tobago"> Trinidad and Tobago </option>
    <option value= "Tunisia"> Tunisia </option>
    <option value= "Turkey"> Turkey </option>
    <option value= "Turkmenistan"> Turkmenistan </option>
    <option value= "Tuvalu"> Tuvalu </option>
    <option value= "Uganda"> Uganda </option>
    <option value= "Ukraine"> Ukraine </option>Ukraine
    <option value= "United Arab Emirates"> United Arab Emirates </option>
    <option value= "United Kingdom"> United Kingdom </option>
    <option value= "United States"> United States </option>
    <option value= "Uruguay"> Uruguay </option>
    <option value= "Uzbekistan"> Uzbekistan </option>
    <option value= "Vanuatu"> Vanuatu </option>
    <option value= "Vatican City"> Vatican City </option>
    <option value= "Venezuela"> Venezuela </option>
    <option value= "Vietnam"> Vietnam </option>
    <option value= "Yemen"> Yemen </option>
    <option value= "Zambia"> Zambia </option>
    <option value= "Zimbabwe"> Zimbabwe </option>
  </select>
 
 </div>
 
 <div class= "form-group">
  
  <input type= "email" name= "email" class= "form-control" placeholder= "Email" required />
 </div>
 
 <div class= "form-group">
  
  <input type= "password" name= "password" class= "form-control" placeholder= "Password" required />
 </div>
 
 <div class= "form-group">
  
  <input type= "password" name= "cpassword" class= "form-control" placeholder= "Confirm password" required />
 
 </div></br></br>

 <p style= "font-size: 15px; text-align: center; color: black"> I have read and agreed with <a href= "#"> Terms of service </a>

 <div class= "form-group">
  <button class= "btn btn-info" name= "submit" style= "width: 100%; font-size: 16px;"> <i class="fas fa-user-plus"></i>  Create an account </button>
 </div>
</form>
 

</div>
</div></br></br>

 <p style= "text-align: center;"> Already have an Account? <a href= "login.php"> Sign in </a>
</body>
</html>