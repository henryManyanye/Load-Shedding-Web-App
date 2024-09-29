<?php
require 'phplot.php';

 
$load1 = array(
	array('Senga', 5),
	array('Hospital 1', 5),
	array('University', 5),
	array('Ivene', 0),
	array('CBD', 75),
	array('Ridgemont', 0),	 
	array('Riverside', 5),
	array('Thornhill', 5),
	array('Hospital 2', 5)
);

$load2 = array(
	array('Senga', 0),
	array('Hospital 1', 5),
	array('University', 5),
	array('Ivene', 5),
	array('CBD', 75),
	array('Ridgemont', 5),	 
	array('Riverside', 0),
	array('Thornhill', 0),
	array('Hospital 2', 5)
);

$night = array(
	array('Senga', 5),
	array('Hospital 1', 5),
	array('University', 5),
	array('Ivene', 5),
	array('CBD', 60),
	array('Ridgemont', 5),
	array('Riverside', 5),
	array('Thornhill', 5),
	array('Hospital 2', 5)
);

$all = array(
	array('Senga', 0),
	array('Hospital 1', 5),
	array('University', 5),
	array('Ivene', 0),
	array('CBD', 75),
	array('Ridgemont', 0),
	array('Riverside', 0),
	array('Thornhill', 0),
	array('Hospital 2', 5)
);




$plot = new PHPlot_truecolor(1200, 800);
$plot->SetImageBorderType('plain'); // Improves presentation in the manual
$plot->SetTitle("Current load numbers");



$plot->SetFontTTF('y_label', "Cinzel_Decorative/CinzelDecorative-Regular.ttf", 15);
$plot->SetFontTTF('title', "Cinzel_Decorative/CinzelDecorative-Regular.ttf", 15);
$plot->SetFontTTF('x_label', "Cinzel_Decorative/CinzelDecorative-Regular.ttf", 15);

$plot->SetIsInline(true);
$plot->SetOutputFile("night.jpg");


$plot->SetBgImage('pexels-pixabay-221012.jpg', 'scale');



# Force the X axis range to start at 0:
$plot->SetPlotAreaWorld(0);
# No ticks along Y axis, just bar labels:
$plot->SetYTickPos('none');
# No ticks along X axis:
$plot->SetXTickPos('none');
# No X axis labels. The data values labels are sufficient.
$plot->SetXTickLabelPos('none');
# Turn on the data value labels:
$plot->SetXDataLabelPos('plotin');
# No grid lines are needed:
$plot->SetDrawXGrid(FALSE);

// $plot->SetBackgroundColor('black');

# Set the bar fill color:
$plot->SetDataColors('yellow');
# Use less 3D shading on the bars:
$plot->SetShading(2);

$plot->SetTextColor('white'); 
$plot->SetTitleColor('white');



$plot->SetDataValues($night);



$plot->SetDataType('text-data-yx');
$plot->SetPlotType('bars');





$plot->DrawGraph();
