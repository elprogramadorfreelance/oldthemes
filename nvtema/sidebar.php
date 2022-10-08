					<div class="content_right">
						<h2>Categorias</h2>
						<ul class="blogcategories">
							<li><a href="#">Trade Fare</a></li>
							<li><a href="#">Ferrari</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Technology News</a></li>
						</ul>
						
						<h2>Latest Tweets</h2>
						<div class="latesttweets">
							<script type="text/javascript">
							new TWTR.Widget({
							  version: 2,
							  type: 'profile',
							  rpp: 4,
							  interval: 6000,
							  width: 'auto',
							  height: 300,
							  theme: {
							    shell: {
							      background: 'transparent',
							      color: '#828282'
							    },
							    tweets: {
							      background: 'transparent',
							      color: '#828282',
							      links: '#545758'
							    }
							  },
							  features: {
							    scrollbar: false,
							    loop: false,
							    live: false,
							    hashtags: true,
							    timestamp: true,
							    avatars: false,
							    behavior: 'all'
							  }
							}).render().setUser('blooomingthemes').start();
							</script>


						</div><!--latest tweets-->
						
						<h2>Tags</h2>
<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
					</div>	