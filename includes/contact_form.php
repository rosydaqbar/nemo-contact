<?php
function form_contact() {
	$n = rand(0,9);
	$m = rand(0,9);
	$token = base64_encode($n+$m);
	echo '<div class="et_pb_contact">';

	echo '<form class="et_pb_contact_form clearfix" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';

	echo '<p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last">';
	echo '<input type="text" class="input" name="cf-name" placeholder="Name" required/>';
	echo '</p>';

	echo '<p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last">';
	echo '<input type="email" class="input" name="cf-email" placeholder="Email Address" required/>';
	echo '</p>';

	echo '<p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_last">';
	echo '<input type="text" class="input" name="cf-phone" placeholder="Phone Number" />';
	echo '</p>';

	echo '<p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last">';
	echo '<select name="cf-country" class="country">';
	echo '<option value="Afganistan">Afghanistan</option>';
		echo '<option value="Albania">Albania</option>';
		echo '<option value="Algeria">Algeria</option>';
		echo '<option value="American Samoa">American Samoa</option>';
		echo '<option value="Andorra">Andorra</option>';
		echo '<option value="Angola">Angola</option>';
		echo '<option value="Anguilla">Anguilla</option>';
		echo '<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>';
		echo '<option value="Argentina">Argentina</option>';
		echo '<option value="Armenia">Armenia</option>';
		echo '<option value="Aruba">Aruba</option>';
		echo '<option value="Australia">Australia</option>';
		echo '<option value="Austria">Austria</option>';
		echo '<option value="Azerbaijan">Azerbaijan</option>';
		echo '<option value="Bahamas">Bahamas</option>';
		echo '<option value="Bahrain">Bahrain</option>';
		echo '<option value="Bangladesh">Bangladesh</option>';
		echo '<option value="Barbados">Barbados</option>';
		echo '<option value="Belarus">Belarus</option>';
		echo '<option value="Belgium">Belgium</option>';
		echo '<option value="Belize">Belize</option>';
		echo '<option value="Benin">Benin</option>';
		echo '<option value="Bermuda">Bermuda</option>';
		echo '<option value="Bhutan">Bhutan</option>';
		echo '<option value="Bolivia">Bolivia</option>';
		echo '<option value="Bonaire">Bonaire</option>';
		echo '<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>';
		echo '<option value="Botswana">Botswana</option>';
		echo '<option value="Brazil">Brazil</option>';
		echo '<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>';
		echo '<option value="Brunei">Brunei</option>';
		echo '<option value="Bulgaria">Bulgaria</option>';
		echo '<option value="Burkina Faso">Burkina Faso</option>';
		echo '<option value="Burundi">Burundi</option>';
		echo '<option value="Cambodia">Cambodia</option>';
		echo '<option value="Cameroon">Cameroon</option>';
		echo '<option value="Canada">Canada</option>';
		echo '<option value="Canary Islands">Canary Islands</option>';
		echo '<option value="Cape Verde">Cape Verde</option>';
		echo '<option value="Cayman Islands">Cayman Islands</option>';
		echo '<option value="Central African Republic">Central African Republic</option>';
		echo '<option value="Chad">Chad</option>';
		echo '<option value="Channel Islands">Channel Islands</option>';
		echo '<option value="Chile">Chile</option>';
		echo '<option value="China">China</option>';
		echo '<option value="Christmas Island">Christmas Island</option>';
		echo '<option value="Cocos Island">Cocos Island</option>';
		echo '<option value="Colombia">Colombia</option>';
		echo '<option value="Comoros">Comoros</option>';
		echo '<option value="Congo">Congo</option>';
		echo '<option value="Cook Islands">Cook Islands</option>';
		echo '<option value="Costa Rica">Costa Rica</option>';
		echo '<option value="Cote DIvoire">Cote D\'Ivoire</option>';
		echo '<option value="Croatia">Croatia</option>';
		echo '<option value="Cuba">Cuba</option>';
		echo '<option value="Curaco">Curacao</option>';
		echo '<option value="Cyprus">Cyprus</option>';
		echo '<option value="Czech Republic">Czech Republic</option>';
		echo '<option value="Denmark">Denmark</option>';
		echo '<option value="Djibouti">Djibouti</option>';
		echo '<option value="Dominica">Dominica</option>';
		echo '<option value="Dominican Republic">Dominican Republic</option>';
		echo '<option value="East Timor">East Timor</option>';
		echo '<option value="Ecuador">Ecuador</option>';
		echo '<option value="Egypt">Egypt</option>';
		echo '<option value="El Salvador">El Salvador</option>';
		echo '<option value="Equatorial Guinea">Equatorial Guinea</option>';
		echo '<option value="Eritrea">Eritrea</option>';
		echo '<option value="Estonia">Estonia</option>';
		echo '<option value="Ethiopia">Ethiopia</option>';
		echo '<option value="Falkland Islands">Falkland Islands</option>';
		echo '<option value="Faroe Islands">Faroe Islands</option>';
		echo '<option value="Fiji">Fiji</option>';
		echo '<option value="Finland">Finland</option>';
		echo '<option value="France">France</option>';
		echo '<option value="French Guiana">French Guiana</option>';
		echo '<option value="French Polynesia">French Polynesia</option>';
		echo '<option value="French Southern Ter">French Southern Ter</option>';
		echo '<option value="Gabon">Gabon</option>';
		echo '<option value="Gambia">Gambia</option>';
		echo '<option value="Georgia">Georgia</option>';
		echo '<option value="Germany">Germany</option>';
		echo '<option value="Ghana">Ghana</option>';
		echo '<option value="Gibraltar">Gibraltar</option>';
		echo '<option value="Great Britain">Great Britain</option>';
		echo '<option value="Greece">Greece</option>';
		echo '<option value="Greenland">Greenland</option>';
		echo '<option value="Grenada">Grenada</option>';
		echo '<option value="Guadeloupe">Guadeloupe</option>';
		echo '<option value="Guam">Guam</option>';
		echo '<option value="Guatemala">Guatemala</option>';
		echo '<option value="Guinea">Guinea</option>';
		echo '<option value="Guyana">Guyana</option>';
		echo '<option value="Haiti">Haiti</option>';
		echo '<option value="Hawaii">Hawaii</option>';
		echo '<option value="Honduras">Honduras</option>';
		echo '<option value="Hong Kong">Hong Kong</option>';
		echo '<option value="Hungary">Hungary</option>';
		echo '<option value="Iceland">Iceland</option>';
		echo '<option value="India">India</option>';
		echo '<option value="Indonesia">Indonesia</option>';
		echo '<option value="Iran">Iran</option>';
		echo '<option value="Iraq">Iraq</option>';
		echo '<option value="Ireland">Ireland</option>';
		echo '<option value="Isle of Man">Isle of Man</option>';
		echo '<option value="Israel">Israel</option>';
		echo '<option value="Italy">Italy</option>';
		echo '<option value="Jamaica">Jamaica</option>';
		echo '<option value="Japan">Japan</option>';
		echo '<option value="Jordan">Jordan</option>';
		echo '<option value="Kazakhstan">Kazakhstan</option>';
		echo '<option value="Kenya">Kenya</option>';
		echo '<option value="Kiribati">Kiribati</option>';
		echo '<option value="Korea North">Korea North</option>';
		echo '<option value="Korea Sout">Korea South</option>';
		echo '<option value="Kuwait">Kuwait</option>';
		echo '<option value="Kyrgyzstan">Kyrgyzstan</option>';
		echo '<option value="Laos">Laos</option>';
		echo '<option value="Latvia">Latvia</option>';
		echo '<option value="Lebanon">Lebanon</option>';
		echo '<option value="Lesotho">Lesotho</option>';
		echo '<option value="Liberia">Liberia</option>';
		echo '<option value="Libya">Libya</option>';
		echo '<option value="Liechtenstein">Liechtenstein</option>';
		echo '<option value="Lithuania">Lithuania</option>';
		echo '<option value="Luxembourg">Luxembourg</option>';
		echo '<option value="Macau">Macau</option>';
		echo '<option value="Macedonia">Macedonia</option>';
		echo '<option value="Madagascar">Madagascar</option>';
		echo '<option value="Malaysia">Malaysia</option>';
		echo '<option value="Malawi">Malawi</option>';
		echo '<option value="Maldives">Maldives</option>';
		echo '<option value="Mali">Mali</option>';
		echo '<option value="Malta">Malta</option>';
		echo '<option value="Marshall Islands">Marshall Islands</option>';
		echo '<option value="Martinique">Martinique</option>';
		echo '<option value="Mauritania">Mauritania</option>';
		echo '<option value="Mauritius">Mauritius</option>';
		echo '<option value="Mayotte">Mayotte</option>';
		echo '<option value="Mexico">Mexico</option>';
		echo '<option value="Midway Islands">Midway Islands</option>';
		echo '<option value="Moldova">Moldova</option>';
		echo '<option value="Monaco">Monaco</option>';
		echo '<option value="Mongolia">Mongolia</option>';
		echo '<option value="Montserrat">Montserrat</option>';
		echo '<option value="Morocco">Morocco</option>';
		echo '<option value="Mozambique">Mozambique</option>';
		echo '<option value="Myanmar">Myanmar</option>';
		echo '<option value="Nambia">Nambia</option>';
		echo '<option value="Nauru">Nauru</option>';
		echo '<option value="Nepal">Nepal</option>';
		echo '<option value="Netherland Antilles">Netherland Antilles</option>';
		echo '<option value="Netherlands">Netherlands (Holland, Europe)</option>';
		echo '<option value="Nevis">Nevis</option>';
		echo '<option value="New Caledonia">New Caledonia</option>';
		echo '<option value="New Zealand">New Zealand</option>';
		echo '<option value="Nicaragua">Nicaragua</option>';
		echo '<option value="Niger">Niger</option>';
		echo '<option value="Nigeria">Nigeria</option>';
		echo '<option value="Niue">Niue</option>';
		echo '<option value="Norfolk Island">Norfolk Island</option>';
		echo '<option value="Norway">Norway</option>';
		echo '<option value="Oman">Oman</option>';
		echo '<option value="Pakistan">Pakistan</option>';
		echo '<option value="Palau Island">Palau Island</option>';
		echo '<option value="Palestine">Palestine</option>';
		echo '<option value="Panama">Panama</option>';
		echo '<option value="Papua New Guinea">Papua New Guinea</option>';
		echo '<option value="Paraguay">Paraguay</option>';
		echo '<option value="Peru">Peru</option>';
		echo '<option value="Phillipines">Philippines</option>';
		echo '<option value="Pitcairn Island">Pitcairn Island</option>';
		echo '<option value="Poland">Poland</option>';
		echo '<option value="Portugal">Portugal</option>';
		echo '<option value="Puerto Rico">Puerto Rico</option>';
		echo '<option value="Qatar">Qatar</option>';
		echo '<option value="Republic of Montenegro">Republic of Montenegro</option>';
		echo '<option value="Republic of Serbia">Republic of Serbia</option>';
		echo '<option value="Reunion">Reunion</option>';
		echo '<option value="Romania">Romania</option>';
		echo '<option value="Russia">Russia</option>';
		echo '<option value="Rwanda">Rwanda</option>';
		echo '<option value="St Barthelemy">St Barthelemy</option>';
		echo '<option value="St Eustatius">St Eustatius</option>';
		echo '<option value="St Helena">St Helena</option>';
		echo '<option value="St Kitts-Nevis">St Kitts-Nevis</option>';
		echo '<option value="St Lucia">St Lucia</option>';
		echo '<option value="St Maarten">St Maarten</option>';
		echo '<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>';
		echo '<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>';
		echo '<option value="Saipan">Saipan</option>';
		echo '<option value="Samoa">Samoa</option>';
		echo '<option value="Samoa American">Samoa American</option>';
		echo '<option value="San Marino">San Marino</option>';
		echo '<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>';
		echo '<option value="Saudi Arabia">Saudi Arabia</option>';
		echo '<option value="Senegal">Senegal</option>';
		echo '<option value="Serbia">Serbia</option>';
		echo '<option value="Seychelles">Seychelles</option>';
		echo '<option value="Sierra Leone">Sierra Leone</option>';
		echo '<option value="Singapore">Singapore</option>';
		echo '<option value="Slovakia">Slovakia</option>';
		echo '<option value="Slovenia">Slovenia</option>';
		echo '<option value="Solomon Islands">Solomon Islands</option>';
		echo '<option value="Somalia">Somalia</option>';
		echo '<option value="South Africa">South Africa</option>';
		echo '<option value="Spain">Spain</option>';
		echo '<option value="Sri Lanka">Sri Lanka</option>';
		echo '<option value="Sudan">Sudan</option>';
		echo '<option value="Suriname">Suriname</option>';
		echo '<option value="Swaziland">Swaziland</option>';
		echo '<option value="Sweden">Sweden</option>';
		echo '<option value="Switzerland">Switzerland</option>';
		echo '<option value="Syria">Syria</option>';
		echo '<option value="Tahiti">Tahiti</option>';
		echo '<option value="Taiwan">Taiwan</option>';
		echo '<option value="Tajikistan">Tajikistan</option>';
		echo '<option value="Tanzania">Tanzania</option>';
		echo '<option value="Thailand">Thailand</option>';
		echo '<option value="Togo">Togo</option>';
		echo '<option value="Tokelau">Tokelau</option>';
		echo '<option value="Tonga">Tonga</option>';
		echo '<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>';
		echo '<option value="Tunisia">Tunisia</option>';
		echo '<option value="Turkey">Turkey</option>';
		echo '<option value="Turkmenistan">Turkmenistan</option>';
		echo '<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>';
		echo '<option value="Tuvalu">Tuvalu</option>';
		echo '<option value="Uganda">Uganda</option>';
		echo '<option value="Ukraine">Ukraine</option>';
		echo '<option value="United Arab Erimates">United Arab Emirates</option>';
		echo '<option value="United Kingdom">United Kingdom</option>';
		echo '<option value="United States of America" selected>United States of America</option>';
		echo '<option value="Uraguay">Uruguay</option>';
		echo '<option value="Uzbekistan">Uzbekistan</option>';
		echo '<option value="Vanuatu">Vanuatu</option>';
		echo '<option value="Vatican City State">Vatican City State</option>';
		echo '<option value="Venezuela">Venezuela</option>';
		echo '<option value="Vietnam">Vietnam</option>';
		echo '<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>';
		echo '<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>';
		echo '<option value="Wake Island">Wake Island</option>';
		echo '<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>';
		echo '<option value="Yemen">Yemen</option>';
		echo '<option value="Zaire">Zaire</option>';
		echo '<option value="Zambia">Zambia</option>';
		echo '<option value="Zimbabwe">Zimbabwe</option>';
	echo '</select>';
	echo '</p>';

	echo '<p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last">';
	echo '<input type="text" class="input" name="cf-city" placeholder="City" required/>';
	echo '</p>';

	echo '<p class="et_pb_contact_field et_pb_contact_field_last">';
	echo '<textarea style="min-height: 150px;" class="input" name="cf-message" placeholder="Message"></textarea>';
	echo '</p>';
	echo "<input type=\"hidden\" name=\"cf-token\" value=\"$token\" />";
	echo '<div class="et_contact_bottom_container">		
			<div class="et_pb_contact_right">
				<p class="clearfix">
					<span class="et_pb_contact_captcha_question">'.$n.' + '.$m.'</span> = <input type="text" size="2" name="cf-key" class="input et_pb_contact_captcha" required>
				</p>
			</div>
			<button type="submit" name="cf-submitted" class="et_pb_contact_submit et_pb_button">Submit</button>
		</div>';
	echo '</form>';
	echo '<br>';
	echo '</div>';
	// style for select form
	echo '<style>';
	echo '
		select {
		    padding:16px;
		    width: 100%;
		    background-color: #eee;
		    border: none;
		    color: #999;
		    font-size: 14px;
		}';
	echo '</style>';
}
?>