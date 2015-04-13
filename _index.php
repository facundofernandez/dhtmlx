<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pruebas</title>
		<script src="dhtmlx.js"></script>
		<link rel="STYLESHEET" type="text/css" href="dhtmlx.css">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<style>
        html, body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            margin: 0px;
            background-color: #EBEBEB;
        }
		</style>
    </head>
    <body>

		<script>
			 dhtmlxEvent(window,"load",function(){   
				
				var myAcc, GMaps;
				 
				//layout
				var myLayout = new dhtmlXLayoutObject(document.body,"2U");
				myLayout.cells("a").setWidth(200);
				myLayout.cells("a").setText("Locaciones");
				myLayout.cells("b").hideHeader();                       
				
				var mapParams = {
					center: new google.maps.LatLng(-34.604975, -58.397936),
					zoom: 13,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
			
				GMaps = myLayout.cells("b").attachMap( mapParams );
				
				//tree
				var myTree = myLayout.cells("a").attachTree();            //initializes dhtmlxTree
				myTree.setImagePath("imgs/");   
				myTree.loadXML("treeStruct.xml");
	
			});
		</script>
    </body>
</html>
