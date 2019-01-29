<?php 

namespace Jonovanvonghes\Packages;
use Jonovanvonghes\Packages\JvHelper;
use Jonovanvonghes\Packages\JvHash;

/**
* JvAllFiles
* Attention, il faut ajouter le css et le js (list.js, pagination.list.js)
*/
class JvAllFiles extends JvHelper
{
	protected $all = array();
	protected $keys = array();
	protected $links = array();
	protected $plus = array();
	protected $page = 15;
	protected $col_searchbar = "col";
	protected $show_searchbar = true;
	protected $hash = null;

	function __construct($all = false)
	{
		if ($all != FALSE && is_array($all))
			$this->all = $all;

		$this->hash = new JvHash();
	}

	public function set_all($all = false)
	{
		if ($all != FALSE && is_array($all)){
			$this->all = $all;
		}
	}

	public function set_keys($keys = false)
	{
		if ($keys != FALSE && is_array($keys))
			$this->keys = $keys;
	}

	public function set_links($links = false)
	{
		if ($links != FALSE && is_array($links))
			$this->links = $links;
	}

	public function set_plus($plus = false)
	{
		if ($plus != FALSE && is_array($plus))
			$this->plus = $plus;
	}

	public function set_page($page = false)
	{
		if ($page != FALSE)
			$this->page = $page;
	}

	public function show_searchbar($show = true)
	{

		$this->show_searchbar = $show;
	}

	public function set_col_searchbar($col_searchbar = false)
	{
		if ($col_searchbar != FALSE)
			$this->col_searchbar = $col_searchbar;
	}

	public function generate()
	{

		if (!is_array($this->all) || empty($this->keys)){
			echo "Aucun paramètre n'a été spécifié! <small>[class ALL_FILES]</small>";
			return;
		}

		$dnone = "d-done";

		$keys = $this->keys;
		$plus = $this->plus;

		$col_searchbar = $this->col_searchbar;

		$valueNames = array();
		foreach ($keys as $key) {
			if (isset($key['listjs_val']) && $key['listjs_val'])
				$valueNames[] = $key['key'];
		}

		$id = "all_files_" . uniqid();

		?>
			<div id="<?= $id ?>" class="listjs">


				<div class="row">
					<?php if ($this->show_searchbar) : ?>
						<div class="<?= $col_searchbar ?>">
							<div class="input-group input-group-sm mb-3">
								<input class="search form-control" placeholder="Rechercher..." />
							</div>
						</div>
					<?php endif; ?>
					<div class="col mb-3">
						<?php foreach ($keys as $key) : 
							if (isset($key['listjs_sort']) && $key['listjs_sort']) : ?>
							<button class="sort btn btn-sm btn-secondary" data-sort="<?= $key['key'] ?>"><?= $key['title_sort'] ?></button>
						<?php endif; endforeach; ?>
					</div>

					<?php if (!empty($plus)) : ?>
						<div class="col text-right">
							<?php foreach ($plus as $p) : ?>
								<?php if (isset($p['type']) && $p['type'] == "btn" ) : ?>

									<button type="button" class="btn <?= $p['class'] ?>" 
										<?php if (isset($p['attributs']) && is_array($p['attributs'])) : ?>
											<?php foreach ($p['attributs'] as $attr_key => $attr_val) : ?>
												<?= $attr_key ?>="<?= $attr_val ?>" 
											<?php endforeach; ?>
										<?php endif; ?>
									>

										<?php if (isset($p['icon'])) : ?>
											<i class="fas <?= $p['icon'] ?>"></i> 
										<?php endif; ?>
										<?= $p['title'] ?>
									</button>

								<?php else : ?>
									<a href="<?= $p['link'] ?>" class="btn <?= $p['class'] ?>" 
										<?php if (isset($p['attributs']) && is_array($p['attributs'])) : ?>
											<?php foreach ($p['attributs'] as $attr_key => $attr_val) : ?>
												<?= $attr_key ?>="<?= $attr_val ?>" 
											<?php endforeach; ?>
										<?php endif; ?>
									>

										<?php if (isset($p['icon'])) : ?>
											<i class="fas <?= $p['icon'] ?>"></i> 
										<?php endif; ?>
										<?= $p['title'] ?>
									</a>
								<?php endif; ?>
							<?php endforeach; ?>
							</div>
					<?php endif; ?>

				</div>

				<p>Total : <span id="nb_files_<?= $id ?>"></span></p><hr>
				
				<!-- TITLE -->
				<ul id="listjs_title_<?= $id ?>" class="list-unstyled list-head <?= $dnone ?>">
					<li class="row">
					<?php foreach ($keys as $key) : ?>
						<?php if (isset($key['hidden'])) {continue;} ?>
						<div class="col<?= (isset($key['col']) ? $key['col'] : "") ?>">
							<?= $key['title'] ?>
						</div>
					<?php endforeach; ?>
					<?php if (isset($this->links) && !empty($this->links)) : ?>
						<div class="col"></div>
					<?php endif; ?>
					</li>
				</ul>

				<ul id="listjs_items_<?= $id ?>" class="list-unstyled list <?= $dnone ?>">
				<?php foreach ($this->all as $item) : ?>
					<li class="row">
						
						<!-- ITEM -->
						<?php foreach ($keys as $key) : ?>
							<?php if (isset($item[$key['key']])) : ?>
								<?php $this->generate_item($item, $key) ?>
							<?php else : ?>
								<div class="col<?= (isset($key['col']) ? $key['col'] : "") ?>"></div>
							<?php endif; ?>
						<?php endforeach; ?>

						<!-- COL ACTION -->
						<?php if (isset($this->links) && !empty($this->links)) : ?>
							<?php $this->generate_action($item, $key) ?>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
				</ul>

				<!-- PAGINATION -->
				<ul id="listjs_pagination_<?= $id ?>" class="pagination <?= $dnone ?>"></ul>
				<p id="listjs_loading_<?= $id ?>">Chargement...</p>
				<!-- VALUENAMES for ListJS (/asset/js/listjs.js) -->
				<script type='text/javascript'>

					var option = {
						'id': '<?= $id ?>',
						'valueNames': <?= json_encode($valueNames); ?>,
						'page': <?= $this->page ?>
					};

					if (options == undefined){
						var options = [];
					}

					options.push(option);
				</script>
			</div>
		<?php 
	}

