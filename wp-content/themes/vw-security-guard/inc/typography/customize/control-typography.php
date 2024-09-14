<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class VW_Security_Guard_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vw-security-guard' ),
				'family'      => esc_html__( 'Font Family', 'vw-security-guard' ),
				'size'        => esc_html__( 'Font Size',   'vw-security-guard' ),
				'weight'      => esc_html__( 'Font Weight', 'vw-security-guard' ),
				'style'       => esc_html__( 'Font Style',  'vw-security-guard' ),
				'line_height' => esc_html__( 'Line Height', 'vw-security-guard' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vw-security-guard' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vw-security-guard-ctypo-customize-controls' );
		wp_enqueue_style(  'vw-security-guard-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vw-security-guard' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-security-guard' ),
        'Acme' => __( 'Acme', 'vw-security-guard' ),
        'Anton' => __( 'Anton', 'vw-security-guard' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-security-guard' ),
        'Arimo' => __( 'Arimo', 'vw-security-guard' ),
        'Arsenal' => __( 'Arsenal', 'vw-security-guard' ),
        'Arvo' => __( 'Arvo', 'vw-security-guard' ),
        'Alegreya' => __( 'Alegreya', 'vw-security-guard' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-security-guard' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-security-guard' ),
        'Bangers' => __( 'Bangers', 'vw-security-guard' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-security-guard' ),
        'Bad Script' => __( 'Bad Script', 'vw-security-guard' ),
        'Bitter' => __( 'Bitter', 'vw-security-guard' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-security-guard' ),
        'BenchNine' => __( 'BenchNine', 'vw-security-guard' ),
        'Cabin' => __( 'Cabin', 'vw-security-guard' ),
        'Cardo' => __( 'Cardo', 'vw-security-guard' ),
        'Courgette' => __( 'Courgette', 'vw-security-guard' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-security-guard' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-security-guard' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-security-guard' ),
        'Cuprum' => __( 'Cuprum', 'vw-security-guard' ),
        'Cookie' => __( 'Cookie', 'vw-security-guard' ),
        'Chewy' => __( 'Chewy', 'vw-security-guard' ),
        'Days One' => __( 'Days One', 'vw-security-guard' ),
        'Dosis' => __( 'Dosis', 'vw-security-guard' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-security-guard' ),
        'Economica' => __( 'Economica', 'vw-security-guard' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-security-guard' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-security-guard' ),
        'Francois One' => __( 'Francois One', 'vw-security-guard' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-security-guard' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-security-guard' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-security-guard' ),
        'Handlee' => __( 'Handlee', 'vw-security-guard' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-security-guard' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-security-guard' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-security-guard' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-security-guard' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-security-guard' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-security-guard' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-security-guard' ),
        'Kanit' => __( 'Kanit', 'vw-security-guard' ),
        'Lobster' => __( 'Lobster', 'vw-security-guard' ),
        'Lato' => __( 'Lato', 'vw-security-guard' ),
        'Lora' => __( 'Lora', 'vw-security-guard' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-security-guard' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-security-guard' ),
        'Merriweather' => __( 'Merriweather', 'vw-security-guard' ),
        'Monda' => __( 'Monda', 'vw-security-guard' ),
        'Montserrat' => __( 'Montserrat', 'vw-security-guard' ),
        'Muli' => __( 'Muli', 'vw-security-guard' ),
        'Marck Script' => __( 'Marck Script', 'vw-security-guard' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-security-guard' ),
        'Open Sans' => __( 'Open Sans', 'vw-security-guard' ),
        'Overpass' => __( 'Overpass', 'vw-security-guard' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-security-guard' ),
        'Oxygen' => __( 'Oxygen', 'vw-security-guard' ),
        'Orbitron' => __( 'Orbitron', 'vw-security-guard' ),
        'Patua One' => __( 'Patua One', 'vw-security-guard' ),
        'Pacifico' => __( 'Pacifico', 'vw-security-guard' ),
        'Padauk' => __( 'Padauk', 'vw-security-guard' ),
        'Playball' => __( 'Playball', 'vw-security-guard' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-security-guard' ),
        'PT Sans' => __( 'PT Sans', 'vw-security-guard' ),
        'Philosopher' => __( 'Philosopher', 'vw-security-guard' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-security-guard' ),
        'Poiret One' => __( 'Poiret One', 'vw-security-guard' ),
        'Quicksand' => __( 'Quicksand', 'vw-security-guard' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-security-guard' ),
        'Raleway' => __( 'Raleway', 'vw-security-guard' ),
        'Rubik' => __( 'Rubik', 'vw-security-guard' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-security-guard' ),
        'Russo One' => __( 'Russo One', 'vw-security-guard' ),
        'Righteous' => __( 'Righteous', 'vw-security-guard' ),
        'Slabo' => __( 'Slabo', 'vw-security-guard' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-security-guard' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-security-guard'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-security-guard' ),
        'Sacramento' => __( 'Sacramento', 'vw-security-guard' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-security-guard' ),
        'Tangerine' => __( 'Tangerine', 'vw-security-guard' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-security-guard' ),
        'VT323' => __( 'VT323', 'vw-security-guard' ),
        'Varela Round' => __( 'Varela Round', 'vw-security-guard' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-security-guard' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-security-guard' ),
        'Volkhov' => __( 'Volkhov', 'vw-security-guard' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-security-guard' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'vw-security-guard' ),
			'100' => esc_html__( 'Thin',       'vw-security-guard' ),
			'300' => esc_html__( 'Light',      'vw-security-guard' ),
			'400' => esc_html__( 'Normal',     'vw-security-guard' ),
			'500' => esc_html__( 'Medium',     'vw-security-guard' ),
			'700' => esc_html__( 'Bold',       'vw-security-guard' ),
			'900' => esc_html__( 'Ultra Bold', 'vw-security-guard' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'normal'  => esc_html__( 'Normal', 'vw-security-guard' ),
			'italic'  => esc_html__( 'Italic', 'vw-security-guard' ),
			'oblique' => esc_html__( 'Oblique', 'vw-security-guard' )
		);
	}
}
