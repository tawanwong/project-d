<?
include("templates/header.php");
?>
			<div class="content">
				<?
				if($_GET)
				{
					$ParamValueArray = array('mode');

					foreach ($_GET as $key=>$value) {
						$ParamKey = $key;
						$ParamValue = $value;
						break;
					}

					if(in_array($ParamKey, $ParamValueArray))
					{
						if(file_exists("modules/".$ParamValue.".php"))
						{
							include_once("modules/".$ParamValue.".php");
						}
						else
						{
							echo "page: undefined";
						}
					}
					else
					{
						echo "GET: undefined";
					}
				}
				else
				{
					echo "MAIN";
				}
				?>
			</div>
 <? include("templates/footer.php"); ?>