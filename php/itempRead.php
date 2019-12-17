<?php
		@session_start();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;" charset=UTF-8”>
        <meta http-equiv="refresh" content="2" />
        <title>Login page</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/stil1.css">

    </head>
<body>
    <script src="../js/d3.v3.min.js"></script>
    <script>    

                    // Set the dimensions of the canvas / graph
                    var margin = {top: 30, right: 20, bottom: 30, left: 30},
                        width = 1500 - margin.left - margin.right,
                        height = 270 - margin.top - margin.bottom;

                    // Parse the date / time
                    var parseDate = d3.time.format("%H:%M:%S").parse;

                    // Set the ranges
                    var x = d3.time.scale().range([0, width]);
                    var y = d3.scale.linear().range([height, 0]);

                    // Define the axes
                    var xAxis = d3.svg.axis().scale(x)
                        .orient("bottom").ticks(10);

                    var yAxis = d3.svg.axis().scale(y)
                        .orient("left").ticks(10);

                    // Define the line
                    var valueline = d3.svg.line()
                        .x(function(d) { return x(d.date); })
                        .y(function(d) { return y(d.close); });
                        
                    // Adds the svg canvas
                    var svg = d3.select("body")
                        .append("svg")
                            .attr("width", width + margin.left + margin.right)
                            .attr("height", height + margin.top + margin.bottom)
                        .append("g")
                            .attr("transform", 
                                "translate(" + margin.left + "," + margin.top + ")");

                    // Get the data
                    d3.csv("readData.php", function(error, data) {
                        data.forEach(function(d) {
                            d.date = parseDate(d.date);
                            d.close = +d.close;
                        });

                        // Scale the range of the data
                        x.domain(d3.extent(data, function(d) { return d.date; }));
                        y.domain([0, d3.max(data, function(d) { return d.close; })]);

                        // Add the valueline path.
                        svg.append("path")
                            .attr("class", "line")
                            .attr("d", valueline(data));

                        // Add the X Axis
                        svg.append("g")
                            .attr("class", "x axis")
                            .attr("transform", "translate(0," + height + ")")
                            .call(xAxis);

                        svg.append("text")
                            .attr("transform",
                                "translate(" + (width) + " ," + 
                                                (height+margin.bottom) + ")")
                            .style("text-anchor", "middle")
                            .text("Time");

                        // Add the Y Axis
                        svg.append("g")
                            .attr("class", "y axis")
                            .call(yAxis);
                        svg.append("text")
                            .attr("transform", "rotate(-90)")
                            .attr("y", 6)
                            .attr("x", margin.top - (height / 2))
                            .attr("dy", ".71em")
                            .style("text-anchor", "end")
                            .text("Temperature");
                        });
                    </script>

</body>