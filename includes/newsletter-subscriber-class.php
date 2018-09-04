<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 4/09/2018
 * Time: 12:30 PM
 */

class Newsletter_Subscriber_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = [
			'classname'   => 'newsletter_subscriber',
			'description' => __( 'Form to subscribe to a newsletter' ),
		];
		parent::__construct( 'newsletter_subscriber', __( 'Newsletter Subscriber Widget', 'ns_domain' ), $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin

		$title     = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Newsletter Subscriber', 'ns_domain' );
		$recipient = $instance['recipient'];
		$subject   = ! empty( $instance['subject'] ) ? $instance['subject'] : __( 'You have a new subscriber', 'ns_domain' );

		?>

		<p>
			<label for="<?= $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?></label><br>
			<input for="<?= $this->get_field_name( 'Title' ); ?>" type="text"
			       name="<?= $this->get_field_name( 'Title' ); ?>" value="<?= esc_attr( $title ) ?>">
		</p>

		<p>
			<label for="<?= $this->get_field_id( 'recipient' ); ?>"><?php _e( 'Recipient' ); ?></label><br>
			<input for="<?= $this->get_field_name( 'Recipient' ); ?>" type="text"
			       name="<?= $this->get_field_name( 'Recipient' ); ?>" value="<?= esc_attr( $recipient ) ?>">
		</p>

		<p>
			<label for="<?= $this->get_field_id( 'subject' ); ?>"><?php _e( 'Subject' ); ?></label><br>
			<input for="<?= $this->get_field_name( 'Subject' ); ?>" type="text"
			       name="<?= $this->get_field_name( 'Subject' ); ?>" value="<?= esc_attr( $subject ) ?>">
		</p>

		<?php

	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}