<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
//ini_set('upload_max_filesize', '8M');
$max_upload   = (ini_get('upload_max_filesize'));
$max_post     = (ini_get('post_max_size'));
$memory_limit = (int) (ini_get('memory_limit'));

echo ('$max_upload ' . $max_upload);
echo ('$max_post ' . $max_post);
echo ('$memory_limit ' . $memory_limit);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
		
	</header><!-- .entry-header -->
	
	<div class="s39">
		<div class="s39line"></div>
	</div>

	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}?>
	</div>
	
	<br />
	
	<div class="entry-content" >
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
