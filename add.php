<?php require 'lang.php'; ?><!DOCTYPE html>
<html>
	<head>
		<title><?php _e('add-record');?></title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.css" />
		<script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="b" id="jqm-home"> 
			<div data-role="header"> 
				<h1><?php _e('add-record'); ?></h1>
			</div> 
			
			<div data-role="content"> 
				<link rel="stylesheet" href="deps/autoSuggest/autoSuggest.css" />
				<style type="text/css">
				.ui-autocomplete{
				  position: absolute;
				  background: #FFF;
				  border: solid 1px #DDDDDD;
				  float: left;
				  list-style: none;
				  margin: 0;
				  padding: 2px;
				}
				.ui-autocomplete .ui-menu-item {
				  clear: left;
				  float: left;
				  margin: 0;
				  padding: 0;
				  width: 100%;
				}
				.ui-autocomplete .ui-menu-item a {
				  display: block;
				  line-height: 1.5;
				  padding: 0.2em 0.4em;
				  text-decoration: none;
				  color: black;
				  font-family: Helvetica,Arial,sans-serif;
				}
				</style>		
				<script src="deps/autoSuggest/autoSuggest.js"></script>
				<form action="add.php" id="add" method="post">
					<div data-role="fieldcontain">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" value=""  />
					</div>	
					<div data-role="fieldcontain">
						<label for="price">Price:</label>
						<input type="text" name="price" id="price" value=""  />
					</div>	
					<div data-role="fieldcontain">
						<label for="food">Food:</label>
						<input type="text" name="food" id="food" value=""  />
					</div>	
					<div data-role="fieldcontain">
						<label for="location">Location:</label>
						<input type="text" name="location" id="location" value=""  />
					</div>	
					<div data-role="fieldcontain">
						<label for="went-with">Went with:</label>
						<input type="text" name="went-with" id="went-with" value=""  />
					</div>	
					<div data-role="fieldcontain">
						<label for="period">Period:</label>
						<select name="period" id="period">
							<?php
								foreach(get_periods() as $v) {
									printf("<option value='%s'>%s</option>\n", $v['value'], $v['name']);
								}
							?>
						</select>
					</div>	
					<div data-role="fieldcontain">
						<input type="submit" name="add" id="add" value="Add Entry"  />
					</div>
					<script type="text/javascript">
					  $('#food').autoSuggest(<?php echo json_encode(get_food()); ?>,{selectedItemProp: "name", searchObjProps: "name",startText:"Enter Food Tags"});
					  $('#location').autoSuggest(<?php echo json_encode(get_locations()); ?>,{selectedItemProp: "name", searchObjProps: "name",startText:"Enter Location"});
					  $('#went-with').autoSuggest(<?php echo json_encode(get_people()); ?>,{selectedItemProp: "name", searchObjProps: "name",startText:"Enter People"});
					  $('#name').autoSuggest(<?php echo json_encode(get_people()); ?>,{selectedItemProp: "name", searchObjProps: "name",startText:"Enter Your Name"});
					</script>
				</form>
			</div> 
		</div>		
	</body>
</html>