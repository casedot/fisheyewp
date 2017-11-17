<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="splash" role="main">
	<div class="splash-content">  
		<div class="splash-logo">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 675.35 806.86" style="enable-background:new 0 0 675.35 806.86;" xml:space="preserve"><style type="text/css">
		.st0{fill:#FFFFFF;}
	</style><g><path class="st0" d="M85.42,632.1c4.18-7.78,8.89-15.16,14.15-22.15c5.26-6.99,10.73-13.54,16.42-19.67
			c5.69-6.12,11.56-11.78,17.61-16.96c6.05-5.19,12.91-11.65,18.81-15.54c4.52-2.74,9.34-2.01,15.25-0.02
			c5.91,1.99,9.38,8.21,9.38,8.21c-7.35,6.63-15.24,14.84-23.67,24.64c-8.43,9.8-15.96,20.82-22.58,33.07c1.15,0,2.2-0.04,3.13-0.11
			c0.93-0.07,1.91-0.11,2.92-0.11c7.49,0,13.43,0.9,17.83,2.7c4.39,1.8,7.71,4.07,9.94,6.81c2.23,2.74,3.49,5.73,3.78,8.97
			c0.29,3.24,0.07,6.23-0.65,8.97c-0.72,2.74-1.77,5.01-3.13,6.81c-1.37,1.8-2.63,2.7-3.78,2.7c-0.86-1.3-2.05-2.59-3.57-3.89
			c-1.51-1.3-3.53-2.49-6.05-3.57c-2.52-1.08-5.62-1.95-9.29-2.59c-3.67-0.65-8.1-0.97-13.29-0.97c-6.92,0-13.65,0.18-20.21,0.54
			c-6.56,0.36-13,0.83-19.34,1.41c3.89,0.29,8.5,0.76,13.83,1.4c5.33,0.65,10.3,1.91,14.91,3.78c-1.15,4.32-2.02,8.75-2.59,13.29
			c-0.58,4.54-0.86,9.12-0.86,13.72c0,8.5,1.26,15.34,3.78,20.53c2.52,5.19,5.36,9.22,8.53,12.1c3.6,3.46,7.71,5.91,12.32,7.34
			c-1.3,3.89-3.39,7.35-6.27,10.37c-2.45,2.6-5.87,4.97-10.26,7.14c-4.4,2.16-10.12,3.24-17.18,3.24c-7.21,0-13.26-1.4-18.15-4.21
			c-4.9-2.81-8.86-6.41-11.89-10.8c-3.03-4.39-5.19-9.22-6.48-14.48c-1.3-5.26-1.94-10.34-1.94-15.23c0-4.32,0.25-8.54,0.76-12.64
			c0.5-4.11,1.19-8.25,2.05-12.43C69.64,674.46,78.46,644.08,85.42,632.1z M20.15,624.1c-0.72,0-1.69-0.61-2.92-1.84
			c-1.22-1.22-1.84-3.13-1.84-5.73c0-5.62,1.44-11.92,4.32-18.91c2.88-6.99,7.53-14.05,13.94-21.18
			c6.41-7.13,14.66-14.08,24.75-20.85c10.08-6.77,22.33-12.82,36.74-18.15c14.41-5.33,31.08-9.58,50.03-12.75
			c18.94-3.17,40.52-4.75,64.73-4.75c18.58,0,35.12,1.01,49.6,3.02c22.36,3.02,38.49,14.48,43.25,18.52
			c4.75,4.04,8.21,7.89,10.37,11.56c2.16,3.68,3.24,6.67,3.24,8.97c0,2.59-1.01,3.89-3.03,3.89c-0.43,0-33.82-10.53-60.93-12.48
			c-1.39-4.27-3.47-13.32-19.27-13.32s-20.45,9.86-22.43,12.48c-18.59,0-27.6,1.11-43.16,3.34c-15.56,2.24-29.72,5.15-42.47,8.75
			c-12.75,3.6-24.13,7.71-34.15,12.32c-10.01,4.61-18.88,9.26-26.58,13.94c-7.71,4.68-14.3,9.19-19.77,13.51
			c-5.47,4.32-10.01,8.07-13.62,11.24"/><path class="st0" d="M228.05,646.15c1.01-1.87,2.09-3.06,3.24-3.57c1.15-0.5,2.16-0.54,3.02-0.11c0.86,0.43,1.41,1.26,1.62,2.48
			c0.22,1.23-0.04,2.7-0.76,4.43c-1.73,3.75-3.6,8.07-5.62,12.97c-2.02,4.9-4.21,9.94-6.59,15.13c-2.38,5.19-4.94,10.27-7.67,15.24
			c-2.74,4.97-5.69,9.4-8.86,13.29c-3.17,3.89-6.56,7.02-10.16,9.4c-3.6,2.38-7.49,3.57-11.67,3.57c-3.75,0-6.85-1.12-9.29-3.35
			s-4.39-4.97-5.83-8.21c-1.44-3.24-2.41-6.63-2.92-10.16c-0.5-3.53-0.76-6.66-0.76-9.4c0-4.18,0.72-9.04,2.16-14.59
			c1.44-5.55,3.28-11.24,5.51-17.07c2.23-5.83,4.76-11.56,7.56-17.18c2.81-5.62,5.62-10.62,8.43-15.02
			c2.81-4.39,5.44-7.92,7.89-10.59c2.45-2.66,4.46-4,6.05-4c3.74,0,5.62,1.95,5.62,5.84c0,0.72-0.4,2.16-1.19,4.32
			c-0.79,2.16-1.77,4.83-2.92,8c-1.15,3.17-2.38,6.67-3.67,10.48c-1.3,3.82-2.52,7.67-3.67,11.56c-1.15,3.89-2.13,7.67-2.92,11.35
			c-0.79,3.67-1.19,6.88-1.19,9.62c0,4.18,0.79,6.92,2.38,8.21c1.58,1.3,3.38,1.94,5.4,1.94c4.18,0,8.18-2.99,11.99-8.97
			C217.07,665.78,222,657.24,228.05,646.15z M210.55,599.47c-1.87,0-3.1-1.3-3.67-3.89c-0.58-2.59-0.65-5.87-0.22-9.83
			c0.43-3.96,1.33-8.21,2.7-12.75c1.37-4.54,3.09-8.79,5.19-12.75c2.09-3.96,4.46-7.24,7.13-9.83c2.66-2.59,5.51-3.89,8.54-3.89
			c6.19,0,10.27,1.3,12.21,3.89c1.94,2.59,2.52,5.87,1.73,9.83c-0.79,3.97-2.67,8.21-5.62,12.75c-2.95,4.54-6.2,8.79-9.72,12.75
			c-3.53,3.96-6.99,7.24-10.37,9.83C215.05,598.17,212.42,599.47,210.55,599.47z"/><path class="st0" d="M281.86,603.14c0,3.17-0.79,6.34-2.38,9.51c-1.59,3.17-3.46,6.09-5.62,8.75c-2.16,2.67-4.43,5.08-6.81,7.24
			c-2.38,2.16-4.29,3.89-5.73,5.19c-0.29-1.15-0.4-2.3-0.32-3.46c0.07-1.15,0.11-2.23,0.11-3.24c0-1.01,0.07-2.02,0.22-3.03
			c-0.72,1.44-1.26,2.92-1.62,4.43c-0.36,1.51-0.69,2.99-0.97,4.43c-0.29,1.59-0.43,3.24-0.43,4.97c0,2.88,0.43,5.87,1.3,8.97
			c0.86,3.1,1.76,6.41,2.7,9.94c0.93,3.53,1.84,7.31,2.7,11.35c0.86,4.04,1.3,8.43,1.3,13.18c0,5.62-1.12,10.73-3.35,15.34
			c-2.23,4.61-5.21,8.61-8.91,11.99c-3.71,3.39-8.03,5.98-12.97,7.78c-4.94,1.8-10.07,2.7-15.4,2.7c-6.92,0-12.43-1.26-16.53-3.78
			c-4.11-2.52-7.06-5.69-8.86-9.51c-1.8-3.82-2.66-7.92-2.59-12.32c0.07-4.39,0.79-8.5,2.16-12.32c1.37-3.81,3.21-6.99,5.51-9.51
			c2.31-2.52,4.75-3.78,7.35-3.78c0.72,0,0.97,0.69,0.76,2.05c-0.22,1.37-0.18,2.92,0.11,4.65c0.29,1.73,1.19,3.28,2.7,4.65
			c1.51,1.37,4.43,2.05,8.75,2.05c2.88,0,5.22-0.47,7.02-1.41c1.8-0.93,3.24-2.2,4.32-3.78c1.08-1.58,1.8-3.39,2.16-5.4
			c0.36-2.01,0.54-4.1,0.54-6.27c-0.15-4.9-1.23-10.59-3.24-17.07l-0.86,1.95c-0.86,1.44-1.84,2.31-2.92,2.59
			c-1.08,0.29-2.02,0.18-2.81-0.33c-0.79-0.5-1.37-1.26-1.73-2.27c-0.36-1.01-0.18-2.09,0.54-3.24c0.72-1.15,1.62-2.66,2.7-4.54
			c1.08-1.87,2.12-3.78,3.13-5.73c1.01-1.94,1.91-3.67,2.7-5.19c0.79-1.51,1.26-2.49,1.4-2.92c0.57-2.16,1.61-5.11,3.11-8.86
			c1.5-3.74,3.56-7.45,6.2-11.13c2.64-3.67,5.92-6.88,9.86-9.62c3.94-2.73,8.72-4.1,14.34-4.1c3.89,0,6.59,0.97,8.11,2.92
			C281.11,598.92,281.86,600.98,281.86,603.14z"/><path class="st0" d="M392.3,646.15c1.01-1.87,2.05-3.06,3.13-3.57c1.08-0.5,2.05-0.54,2.92-0.11c0.86,0.43,1.4,1.26,1.62,2.48
			c0.22,1.23-0.04,2.7-0.76,4.43c-1.73,3.75-3.82,8.07-6.27,12.97c-2.45,4.9-5.19,9.94-8.21,15.13c-3.03,5.19-6.27,10.23-9.72,15.13
			c-3.46,4.9-7.1,9.29-10.91,13.18c-3.82,3.89-7.75,7.02-11.78,9.4c-4.03,2.38-8.14,3.57-12.32,3.57c-3.75,0-6.92-0.9-9.51-2.7
			c-2.59-1.8-4.68-4.03-6.27-6.7c-1.59-2.66-2.74-5.58-3.46-8.75c-0.72-3.17-1.08-6.12-1.08-8.86c0-3.89,0.65-8.25,1.94-13.08
			c1.3-4.82,2.88-9.72,4.75-14.7c1.87-4.97,3.85-9.76,5.94-14.37c2.09-4.61,3.92-8.75,5.51-12.43c1.58-3.67,2.7-6.59,3.35-8.75
			c0.65-2.16,0.46-3.24-0.54-3.24c-2.02,0-4.68,1.4-8,4.21c-3.32,2.81-6.67,6.34-10.05,10.59c-3.39,4.25-6.59,8.86-9.62,13.83
			c-3.03,4.97-5.19,9.69-6.48,14.15c-1.59,6.05-2.81,11.64-3.67,16.75c-0.86,5.12-1.3,9.62-1.3,13.51c0,2.88,0.25,5.19,0.76,6.92
			c0.5,1.73,1.11,3.1,1.84,4.11c0.86,1.59,0.72,2.81-0.43,3.67c-1.15,0.86-2.67,1.7-4.54,2.49c-1.87,0.79-4.25,1.19-7.13,1.19
			c-2.59,0-5.15-0.57-7.67-1.73c-2.52-1.15-4.76-2.88-6.7-5.19c-1.94-2.3-3.49-5.19-4.65-8.64c-1.15-3.46-1.73-7.49-1.73-12.1
			c0-6.77,1.51-15.02,4.54-24.74c3.03-9.73,6.88-19.88,11.56-30.47c4.68-10.59,9.83-21.1,15.45-31.55
			c5.62-10.44,11.02-19.85,16.21-28.2c5.19-8.35,9.83-15.13,13.94-20.31s6.95-7.78,8.54-7.78c3.89,0,5.84,1.94,5.84,5.84
			c0,0.58-0.86,3.1-2.59,7.56c-1.73,4.47-3.97,10.2-6.7,17.18c-2.74,6.99-5.8,14.91-9.19,23.77c-3.39,8.86-6.66,17.97-9.83,27.34
			c1.3-1.3,3.35-3.09,6.16-5.4c2.81-2.3,5.98-4.61,9.51-6.92c3.53-2.3,7.35-4.28,11.45-5.94c4.11-1.65,8.25-2.49,12.43-2.49
			c3.74,0,7.16,1.3,10.27,3.89c3.09,2.59,4.65,5.98,4.65,10.16c0,2.16-0.76,5.15-2.27,8.97c-1.51,3.82-3.31,7.93-5.4,12.32
			c-2.09,4.4-4.18,8.86-6.27,13.4c-2.09,4.54-3.78,8.64-5.08,12.32c-1.3,3.67-1.87,6.7-1.73,9.08c0.14,2.38,1.44,3.57,3.89,3.57
			c2.16,0,4.65-0.76,7.46-2.27c2.81-1.51,5.8-3.71,8.97-6.59c3.17-2.88,6.41-6.48,9.73-10.8C386.1,656.52,389.27,651.62,392.3,646.15
			z"/><path class="st0" d="M475.93,646.15c1.01-1.87,2.09-3.06,3.24-3.57c1.15-0.5,2.12-0.54,2.92-0.11c0.79,0.43,1.33,1.26,1.62,2.48
			c0.29,1.23,0.07,2.7-0.65,4.43c-1.73,3.75-3.71,8.07-5.94,12.97c-2.24,4.9-4.76,9.94-7.57,15.13c-2.81,5.19-6.05,10.27-9.72,15.24
			c-3.67,4.97-7.85,9.4-12.53,13.29c-4.69,3.89-9.94,7.02-15.78,9.4c-5.83,2.38-12.36,3.57-19.56,3.57c-4.32,0-8.4-0.86-12.21-2.59
			c-3.82-1.73-7.17-4.07-10.05-7.02c-2.88-2.95-5.15-6.45-6.81-10.48c-1.65-4.03-2.49-8.35-2.49-12.97c0-8.5,1.87-17.4,5.62-26.69
			c3.75-9.29,8.64-17.79,14.7-25.5c6.05-7.71,12.86-14.08,20.42-19.13c7.56-5.04,15.16-7.56,22.8-7.56c3.74,0,6.7,0.65,8.86,1.94
			c2.16,1.3,3.78,2.81,4.86,4.54c1.08,1.73,1.73,3.53,1.94,5.4c0.22,1.87,0.32,3.39,0.32,4.54c0,4.32-1.01,9.15-3.02,14.48
			c-2.02,5.33-4.65,10.34-7.89,15.02c-3.24,4.68-6.85,8.61-10.81,11.78c-3.96,3.17-7.96,4.76-11.99,4.76c-2.59,0-4.9-0.43-6.92-1.3
			c-2.02-0.86-3.82-1.94-5.4-3.24c-0.15,0.86-0.25,1.73-0.32,2.59c-0.07,0.86-0.11,1.66-0.11,2.38c0,5.19,1.98,9.08,5.94,11.67
			c3.96,2.59,9,3.24,15.13,1.94c6.12-1.3,12.86-4.9,20.21-10.8C462.1,666.82,469.16,657.96,475.93,646.15z M443.51,623.46
			c-0.86,0-2.2,0.68-4,2.05c-1.8,1.37-3.78,3.24-5.94,5.62c-2.16,2.38-4.4,5.08-6.7,8.11c-2.31,3.02-4.4,6.2-6.27,9.51
			c0.57,0.15,1.08,0.25,1.51,0.32c0.43,0.07,0.94,0.11,1.51,0.11c2.88,0,5.84-1.33,8.86-4c3.03-2.67,5.65-5.62,7.89-8.86
			c2.23-3.24,3.74-6.19,4.54-8.86C445.71,624.79,445.24,623.46,443.51,623.46z"/><path class="st0" d="M549.19,609.41c3.6,0,5.4,1.95,5.4,5.84c0,4.04-0.61,9.58-1.83,16.64c-1.23,7.06-2.96,14.91-5.19,23.56
			c-2.23,8.64-4.94,17.83-8.1,27.55c-3.17,9.73-6.7,19.34-10.59,28.85c-3.89,9.51-8.11,18.62-12.64,27.34
			c-4.54,8.72-9.3,16.39-14.26,23.02c-4.97,6.63-10.13,11.92-15.45,15.88c-5.33,3.96-10.73,5.95-16.21,5.95
			c-8.93,0-15.74-1.91-20.42-5.73c-4.68-3.82-7.92-8.32-9.72-13.51c-1.8-5.19-2.59-10.37-2.38-15.56c0.22-5.18,0.76-9.22,1.62-12.1
			c0.58-1.87,1.59-3.25,3.02-4.11c1.44-0.86,2.74-0.43,3.89,1.3c0.58,0.87,1.37,1.94,2.38,3.24c1.01,1.29,2.27,2.52,3.78,3.67
			c1.51,1.15,3.28,2.16,5.29,3.02c2.02,0.87,4.32,1.3,6.91,1.3c3.17,0,6.38-0.94,9.62-2.82c3.24-1.87,6.41-4.39,9.51-7.56
			c3.1-3.18,6.08-6.77,8.97-10.81c2.88-4.03,5.62-8.14,8.21-12.32c5.91-9.94,11.67-21.18,17.29-33.71
			c-4.18,7.21-8.64,13.69-13.4,19.45c-2.02,2.45-4.18,4.83-6.48,7.13c-2.31,2.31-4.65,4.4-7.03,6.27c-2.38,1.87-4.83,3.35-7.35,4.43
			s-5.01,1.62-7.46,1.62c-1.73,0-3.56-0.36-5.51-1.08c-1.94-0.72-3.75-1.91-5.4-3.57c-1.66-1.66-2.99-3.85-4-6.59
			c-1.01-2.73-1.51-6.19-1.51-10.37c0-5.62,0.9-11.67,2.7-18.15c1.8-6.48,4.14-12.93,7.03-19.34c2.88-6.41,6.05-12.54,9.51-18.37
			c3.46-5.83,6.88-11.02,10.26-15.56c3.39-4.54,6.52-8.14,9.4-10.8c2.88-2.66,5.11-4,6.7-4c2.88,0,4.32,1.73,4.32,5.19
			c0,1.44-0.87,4-2.6,7.67c-1.73,3.67-3.6,7.93-5.62,12.75c-2.02,4.83-3.89,9.83-5.62,15.02s-2.6,10.02-2.6,14.48
			c0,2.45,0.43,4.5,1.3,6.16c0.86,1.66,2.38,2.49,4.54,2.49c3.74,0,7.35-1.58,10.8-4.75c3.46-3.17,6.77-7.1,9.94-11.78
			c3.17-4.68,6.19-9.8,9.08-15.34c2.88-5.55,5.54-10.66,7.99-15.34c2.45-4.68,4.68-8.61,6.7-11.78
			C546.02,610.99,547.75,609.41,549.19,609.41z"/><path class="st0" d="M645.79,646.15c1.01-1.87,2.09-3.06,3.24-3.57c1.15-0.5,2.12-0.54,2.92-0.11c0.79,0.43,1.33,1.26,1.62,2.48
			c0.29,1.23,0.07,2.7-0.65,4.43c-1.73,3.75-3.71,8.07-5.94,12.97c-2.24,4.9-4.76,9.94-7.57,15.13c-2.81,5.19-6.05,10.27-9.72,15.24
			c-3.68,4.97-7.86,9.4-12.54,13.29c-4.68,3.89-9.94,7.02-15.78,9.4c-5.83,2.38-12.35,3.57-19.56,3.57c-4.32,0-8.39-0.86-12.21-2.59
			c-3.82-1.73-7.17-4.07-10.05-7.02c-2.88-2.95-5.15-6.45-6.81-10.48c-1.65-4.03-2.49-8.35-2.49-12.97c0-8.5,1.87-17.4,5.62-26.69
			c3.75-9.29,8.64-17.79,14.7-25.5c6.05-7.71,12.86-14.08,20.42-19.13c7.57-5.04,15.16-7.56,22.8-7.56c3.74,0,6.7,0.65,8.86,1.94
			c2.16,1.3,3.78,2.81,4.86,4.54c1.08,1.73,1.73,3.53,1.94,5.4c0.22,1.87,0.33,3.39,0.33,4.54c0,4.32-1.01,9.15-3.03,14.48
			c-2.02,5.33-4.65,10.34-7.89,15.02c-3.24,4.68-6.85,8.61-10.8,11.78c-3.96,3.17-7.96,4.76-11.99,4.76c-2.6,0-4.9-0.43-6.92-1.3
			c-2.02-0.86-3.82-1.94-5.41-3.24c-0.15,0.86-0.25,1.73-0.32,2.59c-0.07,0.86-0.11,1.66-0.11,2.38c0,5.19,1.98,9.08,5.94,11.67
			c3.96,2.59,9.01,3.24,15.13,1.94c6.12-1.3,12.86-4.9,20.21-10.8C631.96,666.82,639.02,657.96,645.79,646.15z M613.37,623.46
			c-0.87,0-2.2,0.68-4,2.05c-1.8,1.37-3.78,3.24-5.94,5.62c-2.16,2.38-4.4,5.08-6.7,8.11c-2.31,3.02-4.39,6.2-6.27,9.51
			c0.58,0.15,1.08,0.25,1.51,0.32c0.43,0.07,0.94,0.11,1.51,0.11c2.88,0,5.83-1.33,8.86-4c3.03-2.67,5.65-5.62,7.89-8.86
			c2.23-3.24,3.75-6.19,4.54-8.86C615.57,624.79,615.1,623.46,613.37,623.46z"/></g><g><path class="st0" d="M157.54,790.23c0.77,1.23,1.86,1.84,3.27,1.84s2.47-0.54,3.17-1.6c0.7-1.07,1.18-3.09,1.42-6.08l4.23,0.54
			c-0.36,4.11-1.28,6.98-2.75,8.62s-3.58,2.45-6.32,2.45c-2.74,0-4.92-0.99-6.53-2.96s-2.42-5.6-2.42-10.88v-16.45
			c0-5.28,0.81-8.91,2.42-10.88s3.78-2.96,6.5-2.96c2.72,0,4.8,0.71,6.23,2.12c1.43,1.41,2.31,3.93,2.63,7.56l-4.41,1.09
			c-0.24-2.58-0.7-4.36-1.36-5.35c-0.66-0.99-1.65-1.48-2.96-1.48s-2.35,0.64-3.12,1.91c-0.76,1.27-1.15,3.6-1.15,6.98v18.74
			C156.4,786.73,156.78,788.99,157.54,790.23z"/><path class="st0" d="M199.21,765.4v17.05c0,5.12-0.81,8.66-2.45,10.61c-1.64,1.95-3.97,2.93-7.02,2.93c-3.04,0-5.38-0.98-7.01-2.93
			c-1.63-1.95-2.45-5.49-2.45-10.61V765.4c0-5.12,0.82-8.65,2.45-10.61c1.64-1.95,3.97-2.93,7.01-2.93c3.05,0,5.38,0.98,7.02,2.93
			C198.39,756.75,199.21,760.29,199.21,765.4z M194.43,783.36v-18.87c0-5.8-1.55-8.71-4.65-8.71c-1.49,0-2.65,0.63-3.48,1.88
			c-0.83,1.25-1.24,3.53-1.24,6.83v18.87c0,3.3,0.41,5.58,1.24,6.83c0.83,1.25,1.98,1.88,3.48,1.88
			C192.88,792.07,194.43,789.17,194.43,783.36z"/><path class="st0" d="M216.74,795.09h-4.72v-42.33h5.02l9.86,30.96v-30.96h4.72v42.33h-5.02l-9.86-30.9V795.09z"/><path class="st0" d="M258.28,785.6c0-3.23-1.09-5.7-3.26-7.44l-4.84-3.57c-3.63-2.58-5.44-6.39-5.44-11.43
			c0-4.19,0.8-7.12,2.39-8.8c1.59-1.67,3.77-2.51,6.53-2.51s4.91,0.78,6.44,2.33c1.53,1.55,2.46,4.36,2.78,8.43l-4.6,1.03
			c-0.16-5.16-1.66-7.74-4.5-7.74s-4.27,2.2-4.27,6.59c0,1.93,0.21,3.5,0.64,4.72c0.42,1.21,1.24,2.3,2.45,3.26l4.78,3.57
			c1.12,0.81,2.03,1.57,2.72,2.29c0.68,0.73,1.34,1.89,1.96,3.48c0.63,1.59,0.94,3.48,0.94,5.65c0,3.87-0.84,6.59-2.51,8.16
			c-1.67,1.57-3.94,2.36-6.8,2.36c-2.86,0-5.1-0.93-6.71-2.78c-1.61-1.86-2.6-5.16-2.96-9.92l4.54-0.79
			c0.16,3.43,0.65,5.86,1.48,7.32s1.99,2.18,3.48,2.18C256.69,792.01,258.28,789.87,258.28,785.6z"/><path class="st0" d="M288.93,752.77h4.78v29.69c0,5.12-0.82,8.66-2.45,10.61c-1.63,1.95-3.94,2.93-6.92,2.93
			c-2.99,0-5.29-0.98-6.92-2.93c-1.63-1.95-2.45-5.49-2.45-10.61v-29.69h4.78v30.6c0,3.26,0.4,5.53,1.21,6.8
			c0.81,1.27,1.92,1.91,3.35,1.91c1.43,0,2.56-0.64,3.39-1.91c0.83-1.27,1.24-3.54,1.24-6.8V752.77z"/><path class="st0" d="M306.95,795.09v-42.33h4.84v38.46h9.37v3.87H306.95z"/><path class="st0" d="M326.3,756.63v-3.87h16.51v3.87h-5.87v38.46h-4.78v-38.46H326.3z"/><path class="st0" d="M353.45,795.09v-42.33h4.84v42.33H353.45z"/><path class="st0" d="M376.67,795.09h-4.72v-42.33h5.02l9.86,30.96v-30.96h4.72v42.33h-5.02l-9.86-30.9V795.09z"/><path class="st0" d="M413.19,776.53v-3.87h9.5v22.37h-2.96l-0.85-3.93c-1.21,3.27-3.39,4.9-6.53,4.9c-2.54,0-4.5-0.98-5.89-2.93
			c-1.39-1.95-2.09-5.49-2.09-10.61v-16.75c0-5.28,0.81-8.91,2.42-10.88c1.61-1.98,3.78-2.96,6.5-2.96c2.72,0,4.8,0.71,6.23,2.12
			c1.43,1.41,2.31,3.93,2.63,7.56l-4.41,1.09c-0.24-2.58-0.7-4.36-1.36-5.35c-0.66-0.99-1.65-1.48-2.96-1.48s-2.35,0.64-3.12,1.91
			c-0.76,1.27-1.15,3.6-1.15,6.98v18.68c0,3.3,0.37,5.58,1.12,6.83c0.74,1.25,1.8,1.88,3.17,1.88c3.06,0,4.64-2.72,4.72-8.16v-7.38
			H413.19z"/></g><g><path class="st0" d="M559.21,140.07l-0.54-1.53c-0.01,0.31-0.02,0.62-0.03,0.93c-0.58-0.6-0.9-0.93-0.9-0.93
			c0.27,1.97,0.5,3.96,0.75,5.94c-0.49,15.65-1.66,30.14-3.29,43.73c37.8,5.28,67.01,37.73,67.01,76.96
			c0,42.89-34.9,77.79-77.8,77.79c-42.89,0-77.79-34.9-77.79-77.79c0-37.76,27.05-69.3,62.79-76.31c3.09-56.61-3.39-81.36-3.39-82.04
			c-75.49-53.25-111.73-63.45-111.73-63.45c3.13,14.6,5.79,29.07,8.06,43.4c4.98,56.28-11.22,107.75-31.79,148.64
			c23.99-128.06,7.17-200.31,7.17-200.31c-46.9-20.69-80.01-22.07-80.01-24.83c0.81,25.14,0.15,49.25-1.58,72.29
			c-14.57,41.61-41.76,97.63-90.64,140.97c10.5-21.14,18.36-39.82,20.48-51.87c0,4.14-59.32,49.66-82.77,48.28
			c0,0,2.76-68.97-108.97-99.32c0,0,62.07,40,68.97,153.05c0,0.07-16.55,126.98-68.97,146.29c1.1,0,23.13,6.1,58.47-22.61
			c27.99-10.37,84.51-35.83,146.17-89.16c-16.89,36.92-30.82,57.12-30.82,56.6c102.08,81.39,86.9,103.46,88.28,103.46
			c47.2-37.55,82.14-76.38,108.04-113.33c-12.74,94.96-34.93,156.09-34.93,156.09c21.54-0.83,46.81-13.75,63.57-23.94
			c42.54-21.4,79.12-78.48,105.19-130.59c-3.56,34.68-7.36,56.77-7.36,56.77C658.06,308.6,661.2,272.35,661.2,272.35
			C642.1,227.8,570.21,151.59,559.21,140.07z"/><path class="st0" d="M475,265.17c0,38.28,31.14,69.42,69.42,69.42c38.28,0,69.42-31.14,69.42-69.42
			c0-38.28-31.14-69.42-69.42-69.42C506.14,195.75,475,226.89,475,265.17z M544.42,221.44c22.91,0,41.48,18.57,41.48,41.48
			c0,22.91-18.57,41.48-41.48,41.48c-22.91,0-41.48-18.57-41.48-41.48C502.93,240.01,521.51,221.44,544.42,221.44z"/></g><g><path class="st0" d="M528,260.15c0.45-2.39,1.39-4.62,2.75-6.54l-13.76-11.59c-2.97,3.84-5.06,8.35-6.23,13.22L528,260.15z"/></g><g><path class="st0" d="M543.54,228.9c-8.85,0.28-16.86,3.91-22.78,9.69l13.72,11.56c2.81-2.21,6.3-3.59,10.14-3.59
			c0.15,0,0.29,0.04,0.43,0.04L543.54,228.9z"/></g><circle class="st0" cx="545.05" cy="264.3" r="13.22"/></svg>
		</div>
		<h1>Free analysis, efficient solutions, quality results.</h1>
		<a href="#" class="button large">Discuss a Project</a>
	</div>
	

		<!-- <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div> -->
	
</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
