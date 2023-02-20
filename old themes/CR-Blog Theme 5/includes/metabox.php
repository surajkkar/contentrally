<?php
//add_action( 'cmb2_admin_init', 'tegeria_metabox' );
if(!function_exists('tegeria_metabox'))
{
	function tegeria_metabox(){
		$prefix = '_';
                $front_page_ID = get_option('page_on_front');
                $home_who_meta = new_cmb2_box( array(
                        'id'            => $prefix . 'home_who_metabox',
                        'title'         => esc_html__( 'Who we are section', 'crally' ),
                        'object_types'  => array( 'page' ),
                        'show_on'      => array( 'key' => 'id', 'value' => array( $front_page_ID ) ),
                        'context'    => 'normal',
                        'priority'   => 'high',			
                ) );
                $home_who_meta->add_field( array(
                        'name'       => esc_html__( 'Heading', 'crally' ),
                        'desc'       => esc_html__( 'Enter Heading', 'crally' ),
                        'id'         => $prefix . 'home_who_heading',
                        'type'       => 'text',
                        'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
                $home_who_meta->add_field( array(
                        'name'       => esc_html__( 'Short Description', 'crally' ),
                        'desc'       => esc_html__( 'Enter short description', 'crally' ),
                        'id'         => $prefix . 'home_who_short_desc',
                        'type'       => 'textarea',
                        'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
                $home_who_meta->add_field( array(
                        'name' => esc_html__( 'Image', 'crally' ),
                        'desc' => esc_html__( 'Upload an image.', 'crally' ),
                        'id'   => $prefix . 'home_who_image',
                        'type' => 'file',
                        'options' => array(
                                'url' => false, // Hide the text input for the url
                        ),
                        'query_args' => array(
                                'type' => array(
                                   'image/gif',
                                   'image/jpeg',
                                   'image/png',
                                ),
                        ),
                ) );
                $home_who_meta->add_field( [
                    'name'             => __( 'Choose page', 'cmb2' ),
                    'id'               => $prefix . 'home_who_page_dropdown',
                    'type'             => 'select',
                    'show_option_none' => true,
                    'options_cb'       => 'get_my_pages',
                ] );
                
                
                /****** Home page program section ***********/                
                $home_program_meta = new_cmb2_box( array(
                        'id'            => $prefix . 'home_who_metabox',
                        'title'         => esc_html__( 'Who we are section', 'crally' ),
                        'object_types'  => array( 'page' ),
                        'show_on'      => array( 'key' => 'id', 'value' => array( $front_page_ID ) ),
                        'context'    => 'normal',
                        'priority'   => 'high',			
                ) );
                $home_program_meta->add_field( array(
                        'name'       => esc_html__( 'Program name', 'crally' ),
                        'desc'       => esc_html__( 'Enter program name', 'crally' ),
                        'id'         => $prefix . 'home_first_program_name',
                        'type'       => 'text',
                        'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
                $home_program_meta->add_field( array(
                        'name' => esc_html__( 'Image', 'crally' ),
                        'desc' => esc_html__( 'Upload an image.', 'crally' ),
                        'id'   => $prefix . 'home_first_program_image',
                        'type' => 'file',
                        'options' => array(
                                'url' => false, // Hide the text input for the url
                        ),
                        'query_args' => array(
                                'type' => array(
                                   'image/gif',
                                   'image/jpeg',
                                   'image/png',
                                ),
                        ),
                ) );
                $home_program_meta->add_field( [
                    'name'             => __( 'First program page', 'cmb2' ),
                    'id'               => $prefix . 'home_program_first_page_dropdown',
                    'type'             => 'select',
                    'show_option_none' => true,
                    'options_cb'       => 'get_my_pages',
                ] );
                
                $home_program_meta->add_field( array(
                        'name'       => esc_html__( 'Second program name', 'crally' ),
                        'desc'       => esc_html__( 'Enter program name', 'crally' ),
                        'id'         => $prefix . 'home_second_program_name',
                        'type'       => 'text',
                        'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
                $home_program_meta->add_field( array(
                        'name' => esc_html__( 'Second image', 'crally' ),
                        'desc' => esc_html__( 'Upload an image.', 'crally' ),
                        'id'   => $prefix . 'home_second_program_image',
                        'type' => 'file',
                        'options' => array(
                                'url' => false, // Hide the text input for the url
                        ),
                        'query_args' => array(
                                'type' => array(
                                   'image/gif',
                                   'image/jpeg',
                                   'image/png',
                                ),
                        ),
                ) );
                $home_program_meta->add_field( [
                    'name'             => __( 'Second program page', 'cmb2' ),
                    'id'               => $prefix . 'home_program_second_page_dropdown',
                    'type'             => 'select',
                    'show_option_none' => true,
                    'options_cb'       => 'get_my_pages',
                ] );
                $home_program_meta->add_field( array(
                        'name'       => esc_html__( 'Third program name', 'crally' ),
                        'desc'       => esc_html__( 'Enter program name', 'crally' ),
                        'id'         => $prefix . 'home_third_program_name',
                        'type'       => 'text',
                        'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
                $home_program_meta->add_field( array(
                        'name' => esc_html__( 'Third image', 'crally' ),
                        'desc' => esc_html__( 'Upload an image.', 'crally' ),
                        'id'   => $prefix . 'home_third_program_image',
                        'type' => 'file',
                        'options' => array(
                                'url' => false, // Hide the text input for the url
                        ),
                        'query_args' => array(
                                'type' => array(
                                   'image/gif',
                                   'image/jpeg',
                                   'image/png',
                                ),
                        ),
                ) );
                $home_program_meta->add_field( [
                    'name'             => __( 'Third program page', 'cmb2' ),
                    'id'               => $prefix . 'home_program_third_page_dropdown',
                    'type'             => 'select',
                    'show_option_none' => true,
                    'options_cb'       => 'get_my_pages',
                ] );
                
                $home_program_meta->add_field( [
                    'name'             => __( 'Choose program page', 'cmb2' ),
                    'id'               => $prefix . 'home_program_details_page_dropdown',
                    'type'             => 'select',
                    'show_option_none' => true,
                    'options_cb'       => 'get_my_pages',
                ] );
                
                
                $plans_meta = new_cmb2_box( array(
                        'id'            => $prefix . 'plans_metabox',
                        'title'         => esc_html__( 'Plans Details', 'crally' ),
                        'object_types'  => array( 'plans' ),
                        'context'      => 'normal',
                        'priority'     => 'high',
                        'show_names'   => true,			
                ) );
                $plans_meta->add_field( array(
                        'name'       => esc_html__( 'Price', 'crally' ),
                        'desc'       => esc_html__( 'Enter price for one time payment', 'crally' ),
                        'id'         => $prefix . 'plans_price',
                        'type'       => 'text',
                        'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
				$plans_meta->add_field( array(
                        'name'       => esc_html__( 'Subscription Type', 'crally' ),
                        'desc'       => esc_html__( 'Subscription type annually or monthly', 'crally' ),
                        'id'         => $prefix . 'plan_type',
                        'type'       => 'radio_inline',
                        'options' => array(
							'annually' => __( 'Annually', 'crally' ),
							'monthly'   => __( 'Monthly', 'crally' ),
							'both'     => __( 'Both', 'crally' ),
						),
						'default' => 'both',
                ) );
                $plans_meta->add_field( array(
                        'name'       => esc_html__( 'Subscription Price', 'crally' ),
                        'desc'       => esc_html__( 'Enter price for subscription payment based on per month', 'crally' ),
                        'id'         => $prefix . 'plans_subscription_price',
                        'type'       => 'text',
                        //'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
				$plans_meta->add_field( array(
                        'name'       => esc_html__( 'Subscription Month', 'crally' ),
                        'desc'       => esc_html__( 'Enter subscription start month', 'crally' ),
                        'id'         => $prefix . 'plans_start_month',
                        'type'       => 'select',
						'options'          => array(
							'01' => __( 'January', 'cmb2' ),
							'02'   => __( 'February', 'cmb2' ),
							'03'     => __( 'March', 'cmb2' ),
							'04'     => __( 'April', 'cmb2' ),
							'05'     => __( 'May', 'cmb2' ),
							'06'     => __( 'June', 'cmb2' ),
							'07'     => __( 'July', 'cmb2' ),
							'08'     => __( 'August', 'cmb2' ),
							'09'     => __( 'September', 'cmb2' ),
							'10'     => __( 'October', 'cmb2' ),
							'11'     => __( 'November', 'cmb2' ),
							'12'     => __( 'December', 'cmb2' ),
						),
                        //'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
				$plans_meta->add_field( array(
                        'name'       => esc_html__( 'Start Date', 'crally' ),
                        'desc'       => esc_html__( 'Enter subscription start date', 'crally' ),
                        'id'         => $prefix . 'plans_start_date',
                        'type'       => 'select',
						'options'          => month_dates_array()
                        //'show_on_cb' => 'yourprefix_hide_if_no_cats'
                ) );
				
                
//                $crm_service_details_meta = new_cmb2_box( array(
//                        'id'            => $prefix . 'crm_service_details_metabox',
//                        'title'         => esc_html__( 'Page content Section', 'crally' ),
//                        'object_types'  => array( 'page' ),
//                        'show_on'      => array( 'key' => 'page-template', 'value' => array( 'templates/home-template.php' ) ),
//                        'show_names'   => true, // Show field names on the left
//                        'context'    => 'normal',
//                        'priority'   => 'high',         
//                ) );
                
                
                /************************************************/
                
                $plan_meta = new_cmb2_box( array(
                        'id'            => $prefix . 'plan_metabox',
                        'title'         => esc_html__( 'Details', 'crally' ),
                        'object_types'  => array( 'page' ),
                        //'parent_slug' => array(214,607,45),
                        'context'    => 'normal',
                        'priority'   => 'high',			
                ) );
                $plan_meta->add_field( array(
                        'name' => 'Restricted page',
                        'type' => 'radio',
                        'id' => $prefix.'page_retricted',
                        'options' => array(
                           'yes' => 'Yes',
                           'no' => 'No',
                        ),
                        'default' => 'no',
                        'attributes' => array(
                        'required'    => 'required',
                       )
                ) );
                $plan_meta->add_field( array(
                        'name'             => __( 'Choose plan', 'cmb2' ),
                        'id'               => $prefix . 'plan_id',
                        'type'             => 'select',
                        'show_option_none' => true,
                        'options_cb'       => 'all_plans',
                ) );
                $plan_meta->add_field( array(
                        'name'             => __( 'Choose week', 'cmb2' ),
                        'id'               => $prefix . 'week_no',
                        'type'             => 'select',
                        'show_option_none' => true,
                        'options_cb'       => 'all_weeks',
                ) );
                
                
                /* $plan_meta[] = array(
                'id' => 'first-section',
                'title' => 'Member Data',
                'object_types' => array('dausfmembers'),
                'fields' => array(
                    array(
                     'name' => 'Gender',
                     'type' => 'radio',
                     'id' => $prefix.'gender',
                     'options' => array(
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ),
                     'attributes' => array(
                     'required'    => 'required',
                    )
                ),  
                    array(
                     'name' => 'Gender',
                     'type' => 'radio',
                     'id' => $prefix.'mstatus',
                     'options' => array(
                        'Married' => 'Married',
                        'Single' => 'Single',
                     ),
                     'attributes' => array(
                     'required'    => 'required',
                    )
                ), 
                    array(
                     'name' => 'Husband Name',
                     'type' => 'text',
                     'id' => $prefix.'hname',
                     'required' => true,
                    ),
                     'attributes' => array(
                     'required' => true, // Will be required only if visible.
                     'data-conditional-id' => $prefix . 'gender',
                     'data-conditional-value' => 'Female',
                ),
                     'attributes' => array(
                     'required' => true, // Will be required only if visible.
                     'data-conditional-id' => $prefix . 'mstatus',
                     'data-conditional-value' => 'Married',
                ),

            ) );*/
                
	}
}

function month_dates_array()
{
	$dates=array();
	for($i=1;$i<=31;$i++)
	{
		$dates[$i]=$i;
	}
	return $dates;
}

?>