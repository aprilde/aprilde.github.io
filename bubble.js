(function(){
    var width = 1440, height = 700;  //size of the box
    
    var svg = d3.select("#chart") // for the HTML file to recognize the div
    .append("svg")
    .attr("height", height)
    .attr("width", width)
    .append("g") // this is from the D3 v4 library, it won't work with v3
    .attr("transform", "translate(width/2,height/2)");
    
    var radiusScale = d3.scaleSqrt().domain([1,18]).range([5,105])
    
    var Kinds = d3.forceX(function(d) {  //Kind of spending
        if(d.Kind === 'Necessity'){
            return 400
        }
            else {
    
    return 1000
            }
    
        })
         .strength(0.25) //Move circles to center
    
    
    
    var forceX = d3.forceX(function(d) {
        if(d.Type === 'Blue'){
            return 750
        }
        else if (d.Type === 'Pink'){
    
            return 1200
        }
            else {
    
    return 300
            }
    
        })
         .strength(0.25) //Move circles to center
    
    
    var forceCollide = d3.forceCollide(function(d) {
            return radiusScale(d.Amount)+5}) //Avoid collision with controlled radius
    
    
    var simulation = d3.forceSimulation() // for any movement in d3
    .force("x", forceX)
    .force("y", d3.forceY(height/2) .strength(0.05)) //Move circles to center
    .force("x", Kinds)
    .force("collide", forceCollide)
    
    d3.queue()
    .defer(d3.csv, "Spending.csv")// data sheet
    .await(ready)
    

    // CK: SETTING UP THE TOOLTIP DIV THAT WILL MOVE AROUND
    
    var div = d3.select("body").append("div")	
    .style("opacity", 0)
    .style("z-index", "100")
    .style("position", "fixed")
    .style("width", "100px")
    .style("padding", "20px")
    .style("background-color", "#801336")
    .style("font-size", "14px")
    .style("color", "white")
    .style("font-family", "Helvetica-Bold")


    function ready (error, datapoints) {
      var node = svg.selectAll("g")
          .data(datapoints)
          .enter().append("g")
          .attr("class", "node");

    
      var circle = node.append("circle")
          .attr("class", "expense")
          .attr("r", function(d) {
          return radiusScale(d.Amount)}
          ) // radius of circle
          .attr("fill", "#2d132c")

          // CK: UTILIZED CODE FROM http://bl.ocks.org/d3noob/a22c42db65eb00d4e369. NOTE THAT THE TOOLTIP FEATURES "AMOUNT."
          
          .on("mousemove", function(d) {		
            div.style("left", (d3.event.pageX + 30) + "px")		
                .style("top", (d3.event.pageY + 30) + "px");	
         })
          .on("mouseover", function(d) {		
                div.transition()		
                    .duration(200)		
                    .style("opacity", .9);
                div	.html(d.Amount + "% was spent on " + d.Class + " which is a " + d.Kind);	
            })					
            .on("mouseout", function(d) {		
                div.transition()		
                    .duration(500)		
                    .style("opacity", 0);	
            })


          .on( 'click', function(d){
              console.log(d);
            });
    
        var labels = node.append("text")
            .text(function(d) {
              return d.Class;
            })
            .style("text-anchor", "middle")
            .attr("y", 4)
            .attr("fill", "white")
            .attr("font-size", "11px")
            .attr("font-family", "Helvetica")
    
        //d3.select("#Kind").on('click', function() {
           //     simulation
           //     .force("z", forceZ)
            //    .alphaTarget(0.05)
            //    .restart()
          //  //    console.log("Kind of spending")
         //   })


    
        d3.select("#Volume").on('click', function() {
            simulation
            .force("x", forceX)
            .alphaTarget(0.05)
            .restart()
            console.log("Volume of spending")
        })
    
    
        d3.select("#Combined").on('click', function() {
            simulation
            .force("x", d3.forceX(width/2).strength(0.15))
            .alphaTarget(0.05)
            .restart()
            console.log("Clicked")
        })

        // CK: EVENT HANDLE FOR "KIND" BUTTON WAS MISSING - BELOW IS THE CLONE OF "COMBINED" HANDLER ABOVE

        d3.select("#Kind").on('click', function() {
            simulation
            .force("x", Kinds)
            .alphaTarget(0.05)
            .restart()
            console.log("Clicked")
        })
            
    
        simulation.nodes(datapoints)
        .on('tick', ticked)
    
        function ticked() {
    
    
    
          node.attr("transform", function(d) {
                    return "translate(" + d.x + "," + d.y + ")";
                  })
        }
    
        }
    })();
    