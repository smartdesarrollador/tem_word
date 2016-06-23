<?php
/**
 * Get the google fonts from the API or in the cache
 *
 * @param  integer $amount
 *
 * @return String
 */
if ( ! function_exists( 'generate_get_fonts' ) ) :
add_action( 'admin_init','generate_get_fonts' );
function generate_get_fonts( $amount = 1000 )
{
	if ( get_transient('generate_get_fonts') )
		return;
	$selectDirectory = '';

    $fontFileURI = get_template_directory_uri() . '/inc/addons/typography/google-web-fonts.txt';
    $fontFileDIR = get_template_directory() . '/inc/addons/typography/google-web-fonts.txt';

    if(file_exists($fontFileDIR))
    {
		$request = wp_remote_get( $fontFileURI );
        $response = wp_remote_retrieve_body( $request );
		$content = json_decode($response);
    }

	set_transient('generate_get_fonts', $content->items, WEEK_IN_SECONDS);

}
endif;

if ( ! function_exists( 'generate_font_list' ) ) :
add_action( 'admin_init','generate_font_list' );
function generate_font_list()
{
	if ( get_transient('generate_font_list') )
		return;
		
	$fonts = ( get_transient('generate_get_fonts') ? get_transient('generate_get_fonts') : '' );
	
	$font = array();
	foreach ( $fonts as $k => $fam ) {
		$var = join(',', $fam->variants);
		$font[] = $fam->family . ':' . $var;
	}

	set_transient('generate_font_list', $font, WEEK_IN_SECONDS);

}
endif;