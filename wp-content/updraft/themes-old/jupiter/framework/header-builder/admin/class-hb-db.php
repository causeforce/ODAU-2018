<?php
/**
 * Retrieve and save data to the options table.
 *
 * @package Header_Builder
 * @subpackage DB
 * @since 0.1.0
 */

/**
 * Class file for handling AJAX requests from the frond builder.
 *
 * @author Reza Marandi <ross@artbees.net>
 *
 * @since 0.1.0 Introduced by Medhi S. from Reza Marandi.
 * @since 0.1.0 Update to use wp_send_json_success and wp_send_json_error.
 */
class HB_DB {
	public function __construct() {
		add_action( 'wp_ajax_abb_header_builder_store_data', array( &$this, 'store_data' ) );
		add_action( 'wp_ajax_abb_header_builder_retrieve_data', array( &$this, 'retrieve_data' ) );
	}
	public function store_data() {
		try {
			/**
				* @todo Fix security issue: nonces.
			  */
			$fn_data = $_POST['fn_data'];

			if ( empty( $fn_data ) ) {
				throw new Exception( 'Data field value is empty , Please check it.' );
			}

			/**
			 * @todo Review the data structure design. We're curretly storing eveything
			 *       in a single option.
			 */
			update_option( 'artbees_header_builder' , str_replace( '\"', '"', $fn_data ) );

			wp_send_json_success( array(
				'message' => 'Successful',
				'data' => array(),
			) );
		} catch ( Exception $e ) {
			wp_send_json_error( array(
				'message' => $e->getMessage(),
				'data' => array(),
			) );
		}
	}
	public function retrieve_data() {
		try {
			$fn_data = get_option( 'artbees_header_builder' );

			if ( empty( $fn_data ) ) {
				throw new Exception( 'Data is empty.' );
			}
			wp_send_json_success( array(
				'message' => 'Successful',
				'data' => $fn_data,
			) );

		} catch (Exception $e) {
			wp_send_json_error( array(
				'message' => $e->getMessage(),
				'data' => array(),
			) );
		}
	}
}
global $abb_phpunit;
if ( empty( $abb_phpunit ) || false === $abb_phpunit ) {
	new HB_DB;
}
