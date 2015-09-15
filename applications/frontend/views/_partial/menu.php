<ul class="nav navbar-nav navbar-center line-top line-pcolor case-c">
<?php
	foreach ($menu as $parent => $parent_params)
	{
		$name = $parent_params['name'];
		$url = $parent_params['url'];
		$icon = $parent_params['icon'];

		if ( empty($parent_params['children']) )
		{
			$active = ( current_url()==$url ) ? 'active' : '';
			echo "<li class='$active'><a href='$url'><i class='$icon'></i> <span>$name</span></a></li>";
		}
		else
		{
			$parent_active = ( $ctrler==$parent ) ? 'active' : '';
			$parent_name = $parent_params['name'];
			$parent_url = $parent_params['url'];
			$parent_icon = $parent_params['icon'];
			
			// parent of child items
			echo "<li class='dropdown dropdown-mega $parent_active'>
				<a data-toggle='dropdown' class='dropdown-toggle' href='#''>
					<i class='$icon'></i> $parent_name <span class='caret'></span>
				</a>";

			// child items
			echo " <!-- Mega Menu -->
                  <div class='mega-menu dropdown-menu'>
                    <!-- Row -->
                    <div class='row'>
                    
                      <!-- col -->
                      <div class='col-md-3'>
                        <img class='featured-img hidden-xs hidden-sm' src='".base_url()."assets/dist/images/grocery-pages.jpg' alt=''>
                      </div>
                      <!-- /col -->";
            $data_pasar = $this->Komoditas_model->get_pasar();
			foreach ($data_pasar as $row)
			{
			?>
                      <div class='col-md-2'>
                      <ul class='links'>
                          <li><a href='<?php echo base_url('pasar/data/'.$row->id_pasar); ?>'><?php echo $row->nama_pasar; ?></a></li>
                        </ul>
                      </div>
            <?php
			}

			echo "</div>
                    <!-- /Row -->
                  </div>
                  <!-- /Mega Menu -->";
		}
	}
?>
</ul>