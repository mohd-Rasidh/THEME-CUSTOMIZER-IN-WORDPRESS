<?php
/**
 * The main template file
 */

get_header(); ?>

<main id="primary" class="site-main">

    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Beautiful WordPress Theme</h1>
                <p class="hero-subtitle">Customize every aspect of your website with our stunning theme customizer</p>
                <div class="hero-cta">
                    <a href="#" class="btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="content-section">
            <div class="grid grid-2">
                <div class="glass-card">
                    <h3>Welcome to Your Website</h3>
                    <p>This is a sample content area that will update based on your customizer settings. You can change colors, fonts, layouts, and more to create the perfect design for your website.</p>
                </div>

                <div class="glass-card">
                    <h3>Modern Design Features</h3>
                    <ul>
                        <li>✨ Glassmorphism effects</li>
                        <li>🎨 Gradient backgrounds</li>
                        <li>🚀 Smooth animations</li>
                        <li>📱 Responsive design</li>
                        <li>⚡ Fast performance</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="content-section">
            <h2 class="section-title">Latest Posts</h2>

            <?php if (have_posts()) : ?>
                <div class="grid grid-3">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="glass-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-primary">Read More</a>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <div class="glass-card">
                    <h3><?php _e('Nothing here', 'theme-customizer'); ?></h3>
                    <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for.', 'theme-customizer'); ?></p>
                </div>
            <?php endif; ?>
        </section>
    </div>

</main>

<?php get_footer(); ?>