<div class="container">
	<div class="secondary-content wrapper" style="width:100%">
		<center><h2><?php the_field( 'fishing_title' ); ?></h2></center>

		<div class="collapse" id="yachts-table">
			<table>
				<thead>
					<tr>
						<th><?php the_field( 'fishing_season_title' ); ?></th>
						<th><?php the_field( 'fishing_fish_title' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					if ( have_rows( 'fishing_seasons' ) ) {
						while ( have_rows( 'fishing_seasons' ) ) {
							the_row();
					?>
							<tr>
								<td><?php the_sub_field( 'season' ); ?></td>
								<td><?php the_sub_field( 'fish' ); ?></td>
							</tr>
					<?php
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
