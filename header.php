<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" data-responsive-toggle="site-navigation" data-hide-for="none">
			<div class="title-bar-left">
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 416.87 173.49"><defs><style>.cls-1{fill:#f26739;}.cls-2{fill:url(#New_Gradient_Swatch_4);}.cls-3{fill:url(#New_Gradient_Swatch_4-2);}.cls-4{fill:url(#New_Gradient_Swatch_4-3);}.cls-5{fill:url(#New_Gradient_Swatch_4-4);}.cls-6{fill:url(#New_Gradient_Swatch_4-5);}.cls-7{fill:url(#New_Gradient_Swatch_4-6);}</style><linearGradient id="New_Gradient_Swatch_4" x1="52.79" y1="75.68" x2="381.63" y2="75.68" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f15a29"/><stop offset="0.54" stop-color="#f7941d"/><stop offset="1" stop-color="#f16028"/></linearGradient><linearGradient id="New_Gradient_Swatch_4-2" x1="52.79" y1="76.11" x2="381.63" y2="76.11" xlink:href="#New_Gradient_Swatch_4"/><linearGradient id="New_Gradient_Swatch_4-3" x1="52.79" y1="91.7" x2="381.63" y2="91.7" xlink:href="#New_Gradient_Swatch_4"/><linearGradient id="New_Gradient_Swatch_4-4" x1="52.79" y1="75.82" x2="381.63" y2="75.82" xlink:href="#New_Gradient_Swatch_4"/><linearGradient id="New_Gradient_Swatch_4-5" x1="52.79" y1="95.87" x2="381.63" y2="95.87" xlink:href="#New_Gradient_Swatch_4"/><linearGradient id="New_Gradient_Swatch_4-6" x1="52.79" y1="117.88" x2="381.63" y2="117.88" xlink:href="#New_Gradient_Swatch_4"/></defs><title>fisheye-colorUntitled-2</title><path class="cls-1" d="M94.37,172.15a2.38,2.38,0,0,0,2.13,1.2,2.33,2.33,0,0,0,2.08-1,9.29,9.29,0,0,0,.93-4l2.76.35c-.24,2.69-.84,4.56-1.8,5.63a5.88,5.88,0,0,1-8.39-.33q-1.58-1.94-1.58-7.11V156.14q0-5.17,1.58-7.11a5.2,5.2,0,0,1,4.25-1.94,5.51,5.51,0,0,1,4.06,1.39q1.41,1.38,1.72,4.93l-2.88.71a8,8,0,0,0-.89-3.49,2.16,2.16,0,0,0-1.93-1,2.28,2.28,0,0,0-2,1.24,9.64,9.64,0,0,0-.75,4.56v12.25A9.13,9.13,0,0,0,94.37,172.15Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M121.58,155.94v11.13q0,5-1.6,6.94a6.45,6.45,0,0,1-9.16,0q-1.6-1.92-1.6-6.94V155.94q0-5,1.6-6.93a6.42,6.42,0,0,1,9.16,0Q121.59,150.93,121.58,155.94Zm-3.12,11.73V155.35q0-5.68-3-5.69a2.59,2.59,0,0,0-2.27,1.22,8.72,8.72,0,0,0-.81,4.47v12.32a8.68,8.68,0,0,0,.81,4.46,2.56,2.56,0,0,0,2.27,1.22Q118.47,173.35,118.46,167.67Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M133,175.33H130V147.69h3.28l6.44,20.21V147.69h3.08v27.64h-3.28L133,155.15Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M160.16,169.13a5.85,5.85,0,0,0-2.13-4.86l-3.16-2.33a8.55,8.55,0,0,1-3.55-7.46q0-4.11,1.56-5.75a5.61,5.61,0,0,1,4.26-1.64,5.67,5.67,0,0,1,4.21,1.52c1,1,1.6,2.85,1.81,5.51l-3,.67q-.15-5.06-2.94-5c-1.86,0-2.78,1.43-2.78,4.3a9.4,9.4,0,0,0,.41,3.08,4.86,4.86,0,0,0,1.6,2.14l3.12,2.33a11.51,11.51,0,0,1,1.78,1.5,7.31,7.31,0,0,1,1.28,2.27,10,10,0,0,1,.61,3.69c0,2.53-.54,4.3-1.64,5.33a6.2,6.2,0,0,1-4.44,1.54,5.49,5.49,0,0,1-4.38-1.82c-1.06-1.21-1.7-3.37-1.94-6.47l3-.52a11.45,11.45,0,0,0,1,4.78,2.5,2.5,0,0,0,2.27,1.42Q160.16,173.31,160.16,169.13Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M180.18,147.69h3.12v19.38q0,5-1.6,6.94a6.3,6.3,0,0,1-9,0q-1.6-1.92-1.6-6.94V147.69h3.12v20a8.84,8.84,0,0,0,.79,4.44,2.47,2.47,0,0,0,2.19,1.24,2.5,2.5,0,0,0,2.21-1.24,8.69,8.69,0,0,0,.81-4.44Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M192,175.33V147.69h3.16V172.8h6.12v2.53Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M204.59,150.21v-2.52h10.78v2.52h-3.83v25.12h-3.12V150.21Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M222.32,175.33V147.69h3.16v27.64Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M237.48,175.33H234.4V147.69h3.28l6.44,20.21V147.69h3.08v27.64h-3.28l-6.44-20.18Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M261.33,163.2v-2.52h6.2v14.61H265.6l-.56-2.57a4.3,4.3,0,0,1-4.26,3.2,4.46,4.46,0,0,1-3.85-1.91q-1.37-1.92-1.36-6.94V156.14c0-3.45.52-5.82,1.58-7.11a5.2,5.2,0,0,1,4.24-1.94,5.52,5.52,0,0,1,4.07,1.39c.93.92,1.51,2.56,1.72,4.93l-2.89.71a8,8,0,0,0-.88-3.49,2.18,2.18,0,0,0-1.94-1,2.28,2.28,0,0,0-2,1.24,9.64,9.64,0,0,0-.75,4.56v12.21a9.45,9.45,0,0,0,.73,4.46,2.29,2.29,0,0,0,2.07,1.22c2,0,3-1.77,3.08-5.33V163.2Z" transform="translate(-1.54 -2.43)"/><path class="cls-2" d="M47.27,75.68a110.86,110.86,0,0,1,9.24-14.46A159,159,0,0,1,67.24,48.37a140.41,140.41,0,0,1,11.5-11.08c4-3.39,8.43-7.61,12.29-10.15,3-1.78,6.1-1.31,10,0s6.12,5.36,6.12,5.36A179.34,179.34,0,0,0,91.65,48.58a121.78,121.78,0,0,0-14.74,21.6c.75,0,1.43,0,2-.07S80.2,70,80.86,70Q88.2,70,92.5,71.8A16,16,0,0,1,99,76.25a10.55,10.55,0,0,1,2.47,5.85A17,17,0,0,1,101,88,12.47,12.47,0,0,1,99,92.41c-.89,1.18-1.71,1.76-2.47,1.76a13,13,0,0,0-2.32-2.54,15.44,15.44,0,0,0-4-2.33,27.86,27.86,0,0,0-6.07-1.69A51,51,0,0,0,75.49,87q-6.76,0-13.19.36t-12.64.91c2.54.19,5.56.5,9,.92a38,38,0,0,1,9.74,2.47,65.3,65.3,0,0,0-1.7,8.68,72.33,72.33,0,0,0-.56,9q0,8.34,2.47,13.41a25.63,25.63,0,0,0,5.57,7.91,20.26,20.26,0,0,0,8,4.79,17.91,17.91,0,0,1-4.09,6.78,23.48,23.48,0,0,1-6.71,4.66q-4.31,2.12-11.22,2.11a22.48,22.48,0,0,1-19.62-9.8,28.53,28.53,0,0,1-4.23-9.46,41.33,41.33,0,0,1-1.27-9.95,67.64,67.64,0,0,1,.49-8.26q.5-4,1.34-8.11S42.72,83.51,47.27,75.68ZM4.64,70.46c-.47,0-1.11-.4-1.91-1.2a5.15,5.15,0,0,1-1.19-3.74A32.84,32.84,0,0,1,4.36,53.17a49,49,0,0,1,9.1-13.83A86.39,86.39,0,0,1,29.62,25.72a114.18,114.18,0,0,1,24-11.86A180.47,180.47,0,0,1,86.29,5.53a258.19,258.19,0,0,1,42.27-3.1,238.3,238.3,0,0,1,32.4,2A58.47,58.47,0,0,1,189.2,16.5,30.81,30.81,0,0,1,196,24.05q2.11,3.6,2.12,5.86c0,1.69-.66,2.54-2,2.54-.28,0-22.09-6.88-39.8-8.15-.9-2.79-2.26-8.71-12.58-8.71S130.38,22,129.09,23.75a165.59,165.59,0,0,0-28.19,2.18,213.08,213.08,0,0,0-27.73,5.72,152.59,152.59,0,0,0-22.31,8,174.68,174.68,0,0,0-17.36,9.1,129.29,129.29,0,0,0-12.91,8.83Q15.22,61.85,11.7,65" transform="translate(-1.54 -2.43)"/><path class="cls-3" d="M140.42,84.86a4.9,4.9,0,0,1,2.12-2.33,2.22,2.22,0,0,1,2-.07,2,2,0,0,1,1.06,1.62,5.27,5.27,0,0,1-.49,2.89q-1.7,3.68-3.67,8.47t-4.31,9.88q-2.32,5.09-5,10A57.94,57.94,0,0,1,126.3,124a29.82,29.82,0,0,1-6.63,6.14,13.5,13.5,0,0,1-7.62,2.33,8.65,8.65,0,0,1-6.07-2.19,15.73,15.73,0,0,1-3.81-5.36,25.07,25.07,0,0,1-1.91-6.63,45.41,45.41,0,0,1-.49-6.14,38.6,38.6,0,0,1,1.41-9.53,104.88,104.88,0,0,1,3.6-11.15q2.19-5.72,4.94-11.22a107.55,107.55,0,0,1,5.51-9.81,50.91,50.91,0,0,1,5.15-6.92c1.6-1.74,2.91-2.61,4-2.61,2.44,0,3.67,1.27,3.67,3.81a10.57,10.57,0,0,1-.78,2.83q-.78,2.11-1.9,5.22c-.76,2.07-1.55,4.35-2.4,6.84s-1.65,5-2.4,7.56-1.39,5-1.91,7.4a30.18,30.18,0,0,0-.77,6.29c0,2.73.51,4.51,1.55,5.36a5.39,5.39,0,0,0,3.53,1.27q4.1,0,7.83-5.86T140.42,84.86ZM129,54.37c-1.23,0-2-.85-2.4-2.54a19.87,19.87,0,0,1-.14-6.42,45.59,45.59,0,0,1,1.76-8.33,46.26,46.26,0,0,1,3.39-8.33,25.12,25.12,0,0,1,4.66-6.42,7.91,7.91,0,0,1,5.57-2.54q6.07,0,8,2.54a7.76,7.76,0,0,1,1.13,6.42,24.32,24.32,0,0,1-3.68,8.33,68.52,68.52,0,0,1-6.35,8.33,49.66,49.66,0,0,1-6.77,6.42Q130.83,54.37,129,54.37Z" transform="translate(-1.54 -2.43)"/><path class="cls-4" d="M175.56,56.77A13.84,13.84,0,0,1,174,63a31.53,31.53,0,0,1-3.67,5.72,41.86,41.86,0,0,1-4.45,4.72c-1.55,1.42-2.8,2.54-3.74,3.39a7.2,7.2,0,0,1-.21-2.26c.05-.75.07-1.45.07-2.11a14.65,14.65,0,0,1,.14-2,13.22,13.22,0,0,0-1.05,2.89c-.24,1-.45,2-.64,2.9a17.84,17.84,0,0,0-.28,3.24,21.88,21.88,0,0,0,.84,5.86q.85,3,1.77,6.49t1.76,7.41a40.81,40.81,0,0,1,.85,8.61,22.65,22.65,0,0,1-2.19,10,25.58,25.58,0,0,1-5.82,7.84,25.25,25.25,0,0,1-8.47,5.08,29.22,29.22,0,0,1-10.06,1.76q-6.77,0-10.79-2.47a14.57,14.57,0,0,1-5.79-6.21,17.92,17.92,0,0,1-1.69-8,25.14,25.14,0,0,1,1.41-8,18.08,18.08,0,0,1,3.6-6.21,6.52,6.52,0,0,1,4.8-2.47c.47,0,.63.45.49,1.34a9.52,9.52,0,0,0,.07,3,5.24,5.24,0,0,0,1.76,3c1,.9,2.9,1.34,5.72,1.34A10,10,0,0,0,143,107a7.6,7.6,0,0,0,2.82-2.47,8.86,8.86,0,0,0,1.41-3.53,22.83,22.83,0,0,0,.36-4.1A43.15,43.15,0,0,0,145.5,85.7L144.93,87a3.37,3.37,0,0,1-1.9,1.7,2.22,2.22,0,0,1-1.84-.21A2.89,2.89,0,0,1,140.06,87a2.38,2.38,0,0,1,.36-2.11c.47-.76,1.06-1.74,1.76-3s1.39-2.47,2-3.74,1.24-2.4,1.76-3.39a18.68,18.68,0,0,0,.92-1.9,53.1,53.1,0,0,1,2-5.79A34.76,34.76,0,0,1,153,59.8a26.37,26.37,0,0,1,6.44-6.28,16,16,0,0,1,9.36-2.68q3.81,0,5.29,1.91A6.43,6.43,0,0,1,175.56,56.77Z" transform="translate(-1.54 -2.43)"/><path class="cls-5" d="M247.69,84.86a5.07,5.07,0,0,1,2-2.33,2,2,0,0,1,3,1.55,5.29,5.29,0,0,1-.5,2.89q-1.69,3.68-4.09,8.47t-5.36,9.88q-3,5.09-6.36,9.88a68.79,68.79,0,0,1-7.12,8.61,37.64,37.64,0,0,1-7.7,6.14,15.67,15.67,0,0,1-8,2.33,10.65,10.65,0,0,1-6.21-1.76,13.89,13.89,0,0,1-4.09-4.38,19.42,19.42,0,0,1-2.26-5.71,25.68,25.68,0,0,1-.71-5.79,33.1,33.1,0,0,1,1.27-8.54q1.28-4.72,3.11-9.6t3.88-9.38c1.36-3,2.56-5.72,3.6-8.12a59.46,59.46,0,0,0,2.19-5.72c.42-1.41.3-2.11-.36-2.11-1.32,0-3.06.91-5.22,2.75a48.91,48.91,0,0,0-6.56,6.91,85.36,85.36,0,0,0-6.28,9,38.78,38.78,0,0,0-4.24,9.24c-1,4-1.83,7.6-2.4,10.94a54.14,54.14,0,0,0-.84,8.82,16.65,16.65,0,0,0,.49,4.52,9,9,0,0,0,1.2,2.68c.56,1,.47,1.84-.28,2.4a14.39,14.39,0,0,1-3,1.62,12.8,12.8,0,0,1-9.67-.35,12.47,12.47,0,0,1-4.37-3.39,17.11,17.11,0,0,1-3-5.64,25.12,25.12,0,0,1-1.12-7.91,56,56,0,0,1,3-16.16,186.94,186.94,0,0,1,7.55-19.9q4.59-10.38,10.09-20.61t10.59-18.42a145.84,145.84,0,0,1,9.1-13.26q4-5.09,5.58-5.08,3.81,0,3.81,3.81a32.11,32.11,0,0,1-1.7,4.94l-4.37,11.22q-2.69,6.84-6,15.52t-6.42,17.86c.84-.85,2.19-2,4-3.53a71.61,71.61,0,0,1,6.21-4.52,43.3,43.3,0,0,1,7.48-3.88,21.58,21.58,0,0,1,8.12-1.62,10.22,10.22,0,0,1,6.7,2.54,8.25,8.25,0,0,1,3,6.63,17.26,17.26,0,0,1-1.49,5.86c-1,2.49-2.16,5.18-3.52,8S227.67,88,226.3,91s-2.47,5.64-3.31,8a15.59,15.59,0,0,0-1.13,5.93,2.24,2.24,0,0,0,2.54,2.33,10.67,10.67,0,0,0,4.87-1.48,30.59,30.59,0,0,0,5.85-4.31,53.5,53.5,0,0,0,6.36-7.06A77.88,77.88,0,0,0,247.69,84.86Z" transform="translate(-1.54 -2.43)"/><path class="cls-6" d="M302.3,84.86a5,5,0,0,1,2.12-2.33,2.09,2.09,0,0,1,1.91-.07,2.34,2.34,0,0,1,1.06,1.62A4.84,4.84,0,0,1,307,87q-1.69,3.68-3.88,8.47t-4.94,9.88a82.85,82.85,0,0,1-6.35,10A49.26,49.26,0,0,1,283.6,124a39.06,39.06,0,0,1-10.3,6.14,33.43,33.43,0,0,1-12.77,2.33,19.08,19.08,0,0,1-8-1.69,21.21,21.21,0,0,1-11-11.43,22.14,22.14,0,0,1-1.62-8.47,46.52,46.52,0,0,1,3.67-17.43,68.28,68.28,0,0,1,9.6-16.66,57.52,57.52,0,0,1,13.34-12.49,26.67,26.67,0,0,1,14.89-4.94,11.19,11.19,0,0,1,5.78,1.27,9.33,9.33,0,0,1,3.18,3,8.52,8.52,0,0,1,1.27,3.53,27.36,27.36,0,0,1,.21,3,27.14,27.14,0,0,1-2,9.45,45.26,45.26,0,0,1-5.16,9.81A35.65,35.65,0,0,1,277.68,97a12.47,12.47,0,0,1-7.84,3.11,11.23,11.23,0,0,1-4.51-.85,14.56,14.56,0,0,1-3.53-2.11,16.25,16.25,0,0,0-.21,1.69c0,.56-.08,1.08-.08,1.55A8.49,8.49,0,0,0,265.4,108q3.87,2.55,9.88,1.27t13.19-7Q295.67,96.43,302.3,84.86ZM281.13,70a5.32,5.32,0,0,0-2.61,1.34,29.37,29.37,0,0,0-3.88,3.67q-2.11,2.33-4.37,5.29a54.16,54.16,0,0,0-4.1,6.21,8.94,8.94,0,0,0,1,.21,5.75,5.75,0,0,0,1,.07,8.87,8.87,0,0,0,5.78-2.61,31.4,31.4,0,0,0,5.16-5.79,21.29,21.29,0,0,0,3-5.78C282.57,70.91,282.26,70,281.13,70Z" transform="translate(-1.54 -2.43)"/><path class="cls-7" d="M350.15,60.86q3.53,0,3.53,3.81a67.61,67.61,0,0,1-1.2,10.87q-1.2,6.92-3.39,15.39t-5.29,18q-3.1,9.52-6.91,18.84t-8.26,17.86a109.18,109.18,0,0,1-9.32,15A50.22,50.22,0,0,1,309.22,171a17.62,17.62,0,0,1-10.58,3.89q-8.76,0-13.34-3.74a19.6,19.6,0,0,1-6.35-8.82,27.28,27.28,0,0,1-1.56-10.17,33.89,33.89,0,0,1,1.06-7.9,4.54,4.54,0,0,1,2-2.68c.94-.57,1.79-.29,2.54.84.37.57.89,1.27,1.55,2.12A13.46,13.46,0,0,0,287,147a16.13,16.13,0,0,0,3.46,2,11.27,11.27,0,0,0,4.51.85,12.52,12.52,0,0,0,6.29-1.83,29.76,29.76,0,0,0,6.21-4.94,60.29,60.29,0,0,0,5.85-7.06q2.82-3.94,5.37-8a220,220,0,0,0,11.29-22,94.7,94.7,0,0,1-8.75,12.7q-2,2.4-4.24,4.66a50.64,50.64,0,0,1-4.59,4.09,21.29,21.29,0,0,1-4.79,2.89,12.24,12.24,0,0,1-4.87,1.06,10.37,10.37,0,0,1-3.6-.7,9.82,9.82,0,0,1-3.53-2.33A11.74,11.74,0,0,1,293,124a19.72,19.72,0,0,1-1-6.77,44.37,44.37,0,0,1,1.77-11.86,88.45,88.45,0,0,1,4.58-12.63,121,121,0,0,1,6.21-12,115.65,115.65,0,0,1,6.71-10.16,52.49,52.49,0,0,1,6.14-7.06c1.88-1.74,3.33-2.61,4.37-2.61,1.88,0,2.83,1.13,2.83,3.39a14.7,14.7,0,0,1-1.7,5q-1.7,3.6-3.67,8.33t-3.67,9.81a30,30,0,0,0-1.69,9.45,8.56,8.56,0,0,0,.85,4,3,3,0,0,0,3,1.62,10.35,10.35,0,0,0,7.06-3.11,43.18,43.18,0,0,0,6.49-7.69,101.52,101.52,0,0,0,5.93-10q2.82-5.43,5.22-10T346.76,64Q348.74,60.86,350.15,60.86Z" transform="translate(-1.54 -2.43)"/><path class="cls-6" d="M413.24,84.86a4.9,4.9,0,0,1,2.12-2.33,2.07,2.07,0,0,1,1.9-.07,2.31,2.31,0,0,1,1.06,1.62A4.75,4.75,0,0,1,417.9,87q-1.69,3.68-3.88,8.47t-4.94,9.88a84.11,84.11,0,0,1-6.35,10,49.26,49.26,0,0,1-8.19,8.68,39.06,39.06,0,0,1-10.3,6.14,33.44,33.44,0,0,1-12.78,2.33,19.07,19.07,0,0,1-8-1.69,21.21,21.21,0,0,1-11-11.43,22.14,22.14,0,0,1-1.62-8.47,46.7,46.7,0,0,1,3.66-17.43,68.28,68.28,0,0,1,9.6-16.66,57.52,57.52,0,0,1,13.34-12.49,26.67,26.67,0,0,1,14.89-4.94,11.2,11.2,0,0,1,5.79,1.27,9.2,9.2,0,0,1,3.17,3,8.38,8.38,0,0,1,1.27,3.53,25.38,25.38,0,0,1,.22,3,27,27,0,0,1-2,9.45,45.23,45.23,0,0,1-5.15,9.81A35.69,35.69,0,0,1,388.61,97a12.46,12.46,0,0,1-7.83,3.11,11.28,11.28,0,0,1-4.52-.85,14.75,14.75,0,0,1-3.53-2.11c-.09.56-.16,1.13-.21,1.69s-.07,1.08-.07,1.55a8.49,8.49,0,0,0,3.88,7.62q3.89,2.55,9.88,1.27t13.2-7Q406.61,96.43,413.24,84.86ZM392.07,70a5.24,5.24,0,0,0-2.61,1.34,28.76,28.76,0,0,0-3.88,3.67c-1.41,1.55-2.88,3.31-4.38,5.29a55.44,55.44,0,0,0-4.09,6.21,8.08,8.08,0,0,0,1,.21,5.7,5.7,0,0,0,1,.07,8.9,8.9,0,0,0,5.79-2.61A31.34,31.34,0,0,0,390,78.43a21.07,21.07,0,0,0,3-5.78C393.5,70.91,393.2,70,392.07,70Z" transform="translate(-1.54 -2.43)"/><path class="cls-1" d="M140.42,84.86a4.9,4.9,0,0,1,2.12-2.33,2.22,2.22,0,0,1,2-.07,2,2,0,0,1,1.06,1.62,5.27,5.27,0,0,1-.49,2.89q-1.7,3.68-3.67,8.47t-4.31,9.88q-2.32,5.09-5,10A57.94,57.94,0,0,1,126.3,124a29.82,29.82,0,0,1-6.63,6.14,13.5,13.5,0,0,1-7.62,2.33,8.65,8.65,0,0,1-6.07-2.19,15.73,15.73,0,0,1-3.81-5.36,25.07,25.07,0,0,1-1.91-6.63,45.41,45.41,0,0,1-.49-6.14,38.6,38.6,0,0,1,1.41-9.53,104.88,104.88,0,0,1,3.6-11.15q2.19-5.72,4.94-11.22a107.55,107.55,0,0,1,5.51-9.81,50.91,50.91,0,0,1,5.15-6.92c1.6-1.74,2.91-2.61,4-2.61,2.44,0,3.67,1.27,3.67,3.81a10.57,10.57,0,0,1-.78,2.83q-.78,2.11-1.9,5.22c-.76,2.07-1.55,4.35-2.4,6.84s-1.65,5-2.4,7.56-1.39,5-1.91,7.4a30.18,30.18,0,0,0-.77,6.29c0,2.73.51,4.51,1.55,5.36a5.39,5.39,0,0,0,3.53,1.27q4.1,0,7.83-5.86T140.42,84.86ZM129,54.37c-1.23,0-2-.85-2.4-2.54a19.87,19.87,0,0,1-.14-6.42,45.59,45.59,0,0,1,1.76-8.33,46.26,46.26,0,0,1,3.39-8.33,25.12,25.12,0,0,1,4.66-6.42,7.91,7.91,0,0,1,5.57-2.54q6.07,0,8,2.54a7.76,7.76,0,0,1,1.13,6.42,24.32,24.32,0,0,1-3.68,8.33,68.52,68.52,0,0,1-6.35,8.33,49.66,49.66,0,0,1-6.77,6.42Q130.83,54.37,129,54.37Z" transform="translate(-1.54 -2.43)"/></svg></a>
				</span>
			</div>
			<div class="title-bar-right">
				<button class="menu-icon" type="button" data-toggle="site-navigation"></button>
			</div>
		</div>

		<nav class="site-navigation top-bar" id="site-navigation" role="navigation">
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		
	</header>

	<div class="container">
