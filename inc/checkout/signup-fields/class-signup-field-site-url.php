<?php
/**
 * Creates a cart with the parameters of the purchase being placed.
 *
 * @package WP_Ultimo
 * @subpackage Order
 * @since 2.0.0
 */

namespace WP_Ultimo\Checkout\Signup_Fields;

use WP_Ultimo\Checkout\Signup_Fields\Base_Signup_Field;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Creates an cart with the parameters of the purchase being placed.
 *
 * @package WP_Ultimo
 * @subpackage Checkout
 * @since 2.0.0
 */
class Signup_Field_Site_Url extends Base_Signup_Field {

	/**
	 * Returns the type of the field.
	 *
	 * @since 2.0.0
	 */
	public function get_type(): string {

		return 'site_url';
	}

	/**
	 * Returns if this field should be present on the checkout flow or not.
	 *
	 * @since 2.0.0
	 */
	public function is_required(): bool {

		return false;
	}

	/**
	 * Defines if this field/element is related to site creation or not.
	 *
	 * @since 2.0.0
	 */
	public function is_site_field(): bool {

		return true;
	}

	/**
	 * Requires the title of the field/element type.
	 *
	 * This is used on the Field/Element selection screen.
	 *
	 * @since 2.0.0
	 * @return string
	 */
	public function get_title() {

		return __('Site URL', 'multisite-ultimate');
	}

	/**
	 * Returns the description of the field/element.
	 *
	 * This is used as the title attribute of the selector.
	 *
	 * @since 2.0.0
	 * @return string
	 */
	public function get_description() {

		return __('Adds a Site URL field. This is used to set the URL of the site being created.', 'multisite-ultimate');
	}

	/**
	 * Returns the tooltip of the field/element.
	 *
	 * This is used as the tooltip attribute of the selector.
	 *
	 * @since 2.0.0
	 * @return string
	 */
	public function get_tooltip() {

		return __('Adds a Site URL field. This is used to set the URL of the site being created.', 'multisite-ultimate');
	}

	/**
	 * Returns the icon to be used on the selector.
	 *
	 * Can be either a dashicon class or a wu-dashicon class.
	 *
	 * @since 2.0.0
	 */
	public function get_icon(): string {

		return 'dashicons-wu-globe1';
	}

	/**
	 * Returns the default values for the field-elements.
	 *
	 * This is passed through a wp_parse_args before we send the values
	 * to the method that returns the actual fields for the checkout form.
	 *
	 * @since 2.0.0
	 * @return array
	 */
	public function defaults() {

		global $current_site;

		return [
			'auto_generate_site_url'    => false,
			'display_url_preview'       => true,
			'enable_domain_selection'   => false,
			'display_field_attachments' => true,
			'available_domains'         => $current_site->domain . PHP_EOL,
		];
	}

	/**
	 * List of keys of the default fields we want to display on the builder.
	 *
	 * @since 2.0.0
	 * @return array
	 */
	public function default_fields() {

		return [
			'name',
			'placeholder',
			'tooltip',
		];
	}

	/**
	 * If you want to force a particular attribute to a value, declare it here.
	 *
	 * @since 2.0.0
	 * @return array
	 */
	public function force_attributes() {

		return [
			'id'       => 'site_url',
			'required' => true,
		];
	}

	/**
	 * Returns the list of additional fields specific to this type.
	 *
	 * @since 2.0.0
	 * @return array
	 */
	public function get_fields() {

		global $current_site;

		return [
			'auto_generate_site_url'    => [
				'order'     => 12,
				'type'      => 'toggle',
				'title'     => __('Auto-generate', 'multisite-ultimate'),
				'desc'      => __('Check this option to auto-generate this field based on the username of the customer.', 'multisite-ultimate'),
				'tooltip'   => '',
				'value'     => 0,
				'html_attr' => [
					'v-model' => 'auto_generate_site_url',
				],
			],
			'display_field_attachments' => [
				'order'             => 18,
				'type'              => 'toggle',
				'title'             => __('Display URL field attachments', 'multisite-ultimate'),
				'desc'              => __('Adds the prefix and suffix blocks to the URL field.', 'multisite-ultimate'),
				'tooltip'           => '',
				'value'             => 1,
				'tab'               => 'content',
				'wrapper_html_attr' => [
					'v-show' => '!auto_generate_site_url',
				],
				'html_attr'         => [
					'v-model' => 'display_field_attachments',
				],
			],
			'display_url_preview'       => [
				'order'             => 19,
				'type'              => 'toggle',
				'title'             => __('Display URL preview block', 'multisite-ultimate'),
				'desc'              => __('Adds a preview block that shows the final URL.', 'multisite-ultimate'),
				'tooltip'           => '',
				'value'             => 1,
				'tab'               => 'content',
				'wrapper_html_attr' => [
					'v-show' => '!auto_generate_site_url',
				],
				'html_attr'         => [
					'v-model' => 'display_url_preview',
				],
			],
			'enable_domain_selection'   => [
				'order'             => 20,
				'type'              => 'toggle',
				'title'             => __('Enable Domain Selection', 'multisite-ultimate'),
				'desc'              => __('Offer different domain options to your customers to choose from.', 'multisite-ultimate'),
				'tooltip'           => '',
				'value'             => 0,
				'tab'               => 'content',
				'wrapper_html_attr' => [
					'v-show' => '!auto_generate_site_url',
				],
				'html_attr'         => [
					'v-model' => 'enable_domain_selection',
					'rows'    => 5,
				],
			],
			'available_domains'         => [
				'order'             => 30,
				'type'              => 'textarea',
				'title'             => __('Available Domains', 'multisite-ultimate'),
				'desc'              => __('Enter one domain option per line.', 'multisite-ultimate'),
				'value'             => $current_site->domain . PHP_EOL,
				'tab'               => 'content',
				'wrapper_html_attr' => [
					'v-show' => '!auto_generate_site_url && enable_domain_selection',
				],
				'html_attr'         => [
					'rows' => 4,
				],
			],
		];
	}