	protected function generate_item($item, $key)
	{

		$value = $item[$key['key']];
		if (isset($key['transform_date']) && $key['transform_date']){
			$value = date("d/m/Y (H:i:s)", strtotime($value));
		}elseif(isset($key['key_to_value']) && $key['key_to_value'] && isset($key['data_values'])){
			$value = "";
			if (isset($key['default_value']))
				$value = $key['default_value'];

			if (isset($key['data_values'][$item[$key['key']]]))
				$value = $key['data_values'][$item[$key['key']]];
		}

		 ?>
		
		<?php if (isset($key['hidden']) && $key['hidden']) : ?>
			<span class="d-none <?= $key['key'] ?>"><?= $value ?></span>
		<?php else : ?>
			<div class="col<?= (isset($key['col']) ? $key['col'] : "") ?>">
				<span class="<?= $key['key'] ?> <?= $key['class'] ?>">
					<?= (isset($key['html_before']) ? $key['html_before'] : "") ?>
					<?= (isset($key['prefix']) ? $key['prefix'] : "") ?><?= $value ?><?= (isset($key['suffix']) ? $key['suffix'] : "") ?>
					<?= (isset($key['html_after']) ? $key['html_after'] : "") ?>
				</span>
			</div>
		<?php endif; ?>
		<?php 
	}



	protected function generate_action($item, $key)
	{


		?>
			<div class="col action_link text-right">
				<?php foreach ($this->links as $link) : ?>

					<!-- MULTI CONDITION -->
					<?php if (isset($link['multi_cond'])) : ?>
						<?php $pass = false; ?>					
						<?php foreach ($link['multi_cond'] as $cond) : ?>
							<?php if ( isset($cond['key']) && isset($item[$cond['key']]) ) : ?>
								<?php if ( isset($cond['in_array']) && !in_array($item[$cond['key']], $cond['in_array']) ) : ?>
									<?php $pass = true; ?>
								<?php endif; ?>

								<?php if ( isset($cond['value']) && $item[$cond['key']] != $cond['value'] ) : ?>
									<?php $pass = true; ?>
								<?php endif; ?>

							<?php endif; ?>
						<?php endforeach; ?>
						<?php if ($pass) continue; ?>
					<?php endif; ?>

					<!-- CONDITION -->
					<?php if ( isset($link['cond']['key']) && isset($item[$link['cond']['key']]) ) : ?>
						<?php if ( isset($link['cond']['in_array']) && !in_array($item[$link['cond']['key']], $link['cond']['in_array']) ) : ?>
							<?php continue; ?>
						<?php endif; ?>

						<?php if ( isset($link['cond']['value']) && $item[$link['cond']['key']] != $link['cond']['value'] ) : ?>
							<?php continue; ?>
						<?php endif; ?>

					<?php endif; ?>



					<!-- IF -->
					<?php if (isset($link['if']['value'])) : ?>
						

						<?php 
							if ( ( isset($link['if']['key']) && isset($item[$link['if']['key']]) && $link['if']['value'] == $item[$link['if']['key']] )
								|| ( isset($item[$link['by']]) && $link['if']['value'] == $item[$link['by']] ) ): 
						?>

							<span><i><?= $link['if']['text'] ?></i></span>

							<?php continue; ?>
						<?php endif; ?>
					<?php endif; ?>



					<!-- ACTION LINKS -->
					<?php 
						$get_begin = "&";
						if (strpos($link['link'], "?") === FALSE){
							$get_begin = "?";
						}

						$key_param = $link['by'];
						if (isset($link['key_param']) && $link['key_param'])
							$key_param = $link['key_param'];

						$link_params = ""; 
						if (isset($link['by']) && $link['by'] && isset($item[$link['by']])) {
							$param = $item[$link['by']];
							if (isset($link['encode']) && $link['encode']){
								$param = urlencode($item[$link['by']]);
							}
							$link_params = $key_param . "=" . $param;
						}

						if (isset($link['token']['by']) && isset($link['token']['key']) && isset($item[$link['token']['by']])) {
							$key_hash = $link['token']['key'];
							$key_hash .= $item[$link['token']['by']];
							$this->hash->set_key($key_hash);
							$token = $this->hash->hash();

							if (!empty($link_params))
								$link_params .= "&";
							$link_params .= "token=$token";
						}

						$link_params = $get_begin . htmlentities($link_params);
					
					?>

					<a href="<?= $link['link'] . $link_params ?>" <?= (isset($link['target']) && $link['target']? 'target="_blank"' : '') ?> class="btn btn-sm <?= (isset($link['class']) ? $link['class'] : '') ?> ">
						<?php if (isset($link['icon'])) : ?>
							<i class="fas <?= $link['icon'] ?>"></i> 
						<?php endif; ?>
						<?= $link['title'] ?>
					</a>
				<?php endforeach; ?>
			</div>
		<?php 
	}



}