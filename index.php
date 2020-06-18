<?php get_header(); ?>

<div class="container">

    <?php if (have_posts()) : ?>
        
        <p class="articles-title">Latest Articles</p>
        
        <ul class="articles">
            
            <?php while( have_posts() ): the_post(); ?>
            
            <li class="article">
                
                <?php if (has_post_thumbnail()): ?>
                    
                    <?php the_post_thumbnail('large'); ?>
                    
                <?php else: ?>
                        
                    <img src="https://placehold.jp/150x150.png" alt="">
                        
                <?php endif; ?>
                        
                    <p><?php the_time("Y/m/d/");?></p>
                    <p><?php the_excerpt(); ?></p>
                    <div class="link">
                        <a href="<?php the_permalink(); ?>" class="read-more Item"><span class="Item-Text">READ MORE</span></a>
                    </div>
                        
            </li>
                    
            <?php endwhile; ?>
                    
        </ul>
                
    <?php else: ?>
                    
        <h2>最近の投稿はありません</h2>
                    
    <?php endif; ?>
                    
                    
                
                
</div>
                
<?php get_footer();?>