(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
      // AMD. Register as an anonymous module unless amdModuleId is set
      define(["jquery"], function (a0) {
        return (factory(a0));
      });
    } else if (typeof module === 'object' && module.exports) {
      // Node. Does not work with strict CommonJS, but
      // only CommonJS-like environments that support module.exports,
      // like Node.
      module.exports = factory(require("jquery"));
    } else {
      factory(root["jQuery"]);
    }
  }(this, function (jQuery) {

(function ($) {
    'use strict';

  var dataJSON = {'BD': {'countryName': 'Bangladesh','currency': 'BDT','symbol': 'Tk'},'BE': {'countryName': 'Belgium','currency': 'EUR','symbol': '€'},'BF': {'countryName': 'Burkina Faso','currency': 'XOF','symbol': 'CFA'},'BG': {'countryName': 'Bulgaria','currency': 'BGN','symbol': 'BGN'},'BA': {'countryName': 'Bosnia and Herzegovina','currency': 'BAM','symbol': 'KM'},'BB': {'countryName': 'Barbados','currency': 'BBD','symbol': 'BBD'},'WF': {'countryName': 'Wallis and Futuna','currency': 'XPF','symbol': 'XPF'},'BL': {'countryName': 'Saint Barthelemy','currency': 'EUR','symbol': '€'},'BM': {'countryName': 'Bermuda','currency': 'BMD','symbol': 'BMD'},'BN': {'countryName': 'Brunei','currency': 'BND','symbol': 'BN$'},'BO': {'countryName': 'Bolivia','currency': 'BOB','symbol': 'Bs'},'BH': {'countryName': 'Bahrain','currency': 'BHD','symbol': 'BD'},'BI': {'countryName': 'Burundi','currency': 'BIF','symbol': 'FBu'},'BJ': {'countryName': 'Benin','currency': 'XOF','symbol': 'CFA'},'BT': {'countryName': 'Bhutan','currency': 'BTN','symbol': 'BTN'},'JM': {'countryName': 'Jamaica','currency': 'JMD','symbol': 'J$'},'BV': {'countryName': 'Bouvet Island','currency': 'NOK','symbol': 'Nkr'},'BW': {'countryName': 'Botswana','currency': 'BWP','symbol': 'BWP'},'WS': {'countryName': 'Samoa','currency': 'WST','symbol': 'WST'},'BQ': {'countryName': 'Bonaire, Saint Eustatius and Saba ','currency': 'USD','symbol': '$'},'BR': {'countryName': 'Brazil','currency': 'BRL','symbol': 'R$'},'BS': {'countryName': 'Bahamas','currency': 'BSD','symbol': 'BSD'},'JE': {'countryName': 'Jersey','currency': 'GBP','symbol': '£'},'BY': {'countryName': 'Belarus','currency': 'BYR','symbol': 'BYR'},'BZ': {'countryName': 'Belize','currency': 'BZD','symbol': 'BZ$'},'RU': {'countryName': 'Russia','currency': 'RUB','symbol': 'RUB'},'RW': {'countryName': 'Rwanda','currency': 'RWF','symbol': 'RWF'},'RS': {'countryName': 'Serbia','currency': 'RSD','symbol': 'din.'},'TL': {'countryName': 'East Timor','currency': 'USD','symbol': '$'},'RE': {'countryName': 'Reunion','currency': 'EUR','symbol': '€'},'TM': {'countryName': 'Turkmenistan','currency': 'TMT','symbol': 'TMT'},'TJ': {'countryName': 'Tajikistan','currency': 'TJS','symbol': 'TJS'},'RO': {'countryName': 'Romania','currency': 'RON','symbol': 'RON'},'TK': {'countryName': 'Tokelau','currency': 'NZD','symbol': 'NZ$'},'GW': {'countryName': 'Guinea-Bissau','currency': 'XOF','symbol': 'CFA'},'GU': {'countryName': 'Guam','currency': 'USD','symbol': '$'},'GT': {'countryName': 'Guatemala','currency': 'GTQ','symbol': 'GTQ'},'GS': {'countryName': 'South Georgia and the South Sandwich Islands','currency': 'GBP','symbol': '£'},'GR': {'countryName': 'Greece','currency': 'EUR','symbol': '€'},'GQ': {'countryName': 'Equatorial Guinea','currency': 'XAF','symbol': 'FCFA'},'GP': {'countryName': 'Guadeloupe','currency': 'EUR','symbol': '€'},'JP': {'countryName': 'Japan','currency': 'JPY','symbol': '¥'},'GY': {'countryName': 'Guyana','currency': 'GYD','symbol': 'GYD'},'GG': {'countryName': 'Guernsey','currency': 'GBP','symbol': '£'},'GF': {'countryName': 'French Guiana','currency': 'EUR','symbol': '€'},'GE': {'countryName': 'Georgia','currency': 'GEL','symbol': 'GEL'},'GD': {'countryName': 'Grenada','currency': 'XCD','symbol': 'XCD'},'GB': {'countryName': 'United Kingdom','currency': 'GBP','symbol': '£'},'GA': {'countryName': 'Gabon','currency': 'XAF','symbol': 'FCFA'},'SV': {'countryName': 'El Salvador','currency': 'USD','symbol': '$'},'GN': {'countryName': 'Guinea','currency': 'GNF','symbol': 'FG'},'GM': {'countryName': 'Gambia','currency': 'GMD','symbol': 'GMD'},'GL': {'countryName': 'Greenland','currency': 'DKK','symbol': 'Dkr'},'GI': {'countryName': 'Gibraltar','currency': 'GIP','symbol': 'GIP'},'GH': {'countryName': 'Ghana','currency': 'GHS','symbol': 'GH₵'},'OM': {'countryName': 'Oman','currency': 'OMR','symbol': 'OMR'},'TN': {'countryName': 'Tunisia','currency': 'TND','symbol': 'DT'},'JO': {'countryName': 'Jordan','currency': 'JOD','symbol': 'JD'},'HR': {'countryName': 'Croatia','currency': 'HRK','symbol': 'kn'},'HT': {'countryName': 'Haiti','currency': 'HTG','symbol': 'HTG'},'HU': {'countryName': 'Hungary','currency': 'HUF','symbol': 'Ft'},'HK': {'countryName': 'Hong Kong','currency': 'HKD','symbol': 'HK$'},'HN': {'countryName': 'Honduras','currency': 'HNL','symbol': 'HNL'},'HM': {'countryName': 'Heard Island and McDonald Islands','currency': 'AUD','symbol': 'AU$'},'VE': {'countryName': 'Venezuela','currency': 'VEF','symbol': 'Bs.F.'},'PR': {'countryName': 'Puerto Rico','currency': 'USD','symbol': '$'},'PS': {'countryName': 'Palestinian Territory','currency': 'ILS','symbol': '₪'},'PW': {'countryName': 'Palau','currency': 'USD','symbol': '$'},'PT': {'countryName': 'Portugal','currency': 'EUR','symbol': '€'},'SJ': {'countryName': 'Svalbard and Jan Mayen','currency': 'NOK','symbol': 'Nkr'},'PY': {'countryName': 'Paraguay','currency': 'PYG','symbol': '₲'},'IQ': {'countryName': 'Iraq','currency': 'IQD','symbol': 'IQD'},'PA': {'countryName': 'Panama','currency': 'PAB','symbol': 'B/.'},'PF': {'countryName': 'French Polynesia','currency': 'XPF','symbol': 'XPF'},'PG': {'countryName': 'Papua New Guinea','currency': 'PGK','symbol': 'PGK'},'PE': {'countryName': 'Peru','currency': 'PEN','symbol': 'S/.'},'PK': {'countryName': 'Pakistan','currency': 'PKR','symbol': 'PKRs'},'PH': {'countryName': 'Philippines','currency': 'PHP','symbol': '₱'},'PN': {'countryName': 'Pitcairn','currency': 'NZD','symbol': 'NZ$'},'PL': {'countryName': 'Poland','currency': 'PLN','symbol': 'zł'},'PM': {'countryName': 'Saint Pierre and Miquelon','currency': 'EUR','symbol': '€'},'ZM': {'countryName': 'Zambia','currency': 'ZMK','symbol': 'ZK'},'EH': {'countryName': 'Western Sahara','currency': 'MAD','symbol': 'MAD'},'EE': {'countryName': 'Estonia','currency': 'EUR','symbol': '€'},'EG': {'countryName': 'Egypt','currency': 'EGP','symbol': 'EGP'},'ZA': {'countryName': 'South Africa','currency': 'ZAR','symbol': 'R'},'EC': {'countryName': 'Ecuador','currency': 'USD','symbol': '$'},'IT': {'countryName': 'Italy','currency': 'EUR','symbol': '€'},'VN': {'countryName': 'Vietnam','currency': 'VND','symbol': '₫'},'SB': {'countryName': 'Solomon Islands','currency': 'SBD','symbol': 'SBD'},'ET': {'countryName': 'Ethiopia','currency': 'ETB','symbol': 'Br'},'SO': {'countryName': 'Somalia','currency': 'SOS','symbol': 'Ssh'},'ZW': {'countryName': 'Zimbabwe','currency': 'ZWL','symbol': 'ZWL'},'SA': {'countryName': 'Saudi Arabia','currency': 'SAR','symbol': 'SR'},'ES': {'countryName': 'Spain','currency': 'EUR','symbol': '€'},'ER': {'countryName': 'Eritrea','currency': 'ERN','symbol': 'Nfk'},'ME': {'countryName': 'Montenegro','currency': 'EUR','symbol': '€'},'MD': {'countryName': 'Moldova','currency': 'MDL','symbol': 'MDL'},'MG': {'countryName': 'Madagascar','currency': 'MGA','symbol': 'MGA'},'MF': {'countryName': 'Saint Martin','currency': 'EUR','symbol': '€'},'MA': {'countryName': 'Morocco','currency': 'MAD','symbol': 'MAD'},'MC': {'countryName': 'Monaco','currency': 'EUR','symbol': '€'},'UZ': {'countryName': 'Uzbekistan','currency': 'UZS','symbol': 'UZS'},'MM': {'countryName': 'Myanmar','currency': 'MMK','symbol': 'MMK'},'ML': {'countryName': 'Mali','currency': 'XOF','symbol': 'CFA'},'MO': {'countryName': 'Macao','currency': 'MOP','symbol': 'MOP$'},'MN': {'countryName': 'Mongolia','currency': 'MNT','symbol': 'MNT'},'MH': {'countryName': 'Marshall Islands','currency': 'USD','symbol': '$'},'MK': {'countryName': 'Macedonia','currency': 'MKD','symbol': 'MKD'},'MU': {'countryName': 'Mauritius','currency': 'MUR','symbol': 'MURs'},'MT': {'countryName': 'Malta','currency': 'EUR','symbol': '€'},'MW': {'countryName': 'Malawi','currency': 'MWK','symbol': 'MWK'},'MV': {'countryName': 'Maldives','currency': 'MVR','symbol': 'MVR'},'MQ': {'countryName': 'Martinique','currency': 'EUR','symbol': '€'},'MP': {'countryName': 'Northern Mariana Islands','currency': 'USD','symbol': '$'},'MS': {'countryName': 'Montserrat','currency': 'XCD','symbol': 'XCD'},'MR': {'countryName': 'Mauritania','currency': 'MRO','symbol': 'MRO'},'IM': {'countryName': 'Isle of Man','currency': 'GBP','symbol': '£'},'UG': {'countryName': 'Uganda','currency': 'UGX','symbol': 'USh'},'TZ': {'countryName': 'Tanzania','currency': 'TZS','symbol': 'TSh'},'MY': {'countryName': 'Malaysia','currency': 'MYR','symbol': 'RM'},'MX': {'countryName': 'Mexico','currency': 'MXN','symbol': 'MX$'},'IL': {'countryName': 'Israel','currency': 'ILS','symbol': '₪'},'FR': {'countryName': 'France','currency': 'EUR','symbol': '€'},'IO': {'countryName': 'British Indian Ocean Territory','currency': 'USD','symbol': '$'},'SH': {'countryName': 'Saint Helena','currency': 'SHP','symbol': 'SHP'},'FI': {'countryName': 'Finland','currency': 'EUR','symbol': '€'},'FJ': {'countryName': 'Fiji','currency': 'FJD','symbol': 'FJD'},'FK': {'countryName': 'Falkland Islands','currency': 'FKP','symbol': 'FKP'},'FM': {'countryName': 'Micronesia','currency': 'USD','symbol': '$'},'FO': {'countryName': 'Faroe Islands','currency': 'DKK','symbol': 'Dkr'},'NI': {'countryName': 'Nicaragua','currency': 'NIO','symbol': 'C$'},'NL': {'countryName': 'Netherlands','currency': 'EUR','symbol': '€'},'NO': {'countryName': 'Norway','currency': 'NOK','symbol': 'Nkr'},'NA': {'countryName': 'Namibia','currency': 'NAD','symbol': 'N$'},'VU': {'countryName': 'Vanuatu','currency': 'VUV','symbol': 'VUV'},'NC': {'countryName': 'New Caledonia','currency': 'XPF','symbol': 'XPF'},'NE': {'countryName': 'Niger','currency': 'XOF','symbol': 'CFA'},'NF': {'countryName': 'Norfolk Island','currency': 'AUD','symbol': 'AU$'},'NG': {'countryName': 'Nigeria','currency': 'NGN','symbol': '₦'},'NZ': {'countryName': 'New Zealand','currency': 'NZD','symbol': 'NZ$'},'NP': {'countryName': 'Nepal','currency': 'NPR','symbol': 'NPRs'},'NR': {'countryName': 'Nauru','currency': 'AUD','symbol': 'AU$'},'NU': {'countryName': 'Niue','currency': 'NZD','symbol': 'NZ$'},'CK': {'countryName': 'Cook Islands','currency': 'NZD','symbol': 'NZ$'},'XK': {'countryName': 'Kosovo','currency': 'EUR','symbol': '€'},'CI': {'countryName': 'Ivory Coast','currency': 'XOF','symbol': 'CFA'},'CH': {'countryName': 'Switzerland','currency': 'CHF','symbol': 'CHF'},'CO': {'countryName': 'Colombia','currency': 'COP','symbol': 'CO$'},'CN': {'countryName': 'China','currency': 'CNY','symbol': 'CN¥'},'CM': {'countryName': 'Cameroon','currency': 'XAF','symbol': 'FCFA'},'CL': {'countryName': 'Chile','currency': 'CLP','symbol': 'CL$'},'CC': {'countryName': 'Cocos Islands','currency': 'AUD','symbol': 'AU$'},'CA': {'countryName': 'Canada','currency': 'CAD','symbol': 'CA$'},'CG': {'countryName': 'Republic of the Congo','currency': 'XAF','symbol': 'FCFA'},'CF': {'countryName': 'Central African Republic','currency': 'XAF','symbol': 'FCFA'},'CD': {'countryName': 'Democratic Republic of the Congo','currency': 'CDF','symbol': 'CDF'},'CZ': {'countryName': 'Czech Republic','currency': 'CZK','symbol': 'Kč'},'CY': {'countryName': 'Cyprus','currency': 'EUR','symbol': '€'},'CX': {'countryName': 'Christmas Island','currency': 'AUD','symbol': 'AU$'},'CR': {'countryName': 'Costa Rica','currency': 'CRC','symbol': '₡'},'CW': {'countryName': 'Curacao','currency': 'ANG','symbol': 'ANG'},'CV': {'countryName': 'Cape Verde','currency': 'CVE','symbol': 'CV$'},'CU': {'countryName': 'Cuba','currency': 'CUP','symbol': 'CUP'},'SZ': {'countryName': 'Swaziland','currency': 'SZL','symbol': 'SZL'},'SY': {'countryName': 'Syria','currency': 'SYP','symbol': 'SY£'},'SX': {'countryName': 'Sint Maarten','currency': 'ANG','symbol': 'ANG'},'KG': {'countryName': 'Kyrgyzstan','currency': 'KGS','symbol': 'KGS'},'KE': {'countryName': 'Kenya','currency': 'KES','symbol': 'Ksh'},'SS': {'countryName': 'South Sudan','currency': 'SSP','symbol': 'SSP'},'SR': {'countryName': 'Suriname','currency': 'SRD','symbol': 'SRD'},'KI': {'countryName': 'Kiribati','currency': 'AUD','symbol': 'AU$'},'KH': {'countryName': 'Cambodia','currency': 'KHR','symbol': 'KHR'},'KN': {'countryName': 'Saint Kitts and Nevis','currency': 'XCD','symbol': 'XCD'},'KM': {'countryName': 'Comoros','currency': 'KMF','symbol': 'CF'},'ST': {'countryName': 'Sao Tome and Principe','currency': 'STD','symbol': 'STD'},'SK': {'countryName': 'Slovakia','currency': 'EUR','symbol': '€'},'KR': {'countryName': 'South Korea','currency': 'KRW','symbol': '₩'},'SI': {'countryName': 'Slovenia','currency': 'EUR','symbol': '€'},'KP': {'countryName': 'North Korea','currency': 'KPW','symbol': 'KPW'},'KW': {'countryName': 'Kuwait','currency': 'KWD','symbol': 'KD'},'SN': {'countryName': 'Senegal','currency': 'XOF','symbol': 'CFA'},'SM': {'countryName': 'San Marino','currency': 'EUR','symbol': '€'},'SL': {'countryName': 'Sierra Leone','currency': 'SLL','symbol': 'SLL'},'SC': {'countryName': 'Seychelles','currency': 'SCR','symbol': 'SCR'},'KZ': {'countryName': 'Kazakhstan','currency': 'KZT','symbol': 'KZT'},'KY': {'countryName': 'Cayman Islands','currency': 'KYD','symbol': 'KYD'},'SG': {'countryName': 'Singapore','currency': 'SGD','symbol': 'S$'},'SE': {'countryName': 'Sweden','currency': 'SEK','symbol': 'Skr'},'SD': {'countryName': 'Sudan','currency': 'SDG','symbol': 'SDG'},'DO': {'countryName': 'Dominican Republic','currency': 'DOP','symbol': 'RD$'},'DM': {'countryName': 'Dominica','currency': 'XCD','symbol': 'XCD'},'DJ': {'countryName': 'Djibouti','currency': 'DJF','symbol': 'Fdj'},'DK': {'countryName': 'Denmark','currency': 'DKK','symbol': 'Dkr'},'VG': {'countryName': 'British Virgin Islands','currency': 'USD','symbol': '$'},'DE': {'countryName': 'Germany','currency': 'EUR','symbol': '€'},'YE': {'countryName': 'Yemen','currency': 'YER','symbol': 'YR'},'DZ': {'countryName': 'Algeria','currency': 'DZD','symbol': 'DA'},'US': {'countryName': 'United States','currency': 'USD','symbol': '$'},'UY': {'countryName': 'Uruguay','currency': 'UYU','symbol': '$U'},'YT': {'countryName': 'Mayotte','currency': 'EUR','symbol': '€'},'UM': {'countryName': 'United States Minor Outlying Islands','currency': 'USD','symbol': '$'},'LB': {'countryName': 'Lebanon','currency': 'LBP','symbol': 'LB£'},'LC': {'countryName': 'Saint Lucia','currency': 'XCD','symbol': 'XCD'},'LA': {'countryName': 'Laos','currency': 'LAK','symbol': 'LAK'},'TV': {'countryName': 'Tuvalu','currency': 'AUD','symbol': 'AU$'},'TW': {'countryName': 'Taiwan','currency': 'TWD','symbol': 'NT$'},'TT': {'countryName': 'Trinidad and Tobago','currency': 'TTD','symbol': 'TT$'},'TR': {'countryName': 'Turkey','currency': 'TRY','symbol': 'TL'},'LK': {'countryName': 'Sri Lanka','currency': 'LKR','symbol': 'SLRs'},'LI': {'countryName': 'Liechtenstein','currency': 'CHF','symbol': 'CHF'},'LV': {'countryName': 'Latvia','currency': 'EUR','symbol': '€'},'TO': {'countryName': 'Tonga','currency': 'TOP','symbol': 'T$'},'LT': {'countryName': 'Lithuania','currency': 'LTL','symbol': 'Lt'},'LU': {'countryName': 'Luxembourg','currency': 'EUR','symbol': '€'},'LR': {'countryName': 'Liberia','currency': 'LRD','symbol': 'LRD'},'LS': {'countryName': 'Lesotho','currency': 'LSL','symbol': 'LSL'},'TH': {'countryName': 'Thailand','currency': 'THB','symbol': '฿'},'TF': {'countryName': 'French Southern Territories','currency': 'EUR','symbol': '€'},'TG': {'countryName': 'Togo','currency': 'XOF','symbol': 'CFA'},'TD': {'countryName': 'Chad','currency': 'XAF','symbol': 'FCFA'},'TC': {'countryName': 'Turks and Caicos Islands','currency': 'USD','symbol': '$'},'LY': {'countryName': 'Libya','currency': 'LYD','symbol': 'LD'},'VA': {'countryName': 'Vatican','currency': 'EUR','symbol': '€'},'VC': {'countryName': 'Saint Vincent and the Grenadines','currency': 'XCD','symbol': 'XCD'},'AE': {'countryName': 'United Arab Emirates','currency': 'AED','symbol': 'AED'},'AD': {'countryName': 'Andorra','currency': 'EUR','symbol': '€'},'AG': {'countryName': 'Antigua and Barbuda','currency': 'XCD','symbol': 'XCD'},'AF': {'countryName': 'Afghanistan','currency': 'AFN','symbol': 'Af'},'AI': {'countryName': 'Anguilla','currency': 'XCD','symbol': 'XCD'},'VI': {'countryName': 'U.S. Virgin Islands','currency': 'USD','symbol': '$'},'IS': {'countryName': 'Iceland','currency': 'ISK','symbol': 'Ikr'},'IR': {'countryName': 'Iran','currency': 'IRR','symbol': 'IRR'},'AM': {'countryName': 'Armenia','currency': 'AMD','symbol': 'AMD'},'AL': {'countryName': 'Albania','currency': 'ALL','symbol': 'ALL'},'AO': {'countryName': 'Angola','currency': 'AOA','symbol': 'AOA'},'AQ': {'countryName': 'Antarctica','currency': '','symbol': ''},'AS': {'countryName': 'American Samoa','currency': 'USD','symbol': '$'},'AR': {'countryName': 'Argentina','currency': 'ARS','symbol': 'AR$'},'AU': {'countryName': 'Australia','currency': 'AUD','symbol': 'AU$'},'AT': {'countryName': 'Austria','currency': 'EUR','symbol': '€'},'AW': {'countryName': 'Aruba','currency': 'AWG','symbol': 'AWG'},'IN': {'countryName': 'India','currency': 'INR','symbol': 'Rs'},'AX': {'countryName': 'Aland Islands','currency': 'EUR','symbol': '€'},'AZ': {'countryName': 'Azerbaijan','currency': 'AZN','symbol': 'man.'},'IE': {'countryName': 'Ireland','currency': 'EUR','symbol': '€'},'ID': {'countryName': 'Indonesia','currency': 'IDR','symbol': 'Rp'},'UA': {'countryName': 'Ukraine','currency': 'UAH','symbol': '₴'},'QA': {'countryName': 'Qatar','currency': 'QAR','symbol': 'QR'},'MZ': {'countryName': 'Mozambique','currency': 'MZN','symbol': 'MTn'}}

  function getAllAsArray () {
    const keys = Object.keys(dataJSON)

    return keys.map(function (key) {
      const ISOObject = dataJSON[key]

      return {
        iso: key,
        currency: ISOObject.currency,
        code:ISOObject.currency,
        symbol: ISOObject.symbol,
        name: ISOObject.countryName
      }
    })
  }
  var allCountries = getAllAsArray()

  let countrypicker = function(opts) {
	$(this).each(function(index, select) {
		var $select = $(select);

		var flag = $select.data('flag');
		var options = [];
		if (flag) {
				/* create option for each existing country */
				$.each(allCountries, function (index, country) {
					options.push(`<option
                        data-tokens="${country.code} - ${country.name}"
                        data-isocode="${country.iso}"
                        data-content="<span class='inline-flag flag ${country.iso.toLowerCase()}'>${country.code} - ${country.name}</span>"
						class="option-with-flag"
						value="${country.code}">${country.name}</option>`);
				});

				/* after bootstrap-select finished loading add flogs to every option-btn */
				$select.on('loaded.bs.select', function (e) {
					$('a.option-with-flag').each(function() {
                        var $optionBtn = $(this);
                        console.log($optionBtn)
						if ($optionBtn.children('.inline-flag').length <= 0) {
                            var code = $optionBtn.data('isocode').toLowerCase();
							var $flag = $(`<span class="inline-flag flag ${code}"></span>`);
							$optionBtn.prepend($flag);
						}
					});
				});

				/* after bootstrap-select finished loading or selection changed add flag to the select btn */
				$select.on('loaded.bs.select change', function (e) {
					/* which country-codes are selected? */
					var $selectedOptions = $(this).find(':selected');
					var countrycodes = [];
					$selectedOptions.each(function() {
						countrycodes.push($(this).data('isocode').toLowerCase());
					});

					var $btn = $(this).parent().find('.btn .filter-option.pull-left');
					$btn.removeClass().addClass('filter-option pull-left');

					/* for now only show the flag if only one country is selected */
					if (countrycodes.length === 1) {
						countrycodes.forEach((countrycode) => {
							$btn.addClass(`flag ${countrycode}`);
						 });
					}
				});
		} else {
			//for each build list without flag
			$.each(allCountries, function (index, country) {
				options.push(`<option
					data-countrycode="${country.code}
					data-tokens="${country.code} ${country.name}"
					value="${country.code}">${country.name}</option>`);
			});
		}

		$select
			.addClass('f16')
			.html(options.join('\n'));

		//check if default
		var defaultCountryName = $select.data('default');
		//if there's a default, set it
		if (defaultCountryName) {
			$select.val(defaultCountryName.split(',').map((v) => v.trim()));
		}
	});
};

/* extend jQuery with the countrypicker function */
$.fn.countrypicker = countrypicker;

/* initialize all countrypicker by default. This is the default jQuery Behavior. */
$('.countrypicker').countrypicker();

})(jQuery);


}));
