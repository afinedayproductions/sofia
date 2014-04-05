<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Afdp_format {

	public function __construct() {

		$this->CI = get_instance();

	} // END __construct()

	// Affiche la date sous la forme: Janvier 2001
	public function setDateMonthYear($sql_date) {

		$date = explode('-', $sql_date);
		$year = $date[0];

		switch ($date[1]) {
			case '01':
				$month = 'Janvier';
				break;
			
			case '02':
				$month = 'Février';
				break;

			case '03':
				$month = 'Mars';
				break;

			case '04':
				$month = 'Avril';
				break;

			case '05':
				$month = 'Mai';
				break;

			case '06':
				$month = 'Juin';
				break;

			case '07':
				$month = 'Juillet';
				break;

			case '08':
				$month = 'Août';
				break;

			case '09':
				$month = 'Septembre';
				break;

			case '10':
				$month = 'Octobre';
				break;

			case '11':
				$month = 'Novembre';
				break;

			case '12':
				$month = 'Décembre';
				break;

			default:
				$month = '';
				break;
		} // end switch $date[1] (month)

		return $month . ' ' . $year;

	} // END setDateMonthYear()


	// We set base_url for internal link but we don't touch to external link
	public function setURL($url) {

		// Test if link in internal or external
		$isExternal = strpos($url, 'http://');
		$isExternal === false ? $isExternal = strpos($url, 'https://') : true;

		// If link is internal, we modify it
		if($isExternal === false)
			$url = $this->CI->config->base_url() . $url;

		return $url;

	} // END setURL()

} // END class Afdp_date