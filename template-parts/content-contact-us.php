<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webnews
 */

?>
<article <?php post_class(); ?>>
	<div class="full-width-shadow-page contact-us-page">
		<header class="entry-header">
			<div class="entry-meta contact-title-part">
				<h2><?php the_title(); ?></h2>
	        </div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<div class="contact-content-part">
				<?php the_content(); ?>
			</div><!-- /.contact-content-part -->
			<div class="contact-us-details company_info">
				<table>
					<tbody>
					<tr>
						<th>Mission Statement</th>
						<td>AviationScoop's goal is to report the latest happenings and updates in the aviation industry so that flyers and aviation professionals alike can stay up to date with the relevant news.</td>
					</tr>
					<tr>
						<th>Headquarters</th>
						<td>C2, Vasant Kunj<br>
						New Delhi–110070<br>
						Phone: + 91 9995723322 General questions, comments, or inquiries should be emailed to news@aviationscoop.com<br>
						Otherwise please email the specific reporter, we will reply to your emails at lightning speed.</td>
					</tr>
					<tr>
						<th>Editors</th>
						<td>
						<ul class="company_more">
						<li>
						<p class="company_name">Tarun P.K</p>
						<p>Founder, Senior Editor &amp; Copy Chief<br>
						<a href="https://twitter.com/aviationscoop" target="_blank">@aviationscoop</a><br>
						tarun@aviationscoop.com</p></li>
						<li>
						<p class="company_name">Arpit Sharma</p>
						<p>Editor<br>
						<a href="https://twitter.com/arpitswriting" target="_blank">@arpitswriting</a><br>
						arpit@aviationscoop.com</p></li>

					</tr>
					<tr>
						<th>News Desk</th>
						<td>
						<ul class="company_more">
						</ul>
						<ul class="company_more">
						<p class="company_name">Srikapardhi <a href="https://twitter.com/srikapardhi" target="_blank">@srikapardhi</a></p>
						
						<li>
						<p class="company_name">Chethan S <a href="https://twitter.com/gischethans?lang=en" target="_blank">@gischethans</a></p>

						</ul>
						<p class="company_name">Ria L <a href="https://twitter.com/rialakshman?lang=en" target="_blank">@rialakshman</a></p>
						<p>ria@aviationscoop.com</p></td>
					</tr>
					<tr>
						<th>Advertising</th>
						<td>ads@aviationscoop.com</td>
					</tr>
					</tbody>
				</table>
			</div><!-- /.contact-us-details -->
		</div><!-- .entry-content -->

		<footer class="entry-footer">

		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
