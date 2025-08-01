<?php // phpcs:ignore - @generation-checksum SG-5-2
/**
 * Country Class for Singapore (SG).
 *
 * State/province count: 5
 * City count: 2
 * City count per state/province:
 * - 03: 1 cities
 * - 01: 1 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for Singapore (SG).
 *
 * IMPORTANT:
 * This file is generated by build scripts, do not
 * change it directly or your changes will be LOST!
 *
 * @since 2.0.11
 *
 * @property-read string $code
 * @property-read string $currency
 * @property-read int $phone_code
 */
class Country_SG extends Country {

	use \WP_Ultimo\Traits\Singleton;

	/**
	 * General country attributes.
	 *
	 * This might be useful, might be not.
	 * In case of doubt, keep it.
	 *
	 * @since 2.0.11
	 * @var array
	 */
	protected $attributes = [
		'country_code' => 'SG',
		'currency'     => 'SGD',
		'phone_code'   => 65,
	];

	/**
	 * The type of nomenclature used to refer to the country sub-divisions.
	 *
	 * @since 2.0.11
	 * @var string
	 */
	protected $state_type = 'unknown';

	/**
	 * Return the country name.
	 *
	 * @since 2.0.11
	 * @return string
	 */
	public function get_name() {

		return __('Singapore', 'multisite-ultimate');
	}

	/**
	 * Returns the list of states for SG.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return [
			'01' => __('Central Singapore Community Development Council', 'multisite-ultimate'),
			'02' => __('North East Community Development Council', 'multisite-ultimate'),
			'03' => __('North West Community Development Council', 'multisite-ultimate'),
			'04' => __('South East Community Development Council', 'multisite-ultimate'),
			'05' => __('South West Community Development Council', 'multisite-ultimate'),
		];
	}
}
