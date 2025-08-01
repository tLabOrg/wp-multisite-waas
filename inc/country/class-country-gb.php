<?php // phpcs:ignore - @generation-checksum GB-247-3871
/**
 * Country Class for United Kingdom (GB).
 *
 * State/province count: 247
 * City count: 3871
 * City count per state/province:
 * - ENG: 2919 cities
 * - SCT: 530 cities
 * - WLS: 302 cities
 * - NYK: 120 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for United Kingdom (GB).
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
class Country_GB extends Country {

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
		'country_code' => 'GB',
		'currency'     => 'GBP',
		'phone_code'   => 44,
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

		return __('United Kingdom', 'multisite-ultimate');
	}

	/**
	 * Returns the list of states for GB.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return [
			'ABE'   => __('Aberdeen', 'multisite-ultimate'),
			'ABD'   => __('Aberdeenshire', 'multisite-ultimate'),
			'ANS'   => __('Angus', 'multisite-ultimate'),
			'ANT'   => __('Antrim', 'multisite-ultimate'),
			'ANN'   => __('Antrim and Newtownabbey', 'multisite-ultimate'),
			'ARD'   => __('Ards', 'multisite-ultimate'),
			'AND'   => __('Ards and North Down', 'multisite-ultimate'),
			'AGB'   => __('Argyll and Bute', 'multisite-ultimate'),
			'ARM'   => __('Armagh City and District Council', 'multisite-ultimate'),
			'ABC'   => __('Armagh, Banbridge and Craigavon', 'multisite-ultimate'),
			'SH-AC' => __('Ascension Island', 'multisite-ultimate'),
			'BLA'   => __('Ballymena Borough', 'multisite-ultimate'),
			'BLY'   => __('Ballymoney', 'multisite-ultimate'),
			'BNB'   => __('Banbridge', 'multisite-ultimate'),
			'BNS'   => __('Barnsley', 'multisite-ultimate'),
			'BAS'   => __('Bath and North East Somerset', 'multisite-ultimate'),
			'BDF'   => __('Bedford', 'multisite-ultimate'),
			'BFS'   => __('Belfast district', 'multisite-ultimate'),
			'BIR'   => __('Birmingham', 'multisite-ultimate'),
			'BBD'   => __('Blackburn with Darwen', 'multisite-ultimate'),
			'BPL'   => __('Blackpool', 'multisite-ultimate'),
			'BGW'   => __('Blaenau Gwent County Borough', 'multisite-ultimate'),
			'BOL'   => __('Bolton', 'multisite-ultimate'),
			'BMH'   => __('Bournemouth', 'multisite-ultimate'),
			'BRC'   => __('Bracknell Forest', 'multisite-ultimate'),
			'BRD'   => __('Bradford', 'multisite-ultimate'),
			'BGE'   => __('Bridgend County Borough', 'multisite-ultimate'),
			'BNH'   => __('Brighton and Hove', 'multisite-ultimate'),
			'BKM'   => __('Buckinghamshire', 'multisite-ultimate'),
			'BUR'   => __('Bury', 'multisite-ultimate'),
			'CAY'   => __('Caerphilly County Borough', 'multisite-ultimate'),
			'CLD'   => __('Calderdale', 'multisite-ultimate'),
			'CAM'   => __('Cambridgeshire', 'multisite-ultimate'),
			'CMN'   => __('Carmarthenshire', 'multisite-ultimate'),
			'CKF'   => __('Carrickfergus Borough Council', 'multisite-ultimate'),
			'CSR'   => __('Castlereagh', 'multisite-ultimate'),
			'CCG'   => __('Causeway Coast and Glens', 'multisite-ultimate'),
			'CBF'   => __('Central Bedfordshire', 'multisite-ultimate'),
			'CGN'   => __('Ceredigion', 'multisite-ultimate'),
			'CHE'   => __('Cheshire East', 'multisite-ultimate'),
			'CHW'   => __('Cheshire West and Chester', 'multisite-ultimate'),
			'CRF'   => __('City and County of Cardiff', 'multisite-ultimate'),
			'SWA'   => __('City and County of Swansea', 'multisite-ultimate'),
			'BST'   => __('City of Bristol', 'multisite-ultimate'),
			'DER'   => __('City of Derby', 'multisite-ultimate'),
			'KHL'   => __('City of Kingston upon Hull', 'multisite-ultimate'),
			'LCE'   => __('City of Leicester', 'multisite-ultimate'),
			'LND'   => __('City of London', 'multisite-ultimate'),
			'NGM'   => __('City of Nottingham', 'multisite-ultimate'),
			'PTE'   => __('City of Peterborough', 'multisite-ultimate'),
			'PLY'   => __('City of Plymouth', 'multisite-ultimate'),
			'POR'   => __('City of Portsmouth', 'multisite-ultimate'),
			'STH'   => __('City of Southampton', 'multisite-ultimate'),
			'STE'   => __('City of Stoke-on-Trent', 'multisite-ultimate'),
			'SND'   => __('City of Sunderland', 'multisite-ultimate'),
			'WSM'   => __('City of Westminster', 'multisite-ultimate'),
			'WLV'   => __('City of Wolverhampton', 'multisite-ultimate'),
			'YOR'   => __('City of York', 'multisite-ultimate'),
			'CLK'   => __('Clackmannanshire', 'multisite-ultimate'),
			'CLR'   => __('Coleraine Borough Council', 'multisite-ultimate'),
			'CWY'   => __('Conwy County Borough', 'multisite-ultimate'),
			'CKT'   => __('Cookstown District Council', 'multisite-ultimate'),
			'CON'   => __('Cornwall', 'multisite-ultimate'),
			'DUR'   => __('County Durham', 'multisite-ultimate'),
			'COV'   => __('Coventry', 'multisite-ultimate'),
			'CGV'   => __('Craigavon Borough Council', 'multisite-ultimate'),
			'CMA'   => __('Cumbria', 'multisite-ultimate'),
			'DAL'   => __('Darlington', 'multisite-ultimate'),
			'DEN'   => __('Denbighshire', 'multisite-ultimate'),
			'DBY'   => __('Derbyshire', 'multisite-ultimate'),
			'DRY'   => __('Derry City Council', 'multisite-ultimate'),
			'DRS'   => __('Derry City and Strabane', 'multisite-ultimate'),
			'DEV'   => __('Devon', 'multisite-ultimate'),
			'DNC'   => __('Doncaster', 'multisite-ultimate'),
			'DOR'   => __('Dorset', 'multisite-ultimate'),
			'DOW'   => __('Down District Council', 'multisite-ultimate'),
			'DUD'   => __('Dudley', 'multisite-ultimate'),
			'DGY'   => __('Dumfries and Galloway', 'multisite-ultimate'),
			'DND'   => __('Dundee', 'multisite-ultimate'),
			'DGN'   => __('Dungannon and South Tyrone Borough Council', 'multisite-ultimate'),
			'EAY'   => __('East Ayrshire', 'multisite-ultimate'),
			'EDU'   => __('East Dunbartonshire', 'multisite-ultimate'),
			'ELN'   => __('East Lothian', 'multisite-ultimate'),
			'ERW'   => __('East Renfrewshire', 'multisite-ultimate'),
			'ERY'   => __('East Riding of Yorkshire', 'multisite-ultimate'),
			'ESX'   => __('East Sussex', 'multisite-ultimate'),
			'EDH'   => __('Edinburgh', 'multisite-ultimate'),
			'ENG'   => __('England', 'multisite-ultimate'),
			'ESS'   => __('Essex', 'multisite-ultimate'),
			'FAL'   => __('Falkirk', 'multisite-ultimate'),
			'FER'   => __('Fermanagh District Council', 'multisite-ultimate'),
			'FMO'   => __('Fermanagh and Omagh', 'multisite-ultimate'),
			'FIF'   => __('Fife', 'multisite-ultimate'),
			'FLN'   => __('Flintshire', 'multisite-ultimate'),
			'GAT'   => __('Gateshead', 'multisite-ultimate'),
			'GLG'   => __('Glasgow', 'multisite-ultimate'),
			'GLS'   => __('Gloucestershire', 'multisite-ultimate'),
			'GWN'   => __('Gwynedd', 'multisite-ultimate'),
			'HAL'   => __('Halton', 'multisite-ultimate'),
			'HAM'   => __('Hampshire', 'multisite-ultimate'),
			'HPL'   => __('Hartlepool', 'multisite-ultimate'),
			'HEF'   => __('Herefordshire', 'multisite-ultimate'),
			'HRT'   => __('Hertfordshire', 'multisite-ultimate'),
			'HLD'   => __('Highland', 'multisite-ultimate'),
			'IVC'   => __('Inverclyde', 'multisite-ultimate'),
			'IOW'   => __('Isle of Wight', 'multisite-ultimate'),
			'IOS'   => __('Isles of Scilly', 'multisite-ultimate'),
			'KEN'   => __('Kent', 'multisite-ultimate'),
			'KIR'   => __('Kirklees', 'multisite-ultimate'),
			'KWL'   => __('Knowsley', 'multisite-ultimate'),
			'LAN'   => __('Lancashire', 'multisite-ultimate'),
			'LRN'   => __('Larne Borough Council', 'multisite-ultimate'),
			'LDS'   => __('Leeds', 'multisite-ultimate'),
			'LEC'   => __('Leicestershire', 'multisite-ultimate'),
			'LMV'   => __('Limavady Borough Council', 'multisite-ultimate'),
			'LIN'   => __('Lincolnshire', 'multisite-ultimate'),
			'LSB'   => __('Lisburn City Council', 'multisite-ultimate'),
			'LBC'   => __('Lisburn and Castlereagh', 'multisite-ultimate'),
			'LIV'   => __('Liverpool', 'multisite-ultimate'),
			'BDG'   => __('London Borough of Barking and Dagenham', 'multisite-ultimate'),
			'BNE'   => __('London Borough of Barnet', 'multisite-ultimate'),
			'BEX'   => __('London Borough of Bexley', 'multisite-ultimate'),
			'BEN'   => __('London Borough of Brent', 'multisite-ultimate'),
			'BRY'   => __('London Borough of Bromley', 'multisite-ultimate'),
			'CMD'   => __('London Borough of Camden', 'multisite-ultimate'),
			'CRY'   => __('London Borough of Croydon', 'multisite-ultimate'),
			'EAL'   => __('London Borough of Ealing', 'multisite-ultimate'),
			'ENF'   => __('London Borough of Enfield', 'multisite-ultimate'),
			'HCK'   => __('London Borough of Hackney', 'multisite-ultimate'),
			'HMF'   => __('London Borough of Hammersmith and Fulham', 'multisite-ultimate'),
			'HRY'   => __('London Borough of Haringey', 'multisite-ultimate'),
			'HRW'   => __('London Borough of Harrow', 'multisite-ultimate'),
			'HAV'   => __('London Borough of Havering', 'multisite-ultimate'),
			'HIL'   => __('London Borough of Hillingdon', 'multisite-ultimate'),
			'HNS'   => __('London Borough of Hounslow', 'multisite-ultimate'),
			'ISL'   => __('London Borough of Islington', 'multisite-ultimate'),
			'LBH'   => __('London Borough of Lambeth', 'multisite-ultimate'),
			'LEW'   => __('London Borough of Lewisham', 'multisite-ultimate'),
			'MRT'   => __('London Borough of Merton', 'multisite-ultimate'),
			'NWM'   => __('London Borough of Newham', 'multisite-ultimate'),
			'RDB'   => __('London Borough of Redbridge', 'multisite-ultimate'),
			'RIC'   => __('London Borough of Richmond upon Thames', 'multisite-ultimate'),
			'SWK'   => __('London Borough of Southwark', 'multisite-ultimate'),
			'STN'   => __('London Borough of Sutton', 'multisite-ultimate'),
			'TWH'   => __('London Borough of Tower Hamlets', 'multisite-ultimate'),
			'WFT'   => __('London Borough of Waltham Forest', 'multisite-ultimate'),
			'WND'   => __('London Borough of Wandsworth', 'multisite-ultimate'),
			'MFT'   => __('Magherafelt District Council', 'multisite-ultimate'),
			'MAN'   => __('Manchester', 'multisite-ultimate'),
			'MDW'   => __('Medway', 'multisite-ultimate'),
			'MTY'   => __('Merthyr Tydfil County Borough', 'multisite-ultimate'),
			'WGN'   => __('Metropolitan Borough of Wigan', 'multisite-ultimate'),
			'MUL'   => __('Mid Ulster', 'multisite-ultimate'),
			'MEA'   => __('Mid and East Antrim', 'multisite-ultimate'),
			'MDB'   => __('Middlesbrough', 'multisite-ultimate'),
			'MLN'   => __('Midlothian', 'multisite-ultimate'),
			'MIK'   => __('Milton Keynes', 'multisite-ultimate'),
			'MON'   => __('Monmouthshire', 'multisite-ultimate'),
			'MRY'   => __('Moray', 'multisite-ultimate'),
			'MYL'   => __('Moyle District Council', 'multisite-ultimate'),
			'NTL'   => __('Neath Port Talbot County Borough', 'multisite-ultimate'),
			'NET'   => __('Newcastle upon Tyne', 'multisite-ultimate'),
			'NWP'   => __('Newport', 'multisite-ultimate'),
			'NYM'   => __('Newry and Mourne District Council', 'multisite-ultimate'),
			'NMD'   => __('Newry, Mourne and Down', 'multisite-ultimate'),
			'NTA'   => __('Newtownabbey Borough Council', 'multisite-ultimate'),
			'NFK'   => __('Norfolk', 'multisite-ultimate'),
			'NAY'   => __('North Ayrshire', 'multisite-ultimate'),
			'NDN'   => __('North Down Borough Council', 'multisite-ultimate'),
			'NEL'   => __('North East Lincolnshire', 'multisite-ultimate'),
			'NLK'   => __('North Lanarkshire', 'multisite-ultimate'),
			'NLN'   => __('North Lincolnshire', 'multisite-ultimate'),
			'NSM'   => __('North Somerset', 'multisite-ultimate'),
			'NTY'   => __('North Tyneside', 'multisite-ultimate'),
			'NYK'   => __('North Yorkshire', 'multisite-ultimate'),
			'NTH'   => __('Northamptonshire', 'multisite-ultimate'),
			'NIR'   => __('Northern Ireland', 'multisite-ultimate'),
			'NBL'   => __('Northumberland', 'multisite-ultimate'),
			'NTT'   => __('Nottinghamshire', 'multisite-ultimate'),
			'OLD'   => __('Oldham', 'multisite-ultimate'),
			'OMH'   => __('Omagh District Council', 'multisite-ultimate'),
			'ORK'   => __('Orkney Islands', 'multisite-ultimate'),
			'ELS'   => __('Outer Hebrides', 'multisite-ultimate'),
			'OXF'   => __('Oxfordshire', 'multisite-ultimate'),
			'PEM'   => __('Pembrokeshire', 'multisite-ultimate'),
			'PKN'   => __('Perth and Kinross', 'multisite-ultimate'),
			'POL'   => __('Poole', 'multisite-ultimate'),
			'POW'   => __('Powys', 'multisite-ultimate'),
			'RDG'   => __('Reading', 'multisite-ultimate'),
			'RCC'   => __('Redcar and Cleveland', 'multisite-ultimate'),
			'RFW'   => __('Renfrewshire', 'multisite-ultimate'),
			'RCT'   => __('Rhondda Cynon Taf', 'multisite-ultimate'),
			'RCH'   => __('Rochdale', 'multisite-ultimate'),
			'ROT'   => __('Rotherham', 'multisite-ultimate'),
			'GRE'   => __('Royal Borough of Greenwich', 'multisite-ultimate'),
			'KEC'   => __('Royal Borough of Kensington and Chelsea', 'multisite-ultimate'),
			'KTT'   => __('Royal Borough of Kingston upon Thames', 'multisite-ultimate'),
			'RUT'   => __('Rutland', 'multisite-ultimate'),
			'SH-HL' => __('Saint Helena', 'multisite-ultimate'),
			'SLF'   => __('Salford', 'multisite-ultimate'),
			'SAW'   => __('Sandwell', 'multisite-ultimate'),
			'SCT'   => __('Scotland', 'multisite-ultimate'),
			'SCB'   => __('Scottish Borders', 'multisite-ultimate'),
			'SFT'   => __('Sefton', 'multisite-ultimate'),
			'SHF'   => __('Sheffield', 'multisite-ultimate'),
			'ZET'   => __('Shetland Islands', 'multisite-ultimate'),
			'SHR'   => __('Shropshire', 'multisite-ultimate'),
			'SLG'   => __('Slough', 'multisite-ultimate'),
			'SOL'   => __('Solihull', 'multisite-ultimate'),
			'SOM'   => __('Somerset', 'multisite-ultimate'),
			'SAY'   => __('South Ayrshire', 'multisite-ultimate'),
			'SGC'   => __('South Gloucestershire', 'multisite-ultimate'),
			'SLK'   => __('South Lanarkshire', 'multisite-ultimate'),
			'STY'   => __('South Tyneside', 'multisite-ultimate'),
			'SOS'   => __('Southend-on-Sea', 'multisite-ultimate'),
			'SHN'   => __('St Helens', 'multisite-ultimate'),
			'STS'   => __('Staffordshire', 'multisite-ultimate'),
			'STG'   => __('Stirling', 'multisite-ultimate'),
			'SKP'   => __('Stockport', 'multisite-ultimate'),
			'STT'   => __('Stockton-on-Tees', 'multisite-ultimate'),
			'STB'   => __('Strabane District Council', 'multisite-ultimate'),
			'SFK'   => __('Suffolk', 'multisite-ultimate'),
			'SRY'   => __('Surrey', 'multisite-ultimate'),
			'SWD'   => __('Swindon', 'multisite-ultimate'),
			'TAM'   => __('Tameside', 'multisite-ultimate'),
			'TFW'   => __('Telford and Wrekin', 'multisite-ultimate'),
			'THR'   => __('Thurrock', 'multisite-ultimate'),
			'TOB'   => __('Torbay', 'multisite-ultimate'),
			'TOF'   => __('Torfaen', 'multisite-ultimate'),
			'TRF'   => __('Trafford', 'multisite-ultimate'),
			'UKM'   => __('United Kingdom', 'multisite-ultimate'),
			'VGL'   => __('Vale of Glamorgan', 'multisite-ultimate'),
			'WKF'   => __('Wakefield', 'multisite-ultimate'),
			'WLS'   => __('Wales', 'multisite-ultimate'),
			'WLL'   => __('Walsall', 'multisite-ultimate'),
			'WRT'   => __('Warrington', 'multisite-ultimate'),
			'WAR'   => __('Warwickshire', 'multisite-ultimate'),
			'WBK'   => __('West Berkshire', 'multisite-ultimate'),
			'WDU'   => __('West Dunbartonshire', 'multisite-ultimate'),
			'WLN'   => __('West Lothian', 'multisite-ultimate'),
			'WSX'   => __('West Sussex', 'multisite-ultimate'),
			'WIL'   => __('Wiltshire', 'multisite-ultimate'),
			'WNM'   => __('Windsor and Maidenhead', 'multisite-ultimate'),
			'WRL'   => __('Wirral', 'multisite-ultimate'),
			'WOK'   => __('Wokingham', 'multisite-ultimate'),
			'WOR'   => __('Worcestershire', 'multisite-ultimate'),
			'WRX'   => __('Wrexham County Borough', 'multisite-ultimate'),
		];
	}
}
