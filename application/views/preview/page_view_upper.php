<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8" />
		<title>Proofessor Survey</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="<?php echo INCLUDE_DIR ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo INCLUDE_DIR ?>/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo INCLUDE_DIR ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo INCLUDE_DIR ?>/css/style-metro.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo INCLUDE_DIR ?>/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo INCLUDE_DIR ?>/css/style-responsive.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo INCLUDE_DIR ?>/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="<?php echo INCLUDE_DIR ?>/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="<?php echo INCLUDE_DIR ?>/css/pages/coming-soon.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR ?>/plugins/bootstrap-datepicker/css/datepicker.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR ?>/plugins/bootstrap-timepicker/compiled/timepicker.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR ?>/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
		<link href="<?php echo INCLUDE_DIR ?>/css/custom_theme/theme<?php if (isset($theme_no)) echo $theme_no; else echo '1'; ?>.css" rel="stylesheet" type="text/css"/>
		<!-- END PAGE LEVEL STYLES -->

		<script src="<?php echo INCLUDE_DIR ?>/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
		<script src="<?php echo INCLUDE_DIR ?>/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- END HEAD -->
	<!-- BEGIN BODY -->
	<body class="SurveyBody">
		<div class="container">
			<div class="row-fluid"><p></p></div>
			<div id="SurveyMainBodyHolder" class="langPos" style="margin-left:auto;margin-right:auto;">
				<div id="SurveyMainBody">
					<div class="row-fluid">
						<div class="span12">
							<h1 class="SurveyTitle"><?php if (isset($survey_title)) echo $survey_title; ?></h1><br>
							<p><h3 class="PageTitle"><?php if (isset($page_title)) echo $page_title; ?></h3></p>
						</div>
						<!-- BEGIN PAGE CONTENT-->
						<form name="answer_form" id="answer_form" action="<?php echo BASEURL; ?>index.php/answer/receive_answer" method="post">
							<input type="hidden" name="sid" value="<?php if (isset($sid)) echo $sid; ?>">
							<input type="hidden" name="pid" value="<?php if (isset($pid)) echo $pid; ?>">
							<input type="hidden" name="rid" value="<?php if (isset($rid)) echo $rid; ?>">
							<input type="hidden" name="preview" value="<?php if (isset($preview)) echo $preview; ?>">
							<input type="hidden" id="total_page" value="<?php if (isset($total_page)) echo $total_page; ?>">
							<input type="hidden" id="page_no" value="<?php if (isset($page_no)) echo $page_no; ?>">
							<div class="row-fluid margin-bottom-20">
								<div class="row-fluid ">
									<div class="span12">