<?php
/** Páginas internas e posts (caso sejam criados no WordPress). */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="conteudo" class="dj-container dj-page">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<div class="dj-prose"><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<h1>Página não encontrada</h1>
		<p>O endereço acessado não existe. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Voltar para o início</a>.</p>
	<?php endif; ?>
</main>
<?php
get_footer();
