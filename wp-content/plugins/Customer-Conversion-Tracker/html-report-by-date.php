<?php
/**
 * Admin View: Report by Date (with date filters)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<?php if($_GET['page']=='Tracker_Graph_menu'){  ?>
                                <div class="postbox tabs">
                                 <ul class="tab_menu">
				<?php
					foreach ( $ranges as $range => $name )
						echo '<li class="' . ( $current_range == $range ? 'active' : '' ) . '"><a href="' . remove_query_arg( array( 'start_date', 'end_date' ), add_query_arg( 'range', $range ) ) . '">' . $name . '</a></li>';
				?>
				<li class="custom <?php echo $current_range == 'custom' ? 'active' : ''; ?>">
					<form method="GET">
						<div>
							<?php
								// Maintain query string
								foreach ( $_GET as $key => $value )
									if ( is_array( $value ) )
										foreach ( $value as $v )
											echo '<input type="hidden" name="' . esc_attr( sanitize_text_field( $key ) ) . '[]" value="' . esc_attr( sanitize_text_field( $v ) ) . '" />';
									else
										echo '<input type="hidden" name="' . esc_attr( sanitize_text_field( $key ) ) . '" value="' . esc_attr( sanitize_text_field( $value ) ) . '" />';
							?>
							<input type="hidden" name="range" value="custom" />
							<input type="text" size="9" placeholder="yyyy-mm-dd" value="<?php if ( ! empty( $_GET['start_date'] ) ) echo esc_attr( $_GET['start_date'] );  ?>" name="start_date" class="range_datepicker from" />
							<input type="text" size="9" placeholder="yyyy-mm-dd" value="<?php if ( ! empty( $_GET['end_date'] ) ) echo esc_attr( $_GET['end_date'] ); ?>" name="end_date" class="range_datepicker to" />
							<input type="submit" class="button" value="<?php _e( 'Go', 'woocommerce' ); ?>" />
						</div>
					</form>
				</li>
                                <li class="export"><a
                                href="#"
                                download="report-<?php echo esc_attr( $current_range ); ?>-<?php echo date_i18n( 'Y-m-d', current_time('timestamp') ); ?>.csv"
                                class="export_csv"
                                data-export="chart"
                                data-xaxes="<?php _e( 'Date', 'woocommerce' ); ?>"
                                data-exclude_series="2"
                                data-groupby="<?php echo $this->chart_groupby; ?>"
                                >
                                        <?php _e( 'Export CSV', 'woocommerce' ); ?>
                                </a></li>
                        	</ul> </div>
                                <div class="postbox tabs legend">
                                <?php if ( empty( $hide_sidebar ) ) : ?>
					<?php if ( $legends = $this->get_chart_legend() ) : ?>
						<ul class="chart-legend">
							<?php foreach ( $legends as $legend ) : ?>
								<li style="border-color: <?php echo $legend['color']; ?>" <?php if ( isset( $legend['highlight_series'] ) ) echo 'class="highlight_series" data-series="' . esc_attr( $legend['highlight_series'] ) . '"'; ?>>
									<?php echo $legend['title']; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
                                <?php  endif;  ?></div>
                                <?php }else{ ?>
                                <div id="poststuff" class="woocommerce-reports-wide">
                                        <div class="postbox tabs">
                                                <?php if ( empty( $hide_sidebar ) ) : ?>
                                                                        <?php if ( $legends = $this->get_chart_legend() ) : ?>
                                                                                <ul class="chart-legend">
                                                                                        <?php foreach ( $legends as $legend ) : ?>
                                                                                                <li style="border-color: <?php echo $legend['color']; ?>" <?php if ( isset( $legend['highlight_series'] ) ) echo 'class="highlight_series" data-series="' . esc_attr( $legend['highlight_series'] ) . '"'; ?>>
                                                                                                        <?php echo $legend['title']; ?>
                                                                                                </li>
                                                                                        <?php endforeach; ?>
                                                                                </ul>
                                                                        <?php endif; ?>
                                        <?php  endif;  ?>
                                            <div class="cutomer_gradient"></div> 
                                <ul class="tab_menu">
				<?php
					foreach ( $ranges as $range => $name )
						echo '<li class="' . ( $current_range == $range ? 'active' : '' ) . '"><a href="' . remove_query_arg( array( 'start_date', 'end_date' ), add_query_arg( 'range', $range ) ) . '">' . $name . '</a></li>';
				?>
				<li class="custom <?php echo $current_range == 'custom' ? 'active' : ''; ?>">
					<?php _e( 'Custom:', 'woocommerce' ); ?>
					<form method="GET">
						<div>
							<?php
								// Maintain query string
								foreach ( $_GET as $key => $value )
									if ( is_array( $value ) )
										foreach ( $value as $v )
											echo '<input type="hidden" name="' . esc_attr( sanitize_text_field( $key ) ) . '[]" value="' . esc_attr( sanitize_text_field( $v ) ) . '" />';
									else
										echo '<input type="hidden" name="' . esc_attr( sanitize_text_field( $key ) ) . '" value="' . esc_attr( sanitize_text_field( $value ) ) . '" />';
							?>
							<input type="hidden" name="range" value="custom" />
							<input type="text" size="9" placeholder="yyyy-mm-dd" value="<?php if ( ! empty( $_GET['start_date'] ) ) echo esc_attr( $_GET['start_date'] ); ?>" name="start_date" class="range_datepicker from" />
							<input type="text" size="9" placeholder="yyyy-mm-dd" value="<?php if ( ! empty( $_GET['end_date'] ) ) echo esc_attr( $_GET['end_date'] ); ?>" name="end_date" class="range_datepicker to" />
							<input type="submit" class="button" value="<?php _e( 'Go', 'woocommerce' ); ?>" />
						</div>
					</form>
				</li>
                            	</ul>
                                </div>
                                </div>
                                <?php } ?>