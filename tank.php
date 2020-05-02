<html>
	<head>
		<style>
            table, th, td {
            	border: 1px solid black;
            	border-collapse: collapse;
            }
            
            table {
                margin-bottom: 30px;
                margin-left: 0.5em;
            }
            
            th, td {
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 5px;
                padding-bottom: 5px;
            }
            
            h1 {
                margin-top: 0.8em;
                margin-left: 0.5em;
            }
        </style>
	</head>
	
	<body>
		<h1>List of All Types of Tanks</h1>
	
        <?php
        require_once ('connection.php');
        
        // get all Tanks
        $stmt = $conn->prepare('select SN,substrate,light from Tank order by SN;');
        $stmt->execute();
        
        echo "<table>";
        echo "<thead><tr>
            <th>SN</th>
            <th>substrate</th>
            <th>light</th>
            </tr></thead>";
        echo "<tbody>";
        
        // show info from query
        while ($row = $stmt->fetch()) {
            echo "<tr><td>$row[SN]</td><td>$row[substrate]</td><td>$row[light]</td></tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
        
        ?>
        
        <!-- click to get back to index -->
		<a href="index.php">Back to index</a>
	</body>
</html>