	/**
	 * Returns the list of available pricing table templates.
	 *
	 * @since 2.0.0
	 * @return array
	 */
	public function get_url_preview_templates() {

		$templates = [
			'legacy/signup/steps/step-domain-url-preview' => __('New URL Preview', 'multisite-ultimate'),
			// 'legacy/signup/steps/step-domain-url-preview' => __('Legacy Template', 'multisite-ultimate'),
		];

		return apply_filters('wu_get_pricing_table_templates', $templates);
	}

	/**
	 * Returns the field/element actual field array to be used on the checkout form.
	 *
	 * @since 2.0.0
	 *
	 * @param array $attributes Attributes saved on the editor form.
	 * @return array An array of fields, not the field itself.
	 */
	public function to_fields_array($attributes) {
		/*
		 * If we should auto-generate, add as hidden.
		 */
		if ($attributes['auto_generate_site_url']) {
			return [
				'auto_generate_site_url' => [
					'type'  => 'hidden',
					'id'    => 'auto_generate_site_url',
					'value' => 'username',
				],
				'site_url'               => [
					'type'  => 'hidden',
					'id'    => 'site_url',
					'value' => uniqid(),
				],
			];
		}

		$checkout_fields = [];

		$checkout_fields['site_url'] = [
			'type'            => 'text',
			'id'              => 'site_url',
			'name'            => $attributes['name'],
			'placeholder'     => $attributes['placeholder'],
			'tooltip'         => $attributes['tooltip'],
			'required'        => true,
			'wrapper_classes' => wu_get_isset($attributes, 'wrapper_element_classes', 'wu-my-1'),
			'classes'         => wu_get_isset($attributes, 'element_classes', ''),
			'html_attr'       => [
				'autocomplete' => 'off',
				'v-on:input'   => 'site_url = $event.target.value.toLowerCase().replace(/[^a-z0-9-]+/g, "")',
				'v-bind:value' => 'site_url',
			],
		];

		if ($attributes['display_field_attachments']) {
			$checkout_fields['site_url']['classes'] .= ' xs:wu-rounded-none';

			$checkout_fields['site_url']['prefix'] = ' ';

			$checkout_fields['site_url']['prefix_html_attr'] = [
				'class'   => 'wu-flex wu-items-center wu-px-3 wu-mt-1 sm:wu-mb-1 wu-border-box wu-font-mono wu-justify-center sm:wu-border-r-0',
				'style'   => 'background-color: rgba(0, 0, 0, 0.008); border: 1px solid #eee; margin-right: -1px; font-size: 90%;',
				'v-html'  => 'is_subdomain ? "https://" : "https://" + site_domain + "/"',
				'v-cloak' => 1,
			];

			$checkout_fields['site_url']['suffix'] = ' ';

			$checkout_fields['site_url']['suffix_html_attr'] = [
				'class'   => 'wu-flex wu-items-center wu-px-3 sm:wu-mt-1 wu-mb-1 wu-border-box wu-font-mono wu-justify-center sm:wu-border-l-0',
				'style'   => 'background-color: rgba(0, 0, 0, 0.008); border: 1px solid #eee; margin-left: -1px; font-size: 90%;',
				'v-html'  => '"." + site_domain',
				'v-cloak' => 1,
				'v-show'  => 'is_subdomain',
			];
		}

		if ($attributes['available_domains'] && $attributes['enable_domain_selection']) {
			$options = $this->get_domain_options($attributes['available_domains']);

			$checkout_fields['site_domain'] = [
				'name'              => __('Domain', 'multisite-ultimate'),
				'options'           => $options,
				'wrapper_classes'   => wu_get_isset($attributes, 'wrapper_element_classes', ''),
				'classes'           => wu_get_isset($attributes, 'element_classes', ''),
				'order'             => 25,
				'required'          => true,
				'id'                => 'site_domain',
				'type'              => 'select',
				'classes'           => 'input',
				'html_attr'         => [
					'v-model' => 'site_domain',
				],
				'wrapper_html_attr' => [
					'style' => $this->calculate_style_attr(),
				],
			];
		}

		if ($attributes['display_url_preview']) {
			$content = wu_get_template_contents('legacy/signup/steps/step-domain-url-preview');

			$checkout_fields['site_url_preview'] = [
				'type'              => 'note',
				'desc'              => $content,
				'wrapper_classes'   => wu_get_isset($attributes, 'wrapper_element_classes', ''),
				'classes'           => wu_get_isset($attributes, 'element_classes', ''),
				'wrapper_html_attr' => [
					'style' => $this->calculate_style_attr(),
				],
			];
		}

		return $checkout_fields;
	}

	/**
	 * Get the domain options.
	 *
	 * @since 2.0.0
	 *
	 * @param string $domain_options The list of domains, in string format.
	 */
	protected function get_domain_options($domain_options): array {

		$domains = array_filter(explode(PHP_EOL, $domain_options));

		$domains = array_map(fn($item) => trim((string) $item), $domains);

		return array_combine($domains, $domains);
	}
}
