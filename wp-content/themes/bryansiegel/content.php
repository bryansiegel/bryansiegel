

					<div class="col-md-6">
                        <div class="card border-0 mb-5">
                            <a href="<?php echo the_permalink(); ?>" class="h-100 img-rising" aria-hidden="true">

                                <?php echo get_the_post_thumbnail('', array(530,353), array('class' => 'card-img-top')); ?>
                            </a>
                            <div class="card-body px-0">

                                		


                                				<?php 
                                					$categories = get_the_category();

                                					foreach($categories as $category) : ?>

												<span class="badge badge-pill badge-dark"><?php echo $category->name; ?></span>	

                                					<?php endforeach; ?>


                                		
           

                                <h2 class="card-title h3">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="small text-muted mb-3"><?php echo the_date(); ?></div>
                                <p class="card-text"><?php //the_content(); ?> <?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                            </div>
                        </div>
                    </div>
