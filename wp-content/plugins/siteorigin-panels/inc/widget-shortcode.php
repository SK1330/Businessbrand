<?php

class SiteOrigin_Panels_Widget_Shortcode {
	public static $text_widgets = array(
		'SiteOrigin_Widget_Editor_Widget',
		'SiteOrigin_Panels_Widgets_Layout',
		'WP_Widget_Black_Studio_TinyMCE',
		'WP_Widget_Text',
	);

	public static function init() {
		add_shortcode( 'siteorigin_widget', 'SiteOrigin_Panels_Widget_Shortcode::shortcode' );
	}

	public static function add_filters() {
		add_filter( 'siteorigin_panels_the_widget_html', 'SiteOrigin_Panels_Widget_Shortcode::widget_html', 10, 4 );
	}

	public static function remove_filters() {
		remove_filter( 'siteorigin_panels_the_widget_html', 'SiteOrigin_Panels_Widget_Shortcode::widget_html' );
	}

	/**
	 * This shortcode just displays a widget based on the given arguments
	 *
	 * @return string
	 */
	public static function shortcode( $attr, $content ) {
		$attr = shortcode_atts( array(
			'class' => false,
			'id' => '',
		), $attr, 'siteorigin_widget' );

		$attr['class'] = html_entity_decode( $attr['class'] );
		$attr['class'] = apply_filters( 'siteorigin_panels_widget_class', $attr['class'] );

		$the_widget = ! empty( $attr['class'] ) ? SiteOrigin_Panels::get_widget_instance( $attr['class'] ) : null;

		if ( ! empty( $the_widget ) ) {
			$data = self::decode_data( $content );

			$widget_args = ! empty( $data['args'] ) ? $data['args'] : array();
			$widget_instance = ! empty( $data['instance'] ) ? $data['instance'] : array();

			$widget_args = self::escape_widget_data( $widget_args );
			$widget_instance = self::escape_widget_data( $widget_instance );

			$widget_args = wp_parse_args( array(
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			), $widget_args );

			ob_start();
			$the_widget->widget( $widget_args, $widget_instance );

			return ob_get_clean();
		}
	}

	public static function escape_widget_data( $data ) {
		try {
			$escaped_data = array();
			foreach ( $data as $key => $value ) {
				if ( is_array( $value ) ) {
					$escaped_data[ $key ] = self::escape_widget_data( $value );
				} else {
					$escaped_data[ $key ] = esc_html( $value );
				}
			}
			return $escaped_data;
		} catch (Exception $e) {
			// There was an error, return empty array.
			return array();
		}
	}

	/**
	 * Get the shortcode for a specific widget
	 *
	 * @return string
	 */
	public static function get_shortcode( $widget, $args, $instance ) {
		unset( $instance['panels_info'] );

		$data = array(
			'instance' => $instance,
			'args' => $args,
		);

		// This allows other plugins to implement their own shortcode. For example, to work when Page Builder isn't active
		$shortcode_name = apply_filters( 'siteorigin_panels_cache_shortcode', 'siteorigin_widget', $widget, $instance, $args );

		$shortcode = '[' . $shortcode_name . ' ';
		$shortcode .= 'class="' . htmlentities( preg_replace( '/\\\\+/', '\\\\\\\\', get_class( $widget ) ) ) . '"]';
		$shortcode .= self::encode_data( $data );
		$shortcode .= '[/' . $shortcode_name . ']';

		return $shortcode;
	}

	/**
	 * A filter to replace widgets with
	 */
	public static function widget_html( $html, $widget, $args, $instance ) {
		if (
			empty( $GLOBALS['SITEORIGIN_PANELS_POST_CONTENT_RENDER'] ) ||
			// Don't try create HTML if there already is some
			! empty( $html ) ||
			! is_object( $widget ) ||
			// Skip for known text based widgets
			in_array( get_class( $widget ), self::$text_widgets )
		) {
			return $html;
		}

		return self::get_shortcode( $widget, $args, $instance );
	}

	public static function encode_data( $data ) {
		return '<input type="hidden" value="' . esc_textarea( wp_json_encode( $data, JSON_UNESCAPED_UNICODE ) ) . '" />';
	}

	public static function decode_data( $string ) {
		preg_match( '/value="([^"]*)"/', trim( $string ), $matches );

		if ( ! empty( $matches[1] ) ) {
			$data = json_decode( html_entity_decode( $matches[1], ENT_QUOTES ), true );

			return $data;
		} else {
			return array();
		}
	}
}
