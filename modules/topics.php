<div id="blockSection" class="topicBlock">


<fieldset>
 	<legend>
 		<h4 class="pull-left">
 			<form class="form-horizontal" role="form">
 				<button type="button" onclick="window.location.href='/index.php?mode=topics'" class="btn btn-<? if(isset($_GET['t'])) { echo 'default'; } else { echo 'primary'; }	?> btn-xs">ALL TOPICS</button>
 				<button type="button" onclick="window.location.href='/index.php?mode=topics&t=following'" class="btn btn-<? if(isset($_GET['t'])) { echo 'primary'; } else { echo 'default'; }	?> btn-xs">FOLLOWING</button>
 			</form>
 		</h4>
 		<h6 class="pull-right">Sort by: Rate - View</h6>
 		<div class="clearfix"></div>
 	</legend>

</fieldset>
<div class="topicBlockInner clearfix" style="height:500px;">

</div>

</div>