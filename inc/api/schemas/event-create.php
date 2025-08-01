<?php
/**
 * Schema for event@create.
 *
 * @package WP_Ultimo\API\Schemas
 * @since 2.0.11
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Schema for event@create.
 *
 * @since 2.0.11
 * @internal last-generated in 2022-12
 * @generated class generated by our build scripts, do not change!
 *
 * @since 2.0.11
 */
return [
	'severity'         => [
		'description' => __('Severity of the problem.', 'multisite-ultimate'),
		'type'        => 'integer',
		'required'    => true,
	],
	'date_created'     => [
		'description' => __('Date when the event was created.', 'multisite-ultimate'),
		'type'        => 'string',
		'required'    => false,
	],
	'payload'          => [
		'description' => __('Payload of the event.', 'multisite-ultimate'),
		'type'        => 'object',
		'required'    => true,
	],
	'initiator'        => [
		'description' => __('The type of user responsible for initiating the event. There are two options: Manual and System. By default, the event is saved as manual.', 'multisite-ultimate'),
		'type'        => 'string',
		'required'    => true,
		'enum'        => [
			'system',
			'manual',
		],
	],
	'object_type'      => [
		'description' => __("The type of object related to this event. It's usually the model name.", 'multisite-ultimate'),
		'type'        => 'string',
		'required'    => true,
	],
	'slug'             => [
		'description' => __('The event slug. It needs to be unique and preferably make it clear what it is about. Example: account_created is about creating an account.', 'multisite-ultimate'),
		'type'        => 'string',
		'required'    => true,
	],
	'object_id'        => [
		'description' => __('The ID of the related objects.', 'multisite-ultimate'),
		'type'        => 'integer',
		'required'    => false,
	],
	'date_modified'    => [
		'description' => __('Model last modification date.', 'multisite-ultimate'),
		'type'        => 'string',
		'required'    => false,
	],
	'migrated_from_id' => [
		'description' => __('The ID of the original 1.X model that was used to generate this item on migration.', 'multisite-ultimate'),
		'type'        => 'integer',
		'required'    => false,
	],
	'skip_validation'  => [
		'description' => __('Set true to have field information validation bypassed when saving this event.', 'multisite-ultimate'),
		'type'        => 'boolean',
		'required'    => false,
	],
];
