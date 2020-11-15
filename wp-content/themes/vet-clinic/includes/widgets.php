<?php
 /*
 *  widget template for creating widgets
 *  @link https://developer.wordpress.org/themes/functionality/widgets/ &
 *  @link https://premium.wpmudev.org/blog/create-custom-wordpress-widget/
 *  @package design+code
 *  @since 1.0
 * 
 */

/** Create a widget function and extend the WP_Widget class. */
//our widget function his called dc_widget (name your widget function relative to your theme or generically)

class dc_widget extends WP_Widget {

    /** The __construct() method is used to assign an id, title, classname and description to the widget.  */
    public function __construct() {
        parent::__construct(
            'dc_widget', // Base ID
            'dc_widget', // Name
            array( 'description' => __( 'dc_widget', 'text_domain' ), ) // Args
        );
    }
    
    /** argument to display html around the widget areas - change these if need be*/
    public $args = array(
        'wrapper_open' =>  '<aside>',
        'wrapper_close' => '</aside>',
        'before_title'  => '<h3 class="widget-heading">',
        'after_title'   => '</h3>',
        'before_widget' => '<div class="widget-container">',
        'after_widget'  => '</div>'
    );
    
    /** the widget() method is used to define the output that will displayed on the front-end (wp dashboard)*/
    public function widget( $args, $instance ) {
        echo $args['wrapper_open'];
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
 
        echo '<div class="widget_content_wrapper">';
            echo esc_html__( $instance['text'], 'text_domain' );
        echo '</div>';
 
        echo $args['after_widget'];
        echo $args['wrapper_close'];
 
    }
    /** the form() menthod is used to add settings fields (i.e Title, text areas) which will be displayed in the front-end*/
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <?php
 
    }
    /** Allows the update of new content within the widget area.  */
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
 
        return $instance;
    }

} // class Foo_Widget

//register the widget
add_action( 'widgets_init', 'vetclinic_widget_areas' );

if ( ! function_exists( 'dc_widget_areas' ) ) {

	/** Initializes themes widgets.*/
	function vetclinic_widget_areas() {

        register_sidebar(
			array(
				'name'          => __( 'Header one', 'vet clinic' ),
				'id'            => 'header-col-one',
				'description'   => __( 'header-col-one, widget area', 'vet clinic' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
        );

        register_sidebar(
			array(
				'name'          => __( 'Header Two', 'vet clinic' ),
				'id'            => 'header-col-two',
				'description'   => __( 'header-col-two, widget area', 'vet clinic' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
        );

		register_sidebar(
			array(
				'name'          => __( 'Footer one', 'vet clinic' ),
				'id'            => 'footer-col-one',
				'description'   => __( 'footer-col-one, widget area', 'vet clinic' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
        );
        
        register_sidebar(
			array(
				'name'          => __( 'Footer two', 'vet clinic' ),
				'id'            => 'footer-col-two',
				'description'   => __( 'footer column two, widget area', 'vet clinic' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
        );
        
        register_sidebar(
			array(
				'name'          => __( 'Footer three', 'vet clinic' ),
				'id'            => 'footer-col-three',
				'description'   => __( 'footer column three, widget area', 'vet clinic' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
        );
        
        register_sidebar(
			array(
				'name'          => __( 'Footer four', 'vet clinic' ),
				'id'            => 'footer-col-four',
				'description'   => __( 'footer column four, widget area', 'vet clinic' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
        );
        
        //Right Sidebar | primary sidebar
        register_sidebar(
			array(
				'name'          => __( 'Right Sidebar', 'vet clinic' ),
				'id'            => 'sidebar-primary',
				'description'   => __( 'Right Sidebar, Primary widget area', 'vet clinic' ),
				'before_widget' => '<aside id="%1$s" class="sidebar right-sidebar %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
        );
	}
} // endif function_exists( 'codefish_widgets_init' ).